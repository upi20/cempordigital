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

    <!-- Blog Section Start Here -->
    <div class="blog-section blog-page padding-tb aside-bg">
        <div class="container">
            <div class="section-wrapper">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-12">
                        <article>
                            @foreach ($articles as $a)
                                <div class="post-item-2">
                                    <div class="post-inner">
                                        <div class="post-thumb">
                                            <a href="{{ route('artikel.detail', $a->slug) }}">
                                                <img src="{{ $a->fotoUrl() }}" alt="{{ $a->nama }}">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <a href="{{ route('artikel.detail', $a->slug) }}">
                                                <h3>{{ $a->nama }}</h3>
                                            </a>
                                            <ul class="lab-ul post-date">
                                                <li>
                                                    <span>
                                                        <i class="icofont-ui-calendar"></i>
                                                        {{ $a->dateFormat('Y F d H:i') }}
                                                    </span>
                                                </li>

                                                @if (isset($a->categories[0]))
                                                    <li>
                                                        <a href="{{ url("artikel?kategori={$a->categories[0]->slug}") }}">
                                                            {{ $a->categories[0]->nama }}
                                                        </a>
                                                    </li>
                                                @endif

                                                @if ($a->user)
                                                    <li>
                                                        <span>
                                                            <i class="icofont-user"></i>
                                                            <a href="{{ route('artikel.detail', $a->slug) }}">
                                                                {{ $a->user->name }}
                                                            </a>
                                                        </span>
                                                    </li>
                                                @endif
                                            </ul>
                                            <p>{{ $a->excerpt }}</p>
                                            <a href="{{ route('artikel.detail', $a->slug) }}" class="lab-btn">
                                                Baca Selengkapnya
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach



                            {!! $articles->links() !!}
                        </article>
                    </div>

                    <div class="col-lg-4 col-md-7 col-12">
                        <aside class="ps-lg-4">
                            <div class="widget widget-search">
                                <div class="widget-header">
                                    <h5>Pencarian artikel</h5>
                                </div>
                                @php
                                    $rQuery = unsetByKey($request->query(), ['search', 'page']);
                                @endphp
                                <form action="{{ route('artikel', $rQuery) }}" class="search-wrapper" method="GET">
                                    @foreach ($rQuery ?? [] as $name => $value)
                                        <input type="hidden" name="{{ $name }}" value="{{ $value }}">
                                    @endforeach
                                    <input type="text" name="search" placeholder="Masukan Kata Kunci">
                                    <button type="submit"><i class="icofont-search-2"></i></button>
                                    @if (count($request->query()) > 0)
                                        <a href="{{ route('artikel') }}" class="btn btn-secondary mt-1">Reset</a>
                                    @endif
                                </form>
                            </div>
                            {{-- kategori --}}
                            @if ($categories->count())
                                <div class="widget widget-category">
                                    <div class="widget-header">
                                        <h5>Kategori</h5>
                                    </div>
                                    <ul class="lab-ul widget-wrapper list-bg-none">
                                        @foreach ($categories as $kategori)
                                            @php
                                                $is_active = $kategori_selected ? $kategori_selected->slug == $kategori->slug : false;
                                                $rQuery = unsetByKey($request->query(), ['kategori']);
                                            @endphp
                                            <li>
                                                <a href="{{ route('artikel', $is_active ? $rQuery : array_merge($rQuery, ['kategori' => $kategori->slug])) }}"
                                                    class="{{ $is_active ? 'bg-dark ps-2 pe-2' : '' }} d-flex flex-wrap justify-content-between"
                                                    {!! $is_active ? 'style="border-radius: 16px;"' : '' !!}>
                                                    <span class="{{ $is_active ? 'text-white' : '' }}">
                                                        <i class="icofont-rounded-double-right"></i>
                                                        {{ $kategori->nama }}
                                                    </span>
                                                    <span class="{{ $is_active ? 'text-white' : '' }}">
                                                        {{ $kategori->artikel }}
                                                    </span>
                                                </a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            @endif

                            @if ($tags->count())
                                <div class="widget widget-tags">
                                    <div class="widget-header">
                                        <h5>Tags Artikel</h5>
                                    </div>
                                    <ul class="lab-ul widget-wrapper">
                                        @foreach ($tags as $tag)
                                            @php
                                                $is_active = $tag_selected ? $tag_selected->slug == $tag->slug : false;
                                                $rQuery = unsetByKey($request->query(), ['tag']);
                                            @endphp
                                            <li>
                                                <a href="{{ route('artikel', $is_active ? $rQuery : array_merge($rQuery, ['tag' => $tag->slug])) }}"
                                                    {!! $is_active ? 'class="bg-dark text-white"' : '' !!}>
                                                    {{ $tag->nama }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if ($banner !== null)
                                <div class="widget widget-instagram">
                                    <img class="lazy" data-src="{{ $banner->fotoUrl() }}" alt="{{ $banner->nama }}">
                                </div>
                            @endif
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section ENding Here -->
@endsection
