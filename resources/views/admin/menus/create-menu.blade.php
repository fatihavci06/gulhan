@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
        <h6 class="mb-0 text-uppercase">Menü Ekle</h6>
    </div>
    <hr/>
    <div class="card">
        <div class="card-body p-4">
            <form action="{{ route('admin.menus.index') }}" class="row g-3" method="POST">
                @csrf

                {{-- name --}}
                <div class="col-md-6">
                    <label for="name" class="form-label">Adı</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" id="name" required>
                    @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                {{-- menu_id --}}
                <div class="col-md-6">
                    <label for="menu_id" class="form-label">Adı</label>
                    <select name="menu_id" id="menu_id" class="form-select">
                        <option value="">Üst menü seçiniz</option>
                        @foreach($menus as $menu)
                            <option 
                                value="{{ $menu->id }}" 
                                {{ old('menu_id') == $menu->id ? 'selected' : '' }}
                            >{{ $menu->name }}</option>
                        @endforeach
                    </select>
                    @error('menu_id') <div class="text-danger">{{ $message }}</div> @enderror
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