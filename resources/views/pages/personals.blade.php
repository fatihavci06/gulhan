@extends('layouts.app')

@section('content')

@include('includes.breadcrumb', ['title' => 'İdari Kadro'])

<div class="container">

    <div class="d-flex gap-2 justify-content-center align-items-center mb-5">
        <button class="btn btn-primary">Hepsi</button>
        <button class="btn btn-outline-primary">Yönetim</button>
        <button class="btn btn-outline-primary">Ankara Satış Mağazası</button>
        <button class="btn btn-outline-primary">Fabrika</button>
        <button class="btn btn-outline-primary">İstanbul Satış Mağazası</button>
    </div>

    <section>

        <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="card overflow-hidden rounded-3 position-relative">
                    <img src="https://www.gulhan.com/assets/media/turan-d_employeeImage_fit_300_275_80.jpg" alt="" class="card-img-top" loading="lazy">
                    <div class="photo-content position-absolute bottom-0 start-0 px-3">
                        <h2 class="h5 fw-bold text-white mb-1">Turan DEĞİRMENCİ</h2>
                        <p class="text-white fst-italic">Yönetim Kurulu Başkanı</p>
                    </div>
                    <div class="photo-overlay"></div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card overflow-hidden rounded-3 position-relative">
                    <img src="https://www.gulhan.com/assets/media/hd-web_employeeImage_fit_300_275_80.jpg" alt="" class="card-img-top" loading="lazy">
                    <div class="photo-content position-absolute bottom-0 start-0 px-3">
                        <h2 class="h5 fw-bold text-white mb-1">Halil DEĞİRMENCİ</h2>
                        <p class="text-white fst-italic">Yönetim Kurulu Başkanı</p>
                    </div>
                    <div class="photo-overlay"></div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card overflow-hidden rounded-3 position-relative">
                    <img src="https://www.gulhan.com/assets/media/ed-web_employeeImage_fit_300_275_80.jpg" alt="" class="card-img-top" loading="lazy">
                    <div class="photo-content position-absolute bottom-0 start-0 px-3">
                        <h2 class="h5 fw-bold text-white mb-1">Emrah DEĞİRMENCİ</h2>
                        <p class="text-white fst-italic">Genel Müdür</p>
                    </div>
                    <div class="photo-overlay"></div>
                </div>
            </div>

        </div>
    </section>

</div>

@endsection
