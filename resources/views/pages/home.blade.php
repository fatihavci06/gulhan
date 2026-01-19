@extends('layouts.app')

@section('title', App::getLocale() == 'tr' ? 'Gülhan Yedek Parça' : 'Gulhan Spare Parts')

@section('link')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
@endsection

@section('style')
    <style>
        .swiper { width: 100%; height: 100%; }
        .swiper-slide { text-align: center; font-size: 13px; background: #fff; display: flex; justify-content: center; align-items: center; }
        .swiper-slide img { display: block; width: 100%; height: 100%; object-fit: cover; }

        /* --- BEST SELLER CARD STYLES --- */
        .bs-card {
            border: 1px solid #eee;
            background: #fff;
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
            overflow: hidden;
        }
        .bs-card:hover {
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            transform: translateY(-5px);
            border-color: #1E56A6;
        }
        .bs-img-wrap {
            height: 220px;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fcfcfc;
            border-bottom: 1px solid #f0f0f0;
        }
        .bs-img-wrap img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            transition: 0.3s;
        }
        .bs-card:hover .bs-img-wrap img {
            transform: scale(1.05);
        }
        .bs-body {
            padding: 20px;
        }
        .bs-cat {
            font-size: 11px;
            text-transform: uppercase;
            color: #999;
            font-weight: 600;
            margin-bottom: 8px;
            display: block;
        }
        .bs-title {
            font-size: 15px;
            font-weight: 700;
            color: #333;
            margin-bottom: 15px;
            line-height: 1.4;
            height: 42px; /* 2 satır */
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }
        .bs-codes {
            background: #f8f9fa;
            padding: 8px 12px;
            border-radius: 4px;
            font-size: 12px;
            margin-bottom: 15px;
            color: #555;
        }
        .bs-btn {
            width: 100%;
            border: 1px solid #1E56A6;
            color: #1E56A6;
            background: transparent;
            padding: 8px;
            font-weight: 600;
            border-radius: 50px;
            transition: 0.3s;
        }
        .bs-btn:hover {
            background: #1E56A6;
            color: #fff;
        }
    </style>
@endsection

@section('home_first')
    {{-- Home Ani Alanı (Boş bırakılmış) --}}
@endsection

@section('content')

    <main>
        <section class="py-1 my-1">
            <div class="container">
                <div class="col-xl-9 text-center mx-auto">
                    <h2 class="fw-bold w-75 mx-auto mb-3">{{ __('messages.home_video_title') }}</h2>
                    <p style="font-weight: 500;">{{ __('messages.home_video_text') }}</p>
                    <div class="shadow-lg rounded-5 overflow-hidden mt-5">
                        <iframe width="100%" height="365"
                            src="https://www.youtube.com/embed/jyDhOLUQ6vU?si=jblI0-UTyvIXloJC" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

        {{-- SLIDER SECTION --}}
        @if ($sliders)
            <section style="height: 79vh; width: 100vw !important;" class="home-slider">
                <div class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        @foreach ($sliders as $slider)
                            <div class="swiper-slide text-start">
                                <div class="item position-relative">
                                    <img src="{{ asset($slider->image) }}"
                                        alt="{{ App::getLocale() == 'tr' ? $slider->name_tr : $slider->name_en }}"
                                        class="img-fluid w-100">
                                    <div style="left: 9% !important; transform: translateX(-50%);"
                                        class="position-absolute top-50 text-white w-50 translate-middle-y">
                                        <h2 style="font-family: sans-serif;" class="display-4 fw-bold">
                                            {{ App::getLocale() == 'tr' ? $slider->name_tr : $slider->name_en }}</h2>
                                        <p style="font-family: sans-serif;" class="fs-5">
                                            {{ App::getLocale() == 'tr' ? $slider->short_description_tr : $slider->short_description_en }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div style="color: 1E56A6;" class="swiper-button-next"></div>
                    <div style="color: 1E56A6;" class="swiper-button-prev"></div>
                </div>
            </section>
        @endif

        {{--
            #########################################################
            YENİ EKLENEN BÖLÜM: EN ÇOK SATAN ÜRÜNLER (BEST SELLERS)
            #########################################################
        --}}
        @if(isset($bestSellers) && $bestSellers->count() > 0)
        <section class="py-5 bg-white position-relative" style="z-index: 2;">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
                    <h2 class="h2 fw-bold text-primary mb-0 position-relative">
                        {{ __('messages.best_sellers') ?? 'En Çok Satanlar' }}
                        <span class="position-absolute start-0 bottom-0 bg-primary" style="height: 3px; width: 60px; margin-bottom: -18px;"></span>
                    </h2>
                    <a href="{{ App::getLocale() == 'tr' ? route('tr.getProducts') : route('en.getProducts') }}" class="btn btn-outline-primary rounded-pill px-4 btn-sm fw-bold">
                        {{ __('messages.all_products') ?? 'Tüm Ürünler' }} <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a>
                </div>

                <div class="row g-4">
                    @foreach($bestSellers as $item)
                        @php $p = $item->product; @endphp
                        @if($p)
                            <div class="col-xl-3 col-lg-3 col-md-6 col-6">
                                <div class="card bs-card rounded-4">
                                    {{-- Resim --}}
                                    <a href="{{ App::getLocale() == 'tr' ? route('tr.getProductDetail', ['id' => $p->id, 'slug' => $p->slug_tr]) : route('en.getProductDetail', ['id' => $p->id, 'slug' => $p->slug_en]) }}" class="text-decoration-none">
                                        <div class="bs-img-wrap">
                                            <img src="{{ asset($p->image) }}" alt="{{ App::getLocale() == 'tr' ? $p->name_tr : $p->name_en }}" loading="lazy">
                                        </div>
                                    </a>

                                    <div class="bs-body d-flex flex-column">
                                        {{-- Kategori --}}
                                        <span class="bs-cat">
                                            @if($p->categories->isNotEmpty())
                                                {{ App::getLocale() == 'tr' ? $p->categories->first()->name_tr : $p->categories->first()->name_en }}
                                            @else
                                                Gülhan
                                            @endif
                                        </span>

                                        {{-- Başlık --}}
                                        <a href="{{ App::getLocale() == 'tr' ? route('tr.getProductDetail', ['id' => $p->id, 'slug' => $p->slug_tr]) : route('en.getProductDetail', ['id' => $p->id, 'slug' => $p->slug_en]) }}" class="text-decoration-none">
                                            <h3 class="bs-title">{{ App::getLocale() == 'tr' ? $p->name_tr : $p->name_en }}</h3>
                                        </a>

                                        {{-- Kodlar --}}
                                        <div class="bs-codes">
                                            <div class="d-flex justify-content-between mb-1">
                                                <span class="fw-bold">{{ __('messages.gyp_code') }}:</span>
                                                <span>{{ $p->gyp_code }}</span>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <span class="fw-bold">{{ __('messages.original_no') }}:</span>
                                                <span>{{ Str::limit($p->original_no, 15) }}</span>
                                            </div>
                                        </div>

                                        {{-- Ekle Butonu (Layouts'ta tanımlı addToCart kullanır) --}}
                                        <button class="btn bs-btn mt-auto" onclick="addToCart({{ $p->id }})">
                                            <i class="fa-solid fa-list-check me-2"></i> {{ __('messages.add_to_list') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
        @endif
        {{-- ######################################################### --}}


        <section class="homeHardSection my-5 py-5 position-relative">
            <div class="container">
                <div class="row g-3">
                    <div class="col-md-8 pe-3">
                        <h2 class="h5 text-primary fs-bold">{{ __('messages.about') }}</h2>
                        <h2 class="h1 fw-bold text-after-underline mb-3">{{ __('messages.home_about_title') }}</h2>
                        <p class="lead">{{ __('messages.home_about_text') }}</p>

                        <div class="d-flex align-items-center gap-5 flex-wrap pe-5 mt-5">
                            <div class="d-flex gap-3 align-items-center justify-content-center flex-wrap">
                                <img width="90" src="{{ asset('images/iso.png') }}" alt="gulhan iso belsesi"
                                    title="gulhan iso belgesi">
                                <h3 class="h5 fw-bold mb-0">ISO 9001:2015</h3>
                            </div>
                            <div class="d-flex gap-3 align-items-center justify-content-center flex-wrap">
                                <img width="90" src="{{ asset('images/tse.jpg') }}" alt="gulhan iso belsesi"
                                    title="gulhan iso belgesi">
                                <h3 class="h5 fw-bold mb-0">TSE</h3>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap align-items-center gap-5 mt-5">
                            <a href="{{ App::getLocale() == 'tr' ? route('tr.getContact') : route('en.getContact') }}"
                                class="btn btn-primary py-3 px-5 fs-5">{{ __('messages.contact') }} <i
                                    class="fa-solid fa-caret-right ms-2"></i></a>
                            <div class="d-flex flex-wrap gap-3 align-items-center">
                                <i class="fa-solid fa-phone fs-3"></i>
                                <div class="d-flex flex-column gap-1">
                                    <p style="font-weight: 300;" class="mb-0 fs-5">{{ __('messages.contact_us') }}</p>
                                    <p class="mb-0 fw-bold fs-4">444 46 41</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex justify-content-between align-items-center gap-2 flex-wrap">
                            <div class="d-flex flex-column flex-wrap justify-content-between align-items-center gap-2">
                                <p class="h1 fw-bold text-primary">45+</p>
                                <p class="fw-bold fs-5">{{ __('messages.years_of_experience') }}</p>
                            </div>
                            <div class="d-flex flex-column flex-wrap justify-content-between align-items-center gap-2">
                                <p class="h1 fw-bold text-primary">80+</p>
                                <p class="fw-bold fs-5">{{ __('messages.export_to_country') }}</p>
                            </div>
                        </div>

                        <div class="position-relative overflow-hidden">
                            <img src="{{ asset('images/hardImage.jpg') }}" alt=""
                                class="img-fluid rounded-5 w-100">
                            <div style="bottom: -60px; right: -60px;" class="position-absolute">
                                <i style="font-size: 179px; color: #595959;" class="fa-solid fa-gear"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-down">
            <div class="container">
                <div class="row">
                    <div class="col2 col-md-4 position-relative">
                        <div style="min-height: 350px;"
                            class="d-flex flex-column justify-content-center align-items-center gap-2">
                            <div class="hexagon-container">
                                <div class="hexagon">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                </div>
                            </div>

                            <h2 class="h3 text-white fw-bold text-center">{{ __('messages.products') }}</h2>
                            <p class="text-white text-center">{{ __('messages.home_about_down_text_1') }}</p>
                            <button
                                onclick="window.location.href='{{ App::getLocale() == 'tr' ? route('tr.getProducts') : route('en.getProducts') }}' ">{{ __('messages.go_to_page') }}</button>
                        </div>
                    </div>

                    <div class="col2 col-md-4 position-relative">
                        <div style="min-height: 350px;"
                            class="d-flex flex-column justify-content-center align-items-center gap-2">
                            <div class="hexagon-container">
                                <div class="hexagon">
                                    <i class="fa-solid fa-book"></i>
                                </div>
                            </div>

                            <h2 class="h3 text-white fw-bold text-center">{{ __('messages.catalog') }}</h2>
                            <p class="text-white text-center">{{ __('messages.home_about_down_text_2') }}</p>
                            <button
                                onclick="window.location.href='{{ App::getLocale() == 'tr' ? route('tr.getCatalog') : route('en.getCatalog') }}' ">{{ __('messages.go_to_page') }}</button>
                        </div>
                    </div>

                    <div class="col2 col-md-4 position-relative">
                        <div style="min-height: 350px;"
                            class="d-flex flex-column justify-content-center align-items-center gap-2">
                            <div class="hexagon-container">
                                <div class="hexagon">
                                    <i class="fa-solid fa-play"></i>
                                </div>
                            </div>

                            <h2 class="h3 text-white fw-bold text-center">{{ __('messages.promotion_film') }}</h2>
                            <p class="text-white text-center">{{ __('messages.home_about_down_text_3') }}</p>
                            <button>{{ __('messages.watch_movie') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-categories my-5 py-5">
            <div class="container-fluid px-0 position-relative">
                <div class="row g-0">
                    <div class="col-xl-8 position-relative overflow-hidden">
                        <a href="#" id="homeCategoriesRoute">
                            <img id="homeCategoriesImage" src="https://html.themexriver.com/industo/images/gallery/1.jpg"
                                alt="" class="img-fluid w-100">
                        </a>
                        <div class="position-absolute bottom-0 end-0 text-white text-end pe-5 w-50 p-2 pe-0">
                            <h2 id="homeCategoriesName" class="fs-4 mb-3"></h2>
                        </div>
                    </div>
                    <div class="col-xl-4 overflow-hidden">
                        <div class="d-flex flex-column h-100 align-items-center pt-5 pb-3">
                            <h3 class="h2 text-white fw-bold mb-3">{{ __('messages.categories') }}</h3>
                            <ul class="list-unstyled p-0 fs-5">
                                @foreach ($navbar_product_categories as $key => $navbar_category)
                                    @if ($navbar_category->category_id == null)
                                        <li data-route="{{ App::getLocale() == 'tr' ? route('tr.getCategoryProducts', ['slug' => $navbar_category->slug_tr]) : route('en.getCategoryProducts', ['slug' => $navbar_category->slug_en]) }}"
                                            data-name="{{ App::getLocale() == 'tr' ? $navbar_category->name_tr : $navbar_category->name_en }}"
                                            data-image="{{ asset($navbar_category->image) }}"
                                            class="cursor-pointer mb-2 {{ $key == 0 ? 'active' : '' }}">
                                            {{ App::getLocale() == 'tr' ? $navbar_category->name_tr : $navbar_category->name_en }}
                                            <i class="fa-solid fa-caret-right"></i>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center gap-3 mb-3">
                    <h2 class="h3 text-primary">{{ __('messages.blogs') }}</h2>

                    <a href="{{ App::getLocale() == 'tr' ? route('tr.blogs') : route('en.blogs') }}"
                        class="btn btn-primary">{{ __('messages.all_blogs') }}</a>
                </div>

                {{-- first blog --}}
                @if (!empty($blogs))
                    @php $firstBlog = $blogs->first(); @endphp
                    @if ($firstBlog)
                        <div class="card border-0 mb-5 overflow-hidden rounded-5">
                            <div class="overflow-hidden rounded-5">
                                <img style="filter: brightness(39%); object-fit: cover;" height="460"
                                    style="filter: brightness(22%) contrast(80%);" src="{{ $firstBlog->image }}"
                                    alt="{{ $firstBlog->name }}" title="{{ $firstBlog->name }}" class="card-img-top">
                            </div>
                            <div class="text-white text-center position-absolute top-50 start-50 translate-middle w-75">
                                <h2 class="display-5 fw-bold text-white">
                                    {{ App::getLocale() == 'tr' ? $firstBlog->name_tr : $firstBlog->name_en }}</h2>
                                <p class="lead text-white">{!! Str::limit(
                                    strip_tags(App::getLocale() == 'tr' ? $firstBlog->description_tr : $firstBlog->description_en),
                                    166,
                                ) !!}</p>
                                <a title="{{ App::getLocale() == 'tr' ? $firstBlog->name_tr : $firstBlog->name_en }}"
                                    href="{{ App::getLocale() == 'tr' ? route('tr.getBlogDetail', ['slug' => $firstBlog->slug_tr]) : route('en.getBlogDetail', ['slug' => $firstBlog->slug_en]) }}"
                                    class="btn btn-primary mt-3">{{ __('messages.more') }}</a>
                            </div>
                        </div>
                    @endif
                @endif

                <div class="row my-3">
                    @foreach ($blogs as $key => $blog)
                        @if ($key != 0 && $key <= 3)
                            <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-stretch mb-3">
                                <div class="card border border-dark-subtle rounded-4 overflow-hidden position-relative">
                                    <div
                                        class="d-flex flex-wrap gap-2 z-index-1 position-absolute top-0 start-0 px-4 pt-3">
                                        @if ($blog->categories)
                                            @foreach ($blog->categories as $bc)
                                                <button
                                                    class="btn btn-secondary btn-sm">{{ App::getLocale() == 'tr' ? $bc->name_tr : $bc->name_en }}</button>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="overflow-hidden">
                                        <a title="{{ App::getLocale() == 'tr' ? $blog->name_tr : $blog->name_en }}"
                                            href="{{ App::getLocale() == 'tr' ? route('tr.getBlogDetail', ['slug' => $blog->slug_tr]) : route('en.getBlogDetail', ['slug' => $blog->slug_en]) }}">
                                            @if ($blog->image == '/images/logo.png')
                                                <img title="{{ App::getLocale() == 'tr' ? $blog->name_tr : $blog->name_en }}"
                                                    style="object-fit: contain;" height="220"
                                                    src="{{ asset($blog->image) }}"
                                                    alt="{{ App::getLocale() == 'tr' ? $blog->name_tr : $blog->name_en }}"
                                                    class="card-img-top">
                                            @else
                                                <img title="{{ App::getLocale() == 'tr' ? $blog->name_tr : $blog->name_en }}"
                                                    style="object-fit: cover;" height="220"
                                                    src="{{ asset($blog->image) }}"
                                                    alt="{{ App::getLocale() == 'tr' ? $blog->name_tr : $blog->name_en }}"
                                                    class="card-img-top">
                                            @endif
                                        </a>

                                    </div>
                                    <div class="p-4">
                                        <a title="{{ App::getLocale() == 'tr' ? $blog->name_tr : $blog->name_en }}"
                                            href="{{ App::getLocale() == 'tr' ? route('tr.getBlogDetail', ['slug' => $blog->slug_tr]) : route('en.getBlogDetail', ['slug' => $blog->slug_en]) }} }}"
                                            class="text-decoration-none text-dark">
                                            <h2 class="h5 fw-bold mb-3">
                                                {{ App::getLocale() == 'tr' ? $blog->name_tr : $blog->name_en }}</h2>
                                        </a>
                                        <p class="card-h-word-4" style="font-size: 13px; font-weight:500;"
                                            class="">{!! strip_tags(App::getLocale() == 'tr' ? $blog->description_tr : $blog->description_en) !!}</p>
                                        <a title="{{ App::getLocale() == 'tr' ? $blog->name_tr : $blog->name_en }}"
                                            href="{{ App::getLocale() == 'tr' ? route('tr.getBlogDetail', ['slug' => $blog->slug_tr]) : route('en.getBlogDetail', ['slug' => $blog->slug_en]) }} }}"
                                            class="btn btn-primary">{{ __('messages.more') }}</a>
                                    </div>
                                    <div class="card-footer mt-auto">
                                        <i class="fa-solid fa-calendar"></i>
                                        {{ $blog->updated_at }}
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>

        <section class="my-3 mb-5 py-3">
            <div class="container">
                <h2 class="h3 text-primary">{{ __('messages.references') }}</h2>

                <div class="swiper mySwiper">
                    <div style="display: flex; flex-direction: row; align-items: center;" class="swiper-wrapper">
                        <div class="swiper-slide"><img style="filter: grayscale(100%);"
                                src="https://www.gulhan.com/assets/media/sermac_portfolioBrandImage_resize__240_50.png"
                                alt="Slide 1"></div>
                        <div class="swiper-slide"><img style="filter: grayscale(100%);"
                                src="https://www.gulhan.com/assets/media/cifa_portfolioBrandImage_resize__240_50.png"
                                alt="Slide 2"></div>
                        <div class="swiper-slide"><img style="filter: grayscale(100%);"
                                src="https://www.gulhan.com/assets/media/atlas-copco-turbo-kompresorlerle-enerji-verimliligi-maksimum-h4079-a3f05_portfolioBrandImage_resize__240_50.png"
                                alt="Slide 3"></div>
                        <div class="swiper-slide"><img style="filter: grayscale(100%);"
                                src="https://www.gulhan.com/assets/media/komatsu-logo-1-6271_portfolioBrandImage_resize__240_50.jpg"
                                alt="Slide 3"></div>
                        <div class="swiper-slide"><img style="filter: grayscale(100%);"
                                src="https://www.gulhan.com/assets/media/bomag-201x-logosvg_portfolioBrandImage_resize__240_50.png"
                                alt="Slide 3"></div>
                        <div class="swiper-slide"><img style="filter: grayscale(100%);"
                                src="https://www.gulhan.com/assets/media/cat-logo_portfolioBrandImage_resize__240_50.png"
                                alt="Slide 3"></div>
                        <div class="swiper-slide"><img style="filter: grayscale(100%);"
                                src="https://www.gulhan.com/assets/media/schwing-stetter-logo_portfolioBrandImage_resize__240_50.png"
                                alt="Slide 3"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-primary py-5">
            <div class="container">
                <div class="card rounded-5">
                    <div class="py-3 px-5">
                        <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                            <div>
                                <h2 class="fw-bold">{{ __('messages.know_us_better') }}</h2>
                                <p class="text-primary fs-5 mb-0">{{ __('messages.know_us_better_text') }}</p>
                            </div>

                            <a href="{{ App::getLocale() == 'tr' ? route('tr.getContact') : route('en.getContact') }}"
                                class="btn btn-primary text-uppercase py-3 px-5">{{ __('messages.contact') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    {{-- Toastr ve AJAX (Layouts'ta yoksa buraya ekleyin) --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        // Listeye Ekleme Fonksiyonu
        function addToCart(productId) {
            $.ajax({
                url: "{{ route('cart.add') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: productId,
                    quantity: 1
                },
                success: function(response) {
                    if(response.status === 'success') {
                        toastr.success(response.message, 'Başarılı');
                        // Navbar'daki Sepet Sayısını Güncelle
                        var cartCountBadge = $('#cart-mini .badge');
                        if(cartCountBadge.length > 0) {
                            cartCountBadge.text(response.count);
                            cartCountBadge.addClass('bg-success').removeClass('bg-danger');
                            setTimeout(function(){
                                cartCountBadge.addClass('bg-danger').removeClass('bg-success');
                            }, 500);
                        }
                    } else {
                        toastr.error(response.message, 'Hata');
                    }
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                    toastr.error('Bir hata oluştu, lütfen tekrar deneyin.', 'Hata');
                }
            });
        }
    </script>

    <script>
        $(document).ready(function() {
            var swiper = new Swiper(".mySwiper2", {
                slidesPerView: 1,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        });
    </script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 5,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

    <script>
        $(function() {
            // Hover zamanlayıcısı
            var categoryTimeout;

            // Sayfa açılışında ilk kategoriyi getir
            getHomeCategory();

            // Mouse Üzerine Gelince (Hover) Çalışır
            $('.home-categories li').on('mouseenter', function() {

                // Hızlı geçişlerde karışıklığı önlemek için bekleyen işlemi temizle
                clearTimeout(categoryTimeout);

                // Aktif sınıfları güncelle
                $('#homeCategoriesImage').removeClass('active');
                $('.home-categories li').removeClass('active');
                $(this).addClass('active');

                // Veriyi getir
                getHomeCategory();
            });

            // Tıklayınca ilgili sayfaya git (Link özelliği kazandırma)
            $('.home-categories li').on('click', function() {
                var route = $(this).data('route');
                if (route) {
                    window.location.href = route;
                }
            });

            function getHomeCategory() {
                // 200ms gecikme ile görseli değiştir (Akıcılık için)
                categoryTimeout = setTimeout(() => {
                    let activeLi = $('.home-categories li.active');
                    let homeCategoriesActiveImage = activeLi.data('image');
                    let homeCategoriesActiveName = activeLi.data('name');
                    let homeCategoriesActiveRoute = activeLi.data('route');

                    // Görseli ve yazıyı değiştir
                    $('.home-categories #homeCategoriesImage').attr('src', homeCategoriesActiveImage);
                    $('.home-categories #homeCategoriesName').text(homeCategoriesActiveName);

                    // Linki güncelle (href olarak düzeltildi)
                    $('.home-categories #homeCategoriesRoute').attr('href', homeCategoriesActiveRoute);

                    // Animasyon sınıfını ekle
                    $('#homeCategoriesImage').addClass('active');
                }, 200);
            }
        })
    </script>

    <script>
        $(function() {
            $('.home-img-1').addClass('active')

            setTimeout(() => {
                $('.home-img-1').addClass('opacity-0')
                $('.home-img-2').addClass('opacity-1')
            }, 3600);

            setTimeout(() => {
                $('.home-ani-content').addClass('opacity-1')
            }, 4600);

            setTimeout(() => {
                $('.home-ani-content-1').addClass('opacity-1')
            }, 4900);

            setTimeout(() => {
                $('.home-ani-content-2').addClass('opacity-1')
            }, 5500);

            setTimeout(() => {
                $('.home-ani-content-3').addClass('opacity-1')
            }, 5900);

            setTimeout(() => {
                $('.home-ani-content-4').addClass('opacity-1')
            }, 6600);
        })
    </script>
@endsection
