@extends('layouts.app')

{{-- Başlık Çevirisi --}}
@section('title', __('messages.quote_list') ?? 'Teklif Listem')

@section('style')
<style>
    /* Tablo ve Liste Stilleri */
    .cart-img-frame {
        width: 70px;
        height: 70px;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 4px;
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .cart-img-frame img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }
    .qty-input {
        width: 60px;
        text-align: center;
        border: 1px solid #ced4da;
        border-radius: 6px;
        padding: 4px;
    }
    .btn-delete {
        color: #dc3545;
        border: 1px solid #dc3545;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s;
        background: #fff;
    }
    .btn-delete:hover {
        background: #dc3545;
        color: #fff;
    }
    /* Loading durumunda buton stili */
    .btn-loading-state {
        cursor: not-allowed;
        opacity: 0.8;
    }
</style>
@endsection

@section('content')

{{-- Breadcrumb --}}
@include('includes.breadcrumb', ['title' => __('messages.quote_list') ?? 'Teklif Listem'])

<div class="container py-5">

    {{-- 1. BAŞARI / HATA MESAJLARI ALANI --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm mb-4" role="alert">
            <i class="fa-solid fa-circle-check me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show shadow-sm mb-4" role="alert">
            <i class="fa-solid fa-circle-exclamation me-2"></i> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger mb-4">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {{-- Sepet Dolu mu Kontrolü --}}
    @if(session('cart') && count(session('cart')) > 0)
        <div class="row g-4">

            {{-- SOL KOLON: Ürün Listesi --}}
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm rounded-3">
                    <div class="card-header bg-white py-3">
                        <h5 class="mb-0 fw-bold text-primary">{{ __('messages.selected_products') ?? 'Seçilen Ürünler' }}</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th class="ps-4">{{ __('messages.product') ?? 'Ürün' }}</th>
                                        <th>{{ __('messages.gyp_code') ?? 'Kod' }}</th>
                                        <th class="text-center">{{ __('messages.quantity') ?? 'Adet' }}</th>
                                        <th class="text-end pe-4">{{ __('messages.action') ?? 'İşlem' }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(session('cart') as $id => $details)
                                        <tr data-id="{{ $id }}">
                                            <td class="ps-4">
                                                <div class="d-flex align-items-center">
                                                    <div class="cart-img-frame me-3">
                                                        <img src="{{ $details['image'] ?? asset('assets/images/no-image.png') }}" alt="img">
                                                    </div>
                                                    <div>
                                                        <a href="{{ App::getLocale() == 'tr'
                                                            ? route('tr.getProductDetail', ['id' => $id, 'slug' => $details['slug_tr'] ?? 'urun'])
                                                            : route('en.getProductDetail', ['id' => $id, 'slug' => $details['slug_en'] ?? 'product']) }}"
                                                            class="text-decoration-none text-dark fw-bold">
                                                            {{ App::getLocale() == 'tr' ? ($details['name_tr'] ?? '') : ($details['name_en'] ?? '') }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-muted">{{ $details['gyp_code'] ?? '-' }}</td>
                                            <td class="text-center">
                                                <input type="number" min="1" value="{{ $details['quantity'] }}" class="qty-input update-cart">
                                            </td>
                                            <td class="text-end pe-4">
                                                <button class="btn btn-sm btn-delete remove-from-cart ms-auto" title="{{ __('messages.delete') }}">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer bg-white p-3 d-flex justify-content-between">
                        <a href="{{ route('cart.clear') }}" class="btn btn-outline-danger btn-sm" onclick="return confirm('{{ __('messages.confirm_clear_list') }}')">
                            {{ __('messages.clear_list') ?? 'Listeyi Temizle' }}
                        </a>
                        <a href="{{ App::getLocale() == 'tr' ? route('tr.getProducts') : route('en.getProducts') }}" class="btn btn-outline-primary btn-sm">
                            {{ __('messages.add_more_products') ?? 'Ürün Ekle' }}
                        </a>
                    </div>
                </div>
            </div>

            {{-- SAĞ KOLON: Teklif Formu --}}
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm rounded-3 bg-primary text-white sticky-top" style="top: 20px; z-index: 1;">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-3"><i class="fa-regular fa-paper-plane me-2"></i>{{ __('messages.get_quote') ?? 'Teklif İste' }}</h4>
                        <p class="small opacity-75 mb-4">{{ __('messages.quote_form_desc') ?? 'Formu doldurun, size özel fiyat teklifimizi iletelim.' }}</p>

                        {{-- FORM'A ID EKLENDİ: id="quoteForm" --}}
                        <form action="{{ route('quote.submit') }}" method="POST" id="quoteForm">
                            @csrf

                            <div class="mb-3">
                                <label class="small fw-semibold">{{ __('messages.fullname') ?? 'Ad Soyad' }} *</label>
                                <input type="text" name="name" class="form-control form-control-sm @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback text-white-50 small">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="small fw-semibold">{{ __('messages.email') ?? 'E-Posta' }} *</label>
                                <input type="email" name="email" class="form-control form-control-sm @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback text-white-50 small">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="small fw-semibold">{{ __('messages.phone') ?? 'Telefon' }} *</label>
                                <input type="text" name="phone" class="form-control form-control-sm @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required>
                                @error('phone')
                                    <div class="invalid-feedback text-white-50 small">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label class="small fw-semibold">{{ __('messages.company') ?? 'Firma Adı' }}</label>
                                    <input type="text" name="company" class="form-control form-control-sm" value="{{ old('company') }}">
                                </div>
                                <div class="col-6 mb-3">
                                    <label class="small fw-semibold">{{ __('messages.title') ?? 'Ünvan' }}</label>
                                    <input type="text" name="title" class="form-control form-control-sm" value="{{ old('title') }}">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="small fw-semibold">{{ __('messages.country') ?? 'Ülke' }} *</label>
                                <input type="text" name="country" class="form-control form-control-sm @error('country') is-invalid @enderror" value="{{ old('country') }}" required>
                                @error('country')
                                    <div class="invalid-feedback text-white-50 small">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="small fw-semibold">{{ __('messages.message') ?? 'Mesajınız' }}</label>
                                <textarea name="message" class="form-control form-control-sm" rows="2">{{ old('message') }}</textarea>
                            </div>

                            {{-- GÜNCELLENEN BUTON YAPISI --}}
                            <button type="submit" id="submitBtn" class="btn btn-light w-100 fw-bold text-primary mt-2">
                                {{-- Varsayılan Metin --}}
                                <span class="btn-text">
                                    {{ __('messages.send_quote') ?? 'Teklifi Gönder' }}
                                </span>

                                {{-- Loading Kısmı (Başlangıçta gizli: d-none) --}}
                                <span class="btn-loading d-none">
                                    <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>
                                    {{ __('messages.sending') ?? 'Gönderiliyor...' }}
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    @else
        {{-- BOŞ SEPET GÖRÜNÜMÜ --}}
        <div class="text-center py-5">
            <div class="mb-3">
                <i class="fa-solid fa-basket-shopping fa-3x text-muted opacity-50"></i>
            </div>
            <h3>{{ __('messages.list_empty') ?? 'Listeniz Boş' }}</h3>
            <p class="text-muted">{{ __('messages.list_empty_desc') ?? 'Henüz teklif listesine ürün eklemediniz.' }}</p>
            <a href="{{ App::getLocale() == 'tr' ? route('tr.getProducts') : route('en.getProducts') }}" class="btn btn-primary px-4 rounded-pill">
                {{ __('messages.go_to_products') ?? 'Ürünleri İncele' }}
            </a>
        </div>
    @endif

</div>

@endsection

@section('script')
<script>
    // Javascript içinde kullanılacak çeviriler
    const messages = {
        min_qty: "{{ __('messages.min_qty_alert') ?? 'Adet en az 1 olmalıdır.' }}",
        updated: "{{ __('messages.updated_successfully') ?? 'Adet güncellendi' }}",
        confirm_delete: "{{ __('messages.confirm_delete') ?? 'Bu ürünü silmek istediğinize emin misiniz?' }}",
        deleted: "{{ __('messages.deleted_successfully') ?? 'Ürün silindi' }}"
    };

    // --- FORM GÖNDERME LOADING EFEKTİ ---
    $('#quoteForm').on('submit', function() {
        var btn = $('#submitBtn');

        // Butonu pasif yap (Çift tıklamayı önler)
        btn.prop('disabled', true);
        btn.addClass('btn-loading-state');

        // Normal yazıyı gizle
        btn.find('.btn-text').addClass('d-none');

        // Loading spinner'ı göster
        btn.find('.btn-loading').removeClass('d-none');

        // Form gönderimi devam eder...
    });

    // AJAX: Adet Güncelleme
    $(document).on('change', '.update-cart', function (e) {
        e.preventDefault();
        var ele = $(this);
        var quantity = ele.val();
        var tr = ele.closest("tr");

        if(quantity < 1) {
            alert(messages.min_qty);
            ele.val(1);
            return;
        }

        $.ajax({
            url: '{{ route('cart.update') }}',
            method: "PATCH",
            data: {
                _token: '{{ csrf_token() }}',
                id: tr.attr("data-id"),
                quantity: quantity
            },
            success: function (response) {
                if(typeof toastr !== 'undefined'){
                    toastr.success(messages.updated);
                }
            }
        });
    });

    // AJAX: Silme İşlemi
    $(document).on('click', '.remove-from-cart', function (e) {
        e.preventDefault();
        var ele = $(this);
        var tr = ele.closest("tr");

        if(confirm(messages.confirm_delete)) {
            $.ajax({
                url: '{{ route('cart.remove') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: tr.attr("data-id")
                },
                success: function (response) {
                    tr.fadeOut(300, function(){
                        $(this).remove();
                        // Sepet tamamen boşalırsa sayfayı yenile
                        if(response.count == 0) window.location.reload();
                    });

                    // Navbar badge güncelle
                    $('#cart-mini .badge').text(response.count);

                    if(typeof toastr !== 'undefined'){
                        toastr.warning(messages.deleted);
                    }
                }
            });
        }
    });
</script>
@endsection
