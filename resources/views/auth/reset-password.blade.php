<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <title>GBB Bilişim | Şifre Sıfırla</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}">

    <script src="{{ asset('assets/js/config.js') }}"></script>

    <link href="{{ asset('assets/css/vendors.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
</head>

<body>

<div class="auth-box overflow-hidden align-items-center d-flex">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-xxl-4 col-md-6 col-sm-8">

                <div class="card p-4">

                    <div class="position-absolute top-0 end-0" style="width:180px">
                        <img src="{{ asset('assets/images/auth-card-bg.svg') }}"
                             class="auth-card-bg-img">
                    </div>

                    <div class="auth-brand text-center mb-4">

                        <img src="{{ asset('assets/images/logo.png') }}"
                             style="height:80px">

                        <p class="text-muted w-lg-75 mt-3 mx-auto">
                            Yeni şifrenizi belirleyin.
                        </p>

                    </div>

                    <form method="POST" action="{{ route('password.store') }}">
                        @csrf

                        <input type="hidden"
                               name="token"
                               value="{{ $request->route('token') }}">

                        <div class="mb-3">

                            <label class="form-label">
                                E-posta Adresi
                                <span class="text-danger">*</span>
                            </label>

                            <input
                                type="email"
                                name="email"
                                value="{{ old('email',$request->email) }}"
                                class="form-control @error('email') is-invalid @enderror"
                                required>

                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Yeni Şifre
                                <span class="text-danger">*</span>
                            </label>

                            <input
                                type="password"
                                name="password"
                                class="form-control @error('password') is-invalid @enderror"
                                placeholder="Yeni şifrenizi giriniz"
                                required>

                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Yeni Şifre Tekrar
                                <span class="text-danger">*</span>
                            </label>

                            <input
                                type="password"
                                name="password_confirmation"
                                class="form-control"
                                placeholder="Şifrenizi tekrar giriniz"
                                required>

                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary fw-semibold py-2">
                                Şifreyi Güncelle
                            </button>
                        </div>

                    </form>

                    <p class="text-muted text-center mt-4 mb-0">
                        Giriş ekranına dönmek için
                        <a href="{{ route('login') }}"
                           class="fw-semibold text-decoration-underline">
                            Giriş Yap
                        </a>
                    </p>

                </div>

                <p class="text-center text-muted mt-4 mb-0">
                    © {{ date('Y') }}
                    <span class="fw-semibold">
                        Gaziantep Büyükşehir Belediyesi Bilişim A.Ş.
                    </span>
                </p>

            </div>

        </div>
    </div>
</div>

<script src="{{ asset('assets/js/vendors.min.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>

</body>
</html>