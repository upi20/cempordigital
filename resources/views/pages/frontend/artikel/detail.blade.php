@extends('layouts.frontend.master')
@section('content')
    <!-- Page Header Section Start Here -->
    <section class="page-header bg_img padding-tb">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title">{{ $routeTitle }} Detail</h4>
                <ul class="lab-ul">
                    <li><a href="{{ url('') }}">Utama</a></li>
                    <li><a href="{{ route('artikel') }}">{{ $routeTitle }}</a></li>
                    <li><a class="active">Detail</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->

    <!-- Blog Section Start Here -->
    <div class="blog-section blog-page padding-tb aside-bg">
        <div class="container">
            <div class="section-wrapper">
                <div class="row justify-content-center pb-15">
                    <div class="col-lg-8 col-12">
                        <article>
                            <div class="post-item-2">
                                <div class="post-inner">
                                    <div class="post-content">
                                        <h3>{{ $model->nama }}</h3>
                                        <ul class="lab-ul post-date">
                                            <li>
                                                <span>
                                                    <i class="icofont-ui-calendar"></i>
                                                    {{ $model->dateFormat('Y F d H:i') }}
                                                </span>
                                            </li>

                                            @if (isset($model->categories[0]))
                                                <li>
                                                    <a href="{{ url("artikel?kategori={$model->categories[0]->slug}") }}">
                                                        {{ $model->categories[0]->nama }}
                                                    </a>
                                                </li>
                                            @endif

                                            @if ($model->user)
                                                <li>
                                                    <span>
                                                        <i class="icofont-user"></i>
                                                        <a href="javascript:void(0)">
                                                            {{ $model->user->name }}
                                                        </a>
                                                    </span>
                                                </li>
                                            @endif
                                        </ul>

                                        {{-- Artikel detail --}}
                                        {!! $model->detail !!}


                                        <div class="tags-area">
                                            <ul class="tags lab-ul justify-content-center">
                                                @foreach ($model->tags as $tag)
                                                    <li>
                                                        <a href="{{ url("artikel?tag=$tag->slug") }}">
                                                            {{ $tag->nama }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                            <ul class="tags lab-ul justify-content-center">
                                                <li><a target="_blank"
                                                        href="https://www.facebook.com/sharer.php?u={{ route('artikel', $model->slug) }}"
                                                        title="Share To Facebook">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li><a target="_blank"
                                                        href="https://api.whatsapp.com/send?text={{ route('artikel', $model->slug) }} {{ $model->nama }}"
                                                        title="Share To Whatsapp">
                                                        <i class="fab fa-whatsapp"></i>
                                                    </a>
                                                </li>
                                                <li><a target="_blank"
                                                        href="https://twitter.com/share?url={{ route('artikel', $model->slug) }}&text={{ $model->nama }}"
                                                        title="Share To Twitter">
                                                        <i class="fab fa-twitter"></i></a>
                                                <li><a target="_blank"
                                                        href="https://www.linkedin.com/shareArticle?mini=true&url={{ route('artikel', $model->slug) }}&title={{ $model->nama }}&summary={{ $model->excerpt }}"
                                                        title="Share To Linkedin">
                                                        <i class="fab fa-linkedin-in"></i>
                                                    </a>
                                                </li>
                                                <li><a target="_blank"
                                                        href="https://pinterest.com/pin/create/button/?url={{ route('artikel', $model->slug) }}&media={{ asset($model->foto) }}&description={{ $model->nama }}"
                                                        title="Share To Pinterest">
                                                        <i class="fab fa-pinterest"></i>
                                                    </a>
                                                </li>
                                                <li><a target="_blank"
                                                        href="https://telegram.me/share/url?url={{ route('artikel', $model->slug) }}&text={{ $model->nama }}"
                                                        title="Share To Telegram">
                                                        <i class="fab fa-telegram-plane"></i>
                                                    </a>
                                                </li>
                                                <li><a target="_blank"
                                                        href="mailto:?subject={{ $model->nama }}&body=Check out this site: {{ route('artikel', $model->slug) }}"
                                                        title="Share by Email';" title="Share Via Email">
                                                        <i class="far fa-envelope"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="article-pagination">

                                @if ($prev_post)
                                    <div class="prev-article">
                                        <a href="{{ route('artikel.detail', $prev_post->slug) }}">
                                            <i class="icofont-rounded-double-left"></i>Artikel Sebelumnya
                                        </a>
                                    </div>
                                @endif

                                @if ($next_post)
                                    <div class="next-article">
                                        <a href="{{ route('artikel.detail', $next_post->slug) }}">Artikel Selanjutnya
                                            <i class="icofont-rounded-double-right"></i>
                                        </a>
                                    </div>
                                @endif
                            </div>

                            <div id="respond" class="comment-respond bg-white">
                                <h6 class="h7">Komentar</h6>
                                <div class="add-comment">
                                    <!-- post comments -->
                                    <div id="disqus_thread"></div>
                                    <script>
                                        /**
                                         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */

                                        var disqus_config = function() {
                                            this.page.url = '{{ Request::url() }}'; // Replace PAGE_URL with your page's canonical URL variable
                                            this.page.identifier =
                                                '{{ $model->slug }}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                        };
                                        (function() { // DON'T EDIT BELOW THIS LINE
                                            var d = document,
                                                s = d.createElement('script');
                                            s.src = 'https://tahfidz-arrahman.disqus.com/embed.js';
                                            s.setAttribute('data-timestamp', +new Date());
                                            (d.head || d.body).appendChild(s);
                                        })();
                                    </script>
                                    <noscript>
                                        Please enable JavaScript to view the
                                        <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a>
                                    </noscript>
                                </div>
                            </div>

                        </article>
                    </div>
                    <div class="col-lg-4 col-md-7 col-12">
                        <aside class="ps-lg-4 mt-5 mt-lg-0 pt-1 pt-lg-0">
                            <div class="widget widget-search">
                                <div class="widget-header">
                                    <h5>Pencarian artikel</h5>
                                </div>
                                <form action="{{ route('artikel') }}" class="search-wrapper" method="GET">
                                    @foreach ($rQuery ?? [] as $name => $value)
                                        <input type="hidden" name="{{ $name }}" value="{{ $value }}">
                                    @endforeach
                                    <input type="text" name="search" placeholder="Masukan Kata Kunci">
                                    <button type="submit"><i class="icofont-search-2"></i></button>
                                </form>
                            </div>



                            @if ($categories->count())
                                <div class="widget widget-category">
                                    <div class="widget-header">
                                        <h5>Kategori</h5>
                                    </div>
                                    <ul class="lab-ul widget-wrapper list-bg-none">
                                        @foreach ($categories as $kategori)
                                            @php
                                                $is_active = in_array($kategori->id, $model->parseId($model->categories));
                                            @endphp
                                            <li>
                                                <a href="{{ route('artikel', ['kategori' => $kategori->slug]) }}"
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
                                            <li>
                                                <a href="{{ route('artikel', ['tag' => $tag->slug]) }}"
                                                    {!! in_array($tag->id, $model->parseId($model->tags)) ? 'class="bg-dark text-white"' : '' !!}>
                                                    {{ $tag->nama }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            {{-- artikel --}}
                            @if ($article_catategory->count())
                                <div class="widget widget-post">
                                    <div class="widget-header">
                                        <h5>Artikel Lain</h5>
                                    </div>
                                    <ul class="lab-ul widget-wrapper">
                                        @foreach ($article_catategory as $artikel)
                                            <li class="d-flex flex-wrap justify-content-between">
                                                <div class="post-thumb">
                                                    <a href="{{ route('artikel.detail', $artikel->slug) }}">
                                                        <img class="lazy" data-src="{{ $artikel->fotoUrl() }}"
                                                            alt="{{ $artikel->nama }}">
                                                    </a>
                                                </div>
                                                <div class="post-content ps-4">
                                                    <a href="{{ route('artikel.detail', $artikel->slug) }}">
                                                        <h6>{{ $artikel->nama }}</h6>
                                                    </a>
                                                    <p>{{ $artikel->dateFormat() }}</p>
                                                </div>
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

@section('stylesheet')
    <style>
        .blogCard a {
            color: #0d6efd !important;
            text-decoration: underline;
        }
    </style>
@endsection

@section('javascript')
    <script id="dsq-count-scr" src="//wkg-roastery.disqus.com/count.js" async></script>
@endsection
