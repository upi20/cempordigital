<section class="project-area-three">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-xl-10">
                <div class="section-title title-style-two mb-90">
                    <span class="sub-title">{!! setting_get("$k.title") !!}</span>
                    <h2 class="title">{!! setting_get("$k.sub_title") !!}</h2>
                </div>
            </div>
        </div>
        <div class="project-nav-wrap">
            <div class="row">
                <div class="col-xl-2">
                    <div class="project-tab-wrap">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            @foreach ($protfolios as $kategori)
                                @if ($kategori->protfolios->count() < 1)
                                    @continue
                                @endif
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link {{ $loop->first ? 'active' : '' }}"
                                        id="{{ $kategori->slug }}-tab" data-bs-toggle="tab"
                                        data-bs-target="#{{ $kategori->slug }}-container" type="button" role="tab"
                                        aria-controls="{{ $kategori->slug }}-container"
                                        aria-selected="false">{{ $kategori->nama }}
                                    </button>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-xl-10">
                    <div class="tab-content" id="myTabContent">
                        @foreach ($protfolios as $kategori)
                            @if ($kategori->protfolios->count() < 1)
                                @continue
                            @endif
                            <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                                id="{{ $kategori->slug }}-container" role="tabpanel"
                                aria-labelledby="{{ $kategori->slug }}-tab">
                                <div class="swiper-container project-active-three">
                                    <div class="swiper-wrapper">
                                        @foreach ($kategori->protfolios as $protfolio)
                                            <div class="swiper-slide">
                                                <div class="project-item-three">
                                                    <div class="project-content-three">
                                                        <h2 class="title">
                                                            <a onclick="protfolioDetail('.btnPortofolio-{{ $protfolio->slug }}','{{ $protfolio->slug }}')"
                                                                href="javascript:void(0)">
                                                                {{ $protfolio->nama }}
                                                            </a>
                                                        </h2>
                                                        <p>{{ text_cutter($protfolio->keterangan, 50) }} </p>
                                                    </div>
                                                    <div class="project-thumb-three">
                                                        <a onclick="protfolioDetail('.btnPortofolio-{{ $protfolio->slug }}','{{ $protfolio->slug }}')"
                                                            href="javascript:void(0)">
                                                            <img data-src="{{ $protfolio->fotoUrl() }}"
                                                                style="height: 280px; width:100%; object-fit: cover;"
                                                                class="lazy" alt="{{ $protfolio->nama }}">
                                                        </a>
                                                    </div>
                                                    <div class="project-details-btn">
                                                        <a href="javascript:void(0)"
                                                            class="btnPortofolio-{{ $protfolio->slug }}"
                                                            onclick="protfolioDetail('.btnPortofolio-{{ $protfolio->slug }}','{{ $protfolio->slug }}')">
                                                            Lihat Detail
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="project-shape-wrap-two">
        <img data-src="{{ asset('assets/templates/frontend/img/images/h3_project_shape.png') }}" class="lazy"
            alt="shape">
    </div>
</section>
