@extends('layouts.app')

@section('title', __('messages.human_resources_form'))

@section('content')

@include('includes.breadcrumb', ['title' => __('messages.career')])

<section>
    <div class="container">
        <div class="card overflow-hidden rounded-5 shadow-lg">
            <div class="row g-0">
              <div class="col-lg-6 bg-primary">
                <img src="{{ asset('images/gulhan-kariyer.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-lg-6">
                <div class="card-body py-5">
                  <h1 class="h2 fw-bold card-title">{{ __('messages.career_title') }}</h1>
                  {!! __('messages.career_title_text') !!}
                </div>
              </div>
            </div>
        </div>
    </div>
</section>

<main class="container my-5">
    <div class="card shadow-lg">
        <form class="card-body" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- personal info --}}
            <h2 class="h4 fw-bold mb-4">{{ __('messages.personal_info') }}</h2>

            <div class="row g-3">
                <div class="col-md-6">
                    <div class="form-floating">
                        <select class="form-select" name="gender" id="gender" aria-label="Floating label select example">
                          <option value="" selected></option>
                          <option value="man" {{ old('gender') == 'man' ? 'selected' : '' }}>{{ __('messages.man') }}</option>
                          <option value="woman" {{ old('gender') == 'woman' ? 'selected' : '' }}>{{ __('messages.woman') }}</option>
                        </select>
                        <label for="gender">{{ __('messages.gender') }}</label>
                    </div>
                    @error('gender') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
                        <label for="name">{{ __('messages.name') }}</label>
                    </div>
                    @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="surname" class="form-control" id="surname" value="{{ old('surname') }}">
                        <label for="surname">{{ __('messages.surname') }}</label>
                    </div>
                    @error('surname') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <select class="form-select" name="nationality" id="nationality" aria-label="Floating label select example">
                            @foreach ($countries as $key => $country)
                                <option value="{{ $country }}" {{ old('nationality', 'Türkiye') == $country ? 'selected' : '' }}>{{ $country }}</option>
                            @endforeach
                        </select>
                        <label for="nationality">{{ __('messages.nationality') }}</label>
                    </div>
                    @error('nationality') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
            </div>

            {{-- contact info --}}
            <h2 class="h4 fw-bold my-4">{{ __('messages.contact_info') }}</h2>

            <div class="row g-3">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="address" class="form-control" id="address" value="{{ old('address') }}">
                        <label for="address">{{ __('messages.address') }}</label>
                    </div>
                    @error('address') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-3">
                    <div class="form-floating">
                        <input type="district" name="district" class="form-control" id="district" value="{{ old('district') }}">
                        <label for="district">{{ __('messages.district') }}</label>
                    </div>
                    @error('district') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-3">
                    <div class="form-floating">
                        <select class="form-select" name="city" id="city" aria-label="Floating label select example">
                          @foreach ($cities as $city)
                            <option value="{{ $city }}" {{ old('city', 'Ankara') == $city ? 'selected' : '' }} >{{ $city }}</option>
                          @endforeach
                        </select>
                        <label for="city">{{ __('messages.city') }}</label>
                    </div>
                    @error('city') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="phone" class="form-control" id="phone" value="{{ old('phone') }}">
                        <label for="phone">{{ __('messages.phone') }}</label>
                    </div>
                    @error('phone') <div class="text-danger">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
                        <label for="email">{{ __('messages.email') }}</label>
                    </div>
                    @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-3">
                    <div class="d-flex flex-wrap align-items-center gap-2">
                        <label for="cv" class="btn btn-primary"><i class="fas fa-file"></i> CV Ekle</label>
                        <input type="file" name="cv" id="cv" class="form-control d-none">
                        <div id="fileNameDisplay">{{ __('messages.select_file') }}</div>
                    </div>
                    @error('cv') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
            </div>

            <hr>

            <p>{{ __('messages.contact_info_text') }}</p>

            <button type="submit" class="btn btn-primary mt-2">{{ __('messages.submit') }}</button>
        </form>
    </div>
</main>

@endsection

@section('script')
<script>
    $().ready(function(){
        // Dosya input elementini seç
        var fileInput = $('#cv');

        // Dosya inputunda değişiklik olduğunda bu fonksiyon çalışır
        fileInput.change(function(){
            // Eğer dosya seçildiyse
            if (this.files && this.files[0]) {
                // Seçilen dosyanın adını al
                var fileName = this.files[0].name;

                // Alınan dosya adını göstermek için bir div içine yazdır
                $('#fileNameDisplay').text(fileName);
            }else{
                $('#fileNameDisplay').text('Dosya seçiniz');
            }
        });
    })
</script>
@endsection
