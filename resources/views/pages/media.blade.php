@extends('layouts.app')

@section('title', __('messages.media'))

@section('content')
@include('includes.breadcrumb', ['title' => __('messages.media')])

<main>
    <div class="container">
        <div>
            <img width="426" style="float: left;" src="{{ asset('images/kaucuk1.jpg') }}" alt="" class="img-fluid me-3 mb-3 rounded-5">
            <div>
                <h2 class="fw-bold mb-3">{{ __('messages.media_kaucuk_title') }}</h2>

                {!! __('messages.media_kaucuk_text') !!}
            </div>
        </div>

        <div class="my-5">
            <img width="426" style="float: right;" src="{{ asset('images/kaucuk2.jpeg') }}" alt="" class="img-fluid ms-3 mb-3 rounded-5">

            <div>
                <h2 class="fw-bold mb-3">{{ __('messages.media_kaucuk_history') }}</h2>

                {!! __('messages.media_kaucuk_history_text') !!}
            </div>
        </div>

        <h2 class="fw-bold mb-3 text-center">{{ __('messages.kaucuk_history_chronology') }}</h2>

        {{-- timeline --}}
        <section class="container">
            <div class="timeline-area">

                <div class="aniTimeline timeline-content">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6">
                            <p style="font-size: 15px !important;">
                                {{ __('messages.kaucuk_history_chronology_text_1') }}
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <div class="card shadow-lg text-center">
                                <div class="card-body">
                                    <img src="{{ asset('images/timeline-1.jpg') }}" alt="" class="img-fluid rounded-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="aniTimeline timeline-content">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6">
                            <p style="font-size: 13px !important;">
                                {{ __('messages.kaucuk_history_chronology_text_2') }}
                            </p>
                        </div>
                        <div class="col-lg-6 shadow-lg text-center">
                            <img src="{{ asset('images/timeline-2.jpg') }}" alt="" class="img-fluid rounded-3">
                        </div>
                    </div>
                </div>

                <div class="aniTimeline timeline-content">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6">
                            <p style="font-size: 13px !important;">
                                {{ __('messages.kaucuk_history_chronology_text_3') }}
                            </p>
                        </div>
                        <div class="col-lg-6 shadow-lg text-center">
                            <img src="{{ asset('images/timeline-3.png') }}" alt="" class="img-fluid rounded-3">
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
</main>
@endsection

@section('script')
    <script>
        ScrollReveal().reveal('.aniTimeline', { origin: 'right', distance: '1rem', delay: 550, duration: 2250 });
    </script>
@endsection
