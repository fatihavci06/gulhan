@extends('layouts.app')

@section('meta')
<meta property="og:title" content="{{ App::getLocale() == 'tr' ? $video->name_tr : $video->name_en }}">
<meta property="og:description" content="">
<meta property="og:image" content="{{ asset($video->image) }}">
@endsection

@section('title', App::getLocale() == 'tr' ? $video->name_tr : $video->name_en)

@section('content')

    @include('includes.breadcrumb', ['title' => App::getLocale() == 'tr' ? $video->name_tr : $video->name_en])

    <main class="container">
        {!! App::getLocale() == 'tr' ? $video->video_tr : $video->video_en !!}


        <div class="d-flex gap-2 align-items-center mt-2">
            <a title="whatsapp'ta paylaş {{ App::getLocale() == 'tr' ? $video->name_tr : $video->name_en }}" style="font-size: 12px !important;" href="https://wa.me/send?text={{ App::getLocale() == 'tr' ? route('tr.getVideoDetail', $video->slug_tr) : route('en.getVideoDetail', $video->slug_en) }}" class="btn btn-gray btn-sm" target="_blank">
                <i class="fa-brands fa-whatsapp"></i>
            </a>

            <a title="twitter'de paylaş {{ App::getLocale() == 'tr' ? $video->name_tr : $video->name_en }}" style="font-size: 12px !important;" href="https://twitter.com/intent/tweet?url={{ App::getLocale() == 'tr' ? route('tr.getVideoDetail', $video->slug_tr) : route('en.getVideoDetail', $video->slug_en) }}&text={{ App::getLocale() == 'tr' ? $video->name_tr : $video->name_en }}" class="btn btn-gray btn-sm" target="_blank">
                <i class="fa-brands fa-x-twitter"></i>
            </a>

            <a title="facebook'ta paylaş {{ App::getLocale() == 'tr' ? $video->name_tr : $video->name_en }}" style="font-size: 12px !important;" href="https://www.facebook.com/sharer/sharer.php?u={{ App::getLocale() == 'tr' ? route('tr.getVideoDetail', $video->slug_tr) : route('en.getVideoDetail', $video->slug_en) }}" class="btn btn-gray btn-sm" target="_blank">
                <i class="fa-brands fa-facebook"></i>
            </a>

            <a title="mail ile paylaş {{ App::getLocale() == 'tr' ? $video->name_tr : $video->name_en }}" style="font-size: 12px !important;" href="mailto:?subject={{ App::getLocale() == 'tr' ? route('tr.getVideoDetail', $video->name_tr) : route('en.getVideoDetail', $video->name_en) }}" class="btn btn-gray btn-sm" target="_blank">
                <i class="fa-solid fa-envelope"></i>
            </a>
        </div>
    </main>

@endsection

@section('script')
    <script>
        $(function(){
            $('iframe').css({ width: '100%', height: 560 })
            $('iframe').addClass('rounded-4')
        })
    </script>
@endsection
