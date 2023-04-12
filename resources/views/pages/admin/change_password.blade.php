@extends('layouts.admin.master')

@section('content')
    <div class="row">
        <div class="col-md-12 col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ganti Password</h4>
                </div>
                <div class="card-body">
                    <form id="form_password">
                        <label for="current_password">Password Lama</label>
                        <div class="wrap-input100 validate-input input-group password-toggle">
                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted toggle">
                                <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                            </a>
                            <input class="input100 border-start-0 form-control ms-0" type="password" id="current_password"
                                required="" name="current_password">
                        </div>
                        <label for="new_password">Password Baru</label>
                        <div class="wrap-input100 validate-input input-group password-toggle">
                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted toggle">
                                <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                            </a>
                            <input class="input100 border-start-0 form-control ms-0" type="password" id="new_password"
                                required="" name="new_password">
                        </div>
                        <label for="repeat_password">Ulangi Password Baru</label>
                        <div class="wrap-input100 validate-input input-group password-toggle">
                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted toggle">
                                <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                            </a>
                            <input class="input100 border-start-0 form-control ms-0" type="password" id="repeat_password"
                                required="" name="repeat_password">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button type="submit" form="form_password" class="btn btn-primary mt-4 mb-0">
                        <li class="fas fa-save mr-1"></li> Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{ asset_admin('plugins/sweet-alert/sweetalert2.all.js') }}"></script>
    @php
        $resource = resource_loader(
            blade_path: $view,
            params: [
                'page_title' => $page_attr['title'],
            ],
        );
    @endphp
    <script src="{{ $resource }}"></script>
@endsection
