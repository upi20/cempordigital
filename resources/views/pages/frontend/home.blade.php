@extends('layouts.frontend.master')
@section('content')
    <!-- slider-area -->
    <section class="slider-area">
        <div class="slider-active">
            <div class="single-slider">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-0 order-lg-2">
                            <div class="slider-img text-end" data-animation="fadeInRight" data-delay=".8s">
                                <img data-src="{{ asset('assets/templates/frontend/img/slider/slider_img01.png') }}"
                                    class="lazy" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="slider-content">
                                <h2 class="title" data-animation="fadeInUp" data-delay=".2s">
                                    Jasa Website, Desain, Foto, Video dan Sosial Media Marketing Cepat, Murah dan
                                    Berkualitas.
                                </h2>
                                <p data-animation="fadeInUp" data-delay=".4s">
                                    Banyak bisnis UKM, menengah dan besar telah menggunakan Cempor Digital untuk
                                    kebutuhan promosi dan branding bisnis mereka
                                </p>
                                <div class="slider-btn">
                                    <a href="contact.html" class="btn" data-animation="fadeInLeft" data-delay=".6s">Get
                                        Started <span></span></a>
                                    <!-- <a href="https://www.youtube.com/watch?v=bixR-KIJKYM" class="popup-video"
                                                                                                                                                                                       data-animation="fadeInRight" data-delay=".6s">See Live Demo <i
                                                                                                                                                                                           class="fas fa-play pulse"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-0 order-lg-2">
                            <div class="slider-img text-end" data-animation="fadeInRight" data-delay=".8s">
                                <img data-src="{{ asset('assets/templates/frontend/img/slider/slider_img01.png') }}"
                                    class="lazy" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="slider-content">
                                <h2 class="title" data-animation="fadeInUp" data-delay=".2s">
                                    Jasa Website, Desain, Foto, Video dan Sosial Media Marketing Cepat, Murah dan
                                    Berkualitas.
                                </h2>
                                <p data-animation="fadeInUp" data-delay=".4s">
                                    Banyak bisnis UKM, menengah dan besar telah menggunakan Cempor Digital untuk
                                    kebutuhan promosi dan branding bisnis mereka
                                </p>
                                <div class="slider-btn">
                                    <a href="contact.html" class="btn" data-animation="fadeInLeft" data-delay=".6s">Get
                                        Started <span></span></a>
                                    <!-- <a href="https://www.youtube.com/watch?v=bixR-KIJKYM" class="popup-video"
                                                                                                                                                                                       data-animation="fadeInRight" data-delay=".6s">See Live Demo <i
                                                                                                                                                                                           class="fas fa-play pulse"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-0 order-lg-2">
                            <div class="slider-img text-end" data-animation="fadeInRight" data-delay=".8s">
                                <img data-src="{{ asset('assets/templates/frontend/img/slider/slider_img01.png') }}"
                                    class="lazy" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="slider-content">
                                <h2 class="title" data-animation="fadeInUp" data-delay=".2s">
                                    Jasa Website, Desain, Foto, Video dan Sosial Media Marketing Cepat, Murah dan
                                    Berkualitas.
                                </h2>
                                <p data-animation="fadeInUp" data-delay=".4s">
                                    Banyak bisnis UKM, menengah dan besar telah menggunakan Cempor Digital untuk
                                    kebutuhan promosi dan branding bisnis mereka
                                </p>
                                <div class="slider-btn">
                                    <a href="contact.html" class="btn" data-animation="fadeInLeft" data-delay=".6s">Get
                                        Started <span></span></a>
                                    <!-- <a href="https://www.youtube.com/watch?v=bixR-KIJKYM" class="popup-video"
                                                                                                                                                                                       data-animation="fadeInRight" data-delay=".6s">See Live Demo <i
                                                                                                                                                                                           class="fas fa-play pulse"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="slider-shape-wrap">
            <img data-src="{{ asset('assets/templates/frontend/img/slider/slider_shape01.png') }}" class="lazy"
                alt="">
            <img data-src="{{ asset('assets/templates/frontend/img/slider/slider_shape02.png') }}" class="lazy"
                alt="">
            <img data-src="{{ asset('assets/templates/frontend/img/slider/slider_shape03.png') }}" class="lazy"
                alt="">
            <img data-src="{{ asset('assets/templates/frontend/img/slider/slider_shape04.png') }}" class="lazy"
                alt="">
            <img data-src="{{ asset('assets/templates/frontend/img/slider/slider_shape05.png') }}" class="lazy"
                alt="">
            <img data-src="{{ asset('assets/templates/frontend/img/slider/slider_shape06.png') }}" class="lazy"
                alt="">
        </div>
    </section>
    <!-- slider-area-end -->

    <!-- services-area -->
    <section class="services-area pt-35 pb-95">
        <div class="container">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Launch static backdrop modal
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                    <div class="modal-content">
                        <div class="modal-body p-lg-5">
                            <button type="button" class="portfolio-section btn-close" data-bs-dismiss="modal"
                                aria-label="Close">
                                <i class="fas fa-times"></i>
                            </button>
                            <div class="row">
                                <div class="col-xl-12">
                                    <img src="http://naditechno.com/assets/image/portfolio/scm-1-bidhara-care-large.png"
                                        alt="naditechno.com" style="border-radius: 12px" class="mb-4">
                                </div>
                                <div class="col-xl-7">
                                    <div class="content-wrapper">
                                        <h2 class="item-title h4">Bidhara Care</h2>
                                        <p>
                                            Social Media Management Instagram di Bidhara Care
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-5">
                                    <div class="meta-wrapper">
                                        <ul class="item-meta p-0">
                                            <li>Project Type: <span class="meta-value">Social Media Management</span></li>
                                            <li>Client: <span class="meta-value">Bidhara Care</span></li>
                                            <li>Duration: <span class="meta-value">1 Year</span></li>
                                            <li>Task: <span class="meta-value">Social Media management</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center pb-35">
                <div class="col-xl-6 col-lg-7">
                    <div class="section-title title-style-two text-center mb-45">
                        <!-- <span class="sub-title">What We Do</span> -->
                        <h2 class="title">Berbagi <span>Kemudahan</span><br>Untuk Anda</h2>
                        <p>Nikmati berbagai kemudahan serta penawaran spesial yang kami berikan khusus untuk anda.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="services-item wow fadeInUp" data-wow-delay=".4s">
                        <div class="services-icon">
                            <img data-src="{{ asset('assets/templates/frontend/img/icon/services_icon02.png') }}"
                                class="lazy" alt="">
                        </div>
                        <div class="services-content">
                            <h4 class="title"><a href="services-details.html">Harga Terbaik</a></h4>
                            <p>
                                <b>Harga Terjangkau Kualitas Memukau</b><br>
                                Kami memberikan pelayanan semaksimal mungkin dengan hasil yang memuaskan dan harga
                                yang sangat terjangkau.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="services-item wow fadeInUp" data-wow-delay=".6s">
                        <div class="services-icon">
                            <img data-src="{{ asset('assets/templates/frontend/img/icon/services_icon03.png') }}"
                                class="lazy" alt="">
                        </div>
                        <div class="services-content">
                            <h4 class="title"><a href="services-details.html">Pelayanan Maksimal</a></h4>
                            <p>
                                <b>Prioritas Kepuasan Pelanggan</b><br>
                                Kepuasan anda adalah prioritas bagi kami, kami akan senantiasa memberikan pelayan
                                maksimal baik dari penawaran harga, fitur maupun maintenance.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="services-item wow fadeInUp" data-wow-delay=".8s">
                        <div class="services-icon">
                            <img data-src="{{ asset('assets/templates/frontend/img/icon/services_icon04.png') }}"
                                class="lazy" alt="">
                        </div>
                        <div class="services-content">
                            <h4 class="title">
                                <a href="services-details.html"> Support After Sales</a>
                            </h4>
                            <p>
                                <b>Penawaran Desain & Konsep</b><br>
                                Dengan support tools yang kami miliki, kami akan memberikan pilihan desain terbaik.
                                Namun kami juga sangat terbuka dengan saran, masukan serta permintaan dari konsumen.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services-area-end -->

    <!-- agency-area -->
    <section class="agency-area pt-95 pb-95">
        <div class="container">
            <div class="row align-items-center wow fadeInUp" data-wow-delay=".2s">
                <div class="col-lg-6">
                    <div class="agency-img text-center">
                        <img data-src="{{ asset('assets/templates/frontend/img/images/agency_img.png') }}" class="lazy"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="agency-content">
                        <div class="section-title title-style-two mb-20">
                            <span class="sub-title">Cempor Digital</span>
                            <h2 class="title">Awali Kesuksesan Bisnis Anda Bersama Cempor Digital</h2>
                        </div>
                        <p class="info-one">Jangan handle semuanya sendiri, kamu fokus saja pada bisnismu, biar
                            kami
                            yang membangun onlinemu</p>
                        <p class="info-two fw-bold">Apa yang anda butuhkan ?</p>
                        <a href="#" class="btn">Tentang <span></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="agency-shape-wrap">
            <img data-src="{{ asset('assets/templates/frontend/img/images/agency_shape01.png') }}" class="lazy"
                alt="">
            <img data-src="{{ asset('assets/templates/frontend/img/images/agency_shape02.png') }}" class="lazy"
                alt="">
            <img data-src="{{ asset('assets/templates/frontend/img/images/agency_shape03.png') }}" class="lazy"
                alt="">
            <img data-src="{{ asset('assets/templates/frontend/img/images/agency_shape04.png') }}" class="lazy"
                alt="">
        </div>
    </section>
    <!-- agency-area-end -->

    <!-- pricing-area -->
    <section class="pricing-area pb-90 pt-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title title-style-two text-center mb-50">
                        <h2 class="title">Paket Layanan <span>Cempor Digital</span></h2>
                        <p style="width: 90%;">Cempor Digital Memberikan Pilihan Layanan Digital, Harga Sangat
                            Terjangkau</p>
                    </div>
                </div>
            </div>
            <div class="pricing-item-wrap">
                <div class="pricing-tab">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="desain-branding-tab" data-bs-toggle="tab"
                                data-bs-target="#desain-branding" type="button" role="tab"
                                aria-controls="desain-branding" aria-selected="true">Desain &
                                Branding</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="video-fotografi-tab" data-bs-toggle="tab"
                                data-bs-target="#video-fotografi" type="button" role="tab"
                                aria-controls="video-fotografi" aria-selected="false">Video & Fotografi</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pemasaran-periklanan-tab" data-bs-toggle="tab"
                                data-bs-target="#pemasaran-periklanan" type="button" role="tab"
                                aria-controls="pemasaran-periklanan" aria-selected="false">
                                Pemasaran & Periklanan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="website-tab" data-bs-toggle="tab" data-bs-target="#website"
                                type="button" role="tab" aria-controls="website"
                                aria-selected="false">Website</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane show active" id="desain-branding" role="tabpanel"
                        aria-labelledby="desain-branding-tab">
                        <div class="row g-0 align-items-center justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item mx-1">
                                    <div class="pricing-icon">
                                        <img data-src="{{ asset('assets/templates/frontend/img/icon/pricing_icon01.png') }}"
                                            class="lazy" alt="">
                                    </div>
                                    <div class="pricing-top">
                                        <h2 class="title">Professional</h2>
                                        <p>Do more with Dokan Using Powerful Advanced feat..</p>
                                    </div>
                                    <div class="pricing-price">
                                        <h2 class="price"><span>$</span>49<strong>/mo</strong></h2>
                                    </div>
                                    <div class="pricing-list">
                                        <h4 class="title">Everything in Starter</h4>
                                        <ul class="list-wrap">
                                            <li><i class="far fa-check"></i>WC Product Addon Integration</li>
                                            <li><i class="far fa-check"></i>Vendor Review</li>
                                            <li><i class="far fa-check"></i>Store Support</li>
                                            <li><i class="far fa-check"></i>Seller Verification</li>
                                            <li><i class="far fa-check"></i>Stripe & Msip</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="contact.html" class="btn">Select This Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item active">
                                    <div class="pricing-icon">
                                        <img data-src="{{ asset('assets/templates/frontend/img/icon/pricing_icon02.png') }}"
                                            class="lazy" alt="">
                                    </div>
                                    <div class="pricing-top">
                                        <h2 class="title">Business</h2>
                                        <p>Do more with Dokan Using Powerful Advanced feat..</p>
                                    </div>
                                    <div class="pricing-price">
                                        <h2 class="price">
                                            <span style="color: white">$</span>
                                            69
                                            <strong style="color: white">/mo</strong>
                                        </h2>
                                    </div>
                                    <div class="pricing-list">
                                        <h4 class="title">Everything in Starter</h4>
                                        <ul class="list-wrap">
                                            <li><i class="far fa-check"></i>WC Product Addon Integration</li>
                                            <li><i class="far fa-check"></i>Vendor Review</li>
                                            <li><i class="far fa-check"></i>Store Support</li>
                                            <li><i class="far fa-check"></i>Seller Verification</li>
                                            <li><i class="far fa-check"></i>Stripe & Msip</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="contact.html" class="btn">Select This Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item mx-1">
                                    <div class="pricing-icon">
                                        <img data-src="{{ asset('assets/templates/frontend/img/icon/pricing_icon03.png') }}"
                                            class="lazy" alt="">
                                    </div>
                                    <div class="pricing-top">
                                        <h2 class="title">Enterprise</h2>
                                        <p>Do more with Dokan Using Powerful Advanced feat..</p>
                                    </div>
                                    <div class="pricing-price">
                                        <h2 class="price"><span>$</span>89<strong>/mo</strong></h2>
                                    </div>
                                    <div class="pricing-list">
                                        <h4 class="title">Everything in Starter</h4>
                                        <ul class="list-wrap">
                                            <li><i class="far fa-check"></i>WC Product Addon Integration</li>
                                            <li><i class="far fa-check"></i>Vendor Review</li>
                                            <li><i class="far fa-check"></i>Store Support</li>
                                            <li><i class="far fa-check"></i>Seller Verification</li>
                                            <li><i class="far fa-check"></i>Stripe & Msip</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="contact.html" class="btn">Select This Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="video-fotografi" role="tabpanel" aria-labelledby="video-fotografi-tab">
                        <div class="row g-0 align-items-center justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item mx-1">
                                    <div class="pricing-icon">
                                        <img data-src="{{ asset('assets/templates/frontend/img/icon/pricing_icon01.png') }}"
                                            class="lazy" alt="">
                                    </div>
                                    <div class="pricing-top">
                                        <h2 class="title">Professional</h2>
                                        <p>Do more with Dokan Using Powerful Advanced feat..</p>
                                    </div>
                                    <div class="pricing-price">
                                        <h2 class="price"><span>$</span> 249<strong>/yr</strong></h2>
                                    </div>
                                    <div class="pricing-list">
                                        <h4 class="title">Everything in Starter</h4>
                                        <ul class="list-wrap">
                                            <li><i class="far fa-check"></i>WC Product Addon Integration</li>
                                            <li><i class="far fa-check"></i>Vendor Review</li>
                                            <li><i class="far fa-check"></i>Store Support</li>
                                            <li><i class="far fa-check"></i>Seller Verification</li>
                                            <li><i class="far fa-check"></i>Stripe & Msip</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="contact.html" class="btn">Select This Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item active">
                                    <div class="pricing-icon">
                                        <img data-src="{{ asset('assets/templates/frontend/img/icon/pricing_icon02.png') }}"
                                            class="lazy" alt="">
                                    </div>
                                    <div class="pricing-top">
                                        <h2 class="title">Business</h2>
                                        <p>Do more with Dokan Using Powerful Advanced feat..</p>
                                    </div>
                                    <div class="pricing-price">
                                        <h2 class="price">
                                            <span style="color: white">$</span>
                                            69
                                            <strong style="color: white">/mo</strong>
                                        </h2>
                                    </div>
                                    <div class="pricing-list">
                                        <h4 class="title">Everything in Starter</h4>
                                        <ul class="list-wrap">
                                            <li><i class="far fa-check"></i>WC Product Addon Integration</li>
                                            <li><i class="far fa-check"></i>Vendor Review</li>
                                            <li><i class="far fa-check"></i>Store Support</li>
                                            <li><i class="far fa-check"></i>Seller Verification</li>
                                            <li><i class="far fa-check"></i>Stripe & Msip</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="contact.html" class="btn">Select This Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item mx-1">
                                    <div class="pricing-icon">
                                        <img data-src="{{ asset('assets/templates/frontend/img/icon/pricing_icon03.png') }}"
                                            class="lazy" alt="">
                                    </div>
                                    <div class="pricing-top">
                                        <h2 class="title">Enterprise</h2>
                                        <p>Do more with Dokan Using Powerful Advanced feat..</p>
                                    </div>
                                    <div class="pricing-price">
                                        <h2 class="price"><span>$</span>389<strong>/yr</strong></h2>
                                    </div>
                                    <div class="pricing-list">
                                        <h4 class="title">Everything in Starter</h4>
                                        <ul class="list-wrap">
                                            <li><i class="far fa-check"></i>WC Product Addon Integration</li>
                                            <li><i class="far fa-check"></i>Vendor Review</li>
                                            <li><i class="far fa-check"></i>Store Support</li>
                                            <li><i class="far fa-check"></i>Seller Verification</li>
                                            <li><i class="far fa-check"></i>Stripe & Msip</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="contact.html" class="btn">Select This Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="pemasaran-periklanan" role="tabpanel"
                        aria-labelledby="pemasaran-periklanan-tab">
                        <div class="row g-0 align-items-center justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item mx-1">
                                    <div class="pricing-icon">
                                        <img data-src="{{ asset('assets/templates/frontend/img/icon/pricing_icon01.png') }}"
                                            class="lazy" alt="">
                                    </div>
                                    <div class="pricing-top">
                                        <h2 class="title">Professional</h2>
                                        <p>Do more with Dokan Using Powerful Advanced feat..</p>
                                    </div>
                                    <div class="pricing-price">
                                        <h2 class="price"><span>$</span> 249<strong>/yr</strong></h2>
                                    </div>
                                    <div class="pricing-list">
                                        <h4 class="title">Everything in Starter</h4>
                                        <ul class="list-wrap">
                                            <li><i class="far fa-check"></i>WC Product Addon Integration</li>
                                            <li><i class="far fa-check"></i>Vendor Review</li>
                                            <li><i class="far fa-check"></i>Store Support</li>
                                            <li><i class="far fa-check"></i>Seller Verification</li>
                                            <li><i class="far fa-check"></i>Stripe & Msip</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="contact.html" class="btn">Select This Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item active">
                                    <div class="pricing-icon">
                                        <img data-src="{{ asset('assets/templates/frontend/img/icon/pricing_icon02.png') }}"
                                            class="lazy" alt="">
                                    </div>
                                    <div class="pricing-top">
                                        <h2 class="title">Business</h2>
                                        <p>Do more with Dokan Using Powerful Advanced feat..</p>
                                    </div>
                                    <div class="pricing-price">
                                        <h2 class="price">
                                            <span style="color: white">$</span>
                                            69
                                            <strong style="color: white">/mo</strong>
                                        </h2>
                                    </div>
                                    <div class="pricing-list">
                                        <h4 class="title">Everything in Starter</h4>
                                        <ul class="list-wrap">
                                            <li><i class="far fa-check"></i>WC Product Addon Integration</li>
                                            <li><i class="far fa-check"></i>Vendor Review</li>
                                            <li><i class="far fa-check"></i>Store Support</li>
                                            <li><i class="far fa-check"></i>Seller Verification</li>
                                            <li><i class="far fa-check"></i>Stripe & Msip</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="contact.html" class="btn">Select This Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item mx-1">
                                    <div class="pricing-icon">
                                        <img data-src="{{ asset('assets/templates/frontend/img/icon/pricing_icon03.png') }}"
                                            class="lazy" alt="">
                                    </div>
                                    <div class="pricing-top">
                                        <h2 class="title">Enterprise</h2>
                                        <p>Do more with Dokan Using Powerful Advanced feat..</p>
                                    </div>
                                    <div class="pricing-price">
                                        <h2 class="price"><span>$</span>389<strong>/yr</strong></h2>
                                    </div>
                                    <div class="pricing-list">
                                        <h4 class="title">Everything in Starter</h4>
                                        <ul class="list-wrap">
                                            <li><i class="far fa-check"></i>WC Product Addon Integration</li>
                                            <li><i class="far fa-check"></i>Vendor Review</li>
                                            <li><i class="far fa-check"></i>Store Support</li>
                                            <li><i class="far fa-check"></i>Seller Verification</li>
                                            <li><i class="far fa-check"></i>Stripe & Msip</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="contact.html" class="btn">Select This Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="website" role="tabpanel" aria-labelledby="website-tab">
                        <div class="row g-0 align-items-center justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item mx-1">
                                    <div class="pricing-icon">
                                        <img data-src="{{ asset('assets/templates/frontend/img/icon/pricing_icon01.png') }}"
                                            class="lazy" alt="">
                                    </div>
                                    <div class="pricing-top">
                                        <h2 class="title">Professional</h2>
                                        <p>Do more with Dokan Using Powerful Advanced feat..</p>
                                    </div>
                                    <div class="pricing-price">
                                        <h2 class="price"><span>$</span> 249<strong>/yr</strong></h2>
                                    </div>
                                    <div class="pricing-list">
                                        <h4 class="title">Everything in Starter</h4>
                                        <ul class="list-wrap">
                                            <li><i class="far fa-check"></i>WC Product Addon Integration</li>
                                            <li><i class="far fa-check"></i>Vendor Review</li>
                                            <li><i class="far fa-check"></i>Store Support</li>
                                            <li><i class="far fa-check"></i>Seller Verification</li>
                                            <li><i class="far fa-check"></i>Stripe & Msip</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="contact.html" class="btn">Select This Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item active">
                                    <div class="pricing-icon">
                                        <img data-src="{{ asset('assets/templates/frontend/img/icon/pricing_icon02.png') }}"
                                            class="lazy" alt="">
                                    </div>
                                    <div class="pricing-top">
                                        <h2 class="title">Business</h2>
                                        <p>Do more with Dokan Using Powerful Advanced feat..</p>
                                    </div>
                                    <div class="pricing-price">
                                        <h2 class="price">
                                            <span style="color: white">$</span>
                                            69
                                            <strong style="color: white">/mo</strong>
                                        </h2>
                                    </div>
                                    <div class="pricing-list">
                                        <h4 class="title">Everything in Starter</h4>
                                        <ul class="list-wrap">
                                            <li><i class="far fa-check"></i>WC Product Addon Integration</li>
                                            <li><i class="far fa-check"></i>Vendor Review</li>
                                            <li><i class="far fa-check"></i>Store Support</li>
                                            <li><i class="far fa-check"></i>Seller Verification</li>
                                            <li><i class="far fa-check"></i>Stripe & Msip</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="contact.html" class="btn">Select This Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="pricing-item mx-1">
                                    <div class="pricing-icon">
                                        <img data-src="{{ asset('assets/templates/frontend/img/icon/pricing_icon03.png') }}"
                                            class="lazy" alt="">
                                    </div>
                                    <div class="pricing-top">
                                        <h2 class="title">Enterprise</h2>
                                        <p>Do more with Dokan Using Powerful Advanced feat..</p>
                                    </div>
                                    <div class="pricing-price">
                                        <h2 class="price"><span>$</span>389<strong>/yr</strong></h2>
                                    </div>
                                    <div class="pricing-list">
                                        <h4 class="title">Everything in Starter</h4>
                                        <ul class="list-wrap">
                                            <li><i class="far fa-check"></i>WC Product Addon Integration</li>
                                            <li><i class="far fa-check"></i>Vendor Review</li>
                                            <li><i class="far fa-check"></i>Store Support</li>
                                            <li><i class="far fa-check"></i>Seller Verification</li>
                                            <li><i class="far fa-check"></i>Stripe & Msip</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-btn">
                                        <a href="contact.html" class="btn">Select This Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- pricing-area-end -->

    <!-- project-area -->
    <section class="project-area-three">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-10">
                    <div class="section-title title-style-two mb-90">
                        <span class="sub-title">Inovasi Luar Biasa dan Tanpa Batas</span>
                        <h2 class="title">Portofolio.</h2>
                    </div>
                </div>
            </div>
            <div class="project-nav-wrap">
                <div class="row">
                    <div class="col-xl-2">
                        <div class="project-tab-wrap">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="website-tab" data-bs-toggle="tab"
                                        data-bs-target="#website-container" type="button" role="tab"
                                        aria-controls="website-container" aria-selected="false">Website
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="design-tab" data-bs-toggle="tab"
                                        data-bs-target="#design" type="button" role="tab" aria-controls="design"
                                        aria-selected="false">Design
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="app-tab" data-bs-toggle="tab" data-bs-target="#app"
                                        type="button" role="tab" aria-controls="app" aria-selected="false">App
                                        Design</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="branding-tab" data-bs-toggle="tab"
                                        data-bs-target="#branding" type="button" role="tab"
                                        aria-controls="branding" aria-selected="false">Branding Design</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-10">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="website-container" role="tabpanel"
                                aria-labelledby="website-tab">
                                <div class="swiper-container project-active-three">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="#">WEB 1</a></h2>
                                                    <p>At Collax we specialize in designing, building, shipping...
                                                    </p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="#">
                                                        <img data-src="{{ asset('assets/templates/frontend/img/project/h3_project_img01.jpg') }}"
                                                            style="height: 280px; width:100%; object-fit: cover;"
                                                            class="lazy" alt="">
                                                    </a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="#">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="#">WEB 2</a></h2>
                                                    <p>At Collax we specialize in designing, building, shipping...
                                                    </p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="#">
                                                        <img data-src="{{ asset('assets/templates/frontend/img/project/h3_project_img02.jpg') }}"
                                                            style="height: 280px; width:100%; object-fit: cover;"
                                                            class="lazy" alt="">
                                                    </a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="#">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="#">WEB 3</a></h2>
                                                    <p>At Collax we specialize in designing, building, shipping...
                                                    </p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="#">
                                                        <img data-src="{{ asset('assets/templates/frontend/img/project/h3_project_img03.jpg') }}"
                                                            style="height: 280px; width:100%; object-fit: cover;"
                                                            class="lazy" alt="">
                                                    </a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="#">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="#">WEB 4</a></h2>
                                                    <p>At Collax we specialize in designing, building, shipping...
                                                    </p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="#">
                                                        <img data-src="{{ asset('assets/templates/frontend/img/project/h3_project_img04.jpg') }}"
                                                            style="height: 280px; width:100%; object-fit: cover;"
                                                            class="lazy" alt="">
                                                    </a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="#">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="design" role="tabpanel" aria-labelledby="design-tab">
                                <div class="swiper-container project-active-three">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="#">Design 1</a></h2>
                                                    <p>At Collax we specialize in designing, building, shipping...
                                                    </p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="#">
                                                        <img data-src="{{ asset('assets/templates/frontend/img/project/ACC-min.jpg') }}"
                                                            style="height: 280px; width:100%; object-fit: cover;"
                                                            class="lazy" alt="">
                                                    </a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="#">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="#">Design 2</a></h2>
                                                    <p>At Collax we specialize in designing, building, shipping...
                                                    </p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="#">
                                                        <img data-src="{{ asset('assets/templates/frontend/img/project/h3_project_img01.jpg') }}"
                                                            style="height: 280px; width:100%; object-fit: cover;"
                                                            class="lazy" alt="">
                                                    </a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="#">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="#">Design 3</a></h2>
                                                    <p>At Collax we specialize in designing, building, shipping...
                                                    </p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="#">
                                                        <img data-src="{{ asset('assets/templates/frontend/img/project/h3_project_img03.jpg') }}"
                                                            style="height: 280px; width:100%; object-fit: cover;"
                                                            class="lazy" alt="">
                                                    </a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="#">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="#">Design 4</a></h2>
                                                    <p>At Collax we specialize in designing, building, shipping...
                                                    </p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="#">
                                                        <img data-src="{{ asset('assets/templates/frontend/img/project/h3_project_img04.jpg') }}"
                                                            style="height: 280px; width:100%; object-fit: cover;"
                                                            class="lazy" alt="">
                                                    </a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="#">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="app" role="tabpanel" aria-labelledby="app-tab">
                                <div class="swiper-container project-active-three">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="#">App Design 1</a></h2>
                                                    <p>At Collax we specialize in designing, building, shipping...
                                                    </p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="#">
                                                        <img data-src="{{ asset('assets/templates/frontend/img/project/h3_project_img01.jpg') }}"
                                                            style="height: 280px; width:100%; object-fit: cover;"
                                                            class="lazy" alt="">
                                                    </a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="#">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="#">App Design 2</a></h2>
                                                    <p>At Collax we specialize in designing, building, shipping...
                                                    </p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="#">
                                                        <img data-src="{{ asset('assets/templates/frontend/img/project/h3_project_img02.jpg') }}"
                                                            style="height: 280px; width:100%; object-fit: cover;"
                                                            class="lazy" alt="">
                                                    </a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="#">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="#">App Design 3</a></h2>
                                                    <p>At Collax we specialize in designing, building, shipping...
                                                    </p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="#">
                                                        <img data-src="{{ asset('assets/templates/frontend/img/project/h3_project_img03.jpg') }}"
                                                            style="height: 280px; width:100%; object-fit: cover;"
                                                            class="lazy" alt="">
                                                    </a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="#">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="#">App Design 4</a></h2>
                                                    <p>At Collax we specialize in designing, building, shipping...
                                                    </p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="#">
                                                        <img data-src="{{ asset('assets/templates/frontend/img/project/h3_project_img04.jpg') }}"
                                                            style="height: 280px; width:100%; object-fit: cover;"
                                                            class="lazy" alt="">
                                                    </a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="#">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="branding" role="tabpanel" aria-labelledby="branding-tab">
                                <div class="swiper-container project-active-three">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="#">Branding Design 1</a>
                                                    </h2>
                                                    <p>At Collax we specialize in designing, building, shipping...
                                                    </p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="#">
                                                        <img data-src="{{ asset('assets/templates/frontend/img/project/h3_project_img01.jpg') }}"
                                                            style="height: 280px; width:100%; object-fit: cover;"
                                                            class="lazy" alt="">
                                                    </a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="#">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="#">Branding Design 2</a>
                                                    </h2>
                                                    <p>At Collax we specialize in designing, building, shipping...
                                                    </p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="#">
                                                        <img data-src="{{ asset('assets/templates/frontend/img/project/h3_project_img02.jpg') }}"
                                                            style="height: 280px; width:100%; object-fit: cover;"
                                                            class="lazy" alt="">
                                                    </a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="#">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="#">Branding Design 3</a>
                                                    </h2>
                                                    <p>At Collax we specialize in designing, building, shipping...
                                                    </p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="#">
                                                        <img data-src="{{ asset('assets/templates/frontend/img/project/h3_project_img03.jpg') }}"
                                                            style="height: 280px; width:100%; object-fit: cover;"
                                                            class="lazy" alt="">
                                                    </a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="#">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="project-item-three">
                                                <div class="project-content-three">
                                                    <h2 class="title"><a href="#">Branding Design 4</a>
                                                    </h2>
                                                    <p>At Collax we specialize in designing, building, shipping...
                                                    </p>
                                                </div>
                                                <div class="project-thumb-three">
                                                    <a href="#">
                                                        <img data-src="{{ asset('assets/templates/frontend/img/project/h3_project_img04.jpg') }}"
                                                            style="height: 280px; width:100%; object-fit: cover;"
                                                            class="lazy" alt="">
                                                    </a>
                                                </div>
                                                <div class="project-details-btn">
                                                    <a href="#">View Case Studies</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-shape-wrap-two">
            <img data-src="{{ asset('assets/templates/frontend/img/images/h3_project_shape.png') }}" class="lazy"
                alt="">
        </div>
    </section>
    <!-- project-area-end -->

    <!-- testimonial-area -->
    <section class="testimonial-area-three">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="section-title title-style-two white-title mb-45">
                        <h2 class="title">Apa Pendapat Mereka <br> Tentang Kami</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-nav">
                        <button class="swiper-button-prev"></button>
                        <button class="swiper-button-next"></button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper-container testimonial-active-three">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-item-three">
                                    <div class="testimonial-thumb-three">
                                        <img data-src="{{ asset('assets/templates/frontend/img/images/testimonial_avatar01.png') }}"
                                            class="lazy" alt="">
                                    </div>
                                    <div class="testimonial-content-three">
                                        <h4 class="title">Taufiq</h4>
                                        <span>Product Designer</span>
                                        <p>"Saya sangat senang dengan hasil desain yang dibuat oleh tim cempor
                                            digital. Mereka mengerti apa yang saya inginkan dan mampu memberikan
                                            solusi yang sempurna untuk kebutuhan desain saya. Proses komunikasi dan
                                            kerjasama dengan timnya sangat lancar dan mereka selalu mengakomodasi
                                            setiap permintaan perubahan dari saya. Saya sangat merekomendasikan jasa
                                            desain ini kepada siapa saja yang mencari desain berkualitas tinggi dan
                                            layanan yang baik."</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item-three">
                                    <div class="testimonial-thumb-three">
                                        <img data-src="{{ asset('assets/templates/frontend/img/images/testimonial_avatar02.png') }}"
                                            class="lazy" alt="">
                                    </div>
                                    <div class="testimonial-content-three">
                                        <h4 class="title">Fahri</h4>
                                        <span>Product Designer</span>
                                        <p>"Saya sangat puas dengan hasil foto dan video dari cempor digital. Mereka
                                            profesional dan membuat hasil yang bagus. Proses pemotretan dan
                                            pembuatan videonya lancar dan mudah dipahami. Saya sangat
                                            merekomendasikan jasa foto dan video mereka kepada siapa saja."</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item-three">
                                    <div class="testimonial-thumb-three">
                                        <img data-src="{{ asset('assets/templates/frontend/img/images/testimonial_avatar03.png') }}"
                                            class="lazy" alt="">
                                    </div>
                                    <div class="testimonial-content-three">
                                        <h4 class="title">Lutpi N.</h4>
                                        <span>Web Programmer</span>
                                        <p>"Saya sangat terkesan dengan layanan jasa pembuatan aplikasi website oleh
                                            cempor digital. Tim pembuat aplikasi mereka sangat professional dan
                                            memahami kebutuhan saya dengan baik. Proses pembuatan aplikasi berjalan
                                            lancar dan hasil akhir sesuai dengan harapan saya. Saya sangat
                                            merekomendasikan jasa pembuatan aplikasi website ini kepada siapa saja
                                            yang mencari solusi pembuatan aplikasi website berkualitas tinggi dan
                                            layanan yang baik."</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-swiper-pagination"></div>
        </div>
        <div class="testimonial-shape-wrap">
            <img data-src="{{ asset('assets/templates/frontend/img/images/testimonial_shape01.png') }}" class="lazy"
                alt="">
            <img data-src="{{ asset('assets/templates/frontend/img/images/testimonial_shape02.png') }}" class="lazy"
                alt="">
            <img data-src="{{ asset('assets/templates/frontend/img/images/testimonial_shape03.png') }}" class="lazy"
                alt="">
            <img data-src="{{ asset('assets/templates/frontend/img/images/testimonial_shape04.png') }}" class="lazy"
                alt="">
        </div>
    </section>
    <!-- testimonial-area-end -->

    <!-- faq-area -->
    <section class="faq-area pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-img">
                        <img data-src="{{ asset('assets/templates/frontend/img/images/faq_img.png') }}" class="lazy"
                            alt="">
                        <img data-src="{{ asset('assets/templates/frontend/img/images/faq_img02.png') }}" class="lazy"
                            alt="">
                    </div>
                    <div class="faq-content">
                        <div class="section-title title-style-two mb-20">
                            <h2 class="title">Ada Pertanyaan ?</h2>
                        </div>
                        <h3 class="title-two">Semua Pertanyaan Yang Sering Diajukan Ada Disini</h3>
                        <p>Lorem ipsum dolor sit amet, sed nulla ante amet, elementum tincidunt arcu sed laoreet,
                            natoque ac eget imperdiet. Ac scelerisque nibh dolores consectetuer,</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion faq-wrap" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What's the difference between Pro and Free?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, sed nulla ante amet, elementum tincidunt arcu sed
                                        laoreet, natoque ac eget imperdiet. Ac scelerisque nibh dolores
                                        consectetuer,</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What's the difference between Pro and Free?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, sed nulla ante amet, elementum tincidunt arcu sed
                                        laoreet, natoque ac eget imperdiet. Ac scelerisque nibh dolores
                                        consectetuer,</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What's the difference between Pro and Free?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, sed nulla ante amet, elementum tincidunt arcu sed
                                        laoreet, natoque ac eget imperdiet. Ac scelerisque nibh dolores
                                        consectetuer,</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    What's the difference between Pro and Free?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, sed nulla ante amet, elementum tincidunt arcu sed
                                        laoreet, natoque ac eget imperdiet. Ac scelerisque nibh dolores
                                        consectetuer,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="faq-shape-wrap">
            <img data-src="{{ asset('assets/templates/frontend/img/images/faq_shape.png') }}" class="lazy"
                alt="">
        </div>
    </section>
    <!-- faq-area-end -->

    <!-- newsletter-area -->
    <section class="newsletter-area-two">
        <div class="container">
            <div class="newsletter-wrap">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="section-title title-style-two white-title text-center mb-30">
                            <span class="sub-title">Perbarui Informasi ?</span>
                            <h2 class="title">Dapatkan informasi terbaru dari kami</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Masukan alamat email kamu">
                                <button type="submit" class="btn">Langganan <span></span></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="newsletter-shape-wrap-two">
                    <img data-src="{{ asset('assets/templates/frontend/img/images/h3_newsletter_shape01.png') }}"
                        class="lazy" alt="assets">
                    <img data-src="{{ asset('assets/templates/frontend/img/images/h3_newsletter_shape02.png') }}"
                        class="lazy" alt="assets">
                    <img data-src="{{ asset('assets/templates/frontend/img/images/h3_newsletter_shape03.png') }}"
                        class="lazy" alt="assets">
                    <img data-src="{{ asset('assets/templates/frontend/img/images/h3_newsletter_shape04.png') }}"
                        class="lazy" alt="assets">
                </div>
            </div>
        </div>
    </section>
    <!-- newsletter-area-end -->
@endsection
@section('stylesheet')
    <style>
        .portfolio-section.btn-close {
            position: absolute;
            right: 56px;
            top: 56px;
            background: #fd562a;
            color: #fff;
            text-align: center;
            width: 36px;
            height: 36px;
            line-height: 36px;
            border-radius: 50%;
            transition: .3s;
        }

        .meta-wrapper {
            background: #f6f6f6;
            padding: 30px;
            border-radius: 8px;
        }


        .item-meta {
            font-size: 16px;
            list-style-type: none;
        }

        .item-meta li {
            margin-bottom: 18px
        }

        .item-meta li span {
            font-weight: bold;
            color: #222;
            margin-left: 8px
        }
    </style>
@endsection
