@extends('layouts.app')

@section('meta')
<meta property="og:title" content="{{ App::getLocale() == 'tr' ? $photo->name_tr : $photo->name_en }}">
<meta property="og:description" content="">
<meta property="og:image" content="{{ asset($photo->image) }}">
@endsection

@section('title', App::getLocale() == 'tr' ? $photo->name_tr : $photo->name_en)

@section('content')

@include('includes.breadcrumb', ['title' => App::getLocale() == 'tr' ? $photo->name_tr : $photo->name_en])

<main class="container">

        @if($photo->multiPhotos)
            <div id="lightgallery" class="row">
                @foreach ($photo->multiPhotos as $multiPhoto)
                    <a href="{{ asset($multiPhoto->image) }}" class="col-lg-4 col-md-6 g-3 mb-3 overflow-hidden">
                        <img style="object-fit: cover; height: 260px;" src="{{ asset($multiPhoto->image) }}" alt="{{ App::getLocale() == 'tr' ? $photo->name_tr : $photo->name_en }}" title="{{ App::getLocale() == 'tr' ? $photo->name_tr : $photo->name_en }}" class="img-fluid rounded-4 w-100">
                    </a>
                @endforeach
            </div>

            <div class="d-flex gap-2 align-items-center mt-2">
                <a title="whatsapp'ta paylaş {{ App::getLocale() == 'tr' ? $photo->name_tr : $photo->name_en }}" style="font-size: 12px !important;" href="https://wa.me/send?text={{ App::getLocale() == 'tr' ? route('tr.getPhotoDetail', $photo->slug_tr) : route('en.getPhotoDetail', $photo->slug_en) }}" class="btn btn-gray btn-sm" target="_blank">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>

                <a title="twitter'da paylaş {{ App::getLocale() == 'tr' ? $photo->name_tr : $photo->name_en }}" style="font-size: 12px !important;" href="https://twitter.com/intent/tweet?url={{ App::getLocale() == 'tr' ? route('tr.getPhotoDetail', $photo->slug_tr) : route('en.getPhotoDetail', $photo->slug_en) }}&text={{ App::getLocale() == 'tr' ? $photo->name_tr : $photo->name_en }}" class="btn btn-gray btn-sm" target="_blank">
                    <i class="fa-brands fa-x-twitter"></i>
                </a>

                <a title="facebook'ta paylaş" style="font-size: 12px !important;" href="https://www.facebook.com/sharer/sharer.php?u={{ App::getLocale() == 'tr' ? route('tr.getPhotoDetail', $photo->slug_tr) : route('en.getPhotoDetail', $photo->slug_en) }}" class="btn btn-gray btn-sm" target="_blank">
                    <i class="fa-brands fa-facebook"></i>
                </a>

                <a title="mail ile paylaş {{ App::getLocale() == 'tr' ? $photo->name_tr : $photo->name_en }}" style="font-size: 12px !important;" href="mailto:?subject={{ App::getLocale() == 'tr' ? route('tr.getPhotoDetail', $photo->name_tr) : route('en.getPhotoDetail', $photo->name_en) }}" class="btn btn-gray btn-sm" target="_blank">
                    <i class="fa-solid fa-envelope"></i>
                </a>
            </div>
        @endif

</main>

@endsection

