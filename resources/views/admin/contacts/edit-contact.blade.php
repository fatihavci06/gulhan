@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
        <h6 class="mb-0 text-uppercase">İletişim Düzenle</h6>
    </div>
    <hr/>
    <div class="card">
        <div class="card-body p-4">
            <form action="{{ route('admin.contacts.update') }}" class="row g-3" method="POST">
                @csrf
                @method('PATCH')

                {{-- shops --}}
                <div class="col-md-12 mb-3">
                    <ul class="nav nav-tabs nav-primary" role="tablist">
                        @foreach (json_decode($contact->shops) as  $key =>$shop)
                            <li class="nav-item" role="presentation">
                                <a class="nav-link {{ $key == 0 ? 'active' : '' }}" data-bs-toggle="tab" href="#{{ $key }}" role="tab" aria-selected="{{ $key == 0 ? 'true' : 'false' }}">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon">
                                            <i class='bx bx-home font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">{{ $shop->name_tr }}</div>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>

                    <div class="tab-content py-3">
                        @foreach (json_decode($contact->shops) as $key => $shop)
                            <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}" id="{{ $key }}" role="tabpanel">
                                <div class="row">
                                    {{-- name_tr --}}
                                    <div class="col-md-6 mb-3">
                                        <label for="name_tr" class="form-label">Adı (Tr)</label>
                                        <input value="{{ old('name_tr.'.$key, $shop->name_tr) }}" name="name_tr[]" id="name_tr" class="form-control @error('name_tr') is-invalid @enderror" />
                                        @error('name_tr.'.$key) <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>

                                    {{-- name_en --}}
                                    <div class="col-md-6 mb-3">
                                        <label for="name_en" class="form-label">Adı (En)</label>
                                        <input value="{{ old('name_en.'.$key, $shop->name_en) }}" name="name_en[]" id="name_en" class="form-control @error('name_en') is-invalid @enderror" />
                                        @error('name_en.'.$key) <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>

                                    {{-- address --}}
                                    <div class="col-md-6 mb-3">
                                        <label for="address" class="form-label">Adres</label>
                                        <input value="{{ old('address.'.$key, $shop->address) }}" name="address[]" id="address" class="form-control @error('address') is-invalid @enderror" />
                                        @error('address.'.$key) <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>

                                    {{-- phone --}}
                                    <div class="col-md-6 mb-3">
                                        <label for="phone" class="form-label">Telefon</label>
                                        <input value="{{ old('phone.'.$key, $shop->phone) }}" name="phone[]" id="phone" class="form-control @error('phone') is-invalid @enderror" />
                                        @error('phone.'.$key) <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>

                                    {{-- fax --}}
                                    <div class="col-md-6 mb-3">
                                        <label for="fax" class="form-label">Faks</label>
                                        <input value="{{ old('fax.'.$key, $shop->fax) }}" name="fax[]" id="fax" class="form-control @error('fax') is-invalid @enderror" />
                                        @error('fax.'.$key) <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>

                                    {{-- email_tr --}}
                                    <div class="col-md-6 mb-3">
                                        <label for="email_tr" class="form-label">E-posta (Tr)</label>
                                        <input type="email" value="{{ old('email_tr.'.$key, $shop->email_tr) }}" name="email_tr[]" id="email_tr" class="form-control @error('email_tr') is-invalid @enderror" />
                                        @error('email_tr.'.$key) <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>

                                    {{-- email_en --}}
                                    <div class="col-md-6 mb-3">
                                        <label for="email_en" class="form-label">E-posta (En)</label>
                                        <input type="email" value="{{ old('email_en.'.$key, $shop->email_en) }}" name="email_en[]" id="email_en" class="form-control @error('email_en') is-invalid @enderror" />
                                        @error('email_en.'.$key) <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>

                                    {{-- map --}}
                                    <div class="col-md-6 mb-3">
                                        <label for="map" class="form-label">Harita</label>
                                        <input value="{{ old('map.'.$key, $shop->map) }}" name="map[]" id="map" class="form-control @error('map') is-invalid @enderror" />
                                        @error('map.'.$key) <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
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
