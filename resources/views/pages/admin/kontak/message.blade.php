@extends('layouts.admin.master')

@section('content')
    @php
        $can_setting = auth_can(h_prefix('setting'));
        $can_delete = auth_can(h_prefix('delete'));
    @endphp
    <!-- Row -->
    <div class="card">
        <div class="card-header d-md-flex flex-row justify-content-between">
            <h3 class="card-title">Data {{ $page_attr['title'] }}</h3>
        </div>
        <div class="card-body">
            @if ($can_setting)
                <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default active mb-2">
                        <div class="panel-heading " role="tab" id="headingOne1">
                            <h4 class="panel-title">
                                <a role="button" data-bs-toggle="collapse" data-bs-parent="#accordion2" href="#collapse2"
                                    aria-expanded="true" aria-controls="collapse2">
                                    Pengaturan
                                </a>
                            </h4>
                        </div>

                        <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne1">
                            <div class="panel-body">
                                <form action="javascript:void(0)" class="ml-md-3 mb-md-3" id="setting_form">

                                    <div class="form-group float-start me-2">
                                        <label for="setting_title">Judul</label>
                                        <input type="text" class="form-control" id="setting_title" name="title"
                                            value="{{ $setting->title }}">
                                    </div>

                                    <div class="form-group float-start me-2">
                                        <label for="setting_sub_title">Sub Judul</label>
                                        <input type="text" class="form-control" id="setting_sub_title" name="sub_title"
                                            value="{{ $setting->sub_title }}">
                                    </div>

                                    <div class="form-group float-start me-2">
                                        <label for="setting_name">Teks Nama</label>
                                        <input type="text" class="form-control" id="setting_name" name="name"
                                            value="{{ $setting->name }}">
                                    </div>

                                    <div class="form-group float-start me-2">
                                        <label for="setting_name_placeholder">Teks Nama Keterangan</label>
                                        <input type="text" class="form-control" id="setting_name_placeholder"
                                            name="name_placeholder" value="{{ $setting->name_placeholder }}">
                                    </div>

                                    <div class="form-group float-start me-2">
                                        <label for="setting_email">Teks Email</label>
                                        <input type="text" class="form-control" id="setting_email" name="email"
                                            value="{{ $setting->email }}">
                                    </div>

                                    <div class="form-group float-start me-2">
                                        <label for="setting_email_placeholder">Teks Email Keterangan</label>
                                        <input type="text" class="form-control" id="setting_email_placeholder"
                                            name="email_placeholder" value="{{ $setting->email_placeholder }}">
                                    </div>

                                    <div class="form-group float-start me-2">
                                        <label for="setting_message">Teks Pesan</label>
                                        <input type="text" class="form-control" id="setting_message" name="message"
                                            value="{{ $setting->message }}">
                                    </div>

                                    <div class="form-group float-start me-2">
                                        <label for="setting_message_placeholder">Teks Pesan Keterangan</label>
                                        <input type="text" class="form-control" id="setting_message_placeholder"
                                            name="message_placeholder" value="{{ $setting->message_placeholder }}">
                                    </div>

                                    <div class="form-group float-start me-2">
                                        <label for="setting_button_text">Teks Tombol</label>
                                        <input type="text" class="form-control" id="setting_button_text"
                                            name="button_text" value="{{ $setting->button_text }}">
                                    </div>

                                </form>
                                <div style="clear: both"></div>
                                <button type="submit" form="setting_form" class="btn btn-rounded btn-md btn-info"
                                    data-toggle="tooltip" title="Simpan Setting" id="setting_btn_submit">
                                    <li class="fas fa-save mr-1"></li> Simpan Perubahan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <table class="table table-striped" id="tbl_main">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Dari</th>
                        <th>Pesan</th>
                        <th>Tanggal</th>
                        @if ($can_delete)
                            <th>Hapus</th>
                        @endif
                    </tr>
                </thead>
                <tbody> </tbody>
            </table>
        </div>
    </div>
@endsection

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset_admin('plugins/fontawesome-free-5.15.4-web/css/all.min.css') }}">
@endsection

@section('javascript')
    <script src="{{ asset_admin('plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset_admin('plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/sweet-alert/sweetalert2.all.js', name: 'sash') }}"></script>
    <script src="{{ asset_admin('plugins/loading/loadingoverlay.min.js', name: 'sash') }}"></script>
    @php
        $resource = resource_loader(
            blade_path: $view,
            params: [
                'page_title' => $page_attr['title'],
                'can_delete' => $can_delete ? 'true' : 'false',
            ],
        );
    @endphp
    <script src="{{ $resource }}"></script>
@endsection
