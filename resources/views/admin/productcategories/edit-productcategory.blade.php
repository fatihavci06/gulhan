@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
        <h6 class="mb-0 text-uppercase">Ürün Kategori Düzenle</h6>
    </div>
    <hr/>
    <div class="card">
        <div class="card-body p-4">
            <form action="{{ route('admin.productcategories.update', $productcategory->id) }}" class="row g-3" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                {{-- image --}}
                <div class="col-md-12">
                    <label for="image" class="form-label">Resim</label>
                    <div id="previewImage" class="my-2"></div>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
                    @error('image') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- name_tr --}}
                <div class="col-md-6">
                    <label for="name_tr" class="form-label">Adı (tr)</label>
                    <input type="text" name="name_tr" value="{{ old('name_tr', $productcategory->name_tr) }}" class="form-control @error('name_tr') is-invalid @enderror" id="name_tr" required>
                    @error('name_tr') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- name_en --}}
                <div class="col-md-6">
                    <label for="name_en" class="form-label">Adı (en)</label>
                    <input type="text" name="name_en" value="{{ old('name_en', $productcategory->name_en) }}" class="form-control @error('name_en') is-invalid @enderror" id="name_en" required>
                    @error('name_en') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- category_id --}}
                <div class="col-md-12">
                    <label for="category_id" class="form-label">Üst Kategori</label>
                    <select name="category_id" id="category_id" class="single-select-field form-select">
                        <option value="">Üst Kategori Seçiniz</option>
                        @foreach ($productcategories as $pcategory)
                            <option value="{{ $pcategory->id }}" {{ old('category_id', $pcategory->id) == $productcategory->category_id ? 'selected' : '' }}>{{ $pcategory->name_tr }} - {{ $pcategory->name_en }}</option>
                        @endforeach
                    </select>
                    @error('category_id') <div class="text-danger">{{ $message }}</div> @enderror
                </div>


                <div class="col-md-12">
                    <div class="d-md-flex d-grid align-items-center justify-content-end gap-3">
                        <button type="submit" class="btn btn-primary px-4">Gönder</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
