@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
        <h6 class="mb-0 text-uppercase">Hakkımızda Düzenle</h6>
    </div>
    <hr/>
    <div class="card">
        <div class="card-body p-4">
            <form class="row g-3" method="POST">
                @csrf
                @method('PATCH')

                {{-- description --}}
                <div class="col-md-12 mb-3">
                    <label for="description" class="form-label">Açıklama</label>
                    <textarea name="description" id="description" class="form-control">{{ old('description', $about->description) }}</textarea>
                    @error('description') <div class="text-danger">{{ $message }}</div> @enderror
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