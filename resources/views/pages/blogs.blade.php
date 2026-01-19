@extends('layouts.app')

@section('title', __('messages.blogs'))

@section('content')

    @include('includes.breadcrumb', ["title" => __('messages.blogs_and_announcements')])

    <main class="mb-5 pb-5">
        <div class="container">

            {{-- blog_categories --}}
            @if (!empty($blog_categories))
                <div class="d-flex flex-wrap gap-3 mb-5">
                    @foreach ($blog_categories as $blog_category)
                        <a href="{{ App::getLocale() == 'tr' ? route('tr.getCategoryBlogs', $blog_category->slug_tr) : route('en.getCategoryBlogs', $blog_category->slug_en) }}" class="btn btn-secondary">{{ App::getLocale() == 'tr' ? $blog_category->name_tr : $blog_category->name_en }}</a>
                    @endforeach
                </div>
            @endif

            {{-- first blog --}}
            @if(!empty($blogs))
                @php $firstBlog = $blogs->first(); @endphp
                @if($firstBlog)
                    <div class="card border-0 mb-5 overflow-hidden rounded-5">
                        <div class="overflow-hidden rounded-5">
                            <img style="filter: brightness(39%); object-fit: cover;" height="460" style="filter: brightness(22%) contrast(80%);" src="{{ $firstBlog->image }}" alt="{{ App::getLocale() == 'tr' ? $firstBlog->name_tr  : $firstBlog->name_en}}" title="{{ App::getLocale() == 'tr' ? $firstBlog->name_tr  : $firstBlog->name_en}}" class="card-img-top">
                        </div>
                        <div class="text-white text-center position-absolute top-50 start-50 translate-middle w-75">
                            <h2 class="display-5 fw-bold text-white">{{ App::getLocale() == 'tr' ? $firstBlog->name_tr  : $firstBlog->name_en}}</h2>
                            <p class="lead text-white">{!! Str::limit(strip_tags((App::getLocale() == 'tr' ? $firstBlog->description_tr : $firstBlog->description_en)), 166) !!}</p>
                            <a title="{{ App::getLocale() == 'tr' ? $firstBlog->name_tr  : $firstBlog->name_en}}" href="{{ App::getLocale() == 'tr' ? route('tr.getBlogDetail', ['slug' => $firstBlog->slug_tr]) : route('en.getBlogDetail', ['slug' => $firstBlog->slug_en]) }}" class="btn btn-primary mt-3">{{ __('messages.more') }}</a>
                        </div>
                    </div>
                @endif
            @endif

            {{-- blogs card --}}
            <div class="row">
                @forelse ($blogs as $key => $blog)
                    @if($key != 0)
                        <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-stretch mb-3">
                            <div class="card border border-dark-subtle rounded-4 overflow-hidden position-relative">
                                <div class="d-flex flex-wrap gap-2 z-index-1 position-absolute top-0 start-0 px-4 pt-3">
                                    @if($blog->categories)
                                        @foreach ($blog->categories as $category)
                                            <a href="{{ App::getLocale() == 'tr' ? route('tr.getCategoryBlogs', $category->slug_tr) : route('en.getCategoryBlogs', $category->slug_en) }}" class="btn btn-secondary btn-sm">{{ App::getLocale() == 'tr' ? $category->name_tr : $category->name_en }}</a>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="overflow-hidden">
                                    <a title="{{ App::getLocale() == 'tr' ? $blog->name_tr : $blog->name_en }}" href="{{ App::getLocale() == 'tr' ? route('tr.getBlogDetail', ['slug' => $blog->slug_tr]) : route('en.getBlogDetail', ['slug' => $blog->slug_en]) }}">
                                        @if ($blog->image == "/images/logo.png")
                                            <img title="{{ App::getLocale() == 'tr' ? $blog->name_tr : $blog->name_en }}" style="object-fit: contain;" height="220" src="{{ asset($blog->image) }}" alt="{{ App::getLocale() == 'tr' ? $blog->name_tr : $blog->name_en }}" class="card-img-top">
                                        @else
                                            <img title="{{ App::getLocale() == 'tr' ? $blog->name_tr : $blog->name_en }}" style="object-fit: cover;" height="220" src="{{ asset($blog->image) }}" alt="{{ App::getLocale() == 'tr' ? $blog->name_tr : $blog->name_en }}" class="card-img-top">
                                        @endif
                                    </a>

                                </div>
                                <div class="p-4">
                                    <a title="{{ App::getLocale() == 'tr' ? $blog->name_tr : $blog->name_en }}" href="{{ App::getLocale() == 'tr' ? route('tr.getBlogDetail', ['slug' => $blog->slug_tr]) : route('en.getBlogDetail', ['slug' => $blog->slug_en]) }}" class="text-decoration-none text-dark">
                                        <h2 class="h5 fw-bold mb-3">{{ App::getLocale() == 'tr' ? $blog->name_tr : $blog->name_en }}</h2>
                                    </a>
                                    <p class="card-h-word-4" style="font-size: 13px; font-weight:500;" class="">{!! strip_tags(App::getLocale() == 'tr' ? $blog->description_tr : $blog->description_en) !!}</p>
                                    <a title="{{ App::getLocale() == 'tr' ? $blog->name_tr : $blog->name_en }}" href="{{ App::getLocale() == 'tr' ? route('tr.getBlogDetail', ['slug' => $blog->slug_tr]) : route('en.getBlogDetail', ['slug' => $blog->slug_en]) }}" class="btn btn-primary">{{ __('messages.more') }}</a>
                                </div>
                                <div class="card-footer mt-auto">
                                    <i class="fa-solid fa-calendar"></i>
                                    {{ $blog->updated_at }}
                                </div>
                            </div>
                        </div>
                    @endif
                @empty
                    <div class="alert alert-warning">
                        Haber veya Duyuru bulunmamaktadır!
                    </div>
                @endforelse

            </div>

        </div>
    </main>
@endsection
