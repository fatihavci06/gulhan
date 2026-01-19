@extends('layouts.app')

@section('meta')
<meta property="og:title" content="{{ App::getLocale() == 'tr' ? $blog->name_tr : $blog->name_en  }}" />
<meta property="og:description" content="{!! strip_tags(App::getLocale() == 'tr' ? $blog->description_tr : $blog->description_en) !!}" />
<meta property="og:image" content="{{ url($blog->image) }}" />
<meta property="og:url" content="{{ url($blog->image) }}" />
@endsection

@section('title', App::getLocale() == 'tr' ? $blog->name_tr : $blog->name_en )

@section('content')

    @include('includes.breadcrumb', ["title" => App::getLocale() == 'tr' ? $blog->name_tr : $blog->name_en ])

    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Library</li>
        </ol>
    </nav>

    <main class="mb-5 pb-5">
        <div class="container">

            <div class="row mb-3 g-3">
                <div class="col-12">
                    <img src="{{ asset('images/blog-webp.webp') }}" alt="{{ App::getLocale() == 'tr' ? $blog->name_tr : $blog->name_en  }}" class="img-fluid w-100 rounded-4" loading="lazy">
                </div>

                <div class="col-12">
                    <h2 class="h2 mb-3">{{ App::getLocale() == 'tr' ? $blog->name_tr : $blog->name_en  }}</h2>

                    {!! App::getLocale() == 'tr' ? $blog->description_tr : $blog->description_en !!}

                    <div class="d-flex gap-2 align-items-center mt-2">
                        <a style="font-size: 12px !important;" href="https://wa.me/send?text={{ App::getLocale() == 'tr' ? route('tr.getBlogDetail', $blog->slug_tr) : route('en.getBlogDetail', $blog->slug_en) }}" class="btn btn-gray btn-sm" target="_blank">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>

                        <a style="font-size: 12px !important;" href="https://twitter.com/intent/tweet?url={{ App::getLocale() == 'tr' ? route('tr.getBlogDetail', $blog->slug_tr) : route('en.getBlogDetail', $blog->slug_en) }}&text={{ App::getLocale() == 'tr' ? $blog->name_tr : $blog->name_en  }}" class="btn btn-gray btn-sm" target="_blank">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>

                        <a style="font-size: 12px !important;" href="https://www.facebook.com/sharer/sharer.php?u={{ App::getLocale() == 'tr' ? route('tr.getBlogDetail', $blog->slug_tr) : route('en.getBlogDetail', $blog->slug_en) }}" class="btn btn-gray btn-sm" target="_blank">
                            <i class="fa-brands fa-facebook"></i>
                        </a>

                        <a style="font-size: 12px !important;" href="mailto:?subject={{ App::getLocale() == 'tr' ? route('tr.getBlogDetail', $blog->name_tr) : route('en.getBlogDetail', $blog->name_en) }}" class="btn btn-gray btn-sm" target="_blank">
                            <i class="fa-solid fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row mb-3 g-3">
                <h2 class="h3 text-primary fw-bold">En Son Haberler</h2>

                @forelse ($blogs as $key => $blog)
                    <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-stretch">
                        <div class="card border border-dark-subtle rounded-4 overflow-hidden position-relative">
                            <div class="d-flex flex-wrap gap-2 z-index-1 position-absolute top-0 start-0 px-4 pt-3">
                                @if($blog->categories)
                                    @foreach ($blog->categories as $category)
                                        <a href="{{ App::getLocale() == 'tr' ? route('tr.getCategoryBlogs', $category->slug_tr) : route('en.getCategoryBlogs', $category->slug_en) }}" class="btn btn-secondary btn-sm">{{ App::getLocale() == 'tr' ? $category->name_tr : $category->name_en }}</a>
                                    @endforeach
                                @endif
                            </div>
                            <div class="overflow-hidden">
                                <a href="{{ App::getLocale() == 'tr' ? route('tr.getBlogDetail', ['slug' => $blog->slug_tr]) : route('en.getBlogDetail', ['slug' => $blog->slug_en]) }}">
                                    <img style="object-fit: cover;" height="220" src="{{ asset('images/blog-webp.webp') }}" alt="" class="card-img-top" loading="lazy">
                                </a>

                            </div>
                            <div class="p-4">
                                <a href="{{ App::getLocale() == 'tr' ? route('tr.getBlogDetail', ['slug' => $blog->slug_tr]) : route('en.getBlogDetail', ['slug' => $blog->slug_en]) }}" class="text-dark text-decoration-none">
                                    <h2 class="h5 fw-bold mb-3">{{ App::getLocale() == 'tr' ? $blog->name_tr : $blog->name_en }}</h2>
                                </a>
                                <p class="card-h-word-4" style="font-size: 13px; font-weight:500;" class="">{!! strip_tags((App::getLocale() == 'tr' ? $blog->description_tr : $blog->description_en )) !!}</p>
                                <a href="{{ App::getLocale() == 'tr' ? route('tr.getBlogDetail', ['slug' => $blog->slug_tr]) : route('en.getBlogDetail', ['slug' => $blog->slug_en]) }}" class="btn btn-primary">Daha fazla</a>
                            </div>
                            <div class="card-footer mt-auto">
                                <i class="fa-solid fa-calendar"></i>
                                {{ $blog->updated_at }}
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-warning">
                        Haber veya Duyuru bulunmamaktadır!
                    </div>
                @endforelse
            </div>

        </div>
    </main>
@endsection
