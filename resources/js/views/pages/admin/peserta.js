
const can_update = "{{ $can_update == 'true' ? 'true' : 'false' }}" === "true";
const can_delete = "{{ $can_delete == 'true' ? 'true' : 'false' }}" === "true";
const table_html = $('#tbl_main');
let isEdit = true;
const image_url = '{{ asset($image_folder) }}';
$(document).ready(function () {
    // datatable ====================================================================================
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    const new_table = table_html.DataTable({
        searchDelay: 500,
        processing: true,
        serverSide: true,
        responsive: false,
        scrollX: true,
        aAutoWidth: false,
        bAutoWidth: false,
        type: 'GET',
        ajax: {
            url: "{{ route(l_prefix($hpu)) }}",
            data: function (d) {
                d['filter[domisili]'] = $('#filter_domisili').val();
                d['filter[ktp_provinsi_id]'] = $('#filter_ktp_provinsi_id').val();
                d['filter[ktp_kab_kot_id]'] = $('#filter_ktp_kab_kot_id').val();
                d['filter[ktp_kecamatan_id]'] = $('#filter_ktp_kecamatan_id').val();
                d['filter[ktp_des_kel_id]'] = $('#filter_ktp_des_kel_id').val();
                d['filter[domisili_provinsi_id]'] = $('#filter_domisili_provinsi_id').val();
                d['filter[domisili_kab_kot_id]'] = $('#filter_domisili_kab_kot_id').val();
                d['filter[domisili_kecamatan_id]'] = $('#filter_domisili_kecamatan_id').val();
                d['filter[domisili_des_kel_id]'] = $('#filter_domisili_des_kel_id').val();
                d['filter[kurasi_angkatan]'] = $('#filter_kurasi_angkatan').val();
                d['filter[tanggal_lahir_dari]'] = $('#filter_tanggal_lahir_dari').val();
                d['filter[tanggal_lahir_sampai]'] = $('#filter_tanggal_lahir_sampai').val();
            }
        },
        columns: [{
            data: null,
            name: 'id',
            orderable: false,
        },
        {
            data: 'nopeserta',
            name: 'nopeserta'
        },
        {
            data: 'nama',
            name: 'nama',
            render(data, type, full, meta) {
                const angkatan = full.kurasi_angkatan ? `<br><small>${full.kurasi_angkatan}</small>` : '';
                const jenis_kelamin = full.jenis_kelamin ? `<br><small class="text-nowrap"  data-toggle="tooltip" title="Jenis Kelamin"><i class="fas fa-venus-mars me-1"></i> ${full.jenis_kelamin}</small>` : '';
                const nik = full.nik ? `<br><small class="text-nowrap" class="text-nowrap" data-toggle="tooltip" title="Nomor Induk Kependudukan"><i class="fas fa-id-card me-1"></i> ${full.nik}</small>` : '';
                return data + angkatan + nik + jenis_kelamin;
            },
        },
        {
            data: 'email',
            name: 'email',
            render(data, type, full, meta) {
                const email = full.email ? `<span class="text-nowrap"><i class="fas fa-at me-1"></i>${full.email}</span>` : '';
                const whatsapp = full.no_whatsapp ? `<br><span class="text-nowrap"><i class="fab fa-whatsapp me-1"></i><a href="https://wa.me/${full.no_whatsapp}" target="_blank">${full.no_whatsapp}</a></span>` : '';
                const instagram = full.instagram ? `<br><span class="text-nowrap"><i class="fab fa-instagram me-1"></i>${full.instagram}</span>` : '';
                const facebook = full.facebook ? `<br><span class="text-nowrap"><i class="fab fa-facebook me-1"></i>${full.facebook}</span>` : '';
                const twitter = full.twitter ? `<br><span class="text-nowrap"><i class="fab fa-twitter me-1"></i>${full.twitter}</span>` : '';
                return `<small>
                ${email}
                ${whatsapp}
                ${instagram}
                ${facebook}
                ${twitter}
                </small>`;
            },
        },
        {
            data: 'tanggal_lahir',
            name: 'tanggal_lahir',
            render(data, type, full, meta) {
                return `${full.tempat_lahir}<br>
                <span class="text-nowrap">${full.tanggal_lahir_str}</span>
                <br><span class="text-nowrap" data-toggle="tooltip" title="Usia saat daftar latsar">
                <i class="fas fa-circle me-1 ${full.tanggal_lahir_class}" ></i>
                ${full.usia_saat_daftar ?? ''} Tahun
                </span>
                `;
            },
        },
        {
            data: 'domisili',
            name: 'domisili',
            render(data, type, full, meta) {
                return `<i class="fas fa-circle me-2 ${full.domisili_class}"></i> ${full.domisili_str}`;
            },
        },
        {
            data: 'ktp_provinsi',
            name: 'ktp_provinsi',
            render(data, type, full, meta) {
                return `<small data-toggle="tooltip" title="${full.ktp_alamat_lengkap}">
                ${full.ktp_provinsi},
                <br>${full.ktp_kab_kot},
                <br>${full.ktp_kecamatan},
                <br>${full.ktp_des_kel},
                <br>Rt. ${full.ktp_rt} / Rw. ${full.ktp_rw}
                </small>`;
            },
        },
        {
            data: 'domisili_provinsi',
            name: 'domisili_provinsi',
            render(data, type, full, meta) {
                return full.domisili == 0 ? `<small data-toggle="tooltip" title="${full.domisili_alamat_lengkap}">
                ${full.domisili_provinsi},
                <br>${full.domisili_kab_kot},
                <br>${full.domisili_kecamatan},
                <br>${full.domisili_des_kel},
                <br>Rt. ${full.domisili_rt} / Rw. ${full.domisili_rw}
                </small>`: '';
            },
        },
        ...(can_update || can_delete ? [{
            data: 'id',
            name: 'id',
            render(data, type, full, meta) {
                const btn_update = can_update ? `<button type="button" class="btn btn-rounded btn-primary btn-sm me-1 mt-1" data-toggle="tooltip" title="Ubah Data" onClick="editFunc('${data}')">
                        <i class="fas fa-edit"></i></button>` : '';
                const btn_delete = can_delete ? `<button type="button" class="btn btn-rounded btn-danger btn-sm me-1 mt-1" data-toggle="tooltip" title="Hapus Data" onClick="deleteFunc('${data}')">
                        <i class="fas fa-trash"></i></button>` : '';
                return btn_update + btn_delete;
            },
            orderable: false
        }] : []),
        ],
        order: [
            [2, 'asc']
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
        resetErrorAfterInput();
        var formData = new FormData(this);
        setBtnLoading('#btn-save', 'Simpan Perubahan');
        const route = ($('#id').val() == '') ?
            "{{ route(l_prefix($hpu,'insert')) }}" :
            "{{ route(l_prefix($hpu,'update')) }}";
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
                    title: 'Data saved successfully',
                    showConfirmButton: false,
                    timer: 1500
                })
                isEdit = true;

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
    if (!isEdit) return false;
    $('#MainForm').trigger("reset");
    $('#modal-default-title').html("Tambah");
    $('#modal-default').modal('show');
    $('#id').val('');
    $('#foto').val('');
    $('#lihat-foto').hide();
    $('#foto').attr('required', '');
    resetErrorAfterInput();
    isEdit = false;
    return true;
}

function editFunc(id) {
    $.LoadingOverlay("show");
    $.ajax({
        type: "GET",
        url: `{{ route(l_prefix($hpu,'find')) }}`,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            id
        },
        success: (data) => {
            isEdit = true;
            $('#modal-default-title').html("Ubah");
            $('#modal-default').modal('show');
            $('#id').val(data.id);
            $('#nama').val(data.nama);
            $('#status').val(data.status);
            $('#lihat-foto').fadeIn();
            $('#lihat-foto').attr('onclick', `viewImage('${data.foto}', '${data.nama}' )`);
            $('#foto').removeAttr('required');
            $('#foto').val('');
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
                        position: 'center',
                        icon: 'success',
                        title: '{{ $page_title }} deleted successfully',
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

function viewImage(image, title) {
    $('#modal-image').modal('show');
    $('#modal-image-title').html(title);
    const ele = $('#modal-image-element');
    ele.attr('src', `${image_url}/${image}`);
    ele.attr('alt', title);
};
