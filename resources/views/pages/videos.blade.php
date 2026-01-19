@extends('layouts.app')

@section('title', __('messages.video_gallery'))

@section('content')

@include('includes.breadcrumb', ['title' => __('messages.video_gallery')])

<main class="container">
    <div class="row">

        @foreach ($videos as $video)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-3">
                <a href="{{ App::getLocale() == 'tr' ? route('tr.getVideoDetail', ['slug' => $video->slug_tr]) : route('en.getVideoDetail', ['slug' => $video->slug_en]) }}" class="w-100">
                    <div class="card overflow-hidden rounded-3 position-relative w-100">
                        <img style="object-fit: cover;" height="240" src="{{ $video->image }}" alt="{{ App::getLocale() == 'tr' ? $video->name_tr : $video->name_en }}" class="card-img-top" loading="lazy">
                        <div class="photo-content position-absolute bottom-0 start-0 px-3">
                            <h2 class="h5 fw-bold text-white mb-1 text-uppercase">{{ App::getLocale() == 'tr' ? $video->name_tr : $video->name_en }}</h2>
                            <p class="text-white fst-italic">{{ App::getLocale() == 'tr' ? $video->short_description_tr : $video->short_description_en }}</p>
                        </div>
                        <div class="photo-overlay"></div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>
</main>

@endsection
