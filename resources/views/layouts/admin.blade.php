<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<!--favicon-->
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png"/>

	<!--plugins-->
	<link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('assets/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet">

	{{-- select2 --}}
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/dark-theme.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/semi-dark.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/header-colors.css') }}" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
	<title>Gülhan Yedek Parça</title>

	<style>
		.ck-editor__editable_inline {
			min-height: 999px !important;
		}
	</style>

	<link rel="stylesheet" href="{{ asset('build/assets/admin-afccbdb0.css') }}">
    {{-- @vite(['resources/css/admin.css', 'resources/js/app.jss']) --}}
</head>

<body class="position-relative">
	{{-- loading --}}
	@include('includes.loading')

	<!-- delete modal -->
	@include('includes.delete-modal')

	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<a href="{{ App::getLocale() == 'tr' ? route('tr.home') : route('en.home') }}" class="sidebar-header">
				<div>
					<img src="{{ asset('images/favicon.png') }}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Gülhan</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
				</div>
			 </a>

			<!--navigation-->
            @include('includes.admin-sidebar')
			<!--end navigation-->

		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand gap-3">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>

					  <div style="display: none !important;" class="position-relative search-bar d-lg-block d-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
						<input class="form-control px-5" disabled type="search" placeholder="Search">
						<span class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-5"><i class='bx bx-search'></i></span>
					  </div>


					  <div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center gap-1">
							<li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
								<a class="nav-link" href="avascript:;"><i class='bx bx-search'></i>
								</a>
							</li>
							<li style="display: none !important;" class="nav-item dropdown dropdown-laungauge d-none d-sm-flex">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="avascript:;" data-bs-toggle="dropdown"><img src="{{ asset('assets/images/county/02.png') }}" width="22" alt="">
								</a>
								<ul class="dropdown-menu dropdown-menu-end">
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('assets/images/county/01.png') }}" width="20" alt=""><span class="ms-2">English</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('assets/images/county/02.png') }}" width="20" alt=""><span class="ms-2">Catalan</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('assets/images/county/03.png') }}" width="20" alt=""><span class="ms-2">French</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('assets/images/county/04.png') }}" width="20" alt=""><span class="ms-2">Belize</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('assets/images/county/05.png') }}" width="20" alt=""><span class="ms-2">Colombia</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('assets/images/county/06.png') }}" width="20" alt=""><span class="ms-2">Spanish</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('assets/images/county/07.png') }}" width="20" alt=""><span class="ms-2">Georgian</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('assets/images/county/08.png') }}" width="20" alt=""><span class="ms-2">Hindi</span></a>
									</li>
								</ul>
							</li>
							<li style="display: none !important;" class="nav-item dark-mode d-none d-sm-flex">
								<a class="nav-link dark-mode-icon" href="javascript:;"><i class='bx bx-moon'></i>
								</a>
							</li>

                            {{-- notifications --}}
							<li style="display: none !important;" class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" data-bs-toggle="dropdown"><span class="alert-count">7</span>
									<i class='bx bx-bell'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Notifications</p>
											<p class="msg-header-badge">8 New</p>
										</div>
									</a>
									<div class="header-notifications-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('assets/images/avatars/avatar-1.png') }}" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Daisy Anderson<span class="msg-time float-end">5 sec
												ago</span></h6>
													<p class="msg-info">The standard chunk of lorem</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-danger text-danger">dc
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
												ago</span></h6>
													<p class="msg-info">You have recived new orders</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('assets/images/avatars/avatar-2.png') }}" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Althea Cabardo <span class="msg-time float-end">14
												sec ago</span></h6>
													<p class="msg-info">Many desktop publishing packages</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success">
													<img src="{{ asset('assets/images/app/outlook.png') }}" width="25" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Account Created<span class="msg-time float-end">28 min
												ago</span></h6>
													<p class="msg-info">Successfully created new email</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-info text-info">Ss
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Product Approved <span
												class="msg-time float-end">2 hrs ago</span></h6>
													<p class="msg-info">Your new product has approved</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('assets/images/avatars/avatar-4.png') }}" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Katherine Pechon <span class="msg-time float-end">15
												min ago</span></h6>
													<p class="msg-info">Making this the first true generator</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success"><i class='bx bx-check-square'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5 hrs
												ago</span></h6>
													<p class="msg-info">Successfully shipped your item</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-primary">
													<img src="{{ asset('assets/images/app/github.png') }}" width="25" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day
												ago</span></h6>
													<p class="msg-info">24 new authors joined last week</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('assets/images/avatars/avatar-8.png') }}" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Peter Costanzo <span class="msg-time float-end">6 hrs
												ago</span></h6>
													<p class="msg-info">It was popularised in the 1960s</p>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">
											<button class="btn btn-primary w-100">View All Notifications</button>
										</div>
									</a>
								</div>
							</li>

                            {{-- carts --}}
							<li style="display: none !important;" class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
									<i class='bx bx-shopping-bag'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">My Cart</p>
											<p class="msg-header-badge">10 Items</p>
										</div>
									</a>
									<div class="header-message-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{ asset('assets/images/products/11.png') }}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{ asset('assets/images/products/02.png') }}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{ asset('assets/images/products/03.png') }}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{ asset('assets/images/products/04.png') }}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{ asset('assets/images/products/05.png') }}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{ asset('assets/images/products/06.png') }}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{ asset('assets/images/products/07.png') }}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{ asset('assets/images/products/08.png') }}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center gap-3">
												<div class="position-relative">
													<div class="cart-product rounded-circle bg-light">
														<img src="{{ asset('assets/images/products/09.png') }}" class="" alt="product image">
													</div>
												</div>
												<div class="flex-grow-1">
													<h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
													<p class="cart-product-price mb-0">1 X $29.00</p>
												</div>
												<div class="">
													<p class="cart-price mb-0">$250</p>
												</div>
												<div class="cart-product-cancel"><i class="bx bx-x"></i>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">
											<div class="d-flex align-items-center justify-content-between mb-3">
												<h5 class="mb-0">Total</h5>
												<h5 class="mb-0 ms-auto">$489.00</h5>
											</div>
											<button class="btn btn-primary w-100">Checkout</button>
										</div>
									</a>
								</div>
							</li>
						</ul>
					</div>
					<div class="user-box dropdown px-3">
						<a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img width="11" src="{{ asset('images/favicon.png') }}" class="user-img" alt="user avatar">
							<div class="user-info">
                                @auth
    								<p class="user-name mb-0">{{ Auth::user()->username }}</p>
								    <p class="designattion mb-0">{{ ucfirst(Auth::user()->role) }}</p>
                                @endauth
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-user fs-5"></i><span>Profile</span></a>
							</li>
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li>
                                <a
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="dropdown-item d-flex align-items-center"
                                    href="javascript:;">
                                        <i class="bx bx-log-out-circle"></i>
                                        <span>Çıkış Yap</span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">

				@yield('content')

			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
	</div>
	<!--end wrapper-->

	<!-- Bootstrap JS -->
	<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

	{{-- select2 --}}
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

	<script>
       function setupAdvancedTurkishInsensitiveSearch() {
            // Bu fonksiyon tüm Türkçe karakterler için bir arama kriteri oluşturur.
            $.fn.dataTable.ext.type.search['turkish-insensitive'] = function(data) {
                return !data ?
                    '' :
                    typeof data === 'string' ?
                    data
                        .replace(/ğ/g, 'g').replace(/Ğ/g, 'G')
                        .replace(/ü/g, 'u').replace(/Ü/g, 'U')
                        .replace(/ş/g, 's').replace(/Ş/g, 'S')
                        .replace(/ı/g, 'i').replace(/İ/g, 'I')
                        .replace(/ö/g, 'o').replace(/Ö/g, 'O')
                        .replace(/ç/g, 'c').replace(/Ç/g, 'C')
                        // Türkçe ve İngilizce "i" ve "ş" harflerini genel bir desen ile değiştir
                        .replace(/i/g, '[iıİI]').replace(/I/g, '[iıİI]')
                        .replace(/s/g, '[sşŞS]').replace(/S/g, '[sşŞS]')
                        .toLowerCase() : // Büyük/küçük harf duyarsız arama için tüm veriyi küçük harfe çevir
                    data;
            };
        }

		$(document).ready(function() {
            setupAdvancedTurkishInsensitiveSearch();

			$('#example').DataTable({
                language: {
                    "infoEmpty": "Kayıt yok",
                    "infoFiltered": "(_MAX_ kayıt içerisinden bulunan)",
                    "infoThousands": ".",
                    "lengthMenu": "Sayfada _MENU_ kayıt göster",
                    "loadingRecords": "Yükleniyor...",
                    "processing": "İşleniyor...",
                    "search": "Ara:",
                    "zeroRecords": "Eşleşen kayıt bulunamadı",
                    "paginate": {
                        "first": "İlk",
                        "last": "Son",
                        "next": "Sonraki",
                        "previous": "Önceki"
                    },
                    "aria": {
                        "sortAscending": ": artan sütun sıralamasını aktifleştir",
                        "sortDescending": ": azalan sütun sıralamasını aktifleştir"
                    },
                    "select": {
                        "rows": {
                            "_": "%d kayıt seçildi",
                            "1": "1 kayıt seçildi"
                        },
                        "cells": {
                            "1": "1 hücre seçildi",
                            "_": "%d hücre seçildi"
                        },
                        "columns": {
                            "1": "1 sütun seçildi",
                            "_": "%d sütun seçildi"
                        }
                    },
                    "autoFill": {
                        "cancel": "İptal",
                        "fillHorizontal": "Hücreleri yatay olarak doldur",
                        "fillVertical": "Hücreleri dikey olarak doldur",
                        "fill": "Bütün hücreleri <i>%d<\/i> ile doldur",
                        "info": "Detayı"
                    },
                    "buttons": {
                        "collection": "Koleksiyon <span class=\"ui-button-icon-primary ui-icon ui-icon-triangle-1-s\"><\/span>",
                        "colvis": "Sütun görünürlüğü",
                        "colvisRestore": "Görünürlüğü eski haline getir",
                        "copySuccess": {
                            "1": "1 satır panoya kopyalandı",
                            "_": "%ds satır panoya kopyalandı"
                        },
                        "copyTitle": "Panoya kopyala",
                        "csv": "CSV",
                        "excel": "Excel",
                        "pageLength": {
                            "-1": "Bütün satırları göster",
                            "_": "%d satır göster",
                            "1": "1 Satır Göster"
                        },
                        "pdf": "PDF",
                        "print": "Yazdır",
                        "copy": "Kopyala",
                        "copyKeys": "Tablodaki veriyi kopyalamak için CTRL veya u2318 + C tuşlarına basınız. İptal etmek için bu mesaja tıklayın veya escape tuşuna basın.",
                        "createState": "Şuanki Görünümü Kaydet",
                        "removeAllStates": "Tüm Görünümleri Sil",
                        "removeState": "Aktif Görünümü Sil",
                        "renameState": "Aktif Görünümün Adını Değiştir",
                        "savedStates": "Kaydedilmiş Görünümler",
                        "stateRestore": "Görünüm -&gt; %d",
                        "updateState": "Aktif Görünümün Güncelle"
                    },
                    "searchBuilder": {
                        "add": "Koşul Ekle",
                        "button": {
                            "0": "Arama Oluşturucu",
                            "_": "Arama Oluşturucu (%d)"
                        },
                        "condition": "Koşul",
                        "conditions": {
                            "date": {
                                "after": "Sonra",
                                "before": "Önce",
                                "between": "Arasında",
                                "empty": "Boş",
                                "equals": "Eşittir",
                                "not": "Değildir",
                                "notBetween": "Dışında",
                                "notEmpty": "Dolu"
                            },
                            "number": {
                                "between": "Arasında",
                                "empty": "Boş",
                                "equals": "Eşittir",
                                "gt": "Büyüktür",
                                "gte": "Büyük eşittir",
                                "lt": "Küçüktür",
                                "lte": "Küçük eşittir",
                                "not": "Değildir",
                                "notBetween": "Dışında",
                                "notEmpty": "Dolu"
                            },
                            "string": {
                                "contains": "İçerir",
                                "empty": "Boş",
                                "endsWith": "İle biter",
                                "equals": "Eşittir",
                                "not": "Değildir",
                                "notEmpty": "Dolu",
                                "startsWith": "İle başlar",
                                "notContains": "İçermeyen",
                                "notStartsWith": "Başlamayan",
                                "notEndsWith": "Bitmeyen"
                            },
                            "array": {
                                "contains": "İçerir",
                                "empty": "Boş",
                                "equals": "Eşittir",
                                "not": "Değildir",
                                "notEmpty": "Dolu",
                                "without": "Hariç"
                            }
                        },
                        "data": "Veri",
                        "deleteTitle": "Filtreleme kuralını silin",
                        "leftTitle": "Kriteri dışarı çıkart",
                        "logicAnd": "ve",
                        "logicOr": "veya",
                        "rightTitle": "Kriteri içeri al",
                        "title": {
                            "0": "Arama Oluşturucu",
                            "_": "Arama Oluşturucu (%d)"
                        },
                        "value": "Değer",
                        "clearAll": "Filtreleri Temizle"
                    },
                    "searchPanes": {
                        "clearMessage": "Hepsini Temizle",
                        "collapse": {
                            "0": "Arama Bölmesi",
                            "_": "Arama Bölmesi (%d)"
                        },
                        "count": "{total}",
                        "countFiltered": "{shown}\/{total}",
                        "emptyPanes": "Arama Bölmesi yok",
                        "loadMessage": "Arama Bölmeleri yükleniyor ...",
                        "title": "Etkin filtreler - %d",
                        "showMessage": "Tümünü Göster",
                        "collapseMessage": "Tümünü Gizle"
                    },
                    "thousands": ".",
                    "datetime": {
                        "amPm": [
                            "öö",
                            "ös"
                        ],
                        "hours": "Saat",
                        "minutes": "Dakika",
                        "next": "Sonraki",
                        "previous": "Önceki",
                        "seconds": "Saniye",
                        "unknown": "Bilinmeyen",
                        "weekdays": {
                            "6": "Paz",
                            "5": "Cmt",
                            "4": "Cum",
                            "3": "Per",
                            "2": "Çar",
                            "1": "Sal",
                            "0": "Pzt"
                        },
                        "months": {
                            "9": "Ekim",
                            "8": "Eylül",
                            "7": "Ağustos",
                            "6": "Temmuz",
                            "5": "Haziran",
                            "4": "Mayıs",
                            "3": "Nisan",
                            "2": "Mart",
                            "11": "Aralık",
                            "10": "Kasım",
                            "1": "Şubat",
                            "0": "Ocak"
                        }
                    },
                    "decimal": ",",
                    "editor": {
                        "close": "Kapat",
                        "create": {
                            "button": "Yeni",
                            "submit": "Kaydet",
                            "title": "Yeni kayıt oluştur"
                        },
                        "edit": {
                            "button": "Düzenle",
                            "submit": "Güncelle",
                            "title": "Kaydı düzenle"
                        },
                        "error": {
                            "system": "Bir sistem hatası oluştu (Ayrıntılı bilgi)"
                        },
                        "multi": {
                            "info": "Seçili kayıtlar bu alanda farklı değerler içeriyor. Seçili kayıtların hepsinde bu alana aynı değeri atamak için buraya tıklayın; aksi halde her kayıt bu alanda kendi değerini koruyacak.",
                            "noMulti": "Bu alan bir grup olarak değil ancak tekil olarak düzenlenebilir.",
                            "restore": "Değişiklikleri geri al",
                            "title": "Çoklu değer"
                        },
                        "remove": {
                            "button": "Sil",
                            "confirm": {
                                "_": "%d adet kaydı silmek istediğinize emin misiniz?",
                                "1": "Bu kaydı silmek istediğinizden emin misiniz?"
                            },
                            "submit": "Sil",
                            "title": "Kayıtları sil"
                        }
                    },
                    "stateRestore": {
                        "creationModal": {
                            "button": "Kaydet",
                            "columns": {
                                "search": "Kolon Araması",
                                "visible": "Kolon Görünümü"
                            },
                            "name": "Görünüm İsmi",
                            "order": "Sıralama",
                            "paging": "Sayfalama",
                            "scroller": "Kaydırma (Scrool)",
                            "search": "Arama",
                            "searchBuilder": "Arama Oluşturucu",
                            "select": "Seçimler",
                            "title": "Yeni Görünüm Oluştur",
                            "toggleLabel": "Kaydedilecek Olanlar"
                        },
                        "duplicateError": "Bu Görünüm Daha Önce Tanımlanmış",
                        "emptyError": "Görünüm Boş Olamaz",
                        "emptyStates": "Herhangi Bir Görünüm Yok",
                        "removeJoiner": "ve",
                        "removeSubmit": "Sil",
                        "removeTitle": "Görünüm Sil",
                        "renameButton": "Değiştir",
                        "renameLabel": "Görünüme Yeni İsim Ver -&gt; %s:",
                        "renameTitle": "Görünüm İsmini Değiştir",
                        "removeConfirm": "Görünümü silmek istediğinize emin misiniz?",
                        "removeError": "Görünüm silinemedi"
                    },
                    "emptyTable": "Tabloda veri bulunmuyor",
                    "infoPostFix": "_TOTAL_ kayıttan _START_ - _END_ arasındaki kayıtlar gösteriliyor",
                    "searchPlaceholder": "Arayın..."
                },
            });
		});
	</script>
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );

			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>
	<!--app JS-->
	<script src="{{ asset('assets/js/app.js') }}"></script>

	<script>
		$(document).ready(function(){
			// dom content loaded
			$("#loading").addClass('d-none')

			// submit forms
			$("form").on('submit', function(){
				$("button").attr('disabled', true)
				$("#loading").removeClass('d-none')
			})

			// toastr
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

			$( "#sortable tbody" ).sortable({
				update: function (event, ui){
					$('#loading').removeClass('d-none')

					$(this).children().each(function(index){
					if($(this).attr('data-position') != (index+1)){
						$(this).attr('data-position', (index+1)).addClass('updated')
					}
					})

					let table = $("#sortable").data('table')
					saveNewPositions(table)
				}
			});

			function saveNewPositions(table){
				var positions = []
				$('.updated').each(function(){
					positions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
					$(this).removeClass()
				})

				$.ajax({
					url: "{{ route('ajax.updatePositions') }}",
					method: 'POST',
					data: {
						table: table,
						positions: positions
					},
					success: function(res){
						$('#loading').addClass('d-none')
					}

				})
			}

			// delete btn
			$('body').on('click', '.delete-btn', function(){
				let route = $(this).data('route')
				$('#deleteModal form').attr('action', route)

				$('#deleteModal').modal('show')
			})

            // description
            CKEDITOR.replace('description', {
                height: 300,
                resize_dir: 'both',
                removeButtons: 'PasteFromWord'
            });

            // description_tr
            CKEDITOR.replace('description_tr', {
                height: 300,
                resize_dir: 'both',
                removeButtons: 'PasteFromWord'
            });

            // description_en
            CKEDITOR.replace('description_en', {
                height: 300,
                resize_dir: 'both',
                removeButtons: 'PasteFromWord'
            });
		})
	</script>

	<script>
		$('#image').change(function(event) {
		var file = event.target.files[0];
		var reader = new FileReader();

		reader.onload = function(event) {
			var imageUrl = event.target.result;
			$('#previewImage').html(`<img width="90" src='${imageUrl}' class='img-fluid'>`).show();
		};

		reader.readAsDataURL(file);
		});
	</script>

	{{-- select 2 multiple --}}
	<script>
		$( '.single-select-field' ).select2( {
			theme: "bootstrap-5",
			width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
			placeholder: $( this ).data( 'placeholder' ),
		} );

		$( '.multiple-select-field' ).select2( {
			theme: "bootstrap-5",
			width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
			placeholder: $( this ).data( 'placeholder' ),
			closeOnSelect: false,
		} );
	</script>

	@yield('script')

    <script>
        $(function(){
            if(typeof CKEDITOR !== 'undefined'){
                for(var instance in CKEDITOR.instances){
                    if(CKEDITOR.instances.hasOwnProperty(instance)){
                        CKEDITOR.instances[instance].config.versionCheck = false
                    }
                }
            }
        })
    </script>
</body>

</html>
