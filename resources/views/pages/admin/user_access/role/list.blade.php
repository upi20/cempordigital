@extends('layouts.admin.master')

@section('content')
    @php
        $can_insert = auth_can('h_prefix().insert');
        $can_update = auth_can('h_prefix().update');
        $can_delete = auth_can('h_prefix().delete');
    @endphp
    <div class="card">
        <div class="card-header d-md-flex flex-row justify-content-between">
            <h3 class="card-title">Permission Table</h3>
            @if ($can_insert)
                <a type="button" class="btn btn-rounded btn-success btn-sm" href="{{ route(h_prefix('create')) }}">
                    <i class="fas fa-plus"></i> Tambah
                </a>
            @endif
        </div>
        <div class="card-body">
            <table class="table table-striped" id="tbl_main">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Guard</th>
                        <th>Updated At</th>
                        @if ($can_update || $can_delete)
                            <th>Aksi</th>
                        @endif
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{ asset_admin('plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset_admin('plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/sweet-alert/sweetalert2.all.js') }}"></script>
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
