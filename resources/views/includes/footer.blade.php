<footer class="bg-dark py-4 pt-5 mt-5">
    <div class="container">
        <div class="row mb-3">

            <div class="col-lg-3 col-md-6 mb-4">
                <a href="{{ App::getLocale() == 'tr' ? route('tr.home') : route('en.home') }}">
                    <img width="66%" src="{{ asset('images/gulhan-logo-beyaz.webp') }}" alt="gulhan logo" title="gulhan logo" class="img-fluid mb-3">
                </a>
                <p style="font-size: 14px !important;" class="text-white fst-italic">{{ __('messages.footer_text') }}</p>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 text-white">
                <h2 class="h6 mb-4 text-white fw-bold text-decoration-none text-uppercase">{{ __('messages.menu') }}</h2>

                <div class="row">
                    <div class="col-md-6">
                        <div style="font-size: 14px;" class="mb-2 p-0"><a href="{{ App::getLocale() == 'tr' ? route('tr.home') : route('en.home') }}" class="text-white">{{ __('messages.home') }}</a></div>
                        <div style="font-size: 14px;" class="mb-2 p-0"><a href="{{ App::getLocale() == 'tr' ? route('tr.getInstitutional') : route('en.getInstitutional') }}" class="text-white">{{ __('messages.institutional') }}</a></div>
                        <div style="font-size: 14px;" class="mb-2 p-0"><a href="{{ App::getLocale() == 'tr' ? route('tr.getProducts') : route('en.getProducts') }}" class="text-white">{{ __('messages.products') }}</a></div>
                        <div style="font-size: 14px;" class="mb-2 p-0"><a href="{{ App::getLocale() == 'tr' ? route('tr.getCatalog') : route('en.getCatalog') }}" class="text-white">{{ __('messages.catalog') }}</a></div>
                        <div style="font-size: 14px;" class="mb-2 p-0"><a href="{{ App::getLocale() == 'tr' ? route('tr.getPhotos') : route('en.getPhotos') }}" class="text-white">{{ __('messages.foto_gallery') }}</a></div>
                    </div>
                    <div class="col-md-6">
                        <div style="font-size: 14px;" class="mb-2 p-0"><a href="{{ App::getLocale() == 'tr' ? route('tr.getVideos') : route('en.getVideos') }}" class="text-white">{{ __('messages.video_gallery') }}</a></div>
                        <div style="font-size: 14px;" class="mb-2 p-0"><a href="{{ App::getLocale() == 'tr' ? route('tr.blogs') : route('en.blogs') }}" class="text-white">{{ __('messages.blogs') }}</a></div>
                        <div style="font-size: 14px;" class="mb-2 p-0"><a href="{{ App::getLocale() == 'tr' ? route('tr.getCareer') : route('en.getCareer') }}" class="text-white">{{ __('messages.career') }}</a></div>
                        <div style="font-size: 14px;" class="mb-2 p-0"><a href="{{ App::getLocale() == 'tr' ? route('tr.getContact') : route('en.getContact') }}" class="text-white">{{ __('messages.contact') }}</a></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 text-white">
                <h2 class="h6 mb-4 text-white fw-bold text-decoration-none text-uppercase">{{ __('messages.categories') }}</h2>

                @foreach ($navbar_product_categories as $navbar_category)
                      @if($navbar_category->category_id == null)
                        <div style="font-size: 14px;" class="mb-2 p-0"><a href="{{ App::getLocale() == 'tr' ? route('tr.getCategoryProducts', ['slug' => $navbar_category->slug_tr]) : route('en.getCategoryProducts', ['slug' => $navbar_category->slug_en]) }}" class="text-white">{{ App::getLocale() == 'tr' ? $navbar_category->name_tr : $navbar_category->name_en }}</a></div>
                      @endif
                @endforeach

            </div>

            <div class="col-lg-3 col-md-6 mb-4 text-white">
                <h2 class="h6 mb-4 text-white fw-bold text-decoration-none text-uppercase">{{ __('messages.contact_us') }}</h2>

                <p style="font-size: 14px !important;">{{ __('messages.footer_contact_us_text') }}</p>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="{{ __('messages.email') }}" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="button" id="button-addon2">{{  __('messages.submit') }}</button>
                </div>
            </div>

        </div>

        <div class="row">
            @foreach (json_decode($contact->shops) as  $key => $shop)
                <div class="col-xl-3 col-lg-6">
                    <h2 class="h6 mb-4 text-white fw-bold text-decoration-none text-uppercase">
                        @if (Lang::locale() == 'tr')
                            {{ $shop->name_tr }}
                        @else
                            {{ $shop->name_en }}
                        @endif
                    </h2>

                    <ul class="list-unstyled text-white d-flex flex-column gap-2">
                        <li style="font-size: 14px;"><i class="fa-solid fa-phone me-2"></i> {{ $shop->phone }}</li>
                        <li style="font-size: 14px;">
                            <i class="fa-regular fa-envelope me-2"></i>
                            @if (Lang::locale() == 'tr')
                                {{ $shop->email_tr }}
                            @else
                                {{ $shop->email_en }}
                            @endif
                        </li>
                        <li style="font-size: 14px;"><i class="fa-solid fa-fax me-2"></i> {{ $shop->fax }}</li>
                        <li style="font-size: 14px;"><i class="fa-solid fa-location-dot me-2"></i> {{ $shop->address }}</li>
                    </ul>

                </div>
            @endforeach
        </div>

        <div class="text-center mt-3">
            <img src="{{ asset('images/gulhan-telefon.webp') }}" alt="gulhan telefon" title="gulhan telefon" class="img-fluid">
        </div>
    </div>
</footer>
