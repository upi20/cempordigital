@extends('layouts.admin.master')

@section('content')
    <input type="text" id="clipboard" style="position: fixed; top:-50px">
    @php
        $can_insert = auth_can(h_prefix('insert'));
        $can_update = auth_can(h_prefix('update'));
        $can_delete = auth_can(h_prefix('delete'));
    @endphp
    <div class="card">
        <div class="card-header d-md-flex flex-row justify-content-between">
            <h3 class="card-title">Data {{ $page_attr['title'] }}</h3>
            @if ($can_insert)
                <button type="button" class="btn btn-rounded btn-success btn-sm" data-bs-effect="effect-scale"
                    data-bs-toggle="modal" href="#modal-default" onclick="add()" data-target="#modal-default">
                    <i class="fas fa-plus"></i> Tambah
                </button>
            @endif
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover" id="tbl_main">
                <thead>
                    <tr>
                        <th>Urutan</th>
                        <th>Nama</th>
                        <th>Keterangan</th>
                        {!! $can_delete || $can_update ? '<th>Aksi</th>' : '' !!}
                    </tr>
                </thead>
                <tbody> </tbody>
            </table>
        </div>
    </div>

    <!-- End Row -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-default-title"></h6><button aria-label="Close" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="javascript:void(0)" id="MainForm" name="MainForm" method="POST"
                        enctype="multipart/form-data">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label class="form-label" for="urutan">Urutan</label>
                            <input type="number" class="form-control" id="urutan" name="urutan" placeholder="Urutan" />
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="nama">Nama<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama"
                                required="" />
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan"
                                placeholder="Keterangan" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="btn-save" form="MainForm">
                        <li class="fas fa-save mr-1"></li> Simpan
                    </button>
                    <button class="btn btn-light" data-bs-dismiss="modal">
                        <i class="fas fa-times"></i>
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{ asset_admin('plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset_admin('plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/loading/loadingoverlay.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/sweet-alert/sweetalert2.all.js') }}"></script>
    <script src="{{ asset_admin('plugins/select2/js/select2.full.min.js') }}"></script>
    @php
        $resource = resource_loader(
            blade_path: $view,
            params: [
                'can_update' => $can_update ? 'true' : 'false',
                'can_delete' => $can_delete ? 'true' : 'false',
                'page_title' => $page_attr['title'],
            ],
        );
    @endphp
    <script src="{{ $resource }}"></script>
@endsection
