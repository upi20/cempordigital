@extends('layouts.admin.master')

@section('content')
    <div class="card">
        <div class="card-header bg-info">
            <h3 class="card-title text-light">Form {{ $page_attr['title'] }}</h3>
        </div>
        <div class="card-body">
            <form method="post" action="" enctype="multipart/form-data" id="MainForm">
                <div class="form-group">
                    <label class="form-label" for="judul">Judul
                        <span class="text-danger">*</span></label>
                    <input type="text" id="judul" name="judul" class="form-control" placeholder="Judul"
                        value="{{ setting_get('about.judul') }}" required />
                </div>
                <div class="form-group">
                    <label><strong>Deskripsi :</strong></label>
                    <textarea class="summernote" name="about">{!! setting_get('about.html') !!}</textarea>
                </div>
            </form>
        </div>
    </div>
    <div class="card-footer">
        <div class="form-group">
            <button type="submit" class="btn btn-success" form="MainForm">
                <li class="fas fa-save mr-1"></li> Simpan Perubahan
            </button>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{ asset_admin('plugins/summernote/summernote1.js') }}"></script>
    <script src="{{ asset_admin('plugins/sweet-alert/sweetalert2.all.js') }}"></script>
    <script src="{{ asset_admin('plugins/select2/js/select2.full.min.js') }}"></script>
    @php $resource = resource_loader(blade_path: $view); @endphp
    <script src="{{ $resource }}"></script>
@endsection
