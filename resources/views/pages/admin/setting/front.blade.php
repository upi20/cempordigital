@extends('layouts.admin.master')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-md-flex flex-row justify-content-between">
                    <h3 class="card-title">Application</h3>
                    <label class="custom-switch form-switch">
                        <input type="checkbox" name="preloader" form="app-form" class="custom-switch-input"
                            {{ settings()->get(set_front('app.preloader')) ? 'checked' : '' }}>
                        <span class="custom-switch-indicator"></span>
                        <span class="custom-switch-description">Preloader</span>
                    </label>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" id="app-form">
                        <div class="form-group">
                            <label class="form-label" for="{{ set_front('app.title') }}">Title
                                <span class="text-danger">*</span></label>
                            <input type="text" id="{{ set_front('app.title') }}" name="title" class="form-control"
                                placeholder="Application Title" value="{{ settings()->get(set_front('app.title')) }}"
                                required />
                        </div>

                        <div class="row">
                            <div class="col-lg-6">

                                <div class="form-group">
                                    <label class="form-label">Logo Light
                                        <span class="badge bg-primary" id="preview_foto_light_mode"
                                            onclick="viewImage('{{ settings()->get(set_front('app.foto_light_mode')) }}', 'Logo Light View')">
                                            view</span>
                                    </label>
                                    <input type="file" id="{{ set_front('app.foto_light_mode') }}" name="foto_light_mode"
                                        class="form-control" />
                                </div>
                            </div>
                            <div class="col-lg-6">

                                <div class="form-group">
                                    <label class="form-label">Logo Dark
                                        <span class="badge bg-primary" id="preview_foto_dark_mode"
                                            onclick="viewImage('{{ settings()->get(set_front('app.foto_dark_mode')) }}', 'Logo Dark View')">
                                            view</span>
                                    </label>
                                    <input type="file" id="{{ set_front('app.foto_dark_mode') }}" name="foto_dark_mode"
                                        class="form-control" />
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Logo Landscape Light
                                        <span class="badge bg-primary" id="preview_foto_light_landscape_mode"
                                            onclick="viewImage('{{ settings()->get(set_front('app.foto_light_landscape_mode')) }}', 'Logo Light View')">
                                            view</span>
                                    </label>
                                    <input type="file" id="{{ set_front('app.foto_light_landscape_mode') }}"
                                        name="foto_light_landscape_mode" class="form-control" />
                                </div>
                            </div>
                            <div class="col-lg-6">

                                <div class="form-group">
                                    <label class="form-label">Logo Landscape Dark
                                        <span class="badge bg-primary" id="preview_foto_dark_landscape_mode"
                                            onclick="viewImage('{{ settings()->get(set_front('app.foto_dark_landscape_mode')) }}', 'Logo Dark View')">
                                            view</span>
                                    </label>
                                    <input type="file" id="{{ set_front('app.foto_dark_landscape_mode') }}"
                                        name="foto_dark_landscape_mode" class="form-control" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="{{ set_front('app.copyright') }}">Copyright
                                <span class="text-danger">*</span></label>
                            <textarea id="{{ set_front('app.copyright') }}" name="copyright" class="form-control" required rows="3"
                                placeholder="Application Copyright">{!! settings()->get(set_front('app.copyright')) !!}</textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="{{ set_front('app.no_telepon') }}">No Telepon
                                <span class="text-danger">*</span></label>
                            <input type="number" id="{{ set_front('app.no_telepon') }}" name="no_telepon"
                                class="form-control" placeholder="Ex: 6285987321050"
                                value="{{ settings()->get(set_front('app.no_telepon')) }}" required />
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="{{ set_front('app.no_whatsapp') }}">No Whatsapp
                                <span class="text-danger">*</span></label>
                            <input type="number" id="{{ set_front('app.no_whatsapp') }}" name="no_whatsapp"
                                class="form-control" placeholder="Ex: 6285987321050"
                                value="{{ settings()->get(set_front('app.no_whatsapp')) }}" required />
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="{{ set_front('app.address') }}">Alamat Singkat
                                <span class="text-danger">*</span></label>
                            <input type="text" id="{{ set_front('app.address') }}" name="address"
                                class="form-control" placeholder="Bandung, Indonesia"
                                value="{{ settings()->get(set_front('app.address')) }}" required />
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary" form="app-form">
                    <li class="fas fa-save mr-1"></li> Save changes
                </button>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-md-flex flex-row justify-content-between">
                    <h3 class="card-title">Meta Data</h3>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" id="meta-form">
                        <div class="form-group">
                            <label class="form-label" for="{{ set_front('meta.author') }}">Author
                                <span class="text-danger">*</span></label>
                            <input type="text" id="{{ set_front('meta.author') }}" name="author"
                                class="form-control" placeholder="Meta Author"
                                value="{{ settings()->get(set_front('meta.author')) }}" required />
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="{{ set_front('meta.keyword') }}">Keyword
                                <span class="text-danger">*</span></label>
                            <input type="text" id="{{ set_front('meta.keyword') }}" name="keyword"
                                class="form-control" placeholder="Meta Keyword"
                                value="{{ settings()->get(set_front('meta.keyword')) }}" required />
                        </div>


                        <div class="form-group">
                            <label class="form-label">Image
                                <span class="badge bg-primary" id="preview_meta_image"
                                    onclick="viewImage('{{ settings()->get(set_front('meta.image')) }}', 'Meta Image View')">
                                    view</span>
                            </label>
                            <input type="file" id="{{ set_front('meta.image') }}" name="image"
                                class="form-control" />
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="{{ set_front('meta.description') }}">Description
                                <span class="text-danger">*</span></label>
                            <textarea id="{{ set_front('meta.description') }}" name="description" class="form-control" required rows="3"
                                placeholder="Meta Description Default">{!! settings()->get(set_front('meta.description')) !!}</textarea>
                        </div>
                    </form>

                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary" form="meta-form">
                        <li class="fas fa-save mr-1"></li> Save changes
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="card-header d-flex flex-row justify-content-between">
                    <div class="card-title">Meta Header List</div>
                    <button class="btn btn-primary btn-sm" data-bs-effect="effect-scale" data-bs-toggle="modal"
                        href="#modal-meta_list" onclick="meta_list_add()" data-target="#modal-meta_list"><i
                            class="fa fa-plus me-2"></i>Tambah</button>
                </div>
                <div class="card-body p-0">
                    <div class="list-group list-group-flush" id="meta_list-body"> </div>
                </div>
            </div>
        </div>
    </div>


    {{-- modal --}}
    <div class="modal fade" id="modal-image">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-image-title">View Foto</h6><button aria-label="Close"
                        class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <img src="" class="img-fluid" id="modal-image-element" alt="Icon Pendaftaran">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-light" data-bs-dismiss="modal">
                        <i class="fas fa-times"></i>
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-meta_list">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-meta_list-title"></h6><button aria-label="Close" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>

                <div class="modal-body">

                    <form action="javascript:void(0)" id="meta_list_form" method="POST">
                        <input type="hidden" name="id" id="meta_list_id">

                        <div class="form-group">
                            <label class="form-label" for="meta_list_name">Name
                                <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="meta_list_name" name="name"
                                placeholder="Name" required />
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="meta_list_value">Value
                                <span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="6" name="value" id="meta_list_value" placeholder="Value" required></textarea>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" form="meta_list_form">
                        <li class="fas fa-save mr-1"></li> Save changes
                    </button>
                    <button class="btn btn-light" data-bs-dismiss="modal">
                        <i class="fas fa-times"></i>
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{ asset_admin('plugins/nestable2v1.6.0/jquery.nestable.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/sweet-alert/sweetalert2.all.js') }}"></script>
    <script src="{{ asset_admin('plugins/loading/loadingoverlay.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/select2/js/select2.full.min.js') }}"></script>
    @php $resource = resource_loader(blade_path: $view); @endphp
    <script src="{{ $resource }}"></script>
@endsection
