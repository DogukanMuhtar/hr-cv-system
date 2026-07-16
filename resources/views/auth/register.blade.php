<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>GBB Bilişim | Kayıt Ol</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="UBold is a modern, responsive admin dashboard available on ThemeForest. Ideal for building CRM, CMS, project management tools, and custom web applications with a clean UI, flexible layouts, and rich features." />
        <meta name="keywords" content="UBold, admin dashboard, ThemeForest, Bootstrap 5 admin, Tailwind CSS, responsive admin, CRM dashboard, CMS admin, web app UI, admin theme, premium admin template" />
        <meta name="author" content="Coderthemes" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" />
 
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
                            <div class="position-absolute top-0 end-0" style="width: 180px">
                                <img src="{{ asset('assets/images/auth-card-bg.svg') }}" class="auth-card-bg-img" alt="auth-card-bg" />
                            </div>
                            <div class="auth-brand text-center mb-4">
                                <img src="{{ asset('assets/images/logo.png') }}"
                                alt="GBB Bilişim"
                                style="height:80px;">
                                
                                <p class="text-muted w-lg-75 mt-3 mx-auto">Kayıt olmak için bilgilerinizi eksiksiz doldurun.</p>
                            </div>

                            <form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">
            Ad Soyad
            <span class="text-danger">*</span>
        </label>

        <div class="input-group">
            <input
                type="text"
                class="form-control @error('name') is-invalid @enderror"
                id="name"
                name="name"
                value="{{ old('name') }}"
                placeholder="Ad Soyad giriniz"
                required
                autofocus>

            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">
            E-posta Adresi
            <span class="text-danger">*</span>
        </label>

        <div class="input-group">
            <input
                type="email"
                class="form-control @error('email') is-invalid @enderror"
                id="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="E-posta adresinizi giriniz"
                required>

            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="mb-3" data-password="bar">
        <label for="password" class="form-label">
            Şifre
            <span class="text-danger">*</span>
        </label>

        <div class="input-group">
            <input
                type="password"
                class="form-control @error('password') is-invalid @enderror"
                id="password"
                name="password"
                placeholder="Şifrenizi giriniz"
                required>

            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="password-bar my-2"></div>
        <p class="text-muted fs-xs mb-0">
            Şifreniz en az 8 karakter uzunluğunda olmalıdır.
        </p>
    </div>

    <div class="mb-3">
        <label for="password_confirmation" class="form-label">
            Şifre Tekrar
            <span class="text-danger">*</span>
        </label>

        <div class="input-group">
            <input
                type="password"
                class="form-control"
                id="password_confirmation"
                name="password_confirmation"
                placeholder="Şifrenizi tekrar giriniz"
                required>
        </div>
    </div>

    <div class="mb-3">
        <div class="form-check">
            <input
                class="form-check-input form-check-input-light fs-14"
                type="checkbox"
                id="termAndPolicy"
                required>

            <label class="form-check-label" for="termAndPolicy">
                Kullanım koşullarını kabul ediyorum.
            </label>
        </div>
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-primary fw-semibold py-2">
            Kayıt Ol
        </button>
    </div>
</form>

<p class="text-muted text-center mt-4 mb-0">
    Zaten hesabınız var mı?

    <a href="{{ route('login') }}"
       class="text-decoration-underline link-offset-3 fw-semibold">
        Giriş Yap
    </a>
</p>

</div>

<p class="text-center text-muted mt-4 mb-0">

                        <span class="fw-semibold">
                            © 2026 GBB Bilişim
                            İnsan Kaynakları Başvuru Sistemi
                            </span>
</p>

</div>
</div>
</div>
</div>

<!-- Vendor js -->
<script src="{{ asset('assets/js/vendors.min.js') }}"></script>

<!-- App js -->
<script src="{{ asset('assets/js/app.js') }}"></script>

<!-- Password Suggestion -->
<script src="{{ asset('assets/js/pages/auth-password.js') }}"></script>

</body>
</html>