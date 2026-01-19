@extends('layouts.app')

@section('title')
    @php
        if (isset($category)) {
            $title = App::getLocale() == 'tr' ? $category->name_tr : $category->name_en;
        } elseif (isset($brandProducts)) {
            $title = $brandProducts->name;
        } elseif (isset($products)) {
            $title = __('messages.products');
        }
    @endphp
    {{ $title ?? 'Ürünler' }}
@endsection

@section('style')
    <style>
        /* Ürün Kartı Tasarımı */
        .product-card {
            border: 1px solid #e0e0e0;
            transition: all 0.3s ease;
            height: 100%;
            background: #fff;
        }

        .product-card:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            border-color: #1E56A6;
            transform: translateY(-5px);
        }

        .product-img-wrap {
            height: 240px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background-color: #f9f9f9;
            position: relative;
        }

        .product-img-wrap img {
            max-height: 100%;
            max-width: 100%;
            object-fit: contain;
        }

        .product-body {
            padding: 20px;
        }

        .product-cat {
            font-size: 11px;
            color: #999;
            text-transform: uppercase;
            font-weight: 600;
            margin-bottom: 5px;
            display: block;
        }

        .product-title {
            font-size: 16px;
            font-weight: 700;
            color: #333;
            margin-bottom: 15px;
            line-height: 1.4;
            height: 44px;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }

        .product-codes {
            font-size: 13px;
            color: #555;
            background: #f4f4f4;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
        }

        .code-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 4px;
        }

        .btn-add-list {
            width: 100%;
            background-color: #fff;
            color: #1E56A6;
            border: 1px solid #1E56A6;
            padding: 10px;
            font-weight: 600;
            font-size: 14px;
            transition: 0.3s;
        }

        .btn-add-list:hover {
            background-color: #1E56A6;
            color: #fff;
        }
    </style>
@endsection

@section('content')
    @include('includes.breadcrumb', ['title' => $title])

    <div class="container py-5">
        <div class="row g-4">

            {{-- SAĞ TARAF: ÜRÜN LİSTESİ --}}
            <div class="col-md-9 order-md-2">

                {{-- KATEGORİ DETAYI (Varsa Alt Kategoriler) --}}
                @if (isset($category) && empty($category->category_id) && $category->categories->isNotEmpty())
                    <div class="row g-3 mb-5">
                        <div class="col-12">
                            <h4 class="fw-bold text-primary border-bottom pb-2">Alt Kategoriler</h4>
                        </div>
                        @foreach ($category->categories as $c)
                            <div class="col-6 col-md-4">
                                <a href="{{ App::getLocale() == 'tr' ? route('tr.getCategoryProducts', ['slug' => $c->slug_tr]) : route('en.getCategoryProducts', ['slug' => $c->slug_en]) }}"
                                    class="text-decoration-none">
                                    <div class="card border-0 shadow-sm h-100 text-center p-3 hover-effect">
                                        <img style="object-fit: contain; height: 80px;" src="{{ $c->image }}"
                                            alt="{{ $c->name }}" class="mx-auto mb-2">
                                        <h6 class="text-dark fw-bold mb-0" style="font-size: 13px;">
                                            {{ App::getLocale() == 'tr' ? $c->name_tr : $c->name_en }}</h6>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif

                {{-- ÜRÜNLER --}}
                <div class="row g-4">
                    @php
                        $itemsToLoop = collect();
                        if (isset($products) && $products instanceof \Illuminate\Pagination\LengthAwarePaginator) {
                            $itemsToLoop = $products;
                        } elseif (isset($category)) {
                            $itemsToLoop = $category->products;
                        } elseif (isset($brandProducts)) {
                            $itemsToLoop = $brandProducts->products;
                        } elseif (isset($products)) {
                            $itemsToLoop = $products;
                        }
                    @endphp

                    @forelse($itemsToLoop as $product)
                        <div class="col-md-6 col-lg-4">
                            <div class="card product-card h-100 rounded-3 overflow-hidden">

                                {{-- Link --}}
                                <a href="{{ App::getLocale() == 'tr' ? route('tr.getProductDetail', ['id' => $product->id, 'slug' => $product->slug_tr]) : route('en.getProductDetail', ['id' => $product->id, 'slug' => $product->slug_en]) }}"
                                    class="text-decoration-none">
                                    <div class="product-img-wrap">
                                        <img src="{{ $product->image }}"
                                            alt="{{ App::getLocale() == 'tr' ? $product->name_tr : $product->name_en }}"
                                            loading="lazy">
                                    </div>
                                </a>

                                <div class="product-body d-flex flex-column h-100">
                                    {{-- Kategoriler --}}
                                    <span class="product-cat">
                                        @if ($product->categories)
                                            {{ $product->categories->pluck(App::getLocale() == 'tr' ? 'name_tr' : 'name_en')->take(1)->implode(', ') }}
                                        @endif
                                    </span>

                                    {{-- Başlık --}}
                                    <a href="{{ App::getLocale() == 'tr' ? route('tr.getProductDetail', ['id' => $product->id, 'slug' => $product->slug_tr]) : route('en.getProductDetail', ['id' => $product->id, 'slug' => $product->slug_en]) }}"
                                        class="text-decoration-none">
                                        <h3 class="product-title">
                                            {{ App::getLocale() == 'tr' ? $product->name_tr : $product->name_en }}</h3>
                                    </a>

                                    <div class="mt-auto">
                                        {{-- Kodlar --}}
                                        <div class="product-codes">
                                            <div class="code-item">
                                                <span class="fw-bold">{{ __('messages.gyp_code') }}:</span>
                                                <span>{{ $product->gyp_code }}</span>
                                            </div>
                                            <div class="code-item">
                                                <span class="fw-bold">{{ __('messages.original_no') }}:</span>
                                                <span>{{ $product->original_no }}</span>
                                            </div>
                                        </div>

                                        {{-- LİSTEYE EKLEME BUTONU --}}
                                        <button class="btn btn-add-list rounded-pill"
                                            onclick="addToCart({{ $product->id }})">
                                            <i class="fa-solid fa-list-check me-1"></i> {{ __('messages.add_to_list') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <div class="alert alert-warning text-center py-5">
                                <i class="fa-solid fa-box-open fs-1 mb-3"></i><br>
                                {{ __('messages.no_products_found') ?? 'Bu kategoride ürün bulunamadı.' }}
                            </div>
                        </div>
                    @endforelse
                </div>

                {{-- Pagination --}}
                @if ($itemsToLoop instanceof \Illuminate\Pagination\LengthAwarePaginator && $itemsToLoop->total() > 0)
                    <div
                        class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-5 p-3 border-top">
                        <div class="text-muted mb-3 mb-md-0" style="font-size: 14px;">
                            {{-- TEK SATIR HALİNE GETİRİLDİ --}}

                        </div>
                        <div>
                            {{ $itemsToLoop->appends(request()->query())->links('vendor.pagination.bootstrap-5') }}
                        </div>
                    </div>
                @endif
            </div>

            {{-- SOL TARAF: FİLTRELER --}}
            <div class="col-md-3 order-md-1">
                {{-- Kategoriler --}}
                <div class="mb-4">
                    <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">{{ __('messages.categories') }}</h5>
                    <div class="list-group list-group-flush border rounded overflow-hidden">
                        @foreach ($navbar_product_categories as $navbar_category)
                            @if (empty($navbar_category->category_id))
                                <a href="{{ App::getLocale() == 'tr' ? route('tr.getCategoryProducts', ['slug' => $navbar_category->slug_tr]) : route('en.getCategoryProducts', ['slug' => $navbar_category->slug_en]) }}"
                                    class="list-group-item list-group-item-action d-flex justify-content-between align-items-center {{ isset($category) && ($navbar_category->id == $category->id || $navbar_category->id == $category->category_id) ? 'active bg-primary text-white' : '' }}">
                                    {{ App::getLocale() == 'tr' ? $navbar_category->name_tr : $navbar_category->name_en }}
                                    <i class="fa-solid fa-chevron-right" style="font-size: 10px;"></i>
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>

                {{-- Markalar --}}
                <div class="mb-4">
                    <h5 class="fw-bold text-primary border-bottom pb-2 mb-3">{{ __('messages.brands') }}</h5>
                    <div class="list-group list-group-flush border rounded overflow-hidden">
                        @foreach ($brands as $brand)
                            <a href="{{ App::getLocale() == 'tr' ? route('tr.getBrandProducts', ['slug' => $brand->slug]) : route('en.getBrandProducts', ['slug' => $brand->slug]) }}"
                                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center {{ isset($brandProducts) && $brandProducts->id == $brand->id ? 'active bg-primary text-white' : '' }}">
                                {{ $brand->name }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('script')
    {{-- Toastr ve AJAX İşlemleri --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        // Listeye Ekleme Fonksiyonu
        function addToCart(productId) {
            $.ajax({
                url: "{{ route('cart.add') }}", // Global Rota (Dil bağımsız)
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: productId,
                    quantity: 1 // Liste görünümünde varsayılan 1 adet
                },
                success: function(response) {
                    if (response.status === 'success') {
                        // Bildirim Göster
                        toastr.success(response.message, 'Başarılı');

                        // Navbar'daki Sepet Sayısını Güncelle
                        var cartCountBadge = $('#cart-mini .badge');
                        if (cartCountBadge.length > 0) {
                            cartCountBadge.text(response.count);

                            // Animasyon
                            cartCountBadge.addClass('bg-success').removeClass('bg-danger');
                            setTimeout(function() {
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

        $(document).ready(function() {
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "positionClass": "toast-bottom-right",
                "timeOut": "2000"
            };
        });
    </script>
@endsection
