@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
        <h6 class="mb-0 text-uppercase">Slider Ekle</h6>
    </div>
    <hr/>
    <div class="card">
        <div class="card-body p-4">
            <form action="{{ route('admin.sliders.index') }}" class="row g-3" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- image --}}
                <div class="col-md-12">
                    <label for="image" class="form-label">Resim</label>
                    <div id="previewImage" class="my-2"></div>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image" required>
                    @error('image') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- name_tr --}}
                <div class="col-md-6">
                    <label for="name_tr" class="form-label">Adı (tr)</label>
                    <input type="text" name="name_tr" value="{{ old('name_tr') }}" class="form-control @error('name_tr') is-invalid @enderror" id="name_tr" required>
                    @error('name_tr') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- name_en --}}
                <div class="col-md-6">
                    <label for="name_en" class="form-label">Adı (en)</label>
                    <input type="text" name="name_en" value="{{ old('name_en') }}" class="form-control @error('name_en') is-invalid @enderror" id="name_en" required>
                    @error('name_en') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- short_description_tr --}}
                <div class="col-md-6">
                    <label for="short_description_tr" class="form-label">Kısa Açıklama (tr)</label>
                    <input type="text" name="short_description_tr" value="{{ old('short_description_tr') }}" class="form-control @error('short_description_tr') is-invalid @enderror" id="short_description_tr" required>
                    @error('short_description_tr') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- short_description_en --}}
                <div class="col-md-6">
                    <label for="short_description_en" class="form-label">Kısa Açıklama (en)</label>
                    <input type="text" name="short_description_en" value="{{ old('short_description_en') }}" class="form-control @error('short_description_en') is-invalid @enderror" id="short_description_en" required>
                    @error('short_description_en') <div class="text-danger">{{ $message }}</div> @enderror
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
