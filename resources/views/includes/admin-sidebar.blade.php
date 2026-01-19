<ul class="metismenu" id="menu">
    <li>
        <a href="{{ route('admin.dashboard') }}">
            <div class="parent-icon">
                {{-- Dashboard için ev/ana sayfa ikonu --}}
                <i class='bx bx-home-circle'></i>
            </div>
            <div class="menu-title">Kontrol Paneli</div>
        </a>
    </li>

    <li>
        <a href="{{ route('admin.sliders.index') }}">
            <div class="parent-icon">
                {{-- Slider için carousel/kaydırma ikonu --}}
                <i class='bx bx-carousel'></i>
            </div>
            <div class="menu-title">Sliderlar</div>
        </a>
    </li>

    {{-- Menüler (Yorum satırı) --}}
    {{-- <li>
        <a href="{{ route('admin.menus.index') }}">
            <div class="parent-icon">
                <i class='bx bx-list-ul'></i>
            </div>
            <div class="menu-title">Menüler</div>
        </a>
    </li> --}}

    <li>
        <a href="{{ route('admin.footers.edit') }}">
            <div class="parent-icon">
                {{-- Footer (alt kısım) için alt panel ikonu --}}
                <i class='bx bx-dock-bottom'></i>
            </div>
            <div class="menu-title">Footer</div>
        </a>
    </li>

    <li>
        <a href="{{ route('admin.contacts.edit') }}">
            <div class="parent-icon">
                {{-- İletişim için telefon ikonu --}}
                <i class='bx bx-phone-call'></i>
            </div>
            <div class="menu-title">İletişim</div>
        </a>
    </li>

    {{-- Hakkımızda (Yorum satırı) --}}
    {{-- <li>
        <a href="{{ route('admin.about') }}">
            <div class="parent-icon">
                <i class='bx bx-info-circle'></i>
            </div>
            <div class="menu-title">Hakkımızda</div>
        </a>
    </li> --}}

    {{-- Misyon (Yorum satırı) --}}
    {{-- <li>
        <a href="{{ route('admin.mission') }}">
            <div class="parent-icon">
                <i class='bx bx-target-lock'></i>
            </div>
            <div class="menu-title">Misyon ve Vizyon</div>
        </a>
    </li> --}}

    <li>
        <a href="{{ route('admin.photos.index') }}">
            <div class="parent-icon">
                {{-- Fotoğraflar için albüm ikonu --}}
                <i class='bx bx-photo-album'></i>
            </div>
            <div class="menu-title">Foto Galeri</div>
        </a>
    </li>

    <li>
        <a href="{{ route('admin.videos.index') }}">
            <div class="parent-icon">
                {{-- Videolar için film/kamera ikonu --}}
                <i class='bx bx-video'></i>
            </div>
            <div class="menu-title">Video Galeri</div>
        </a>
    </li>

    {{-- Haberler --}}
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon">
                {{-- Haberler için gazete ikonu --}}
                <i class='bx bx-news'></i>
            </div>
            <div class="menu-title">Haberler</div>
        </a>
        <ul>
            <li>
                <a href="{{ route('admin.blogs.create') }}">
                    <i class='bx bx-radio-circle'></i>
                    Haber Ekle
                </a>
            </li>
            <li>
                <a href="{{ route('admin.blogs.index') }}">
                    <i class='bx bx-radio-circle'></i>
                    Haberler
                </a>
            </li>
            <li>
                <a href="{{ route('admin.blogcategories.index') }}">
                    <i class='bx bx-radio-circle'></i>
                    Kategoriler
                </a>
            </li>
        </ul>
    </li>

    {{-- Ürünler --}}
    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon">
                {{-- Ürünler için alışveriş sepeti ikonu --}}
                <i class='bx bx-cart'></i>
            </div>
            <div class="menu-title">Ürünler</div>
        </a>
        <ul>
            <li>
                <a href="{{ route('admin.products.create') }}">
                    <i class='bx bx-radio-circle'></i>
                    Ürün Ekle
                </a>
            </li>
            <li>
                <a href="{{ route('admin.products.index') }}">
                    <i class='bx bx-radio-circle'></i>
                    Ürünler
                </a>
            </li>
            <li>
                <a href="{{ route('admin.brands.index') }}">
                    <i class='bx bx-radio-circle'></i>
                    Markalar
                </a>
            </li>
            <li>
                <a href="{{ route('admin.productcategories.index') }}">
                    <i class='bx bx-radio-circle'></i>
                    Kategoriler
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="{{ route('admin.orders.index') }}">
            <div class="parent-icon">
                {{-- Liste / Fatura ikonu --}}
                <i class='bx bx-task'></i>
            </div>
            <div class="menu-title">Teklifler</div>
            {{-- Okunmamış teklif sayısı rozeti (Opsiyonel) --}}
            @php
                $newOrdersCount = \App\Models\Order::where('status', 'new')->count();
            @endphp
            @if ($newOrdersCount > 0)
                <span class="badge bg-danger rounded-pill ms-auto">{{ $newOrdersCount }}</span>
            @endif
        </a>
    </li>
    <li>
        <a href="{{ route('admin.bestsellers.index') }}">
            <div class="parent-icon"><i class='bx bx-star'></i></div>
            <div class="menu-title">En Çok Satanlar</div>
        </a>
    </li>
</ul>
