const can_update = "{{ $can_update == 'true' ? 'true' : 'false' }}" === "true";
const can_delete = "{{ $can_delete == 'true' ? 'true' : 'false' }}" === "true";
const table_html = $('#tbl_main');
let isUpdate = false;
$(document).ready(function () {
    // datatable ====================================================================================
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    const new_table = table_html.DataTable({
        searchDelay: 500,
        // processing: true,
        serverSide: true,
        // responsive: true,
        scrollX: true,
        aAutoWidth: false,
        bAutoWidth: false,
        type: 'GET',
        ajax: {
            url: "{{ route(l_prefix($hpu)) }}",
            data: function (d) {
                d['filter[active]'] = $('#filter_active').val();
                d['filter[role]'] = $('#filter_role').val();
            }
        },
        columns: [{
            data: null,
            name: 'id',
            orderable: false,
        },
        {
            data: 'id',
            name: 'id'
        },
        {
            data: 'name',
            name: 'name'
        },
        {
            data: 'regencie',
            name: 'regencie'
        },
        {
            data: 'district',
            name: 'district'
        },
        {
            data: 'village',
            name: 'village'
        },
        ...(can_update || can_delete ? [{
            data: 'id',
            name: 'id',
            render(data, type, full, meta) {
                const btn_update = can_update ? `<button type="button" class="btn btn-rounded btn-primary btn-sm me-1" data-toggle="tooltip" title="Ubah Data"
                                data-id="${full.id}"
                                data-name="${full.name}"
                                onClick="editFunc(this)">
                                <i class="fas fa-edit"></i></button>` : '';
                const btn_delete = can_delete ? `<button type="button" class="btn btn-rounded btn-danger btn-sm me-1" data-toggle="tooltip" title="Hapus Data" onClick="deleteFunc('${data}')">
                                <i class="fas fa-trash"></i></button>` : '';
                return btn_update + btn_delete;
            },
            orderable: false
        }] : []),
        ],
        order: [
            [1, 'asc']
        ],
        language: {
            url: datatable_indonesia_language_url
        }
    });

    new_table.on('draw.dt', function () {
        tooltip_refresh();
        var PageInfo = table_html.DataTable().page.info();
        new_table.column(0, {
            page: 'current'
        }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });

    $('#FilterForm').submit(function (e) {
        e.preventDefault();
        var oTable = table_html.dataTable();
        oTable.fnDraw(false);
    });

    // insertForm ===================================================================================
    $('#MainForm').submit(function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        setBtnLoading('#btn-save', 'Simpan Perubahan');
        resetErrorAfterInput();
        const route = isUpdate ? "{{ route(l_prefix($hpu,'update')) }}" :
            "{{ route(l_prefix($hpu,'insert')) }}";
        $.ajax({
            type: "POST",
            url: route,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
                $("#modal-default").modal('hide');
                var oTable = table_html.dataTable();
                oTable.fnDraw(false);
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Data berhasil disimpan',
                    showConfirmButton: false,
                    timer: 1500
                })

            },
            error: function (data) {
                const res = data.responseJSON ?? {};
                errorAfterInput = [];
                for (const property in res.errors) {
                    errorAfterInput.push(property);
                    setErrorAfterInput(res.errors[property], `#${property}`);
                }
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: res.message ?? 'Something went wrong',
                    showConfirmButton: false,
                    timer: 1500
                })
            },
            complete: function () {
                setBtnLoading('#btn-save',
                    '<li class="fas fa-save mr-1"></li> Simpan Perubahan',
                    false);
            }
        });
    });
});

function addFunc() {
    isUpdate = false;
    $('#MainForm').trigger("reset");
    $('#modal-default-title').html("Tambah Data");
    $('#modal-default').modal('show');
    $('#id').val('');
    $('#id').removeAttr('readonly');
    resetErrorAfterInput();
    $('#password').attr('required', true);
}


function editFunc(datas) {
    isUpdate = true;
    const data = datas.dataset;
    $('#modal-default-title').html("Ubah Data");
    $('#modal-default').modal('show');
    $('#MainForm').trigger("reset");
    $('#id').val(data.id);
    $('#id').attr('readonly', true);
    $('#name').val(data.name);
    $('#password').removeAttr('required');
}

function deleteFunc(id) {
    swal.fire({
        title: 'Apakah anda yakin?',
        text: "Apakah anda yakin akan menghapus data ini ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes'
    }).then(function (result) {
        if (result.value) {
            $.ajax({
                url: `{{ url(l_prefix_uri($hpu)) }}/${id}`,
                type: 'DELETE',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function () {
                    swal.fire({
                        title: 'Please Wait..!',
                        text: 'Is working..',
                        onOpen: function () {
                            Swal.showLoading()
                        }
                    })
                },
                success: function (data) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Berhasil Menghapus Data',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    var oTable = table_html.dataTable();
                    oTable.fnDraw(false);
                },
                complete: function () {
                    swal.hideLoading();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    swal.hideLoading();
                    swal.fire("!Opps ", "Something went wrong, try again later", "error");
                }
            });
        }
    });
}
