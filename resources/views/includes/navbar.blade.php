<style>
    /* --- GENEL AYARLAR --- */
    .header-area {
        background-color: #fff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        position: relative;
        z-index: 99999;
        font-family: 'Segoe UI', sans-serif;
    }

    .header-top {
        padding: 15px 0;
        border-bottom: 1px solid #eee;
    }

    .header-bottom {
        background-color: #fff;
    }

    /* --- MENÜ YAPISI --- */
    .nav-list {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
        gap: 25px;
    }

    .nav-item {
        position: relative;
        padding: 15px 0;
    }

    .nav-link {
        text-decoration: none;
        color: #333;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 14px;
        transition: color 0.3s;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .nav-link:hover {
        color: #1E56A6;
    }

    /* --- MEGA MENU --- */
    .dropdown-menu-mega {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        min-width: 600px;
        background-color: #2b2b2b;
        z-index: 10000;
        border-radius: 4px;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        padding: 20px;
        padding-top: 25px;
        margin-top: 0;
    }

    .mega-row {
        display: flex;
        gap: 40px;
    }

    .mega-col {
        flex: 1;
    }

    .mega-header {
        color: #1E56A6;
        font-size: 14px;
        font-weight: 800;
        text-transform: uppercase;
        margin-bottom: 15px;
        padding-bottom: 8px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        display: block;
    }

    .mega-col ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .mega-link {
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #ccc;
        text-decoration: none;
        font-size: 13px;
        padding: 8px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.03);
        transition: 0.2s;
    }

    .mega-link:hover {
        color: #fff;
        padding-left: 10px;
        background-color: rgba(255, 255, 255, 0.05);
    }

    /* --- STANDART DROPDOWN --- */
    .dropdown-menu-standard {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        min-width: 240px;
        background-color: #2b2b2b;
        padding: 10px 0;
        padding-top: 20px;
        border-radius: 4px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        z-index: 10000;
    }

    .dropdown-standard-link {
        display: block;
        padding: 10px 20px;
        color: #ccc;
        text-decoration: none;
        font-size: 14px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        transition: 0.2s;
    }

    .dropdown-standard-link:hover {
        background-color: #333;
        color: #fff;
        padding-left: 25px;
    }

    /* HOVER İLE AÇILMA */
    .nav-item:hover .dropdown-menu-mega,
    .nav-item:hover .dropdown-menu-standard {
        display: block;
        animation: fadeIn 0.3s ease;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Arama ve Butonlar */
    .search-input {
        border-radius: 50px 0 0 50px !important;
        border-right: none;
        height: 45px;
    }

    .search-btn {
        border-radius: 0 50px 50px 0 !important;
        background: #1E56A6;
        color: #fff;
        padding: 0 25px;
    }

    .icon-btn {
        font-size: 18px;
        color: #555;
        margin: 0 8px;
        transition: 0.3s;
        cursor: pointer;
    }

    .icon-btn:hover {
        color: #1E56A6;
    }

    /* Mobil */
    @media (max-width: 991px) {
        .header-bottom {
            display: none;
        }
    }
</style>

<header class="header-area sticky-top">

    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-6">
                    <a href="{{ App::getLocale() == 'tr' ? route('tr.home') : route('en.home') }}">
                        <img src="{{ asset('images/gulhan-logo.webp') }}" alt="Logo" class="img-fluid"
                            style="max-width: 200px;">
                    </a>
                </div>

                <div class="col-6 d-lg-none text-end">
                    <div id="nav-toggle" style="cursor: pointer; font-size: 24px;">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                </div>

                <div class="col-lg-6 d-none d-lg-block">
                    <div class="d-flex justify-content-center">
                        <form
                            action="{{ App::getLocale() == 'tr' ? route('tr.getProducts') : route('en.getProducts') }}"
                            method="GET" style="width: 100%; max-width: 500px;" class="d-flex">
                            <input type="text" class="form-control search-input" name="keyword"
                                placeholder="{{ __('messages.search_placeholder') ?? 'Ara...' }}"
                                value="{{ request('keyword') }}">
                            <button class="btn search-btn" type="submit">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-3 d-none d-lg-block text-end">
                    <a href="https://www.facebook.com/GulhanSpareParts/" target="_blank" class="icon-btn">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="https://www.instagram.com/gulhan.spares/" target="_blank" class="icon-btn">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/g%C3%BClhan-yedek-par%C3%A7a" target="_blank"
                        class="icon-btn">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                    {{-- SEPET İKONU (OFFCANVAS TETİKLEYİCİSİ EKLENDİ) --}}
                    <a href="{{ App::getLocale() == 'tr' ? route('tr.cart.index') : route('en.cart.index') }}"
                        class="icon-btn position-relative" id="cart-mini">

                        <i class="fa-solid fa-cart-shopping"></i>

                        {{-- Sepet Sayısı Badge --}}
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                            style="font-size: 8px;">
                            {{ count((array) session('cart')) }}
                        </span>
                    </a>

                    <div class="d-inline-block ms-3 dropdown">
                        <a href="#" class="text-dark text-decoration-none fw-bold" data-bs-toggle="dropdown">
                            {{ App::getLocale() == 'tr' ? 'TR' : 'EN' }} <i class="fa-solid fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow border-0">
                            <li><a href="{{ route('setLang', ['locale' => 'tr', 'id' => $id ?? null, 'slug' => $slug_tr ?? null]) }}"
                                    class="dropdown-item">Türkçe</a></li>
                            <li><a href="{{ route('setLang', ['locale' => 'en', 'id' => $id ?? null, 'slug' => $slug_en ?? null]) }}"
                                    class="dropdown-item">English</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom">
        <div class="container">
            <ul class="nav-list">

                <li class="nav-item">
                    <a href="{{ App::getLocale() == 'tr' ? route('tr.home') : route('en.home') }}" class="nav-link">
                        {{ __('messages.home') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ App::getLocale() == 'tr' ? route('tr.getInstitutional') : route('en.getInstitutional') }}"
                        class="nav-link">
                        {{ __('messages.institutional') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ App::getLocale() == 'tr' ? route('tr.getProducts') : route('en.getProducts') }}"
                        class="nav-link">
                        {{ __('messages.products') }} <i class="fa-solid fa-caret-down" style="font-size: 10px;"></i>
                    </a>

                    <div class="dropdown-menu-mega">
                        @php
                            $navbar_brands = \App\Models\Brand::orderBy('name', 'ASC')->get();
                        @endphp

                        <div class="mega-row">

                            <div class="mega-col">
                                <span class="mega-header">
                                    <i class="fa-solid fa-gears me-2"></i> Yedek Parça
                                </span>
                                <ul>
                                    @foreach ($navbar_product_categories as $navbar_category)
                                        @if ($navbar_category->category_id == null)
                                            <li>
                                                <a href="{{ App::getLocale() == 'tr' ? route('tr.getCategoryProducts', ['slug' => $navbar_category->slug_tr]) : route('en.getCategoryProducts', ['slug' => $navbar_category->slug_en]) }}"
                                                    class="mega-link">
                                                    {{ App::getLocale() == 'tr' ? $navbar_category->name_tr : $navbar_category->name_en }}
                                                    <i class="fas fa-chevron-right" style="font-size: 10px;"></i>
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>

                            <div class="mega-col">
                                <span class="mega-header">
                                    <i class="fa-solid fa-copyright me-2"></i> Marka Grupları
                                </span>
                                <ul>
                                    @if (isset($navbar_brands) && count($navbar_brands) > 0)
                                        @foreach ($navbar_brands as $brand)
                                            <li>
                                                <a href="{{ App::getLocale() == 'tr' ? route('tr.getBrandProducts', ['slug' => $brand->slug]) : route('en.getBrandProducts', ['slug' => $brand->slug]) }}"
                                                    class="mega-link">
                                                    {{ $brand->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    @else
                                        <li style="color: #666; padding: 5px 0;">Kayıtlı marka bulunamadı.</li>
                                    @endif
                                </ul>
                            </div>

                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="{{ App::getLocale() == 'tr' ? route('tr.getCatalog') : route('en.getCatalog') }}"
                        class="nav-link">
                        {{ __('messages.catalog') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ App::getLocale() == 'tr' ? route('tr.getMedia') : route('en.getMedia') }}"
                        class="nav-link">
                        {{ __('messages.media') }} <i class="fa-solid fa-caret-down" style="font-size: 10px;"></i>
                    </a>
                    <div class="dropdown-menu-standard">
                        <a href="{{ App::getLocale() == 'tr' ? route('tr.getPhotos') : route('en.getPhotos') }}"
                            class="dropdown-standard-link">{{ __('messages.foto_gallery') }}</a>
                        <a href="{{ App::getLocale() == 'tr' ? route('tr.getVideos') : route('en.getVideos') }}"
                            class="dropdown-standard-link">{{ __('messages.video_gallery') }}</a>
                    </div>
                </li>

                <li class="nav-item"><a href="{{ App::getLocale() == 'tr' ? route('tr.blogs') : route('en.blogs') }}"
                        class="nav-link">{{ __('messages.blogs') }}</a></li>
                <li class="nav-item"><a
                        href="{{ App::getLocale() == 'tr' ? route('tr.getCareer') : route('en.getCareer') }}"
                        class="nav-link">{{ __('messages.career') }}</a></li>
                <li class="nav-item"><a
                        href="{{ App::getLocale() == 'tr' ? route('tr.getContact') : route('en.getContact') }}"
                        class="nav-link">{{ __('messages.contact') }}</a></li>
            </ul>
        </div>
    </div>
</header>

<script>
    document.getElementById('nav-toggle').addEventListener('click', function() {
        var menu = document.querySelector('.header-bottom');
        if (menu.style.display === 'block') {
            menu.style.display = 'none';
        } else {
            menu.style.display = 'block';
            menu.style.position = 'absolute';
            menu.style.top = '100%';
            menu.style.left = '0';
            menu.style.width = '100%';
            menu.style.zIndex = '99999';
            menu.style.borderTop = '1px solid #ddd';
        }
    });
</script>
