@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
        <h6 class="mb-0 text-uppercase">Ürün Ekle</h6>
    </div>
    <hr/>
    <div class="card">
        <div class="card-body p-4">
            <form action="{{ route('admin.products.index') }}" class="row g-3" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- image --}}
                <div class="col-md-12">
                    <label for="image" class="form-label">Resim</label>
                    <div id="previewImage" class="my-2"></div>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image" >
                    @error('image') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- name_tr --}}
                <div class="col-md-6">
                    <label for="name_tr" class="form-label">Adı (tr)</label>
                    <input type="text" name="name_tr" value="{{ old('name_tr') }}" class="form-control @error('name_tr') is-invalid @enderror" id="name_tr" >
                    @error('name_tr') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- name_en --}}
                <div class="col-md-6">
                    <label for="name_en" class="form-label">Adı (en)</label>
                    <input type="text" name="name_en" value="{{ old('name_en') }}" class="form-control @error('name_en') is-invalid @enderror" id="name_en" >
                    @error('name_en') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- original_no --}}
                <div class="col-md-6">
                    <label for="original_no" class="form-label">Orjinal Kodu</label>
                    <input type="text" name="original_no" value="{{ old('original_no') }}" class="form-control @error('original_no') is-invalid @enderror" id="original_no">
                    @error('original_no') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- gyp_code --}}
                <div class="col-md-6">
                    <label for="gyp_code" class="form-label">Gülhan Kodu</label>
                    <input type="text" name="gyp_code" value="{{ old('gyp_code') }}" class="form-control @error('gyp_code') is-invalid @enderror" id="gyp_code" >
                    @error('gyp_code') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- size --}}
                <div class="col-md-6">
                    <label for="size" class="form-label">Ölçü</label>
                    <input type="text" name="size" value="{{ old('size') }}" class="form-control @error('size') is-invalid @enderror" id="size" >
                    @error('size') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- categories --}}
                <div class="col-md-6">
                    <label for="categories" class="form-label">Kategoriler</label>
                    <select name="categories[]" id="categories" class="multiple-select-field form-select" multiple>
                        <option value="" disabled >Kategori Seçiniz</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ in_array($category->id, old('categories', [])) ? 'selected' : '' }}>{{ $category->name_tr }} - {{ $category->name_en }}</option>
                        @endforeach
                    </select>
                    @error('categories') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- brands --}}
                <div class="col-md-12">
                    <label for="brands" class="form-label">Marka</label>
                    <select name="brands[]" id="brands" class="multiple-select-field form-select" multiple>
                        <option value="" disabled >Marka Seçiniz</option>
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}" {{ in_array($brand->id, old('brands', [])) ? 'selected' : '' }}>{{ $brand->name }}</option>
                        @endforeach
                    </select>
                    @error('brands') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- description_tr --}}
                <div class="col-md-12">
                    <label for="description_tr" class="form-label">Açıklama (tr)</label>
                    <textarea name="description_tr" id="description_tr" rows="5" class="form-control @error('description_tr') is-invalid @enderror">{{ old('description_tr') }}</textarea>
                    @error('description_tr') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- description_en --}}
                <div class="col-md-12">
                    <label for="description_en" class="form-label">Açıklama (en)</label>
                    <textarea name="description_en" id="description_en" rows="5" class="form-control @error('description_en') is-invalid @enderror">{{ old('description_en') }}</textarea>
                    @error('description_en') <div class="text-danger">{{ $message }}</div> @enderror
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
