@extends('layouts.frontend.master')
@section('content')
    <!-- Page Header Section Start Here -->
    <section class="page-header bg_img padding-tb">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title"> {!! settings()->get('about.judul') !!}</h4>
                <ul class="lab-ul">
                    <li><a href="{{ url('') }}">Utama</a></li>
                    <li><a class="active"> {!! settings()->get('about.judul') !!}</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->

    <!-- About section start here -->
    <section class="about-section padding-tb shape-1">
        <div class="container">
            {!! settings()->get('about.html') !!}
        </div>
    </section>
    <!-- About section end here -->
@endsection
