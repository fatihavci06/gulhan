@extends('layouts.admin')

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <style>
        .select2-container--bootstrap-5 .select2-selection--multiple .select2-search__field {
            width: 100% !important;
        }
        .product-preview-card {
            transition: all 0.3s;
            border: 1px solid #eee;
        }
        .product-preview-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
    </style>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card border-top border-0 border-4 border-primary">
            <div class="card-body p-5">
                <div class="card-title d-flex align-items-center">
                    <div><i class="bx bx-star me-1 font-22 text-primary"></i></div>
                    <h5 class="mb-0 text-primary">En Çok Satan Ürünleri Yönet</h5>
                </div>
                <hr>

                {{-- Uyarı Mesajları --}}
                @if(session('success'))
                    <div class="alert alert-success border-0 bg-success alert-dismissible fade show py-2">
                        <div class="d-flex align-items-center">
                            <div class="font-35 text-white"><i class='bx bxs-check-circle'></i></div>
                            <div class="ms-3">
                                <h6 class="mb-0 text-white">Başarılı</h6>
                                <div class="text-white">{{ session('success') }}</div>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
                        <div class="d-flex align-items-center">
                            <div class="font-35 text-white"><i class='bx bxs-message-square-x'></i></div>
                            <div class="ms-3">
                                <h6 class="mb-0 text-white">Hata</h6>
                                <ul class="mb-0 text-white">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form action="{{ route('admin.bestsellers.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label class="form-label fw-bold">Ürünleri Seçin (Maksimum 8 Adet)</label>
                        <p class="text-muted small">Listede görünmesini istediğiniz ürünleri arayarak seçin. Sıralama seçim sırasına göre yapılacaktır.</p>

                        <select class="form-select" id="multiple-select-field" name="products[]" data-placeholder="Ürün Ara ve Seç..." multiple>
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}" {{ in_array($product->id, $selectedIds) ? 'selected' : '' }}>
                                    {{ $product->gyp_code }} - {{ $product->name_tr }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary px-5"><i class="bx bx-save me-1"></i> Listeyi Güncelle</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

{{-- Mevcut Listeyi Önizleme (Opsiyonel) --}}
@if(count($selectedIds) > 0)
<div class="row mt-4">
    <div class="col-12">
        <h6 class="mb-3 text-uppercase text-secondary">Şu An Yayında Olan Liste</h6>
    </div>
    @foreach($products as $product)
        @if(in_array($product->id, $selectedIds))
            <div class="col-xl-3 col-md-4 col-sm-6 mb-3">
                <div class="card product-preview-card h-100">
                    <div class="card-body text-center">
                        <h6 class="card-title text-primary">{{ $product->name_tr }}</h6>
                        <p class="card-text small text-muted">{{ $product->gyp_code }}</p>
                        <span class="badge bg-success">Yayında</span>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
</div>
@endif

@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#multiple-select-field').select2({
                theme: "bootstrap-5",
                width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
                placeholder: $( this ).data( 'placeholder' ),
                closeOnSelect: false,
                maximumSelectionLength: 8, // Maksimum 8 seçim limiti
                language: {
                    maximumSelected: function (e) {
                        return "En fazla " + e.maximum + " ürün seçebilirsiniz.";
                    },
                    noResults: function () {
                        return "Sonuç bulunamadı";
                    }
                }
            });
        });
    </script>
@endsection
