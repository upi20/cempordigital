@extends('layouts.admin.master')

@section('content')
    @php
        $can_insert = auth_can(h_prefix('insert'));
        $can_update = auth_can(h_prefix('update'));
        $can_delete = auth_can(h_prefix('delete'));
    @endphp
    <div class="card mt-3">
        <div class="card-body">
            <div class="card-title d-md-flex flex-row justify-content-between">
                <div>
                    <h6 class="mt-2 text-uppercase">Data {{ $page_attr['title'] }}</h6>
                </div>
            </div>
            <hr class="mt-1 mb-0" />
            <div class="accordion accordion-flush" id="accordionOption">
                <div class="accordion-item">
                    <h6 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#filterData" aria-expanded="false" aria-controls="filterData">
                            Filter Data
                        </button>
                    </h6>
                    <div id="filterData" class="accordion-collapse collapse" aria-labelledby="headingSix"
                        data-bs-parent="#accordionOption">
                        <div class="accordion-body">
                            <form action="javascript:void(0)" id="FilterForm">
                                <div class="form-group float-start me-2">
                                    <label for="filter_domisili">Asal</label>
                                    <select class="form-control" id="filter_domisili" name="filter_domisili"
                                        style="width: 200px">
                                        <option value="">Semua</option>
                                        <option value="1">Kota Bandung</option>
                                        <option value="0">Luar Kota Bandung</option>
                                    </select>
                                </div>
                                <div style="clear: both"></div>
                                <br>
                                <h6 class="mt-2">Alamat KTP</h6>
                                <div class="form-group  float-start me-2">
                                    <label for="filter_ktp_provinsi_id" class="me-md-2">Provinsi</label>
                                    <select class="form-control" id="filter_ktp_provinsi_id" name="filter_ktp_provinsi_id"
                                        style="width: 200px">
                                        <option value="">Semua Provinsi</option>
                                        @foreach ($provinces as $province)
                                            <option value="{{ $province->id }}">
                                                {{ $province->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group  float-start me-2">
                                    <label for="filter_ktp_kab_kot_id" class="me-md-2">Kab./Kota</label>
                                    <select class="form-control" id="filter_ktp_kab_kot_id" name="filter_ktp_kab_kot_id"
                                        style="width: 200px">
                                        <option value="">Semua Kab./Kota</option>
                                    </select>
                                </div>
                                <div class="form-group  float-start me-2">
                                    <label for="filter_ktp_kecamatan_id" class="me-md-2">Kel./Kec.</label>
                                    <select class="form-control" id="filter_ktp_kecamatan_id" name="filter_ktp_kecamatan_id"
                                        style="width: 200px">
                                        <option value="">Semua Kel./Kec.</option>
                                    </select>
                                </div>
                                <div class="form-group  float-start me-2">
                                    <label for="filter_ktp_kecamatan_id" class="me-md-2">Desa/Kec.</label>
                                    <select class="form-control" id="filter_ktp_kecamatan_id" name="filter_ktp_kecamatan_id"
                                        style="width: 200px">
                                        <option value="">Semua Desa/Kec.</option>
                                    </select>
                                </div>
                                <div style="clear: both"></div>
                                <br>
                                <h6 class="mt-2">Alamat Domisili</h6>
                                <div class="form-group  float-start me-2">
                                    <label for="filter_domisili_provinsi_id" class="me-md-2">Provinsi</label>
                                    <select class="form-control" id="filter_domisili_provinsi_id"
                                        name="filter_domisili_provinsi_id" style="width: 200px">
                                        <option value="">Semua Provinsi</option>
                                        @foreach ($provinces as $province)
                                            <option value="{{ $province->id }}">
                                                {{ $province->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group  float-start me-2">
                                    <label for="filter_domisili_kab_kot_id" class="me-md-2">Kab./Kota</label>
                                    <select class="form-control" id="filter_domisili_kab_kot_id"
                                        name="filter_domisili_kab_kot_id" style="width: 200px">
                                        <option value="">Semua Kab./Kota</option>
                                    </select>
                                </div>
                                <div class="form-group  float-start me-2">
                                    <label for="filter_domisili_kecamatan_id" class="me-md-2">Kel./Kec.</label>
                                    <select class="form-control" id="filter_domisili_kecamatan_id"
                                        name="filter_domisili_kecamatan_id" style="width: 200px">
                                        <option value="">Semua Kel./Kec.</option>
                                    </select>
                                </div>
                                <div class="form-group  float-start me-2">
                                    <label for="filter_domisili_kecamatan_id" class="me-md-2">Desa/Kec.</label>
                                    <select class="form-control" id="filter_domisili_kecamatan_id"
                                        name="filter_domisili_kecamatan_id" style="width: 200px">
                                        <option value="">Semua Desa/Kec.</option>
                                    </select>
                                </div>
                            </form>
                            <div style="clear: both"></div>
                            <button type="submit" form="FilterForm" class="btn btn-rounded btn-sm btn-secondary mt-2"
                                data-toggle="tooltip" title="Refresh Filter Table">
                                <i class="fas fa-sync-alt me-1"></i> Terapkan filter
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover" id="tbl_main">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor</th>
                        <th>Nama</th>
                        <th>Kontak</th>
                        <th>TTL</th>
                        <th>Asal</th>
                        <th>Alamat KTP</th>
                        <th>Alamat Domisili</th>
                        {!! $can_delete || $can_update ? '<th>Aksi</th>' : '' !!}
                    </tr>
                </thead>
                <tbody> </tbody>
            </table>
        </div>
    </div>

    {{-- modal --}}
    <div class="modal fade" id="modal-image">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-image-title">View Foto</h6><button aria-label="Close"
                        class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true"></span></button>
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
@endsection

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset_admin('plugins/datatable/css/dataTables.bootstrap5.min.css') }}" />
@endsection

@section('javascript')
    <script src="{{ asset_admin('plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset_admin('plugins/loading/loadingoverlay.min.js', name: 'sash') }}"></script>
    <script src="{{ asset_admin('plugins/sweet-alert/sweetalert2.all.js', name: 'sash') }}"></script>
    <script src="{{ asset_admin('plugins/select2/js/select2.full.min.js', name: 'sash') }}"></script>
    @php
        $resource = resource_loader(
            blade_path: $view,
            params: [
                'can_update' => $can_update ? 'true' : 'false',
                'can_delete' => $can_delete ? 'true' : 'false',
                'page_title' => $page_attr['title'],
                'image_folder' => $image_folder,
            ],
        );
    @endphp
    <script src="{{ $resource }}"></script>
@endsection
