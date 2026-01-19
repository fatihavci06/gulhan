@extends('layouts.app')

@section('title', __('messages.institutional'))

@section('content')

@include('includes.breadcrumb', ['title' => __('messages.institutional')])

<main>

    <section>
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6">
                    <img src="{{ asset('images/gulhan-kolaj.png') }}" alt="" class="img-fluid">
                </div>

                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">{{ __('messages.institutional_title') }}</h2>

                    {!! __('messages.institutional_text') !!}

                    {{-- <div class="row my-2 g-4">
                        <div class="col-md-6">
                            <ul class="list-unstyled d-flex flex-column gap-2">
                                <li class="fw-bold">2M+ Project Done</li>
                                <li class="fw-bold">Bridge Construction</li>
                                <li class="fw-bold">Affordable Cost</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled d-flex flex-column gap-2">
                                <li class="fw-bold">Well Digging</li>
                                <li class="fw-bold">Interior Design</li>
                                <li class="fw-bold">Renovation</li>
                            </ul>
                        </div>
                    </div> --}}

                    {{-- <div class="d-flex flex-wrap gap-3">
                        <button class="btn btn-primary text-uppercase rounded-0">get in touch</button>
                        <img src="https://entrepot.codebasket.xyz/assets/img/about/4.png" alt="" class="img-fluid">
                    </div> --}}
                </div>
            </div>

        </div>
    </section>

    {{-- <section class="bg-primary py-5">
        <div class="container">
            <div class="row g-3">
                <div class="col-md-6">
                    <h3 class="h4 text-white">Stay Updated With News</h3>
                    <h3 class="h4 text-white">Subscribe Newsletter</h3>
                </div>
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control py-2" placeholder="Enter Your Email" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-dark text-uppercase py-2" type="button" id="button-addon2">subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section>
        <div class="container my-5">
            <div class="text-center mb-5">
                <span class="fs-6 text-primary fw-bold d-block mb-0">PROFESSIONAL QUESTIONS</span>
                <h3 class="fw-bold d-block mb-3">Frequently Asked Questions</h3>

                <div class="col-md-5 mx-auto">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting Entrepot. Lorem Ipsum has been the Entrepot's</p>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-6">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How To Make Website Easy Edit?
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                write your profissional text here and you can styling and customi form style or advanced ta or check documentation for more details write your profissional text here and you can styling Lorem Ipsum has been the Entrepot's standard dummy text ever since the 1500s, when an unknown that it has a more-or-less.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How To Make Auto Update?
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem Ipsum is simply dummy text of the printing and typesetting Entrepot. Lorem Ipsum has been the Entrepot's standard dummy text ever since the 1500s, when an unknown
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How Many Month Items Update?
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less.
                            </div>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="https://entrepot.codebasket.xyz/assets/img/faq/2.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="https://entrepot.codebasket.xyz/assets/img/faq/3.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="https://entrepot.codebasket.xyz/assets/img/faq/1.png" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section>
        <div class="container my-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold d-block mb-3">{{ __('messages.meet_our_team') }}</h2>

                <div class="col-md-5 mx-auto">
                    <p>{{ __('messages.meet_our_team_text') }}</p>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-lg">
                        <img src="https://www.gulhan.com/assets/media/turan-d_employeeImage_fit_300_275_80.jpg" alt="" class="card-img-top">
                        <div style="height: 139px;" class="card-body text-center">
                            <h3 class="card-title">Turan DEĞİRMENCİ</h3>
                            <p class="card-text">{{ __('messages.personal_1_status') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-lg">
                        <img src="https://www.gulhan.com/assets/media/hd-web_employeeImage_fit_300_275_80.jpg" alt="" class="card-img-top">
                        <div style="height: 139px;" class="card-body text-center">
                            <h3 class="card-title">Halil DEĞİRMENCİ</h3>
                            <p class="card-text">{{ __('messages.personal_2_status') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-lg">
                        <img src="https://www.gulhan.com/assets/media/ed-web_employeeImage_fit_300_275_80.jpg" alt="" class="card-img-top">
                        <div style="height: 139px;" class="card-body text-center">
                            <h3 class="card-title">Emrah DEĞİRMENCİ</h3>
                            <p class="card-text">{{ __('messages.personal_3_status') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card shadow-lg">
                        <img src="https://www.gulhan.com/assets/media/ersan-web-kuecuek_employeeImage_fit_300_275_80.jpg" alt="" class="card-img-top">
                        <div style="height: 139px;" class="card-body text-center">
                            <h3 class="card-title">Ersan BORAN</h3>
                            <p class="card-text">{{ __('messages.personal_4_status') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card shadow-lg">
                        <img src="https://www.gulhan.com/assets/media/emre-guengoer_employeeImage_fit_300_275_80.jpg" alt="" class="card-img-top">
                        <div style="height: 139px;" class="card-body text-center">
                            <h3 class="card-title">Emre GÜNGÖR</h3>
                            <p class="card-text">{{ __('messages.personal_5_status') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card shadow-lg">
                        <img src="https://www.gulhan.com/assets/media/mustafafoto_employeeImage_fit_300_275_80.jpg" alt="" class="card-img-top">
                        <div style="height: 139px;" class="card-body text-center">
                            <h3 class="card-title">Mustafa TOSUN</h3>
                            <p class="card-text">{{ __('messages.personal_6_status') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card shadow-lg">
                        <img src="https://www.gulhan.com/assets/media/img-20190722-wa0008_3_employeeImage_fit_300_275_80.jpg" alt="" class="card-img-top">
                        <div style="height: 139px;" class="card-body text-center">
                            <h3 class="card-title">Okan AYDOĞAN</h3>
                            <p class="card-text">{{ __('messages.personal_7_status') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card shadow-lg">
                        <img src="https://www.gulhan.com/assets/media/suekran_employeeImage_fit_300_275_80.jpg" alt="" class="card-img-top">
                        <div style="height: 139px;" class="card-body text-center">
                            <h3 class="card-title">Şükran Değer</h3>
                            <p class="card-text">{{ __('messages.personal_8_status') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card shadow-lg">
                        <img src="https://www.gulhan.com/assets/media/cemre-elcin-serbest-webfoto_employeeImage_fit_300_275_80.jpg" alt="" class="card-img-top">
                        <div style="height: 139px;" class="card-body text-center">
                            <h3 class="card-title">Cemre Elçin SERBEST</h3>
                            <p class="card-text">{{ __('messages.personal_9_status') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card shadow-lg">
                        <img src="https://www.gulhan.com/assets/media/elif-ay-web_employeeImage_fit_300_275_80.jpg" alt="" class="card-img-top">
                        <div style="height: 139px;" class="card-body text-center">
                            <h3 class="card-title">Elif AY</h3>
                            <p class="card-text">{{ __('messages.personal_10_status') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card shadow-lg">
                        <img src="https://www.gulhan.com/assets/media/sevda-web-2_employeeImage_fit_300_275_80.jpg" alt="" class="card-img-top">
                        <div style="height: 139px;" class="card-body text-center">
                            <h3 class="card-title">Sevda Karatekin</h3>
                            <p class="card-text">{{ __('messages.personal_11_status') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container my-5">
            <div class="aniBottom">
                <h2 class="h1 text-center fw-bold">{{ __('messages.mission_and_vission') }}</h2>
            </div>

            <div class="row my-5 pt-5">

                <div class="headline d-flex gap-4 align-items-start col-md-6 mb-5">
                    <i class="fa-solid fa-bullseye fs-1 text-primary"></i>
                    <div>
                        <h3 class="h2 fw-bold">{{ __('messages.mission') }}</h3>
                        <p class="fs-5">{{ __('messages.mission_text') }}</p>
                    </div>
                </div>

                <div class="headline d-flex gap-4 align-items-start col-md-6 mb-5">
                    <i class="fa-solid fa-eye fs-1 text-primary"></i>
                    <div>
                        <h3 class="h2 fw-bold">{{ __('messages.vission') }}</h3>
                        <p class="fs-5">{{ __('messages.vission_text') }}</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

@endsection

@section('script')
    <script>
        ScrollReveal().reveal('.aniTimeline', { origin: 'right', distance: '1rem', delay: 550, duration: 2250 });
    </script>
@endsection
