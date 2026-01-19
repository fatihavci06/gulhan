@extends('layouts.auth')

@section('content')
<div class="wrapper">
    <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                <div class="col mx-auto">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="p-4">
                                <div class="mb-3 text-center">
                                    <img src="{{ asset('images/logo.png') }}" width="160" alt="" />
                                </div>
                                <div class="text-center mb-4">
                                    <h1 class="h3">Giriş Yap</h1>
                                </div>
                                <div class="form-body">
                                    <form class="row g-3" method="POST">
                                        @csrf

                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">E-posta</label>
                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="inputEmailAddress" required>
                                            @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Parola</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password" name="password" class="form-control border-end-0 @error('password') is-invalid @enderror" value="{{ old('password') }}" id="inputChoosePassword" required> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-12 text-end">
                                            <a href="authentication-forgot-password.html">Şifremi Unuttum</a>
                                        </div> --}}
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary">Giriş Yap</button>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-center ">
                                                <p class="mb-0">Hesabın yok mu? <a href="authentication-signup.html">Kayıt Ol</a>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
</div>
@endsection
