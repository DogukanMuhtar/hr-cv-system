<!doctype html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <title>GBB Bilişim | Şifremi Unuttum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

                        <p class="text-muted mt-3">
                            E-posta adresinizi girin.<br>
                            Size şifre sıfırlama bağlantısı göndereceğiz.
                        </p>

                    </div>

                    @if (session('status'))
                    <div class="alert alert-success">
                    Şifre sıfırlama bağlantısı e-posta adresinize başarıyla gönderildi.
                    Lütfen gelen kutunuzu kontrol edin.
                 </div>
                @endif

                    <form method="POST"
                          action="{{ route('password.email') }}">

                        @csrf

                        <div class="mb-3">

                            <label class="form-label">
                                E-posta Adresi
                                <span class="text-danger">*</span>
                            </label>

                            <input
                                type="email"
                                name="email"
                                class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email') }}"
                                placeholder="E-posta adresinizi giriniz"
                                required
                                autofocus>

                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        <div class="d-grid">

                            <button
                                type="submit"
                                class="btn btn-primary fw-semibold py-2">

                                Şifre Sıfırlama Bağlantısı Gönder

                            </button>

                        </div>

                    </form>

                    <p class="text-center text-muted mt-4 mb-0">

                        Şifrenizi hatırladınız mı?

                        <a href="{{ route('login') }}"
                           class="fw-semibold text-decoration-underline">

                            Giriş Yap

                        </a>

                    </p>

                </div>

                <p class="text-center text-muted mt-4">

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