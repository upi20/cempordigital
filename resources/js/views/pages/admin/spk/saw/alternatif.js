const can_update = "{{ $can_update == 'true' ? 'true' : 'false' }}" === "true";
const can_delete = "{{ $can_delete == 'true' ? 'true' : 'false' }}" === "true";
const slug = "{{ $slug }}";
const page_title = "{{ $page_title }}";

const table_html = $('#tbl_main');
let isEdit = true;
$(document).ready(function () {
    // insertForm ===================================================================================
    $('#MainForm').submit(function (e) {
        console.log(this.id);
        e.preventDefault();
        resetErrorAfterInput();
        var formData = new FormData(this);
        setBtnLoading('#btn-save', 'Simpan Perubahan');
        const route = ($('#id').val() == '') ?
            "{{ route(l_prefix($hpu, 'insert', 1)) }}" :
            "{{ route(l_prefix($hpu, 'update', 1)) }}";
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
                getTable();
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Data saved successfully',
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
    const render = (data) => {
        $('#id').val('');
        const conteiner = $('#myForm');
        let html = '';

        data.forEach(e => {
            html += `<div class="form-group">
                <label class="form-label mb-1" for="nilai${e.id}" title="nilai${e.kode}">${e.nama}<span class="text-danger">*</span> </label>
                <input type="number" step="any" min="1" max="100" class="form-control" id="nilai${e.id}" name="nilais[${e.id}]" placeholder="0-100" required="" />
            </div>`;
        });

        conteiner.html(html);

        $('#MainForm').trigger("reset");
        $('#modal-default').modal('show');
        $('#modal-default-title').html("Tambah");
    };

    $.LoadingOverlay("show");
    $.ajax({
        type: "GET",
        url: `{{ url(l_prefix_uri($hpu,'kriteria', 1)) }}/${slug}`,
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        success: (data) => {
            render(data);
        },
        error: function (data) {
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Something went wrong',
                showConfirmButton: false,
                timer: 1500
            })
        },
        complete: function () {
            $.LoadingOverlay("hide");
        }
    });
}

function editFunc(id) {
    const render = (datas) => {
        $('#id').val(datas.id);
        $('#nama').val(datas.nama);
        const conteiner = $('#myForm');
        let html = '';

        datas.kriterias.forEach(e => {
            const values = e.nilais.length ? e.nilais[0].nilai : '';
            html += `<div class="form-group">
                <label class="form-label mb-1" for="nilai${e.id}" title="nilai${e.kode}">${e.nama}<span class="text-danger">*</span> </label>
                <input type="number" step="any" min="1" max="100" class="form-control" id="nilai${e.id}" name="nilais[${e.id}]" placeholder="0-100" required="" value="${values}" />
            </div>`;
        });

        conteiner.html(html);

        $('#modal-default').modal('show');
        $('#modal-default-title').html("Ubah");
    };

    $.LoadingOverlay("show");
    $.ajax({
        type: "GET",
        url: `{{ route(l_prefix($hpu, 'find',1)) }}`,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            id
        },
        success: (data) => {
            $('#modal-default-title').html("Ubah {{ $page_title }}");
            $('#modal-default').modal('show');
            render(data);
        },
        error: function (data) {
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Something went wrong',
                showConfirmButton: false,
                timer: 1500
            })
        },
        complete: function () {
            $.LoadingOverlay("hide");
        }
    });

}

function deleteFunc(id) {
    swal.fire({
        title: 'Are you sure?',
        text: "Are you sure you want to proceed ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes'
    }).then(function (result) {
        if (result.value) {
            $.ajax({
                url: `{{ url(l_prefix_uri($hpu, min:1)) }}/${id}`,
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
                        position: 'center',
                        icon: 'success',
                        title: '{{ $page_title }} deleted successfully',
                        showConfirmButton: false,
                        timer: 1500
                    })

                    getTable();
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


// render table ====================================================
function renderTable(element_table) {
    const tableUser = $(element_table).DataTable({
        columnDefs: [{
            orderable: false,
            targets: [0]
        }],
        scrollX: true,
        aAutoWidth: true,
        bAutoWidth: true,
        order: [
            [1, 'asc']
        ],
        language: {
            url: datatable_indonesia_language_url
        }
    });
    tableUser.on('draw.dt', function () {
        tooltip_refresh();
        var PageInfo = $(element_table).DataTable().page.info();
        tableUser.column(0, {
            page: 'current'
        }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });
}

function getTable() {
    const renderTabelCalon = (datas) => {
        console.log(datas);
        // return;
        const element_table = $('#tbl_main');
        const table_body = element_table.find('tbody');
        const table_head = element_table.find('thead');
        $(element_table).dataTable().fnDestroy();
        if ($.fn.DataTable.isDataTable(element_table)) {
            element_table.DataTable().destroy();
        }
        table_body.html('');
        table_head.html('');

        // generate table header
        let table_head_html_item = '';
        datas.header.forEach((e, i) => {
            table_head_html_item += ` <th  data-toggle="tooltip" title="${e.nama}" >${e.kode}</th>`;
        });

        let table_head_html = `<tr>
                <th>No</th>
                <th>${page_title}</th>
                ${table_head_html_item}
                <th>Aksi</th>
            </tr>`;

        // generate table body
        let table_body_html = '';
        datas.body.forEach(e => {
            let table_body_html_item = '';
            e.nilais.forEach((j, i) => {
                table_body_html_item += ` <td>${j.nilai ?? ''}</td> `;
            });

            const id = e.id
            const btn_update = can_update ? `<button type="button" class="btn btn-rounded btn-primary btn-sm me-1 mt-1" data-toggle="tooltip" title="Ubah Data" onClick="editFunc('${id}')">
            <i class="fas fa-edit"></i></button>` : '';
            const btn_delete = can_delete ? `<button type="button" class="btn btn-rounded btn-danger btn-sm me-1 mt-1" data-toggle="tooltip" title="Hapus Data" onClick="deleteFunc('${id}')">
            <i class="fas fa-trash"></i></button>` : '';
            const btn = btn_update + btn_delete;
            table_body_html += ` <tr> <td></td><td>${e.nama}</td> ${table_body_html_item} <td class="text-nowrap">${btn}</td></tr> `;
        });


        // render table
        table_head.html(table_head_html);
        table_body.html(table_body_html);
        renderTable(element_table);
    }

    $.ajax({
        method: 'get',
        url: `{{ route(l_prefix($hpu,'datatable', min:1), $slug) }}`
    }).done((data) => {
        renderTabelCalon(data);
    }).fail(($xhr) => {
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'Something went wrong, try again later',
            showConfirmButton: false,
            timer: 3500
        })
    })
}

getTable();
