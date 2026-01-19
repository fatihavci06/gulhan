@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
        <h6 class="mb-0 text-uppercase">Haber Kategori Düzenle</h6>
    </div>
    <hr/>
    <div class="card">
        <div class="card-body p-4">
            <form action="{{ route('admin.blogcategories.update', $blogcategory->id) }}" class="row g-3" method="POST">
                @csrf
                @method('PATCH')

                {{-- name_tr --}}
                <div class="col-md-6">
                    <label for="name_tr" class="form-label">Adı (tr)</label>
                    <input type="text" name="name_tr" value="{{ old('name_tr', $blogcategory->name_tr) }}" class="form-control @error('name_tr') is-invalid @enderror" id="name_tr" required>
                    @error('name_tr') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- name_en --}}
                <div class="col-md-6">
                    <label for="name_en" class="form-label">Adı (en)</label>
                    <input type="text" name="name_en" value="{{ old('name_en', $blogcategory->name_en) }}" class="form-control @error('name_en') is-invalid @enderror" id="name_en" required>
                    @error('name_en') <div class="text-danger">{{ $message }}</div> @enderror
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
