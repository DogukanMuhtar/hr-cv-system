<!doctype html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'GBB Bilişim')</title>

    <link href="{{ asset('assets/css/vendors.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
</head>

<body style="background:#f5f7fb;">

<header class="navbar navbar-dark" style="background:#343a40; height:78px;">
    <div class="container-fluid">

        <a href="{{ route('applications.home') }}">
            <img src="{{ asset('assets/images/logo.png') }}"
                 alt="GBB Bilişim"
                 style="height:55px;">
        </a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger btn-sm">
            <i data-lucide="log-out" class="me-1"></i>
            Çıkış Yap
        </button>
        </form>

    </div>
</header>

<div class="container mt-5">
    @yield('content')
</div>

<script src="{{ asset('assets/js/vendor.min.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>

</body>
</html>