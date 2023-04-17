@extends('layouts.frontend.master')
@section('content')
    <!-- Page Header Section Start Here -->
    <section class="page-header bg_img padding-tb">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title">{{ $routeTitle }}</h4>
                <ul class="lab-ul">
                    <li><a href="{{ url('') }}">Utama</a></li>
                    <li><a class="active">{{ $routeTitle }}</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->

    <!-- Contact Us Section Start Here -->
    <div class="contact-section">
        <div class="contact-top padding-tb aside-bg padding-b">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <article class="contact-form-wrapper">
                            <div class="contact-form">
                                <h4>{{ setting_get('setting.contact.message.title') }}</h4>
                                <p class="mb-5">
                                    {{ setting_get('setting.contact.message.sub_title') }}
                                </p>
                                <form action="#" method="POST" id="message_form" class="comment-form">
                                    <input type="text" name="nama" id="nama" class=""
                                        placeholder="{{ setting_get('setting.contact.message.name_placeholder') }}"
                                        required>
                                    <input type="email" name="email" id="email" class=""
                                        placeholder="{{ setting_get('setting.contact.message.email_placeholder') }}"
                                        required>
                                    <textarea name="message" id="message" cols="30" rows="9"
                                        placeholder="{{ setting_get('setting.contact.message.message_placeholder') }}" required></textarea>
                                    <button type="submit" class="lab-btn">
                                        <span>{{ setting_get('setting.contact.message.button_text') }}</span>
                                    </button>
                                </form>
                            </div>
                        </article>
                    </div>

                    <div class="col-lg-4">
                        <div class="contact-info-wrapper">
                            <div class="contact-info-title">
                                <h5>Kontak Kami</h5>
                                <p>Daftar kontak kami yang bisa di hubungi:</p>
                            </div>
                            <div class="contact-info-content">

                                @foreach ($contacts as $v)
                                    <div class="contact-info-item">
                                        <div class="contact-info-inner">
                                            <div class="contact-info-thumb">
                                                <i class="{{ $v->icon }}" style="font-size: 2em"></i>
                                            </div>
                                            <div class="contact-info-details">
                                                <span class="fw-bold">{{ $v->nama }}</span>
                                                <p> <a href="{!! $v->url !!}">{!! $v->keterangan !!}</a></p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Us Section ENding Here -->
@endsection

@section('javascript')
    {{-- sweetalert --}}
    <script src="{{ asset_admin('plugins/sweet-alert/sweetalert2.all.js', name: 'sash') }}"></script>
    {{-- Main script --}}
    <script src="{{ resource_loader('pages/frontend/kontak.js') }}"></script>
@endsection
