<!doctype html>
<html lang="{{ App::getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="@yield('meta_description', "GÜLHAN, 1978'de kurulan bir endüstriyel hizmet firmasıdır. Kauçuk yedek parça üretimi ve özel sipariş tasarımı ile öne çıkar. Savunma Sanayiine odaklanarak, Aselsan onaylı tedarikçiler arasındadır.")">



    <title>@yield('title') | Gülhan Kauçuk</title>

    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- fontawesome css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- bootstrap --}}
    {{-- <link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" /> --}}
    {{-- <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

    <!-- LightGallery CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@1.10.0/dist/css/lightgallery.min.css">

    <!--=============== REMIXICONS ===============-->
    {{-- <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet"> --}}

    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png"/>

    @yield('link')

    @yield('style')

    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('build/assets/app-0df26ea0.css') }}">
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{ asset('css/home-ani.css') }}">

  </head>
  <body style="width: 100vw !important; overflow-x: hidden !important;">

    @yield('home_first')

    {{-- navbar --}}
    <div class="position-relative">
        @php
            $id = "";
            $slug_tr = "";
            $slug_en = "";

            if(isset($video)){
                $slug_en = $video->slug_en;
                $slug_tr = $video->slug_tr;
            }elseif(isset($photo)){
                $slug_en = $photo->slug_en;
                $slug_tr = $photo->slug_tr;
            }elseif(isset($category)){
                $slug_en = $category->slug_en;
                $slug_tr = $category->slug_tr;
            }elseif(isset($product)){
                $slug_en = $product->slug_en;
                $slug_tr = $product->slug_tr;
                $id = $product->id;
            }elseif (isset($brandProducts)) {
                $slug_en = $brandProducts->slug;
                $slug_tr = $brandProducts->slug;
            }
        @endphp

        @if (isset($id))
            @include('includes.navbar',[
                'slug_tr' => $slug_tr,
                'slug_en' => $slug_en,
                'id' => $id
            ])
        @else
            @include('includes.navbar',[
                'slug_tr' => $slug_tr,
                'slug_en' => $slug_en
            ])
        @endif

    </div>

    @yield('content')

    {{-- footer --}}
    @include('includes.footer')

    {{-- cart offcanvas --}}
    @include('includes.cart-offcanvas')

    {{-- <script src="{{ asset('build/assets/app-cb381170.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- LightGallery JS -->
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@1.10.0/dist/js/lightgallery-all.min.js"></script>

    <script>
      $(document).ready(function() {
        ScrollReveal().reveal('.headline', { delay: 250, duration: 950 });

        ScrollReveal().reveal('.aniLeft', { origin: 'left', distance: '26px', delay: 250, duration: 2250 });
        ScrollReveal().reveal('.aniTop', { origin: 'top', distance: '12px', delay: 950, duration: 2250 });
        ScrollReveal().reveal('.aniBottom', { origin: 'bottom', distance: '12px', delay: 950, duration: 2250 });
        ScrollReveal().reveal('.aniRight', { origin: 'right', distance: '26px', delay: 550, duration: 2250 });

        $('#lightgallery').lightGallery();
      });
    </script>

    {{-- toastr --}}
    <script>
			@if(Session::has('alert_type') && Session::has('alert_message'))
				const alert_type = "{{ Session::get('alert_type') }}"
				const alert_message = "{{ Session::get('alert_message') }}"

				switch (alert_type) {
					case "success":
						toastr.success(alert_message)
						break;

					case "error":
						toastr.error(alert_message)
						break;

					default:
						break;
				}
			@endif
    </script>

    <script>
      /*=============== SHOW MENU ===============*/
      const showMenu = (toggleId, navId) =>{
        const toggle = document.getElementById(toggleId),
              nav = document.getElementById(navId)

        toggle.addEventListener('click', () =>{
            // Add show-menu class to nav menu
            nav.classList.toggle('show-menu')

            // Add show-icon to show and hide the menu icon
            toggle.classList.toggle('show-icon')
        })
      }

      showMenu('nav-toggle','nav-menu')
    </script>

    @yield('script')

  </body>
</html>
