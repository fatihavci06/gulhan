@extends('layouts.app')

@section('title', App::getLocale() == 'tr' ? $product->name_tr : $product->name_en)

@section('style')
<style>
    /* Detay Sayfası Özel Stilleri */
    .product-detail-img-container {
        border: 1px solid #eee;
        border-radius: 8px;
        padding: 20px;
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 350px;
    }
    .product-detail-img-container img {
        max-width: 100%;
        max-height: 400px;
        object-fit: contain;
    }

    .pd-category-badge {
        font-size: 13px;
        background-color: #f0f0f0;
        color: #555;
        padding: 5px 10px;
        border-radius: 4px;
        text-decoration: none;
        display: inline-block;
        margin-bottom: 10px;
    }

    .pd-title {
        font-size: 28px;
        font-weight: 700;
        color: #333;
        margin-bottom: 20px;
    }

    .pd-info-box {
        background-color: #f9f9f9;
        border-radius: 8px;
        padding: 20px;
        border: 1px solid #eee;
    }

    .pd-row {
        display: flex;
        justify-content: space-between;
        padding: 12px 0;
        border-bottom: 1px solid #e0e0e0;
        font-size: 15px;
    }
    .pd-row:last-child {
        border-bottom: none;
    }
    .pd-label {
        font-weight: 600;
        color: #555;
    }
    .pd-value {
        font-weight: 700;
        color: #333;
    }

    .btn-add-list-lg {
        background-color: #1E56A6;
        color: #fff;
        font-weight: 600;
        padding: 15px 30px;
        border-radius: 50px;
        border: none;
        transition: 0.3s;
        width: 100%;
        font-size: 16px;
    }
    .btn-add-list-lg:hover {
        background-color: #154284;
    }

    /* Benzer Ürünler Kart Stili (Listing ile uyumlu) */
    .sim-card {
        border: 1px solid #eee;
        background: #fff;
        transition: 0.3s;
        border-radius: 8px;
        overflow: hidden;
        height: 100%;
    }
    .sim-card:hover {
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        border-color: #1E56A6;
        transform: translateY(-3px);
    }
    .sim-img-wrap {
        height: 160px;
        padding: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #fcfcfc;
    }
    .sim-img-wrap img {
        max-height: 100%;
        max-width: 100%;
        object-fit: contain;
    }
    .sim-body {
        padding: 15px;
    }
    .sim-title {
        font-size: 13px;
        font-weight: 700;
        color: #333;
        margin-bottom: 10px;
        height: 38px;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }
</style>
@endsection

@section('content')

@include('includes.breadcrumb', ['title' => App::getLocale() == 'tr' ? $product->name_tr : $product->name_en])

<main>
  <div class="container py-5">
    <div class="row g-5">

        {{-- SOL TARAF: Ürün Detay & Benzer Ürünler --}}
        <div class="col-md-9">

            {{-- 1. ÜRÜN DETAY ALANI --}}
            <div class="row g-4 mb-5">
                {{-- Görsel --}}
                <div class="col-md-6">
                    <div class="product-detail-img-container shadow-sm">
                        <img src="{{ $product->image }}" alt="{{ App::getLocale() == 'tr' ? $product->name_tr : $product->name_en }}" id="lightgallery-item">
                    </div>
                </div>

                {{-- Bilgiler --}}
                <div class="col-md-6">
                    {{-- Kategoriler --}}
                    @if($product->categories)
                        @foreach($product->categories as $cat)
                            <a href="{{ App::getLocale() == 'tr' ? route('tr.getCategoryProducts', $cat->slug_tr) : route('en.getCategoryProducts', $cat->slug_en) }}" class="pd-category-badge">
                                {{ App::getLocale() == 'tr' ? $cat->name_tr : $cat->name_en }}
                            </a>
                        @endforeach
                    @endif

                    {{-- Ürün İsmi --}}
                    <h1 class="pd-title">{{ App::getLocale() == 'tr' ? $product->name_tr : $product->name_en }}</h1>

                    {{-- Teknik Detaylar Kutusu --}}
                    <div class="pd-info-box mb-4">
                        <div class="pd-row">
                            <span class="pd-label">{{ __('messages.gyp_code') }}:</span>
                            <span class="pd-value text-primary">{{ $product->gyp_code }}</span>
                        </div>
                        <div class="pd-row">
                            <span class="pd-label">{{ __('messages.original_no') }}:</span>
                            <span class="pd-value">{{ $product->original_no }}</span>
                        </div>
                        <div class="pd-row">
                            <span class="pd-label">{{ __('messages.brand') }}:</span>
                            <span class="pd-value">
                                @if($product->brands)
                                    @foreach ($product->brands as $brand)
                                        {{ $brand->name }}
                                    @endforeach
                                @endif
                            </span>
                        </div>
                        @if($product->size)
                        <div class="pd-row">
                            <span class="pd-label">{{ __('messages.measurement') }}:</span>
                            <span class="pd-value">{{ $product->size }}</span>
                        </div>
                        @endif
                    </div>

                    {{-- Buton --}}
                    <button class="btn btn-add-list-lg shadow-sm" onclick="addToCart({{ $product->id }})">
                        <i class="fa-solid fa-list-check me-2"></i> {{ __('messages.add_to_list') ?? 'Listeye Ekle' }}
                    </button>
                </div>
            </div>

            {{-- 2. BENZER ÜRÜNLER ALANI --}}
           {{-- 2. BENZER ÜRÜNLER ALANI (DAHA GENİŞ VE UZUN) --}}
            @if(isset($similarProducts) && $similarProducts->count() > 0)
                <div class="mt-5 pt-5 border-top">
                    <h3 class="fw-bold mb-4 text-primary ps-3 border-start border-4 border-primary">
                        {{ __('messages.similar_products') }}
                    </h3>

                    {{--
                        DEĞİŞİKLİK:
                        1. 'row-cols-lg-2' yaparak satırda 2 ürün gösterdik (Kartlar genişledi).
                        2. Resim alanını 300px yaptık (Kartlar uzadı).
                    --}}
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-4">
                        @foreach ($similarProducts as $simProduct)
                            <div class="col">
                                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden position-relative">
                                    {{-- Link --}}
                                    <a href="{{ App::getLocale() == 'tr' ? route('tr.getProductDetail', ['id' => $simProduct->id, 'slug' => $simProduct->slug_tr]) : route('en.getProductDetail', ['id' => $simProduct->id, 'slug' => $simProduct->slug_en]) }}" class="text-decoration-none">
                                        {{-- Yükseklik 300px yapıldı --}}
                                        <div class="bg-light p-4 d-flex align-items-center justify-content-center" style="height: 300px;">
                                            <img src="{{ $simProduct->image }}"
                                                 alt="{{ App::getLocale() == 'tr' ? $simProduct->name_tr : $simProduct->name_en }}"
                                                 loading="lazy"
                                                 class="img-fluid"
                                                 style="max-height: 100%; max-width: 100%; object-fit: contain;">
                                        </div>
                                    </a>

                                    <div class="card-body d-flex flex-column p-4"> {{-- Padding arttırıldı (p-4) --}}
                                        {{-- Kategori --}}
                                        <small class="text-muted text-uppercase fw-bold mb-2" style="font-size: 12px;">
                                            @if($simProduct->categories->isNotEmpty())
                                                {{ App::getLocale() == 'tr' ? $simProduct->categories[0]->name_tr : $simProduct->categories[0]->name_en }}
                                            @endif
                                        </small>

                                        {{-- Başlık (Font büyütüldü) --}}
                                        <a href="{{ App::getLocale() == 'tr' ? route('tr.getProductDetail', ['id' => $simProduct->id, 'slug' => $simProduct->slug_tr]) : route('en.getProductDetail', ['id' => $simProduct->id, 'slug' => $simProduct->slug_en]) }}" class="text-decoration-none text-dark">
                                            <h4 class="card-title fw-bold mb-3" style="font-size: 18px; line-height: 1.4; height: 50px; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                                {{ App::getLocale() == 'tr' ? $simProduct->name_tr : $simProduct->name_en }}
                                            </h4>
                                        </a>

                                        {{-- Kodlar (Font büyütüldü) --}}
                                        <div class="mt-auto mb-4">
                                            <div class="d-flex justify-content-between border-bottom pb-2 mb-2" style="font-size: 14px;">
                                                <span class="text-muted">GYP:</span>
                                                <span class="fw-bold text-primary">{{ $simProduct->gyp_code }}</span>
                                            </div>
                                            <div class="d-flex justify-content-between" style="font-size: 14px;">
                                                <span class="text-muted">OEM:</span>
                                                <span class="fw-bold">{{ Str::limit($simProduct->original_no, 20) }}</span>
                                            </div>
                                        </div>

                                        {{-- Ekle Butonu (Daha büyük) --}}
                                        <button class="btn btn-outline-primary w-100 rounded-pill fw-bold py-2" onclick="addToCart({{ $simProduct->id }})">
                                            <i class="fa-solid fa-plus me-2"></i> {{__('messages.add_to_list') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

        </div>

        {{-- SAĞ TARAF: Sidebar (Markalar) --}}
        <div class="col-md-3">
            <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">{{ __('messages.brands') }}</h5>
            <div class="list-group list-group-flush border rounded overflow-hidden">
                @foreach ($brands as $brand)
                <a href="{{ App::getLocale() == 'tr' ? route('tr.getBrandProducts', ['slug' => $brand->slug]) : route('en.getBrandProducts', ['slug' => $brand->slug]) }}"
                    class="list-group-item list-group-item-action d-flex justify-content-between align-items-center {{ (isset($product) && $product->brands->contains('id', $brand->id)) ? 'active bg-primary text-white' : '' }}">
                    {{ $brand->name }}
                    <i class="fa-solid fa-chevron-right" style="font-size: 10px;"></i>
                </a>
                @endforeach
            </div>
        </div>

    </div>
  </div>
</main>

@endsection

@section('script')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    // GLOBAL LISTEYE EKLEME FONKSİYONU
    // Bu fonksiyon hem "Detay Sayfası"ndaki büyük butonda,
    // hem de "Benzer Ürünler"deki küçük butonlarda kullanılır.
    function addToCart(productId) {

        // Ürün adeti (Detay sayfasında input varsa onu al, yoksa (benzer ürünlerde) 1 al)
        // NOT: Sizin detay sayfanızda adet inputu olmadığı için varsayılan 1 gönderiyoruz.
        // Eğer ileride eklerseniz: var quantity = $('#productAmount').val() || 1;
        var quantity = 1;

        $.ajax({
            url: "{{ route('cart.add') }}", // Route ismini kontrol edin
            method: "POST",
            data: {
                _token: "{{ csrf_token() }}", // CSRF Token güvenliği
                id: productId,
                quantity: quantity
            },
            beforeSend: function() {
                // Opsiyonel: Butona basıldığında yükleniyor efekti verilebilir
                // toastr.info('Ekleniyor...');
            },
            success: function(response) {
                if(response.status === 'success') {
                    // 1. Başarılı bildirimi göster
                    toastr.success(response.message, 'Başarılı');

                    // 2. Header'daki Sepet İkonundaki Sayıyı Güncelle
                    // Navbar'daki sepet count elementinin ID'si veya class'ına göre:
                    var cartCountBadge = $('#cart-mini .badge');
                    if(cartCountBadge.length > 0) {
                        cartCountBadge.text(response.count);

                        // Küçük bir animasyon (Parlayıp sönme)
                        cartCountBadge.addClass('bg-success').removeClass('bg-danger');
                        setTimeout(function(){
                            cartCountBadge.addClass('bg-danger').removeClass('bg-success');
                        }, 500);
                    }

                } else {
                    // Hata mesajı
                    toastr.error(response.message, 'Hata');
                }
            },
            error: function(xhr) {
                // Sunucu hatası veya yetki hatası
                console.error(xhr.responseText);
                toastr.error('Bir hata oluştu, lütfen tekrar deneyin.', 'Hata');
            }
        });
    }

    $(document).ready(function() {
        // LightGallery veya diğer başlatıcılar buraya...

        // Toastr Ayarları (İsteğe bağlı)
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
            "timeOut": "3000"
        };
    });
</script>
@endsection
