$(document).ready(e => {
    $(".password-toggle>.toggle").on('click', function (event) {
        const toogle = $(this).find('i');
        const pass_element = $(this).next();
        if (pass_element.attr("type") == "text") {
            pass_element.attr('type', 'password');
            toogle.addClass("zmdi-eye");
            toogle.removeClass("zmdi-eye-off");
        } else if (pass_element.attr("type") == "password") {
            pass_element.attr('type', 'text');
            toogle.removeClass("zmdi-eye");
            toogle.addClass("zmdi-eye-off");
        }
    });

    $('#form_password').submit(function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        if (formData.get('new_password') != formData.get('repeat_password')) {
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'Ulangi Password Baru harus sama dengan Password Baru.',
                showConfirmButton: false,
                timer: 1500
            })
            return;
        }
        setBtnLoading('button[type=submit][form=form_password]', 'Save Changes');
        $.ajax({
            type: "POST",
            url: "{{ route('admin.password.save') }}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
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

                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: (res.errors ? res.errors.new_password : res
                        .message) ??
                        'Something went wrong',
                    showConfirmButton: false,
                    timer: 4000
                })
            },
            complete: function () {
                setBtnLoading('button[type=submit][form=form_password]',
                    '<li class="fas fa-save mr-1"></li> Save changes',
                    false);
            }
        });
    });
})
