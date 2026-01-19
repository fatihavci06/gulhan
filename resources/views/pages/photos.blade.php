@extends('layouts.app')

@section('title', __('messages.foto_gallery'))

@section('content')

@include('includes.breadcrumb', ['title' => __('messages.foto_gallery')])

<main class="container">
    <div class="row">

        @foreach ($photos as $photo)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-3">
                <a title="{{ App::getLocale() == 'tr' ? $photo->name_tr : $photo->name_en }}" href="{{ App::getLocale() == 'tr' ? route('tr.getPhotoDetail', ['slug' => $photo->slug_tr]) : route('en.getPhotoDetail', ['slug' => $photo->slug_en]) }}" class="w-100">
                    <div class="card overflow-hidden rounded-4 position-relative w-100">
                        <img style="object-fit: cover;" height="240" src="{{ $photo->image }}" alt="{{ App::getLocale() == 'tr' ? $photo->name_tr : $photo->name_en }}" title="{{ App::getLocale() == 'tr' ? $photo->name_tr : $photo->name_en }}" class="card-img-top" loading="lazy">
                        <div class="photo-content position-absolute bottom-0 start-0 px-3">
                            <h2 class="h5 fw-bold text-white mb-1">{{ App::getLocale() == 'tr' ? $photo->name_tr : $photo->name_en }}</h2>
                            <p class="text-white fst-italic">{{ App::getLocale() == 'tr' ? $photo->short_description_tr : $photo->short_description_en }}</p>
                        </div>
                        <div class="photo-overlay"></div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>
</main>

@endsection
