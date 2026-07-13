<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title', 'GBB Bilişim | İnsan Kaynakları')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="UBold is a modern, responsive admin dashboard available on ThemeForest. Ideal for building CRM, CMS, project management tools, and custom web applications with a clean UI, flexible layouts, and rich features." />
        <meta name="keywords" content="UBold, admin dashboard, ThemeForest, Bootstrap 5 admin, Tailwind CSS, responsive admin, CRM dashboard, CMS admin, web app UI, admin theme, premium admin template" />
        <meta name="author" content="Coderthemes" />

        <!-- App favicon --><link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
        
 <!-- Theme Config Js -->
<script src="{{ asset('assets/js/config.js') }}"></script>

<!-- Vendor css -->
<link href="{{ asset('assets/css/vendors.min.css') }}" rel="stylesheet" type="text/css" />

<!-- App css -->
<link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">
            <header class="app-topbar">
                <div class="container-fluid topbar-menu">
                    <div class="d-flex align-items-center gap-2">
                        <!-- Topbar Brand Logo -->
                        <div class="logo-topbar">
                            <!-- Logo light -->
                            <a href="index.html" class="logo-light">
                                <span class="logo-lg">
                                    <img src="assets/images/logo.png" alt="logo" />
                                </span>
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="small logo" />
                                </span>
                            </a>

                            <!-- Logo Dark -->
                            <a href="index.html" class="logo-dark">
                                <span class="logo-lg">
                                    <img src="assets/images/logo-black.png" alt="dark logo" />
                                </span>
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="small logo" />
                                </span>
                            </a>
                        </div>

                        <!-- Sidebar Menu Toggle Button -->
                        <button class="sidenav-toggle-button btn btn-default btn-icon">
                            <i data-lucide="menu"></i>
                        </button>

                       <!-- Horizontal Menu Toggle Button -->
<button class="topnav-toggle-button px-2"
        data-bs-toggle="collapse"
        data-bs-target="#topnav-menu">
    <i data-lucide="menu"></i>
</button>

</div>

<div class="d-flex align-items-center gap-2">

    

    
    

    <!-- Apps -->
    <div id="apps-dropdown-grid" class="topbar-item d-none d-xl-flex">

        <div class="dropdown">

            <button class="topbar-link dropdown-toggle drop-arrow-none"
                    data-bs-toggle="dropdown"
                    type="button">

                <i data-lucide="layout-grid"
                   class="topbar-link-icon"></i>

            </button>

            <div class="dropdown-menu dropdown-menu-end">
            </div>

        </div>

    </div>

                    <div class="d-flex align-items-center gap-2">
                        
                        

                        <div id="theme-dropdown" class="topbar-item d-none d-sm-flex">
                            <div class="dropdown">
                                <button class="topbar-link" data-bs-toggle="dropdown" type="button" aria-haspopup="false" aria-expanded="false">
                                    <i data-lucide="sun" class="topbar-link-icon d-none" id="theme-icon-light"></i>
                                    <i data-lucide="moon" class="topbar-link-icon d-none" id="theme-icon-dark"></i>
                                    <i data-lucide="sun-moon" class="topbar-link-icon d-none" id="theme-icon-system"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" data-thememode="dropdown">
                                    <label class="dropdown-item cursor-pointer">
                                        <input class="form-check-input" type="radio" name="data-bs-theme" value="light" style="display: none" />
                                        <i data-lucide="sun" class="align-middle me-1 fs-16"></i>
                                        <span class="align-middle">Light</span>
                                    </label>
                                    <label class="dropdown-item cursor-pointer">
                                        <input class="form-check-input" type="radio" name="data-bs-theme" value="dark" style="display: none" />
                                        <i data-lucide="moon" class="align-middle me-1 fs-16"></i>
                                        <span class="align-middle">Dark</span>
                                    </label>
                                    <label class="dropdown-item cursor-pointer">
                                        <input class="form-check-input" type="radio" name="data-bs-theme" value="system" style="display: none" />
                                        <i data-lucide="sun-moon" class="align-middle me-1 fs-16"></i>
                                        <span class="align-middle">System</span>
                                    </label>
                                </div>
                                <!-- end dropdown-menu-->
                            </div>
                            <!-- end dropdown-->
                        </div>

                       

                        

                        <div id="fullscreen-toggler" class="topbar-item d-none d-md-flex">
                            <button class="topbar-link" type="button" data-toggle="fullscreen">
                                <i data-lucide="maximize" class="topbar-link-icon"></i>
                                <i data-lucide="minimize" class="topbar-link-icon d-none"></i>
                            </button>
                        </div>

                        <div id="monochrome-toggler" class="topbar-item d-none d-xl-flex">
                            <button id="monochrome-mode" class="topbar-link" type="button" data-toggle="monochrome">
                                <i data-lucide="palette" class="topbar-link-icon"></i>
                            </button>
                        </div>

                        <div class="topbar-item d-none d-sm-flex">
                            <button class="topbar-link btn-theme-setting" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" type="button">
                                <i data-lucide="settings" class="topbar-link-icon"></i>
                            </button>
                        </div>

                        

                        
                    </div>
                </div>
            </header>
            <!-- Topbar End -->

            <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content bg-transparent">
                        <form>
                            <div class="card mb-1">
                                <div class="px-3 py-2 d-flex flex-row align-items-center" id="top-search">
                                    <i data-lucide="search" class="fs-22"></i>
                                    <input type="search" class="form-control border-0" id="search-modal-input" placeholder="Search for actions, people," />
                                    <button type="submit" class="btn p-0" data-bs-dismiss="modal" aria-label="Close">[esc]</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
 <div class="sidenav-menu">
    <a href="{{ route('dashboard') }}" class="logo">

    <span class="logo logo-light">
        <span class="logo-lg">
            <img src="{{ asset('assets/images/logo.png') }}"
                 alt="GBB Bilişim"
                 style="height:70px;">
        </span>

        <span class="logo-sm">
            <img src="{{ asset('assets/images/logo.png') }}"
                 alt="GBB"
                 style="height:45px;">
        </span>
    </span>

    <span class="logo logo-dark">
        <span class="logo-lg">
            <img src="{{ asset('assets/images/logo.png') }}"
                 alt="GBB Bilişim"
                 style="height:48px;">
        </span>

        <span class="logo-sm">
            <img src="{{ asset('assets/images/logo.png') }}"
                 alt="GBB"
                 style="height:28px;">
        </span>
    </span>

</a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <button class="button-on-hover">
        <span class="btn-on-hover-icon"></span>
    </button>

    <!-- Full Sidebar Menu Close Button -->
    <button class="button-close-offcanvas">
        <i data-lucide="menu" class="align-middle"></i>
    </button>

    <div class="scrollbar" data-simplebar="">
        <div id="user-profile-settings" class="sidenav-user" style="background: url(assets/images/user-bg-pattern.svg)">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <a href="#!" class="link-reset">
                        <img src="assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle mb-2 avatar-md" />
                        <span class="sidenav-user-name fw-bold">Geneva K.</span>
                        <span class="fs-12 fw-semibold" data-lang="user-role">Art Director</span>
                    </a>
                </div>
                <div>
                    <a class="dropdown-toggle drop-arrow-none link-reset sidenav-user-set-icon" data-bs-toggle="dropdown" data-bs-offset="0,12" href="#!" aria-haspopup="false" aria-expanded="false">
                        <i data-lucide="settings" class="fs-24 align-middle ms-1"></i>
                    </a>

                    <div class="dropdown-menu">
                        <!-- Header -->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome back!</h6>
                        </div>

                        <!-- My Profile -->
                        <a href="#!" class="dropdown-item">
                            <i data-lucide="circle-user-round" class="me-1 fs-lg align-middle"></i>
                            <span class="align-middle">Profile</span>
                        </a>

                        <!-- Settings -->
                        <a href="javascript:void(0);" class="dropdown-item">
                            <i data-lucide="bolt" class="me-1 fs-lg align-middle"></i>
                            <span class="align-middle">Account Settings</span>
                        </a>

                        <!-- Lock -->
                        <a href="auth-lock-screen.html" class="dropdown-item">
                            <i data-lucide="lock-keyhole" class="me-1 fs-lg align-middle"></i>
                            <span class="align-middle">Lock Screen</span>
                        </a>

                        <!-- Logout -->
                        <a href="javascript:void(0);" class="dropdown-item text-danger fw-semibold">
                            <i data-lucide="log-out" class="me-1 fs-lg align-middle"></i>
                            <span class="align-middle">Log Out</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!--- Sidenav Menu -->
        <div id="sidenav-menu">
           <ul class="side-nav">

    <li class="side-nav-title mt-2">Ana Menü</li>

    <li class="side-nav-item">
        <a href="{{ route('dashboard') }}" class="side-nav-link">
            <span class="menu-icon">
                <i data-lucide="layout-dashboard"></i>
            </span>
           <span class="menu-text">Ana Sayfa</span>
        </a>
    </li>

    <li class="side-nav-title mt-2">Başvurular</li>

    <li class="side-nav-item">
        <a href="{{ route('employees.index') }}" class="side-nav-link">
            <span class="menu-icon">
                <i data-lucide="briefcase"></i>
            </span>
            <span class="menu-text">Çalışan Başvuruları</span>
        </a>
    </li>

    <li class="side-nav-item">
        <a href="{{ route('interns.index') }}" class="side-nav-link">
            <span class="menu-icon">
                <i data-lucide="graduation-cap"></i>
            </span>
            <span class="menu-text">Stajyer Başvuruları</span>
        </a>
    </li>

</ul>
</div>      <!-- #sidenav-menu -->
</div>      <!-- .scrollbar -->
</div>      <!-- .sidenav-menu -->

<div class="main-content" style="margin-left:260px;">

    <div class="page-content">

        <div class="container-fluid">

        <div class="page-title-head d-flex justify-content-between align-items-center py-3">

            <div>
                <h4 class="page-main-title m-0">
                    @yield('page-title', 'HR CV Yönetim Sistemi')
                </h4>

                <ol class="breadcrumb m-0 mt-1">
                    <li class="breadcrumb-item">Ana Sayfa</li>
                    <li class="breadcrumb-item active">
                        @yield('page-title', 'HR CV Yönetim Sistemi')
                    </li>
                </ol>
            </div>

            <div>
                @yield('page-actions')
            </div>

        </div>

                @yield('content')

        </div>
    </div>

</div>
        <!-- END wrapper -->

        <div class="offcanvas offcanvas-end overflow-hidden" tabindex="-1" id="theme-settings-offcanvas">
            <div class="d-flex justify-content-between text-bg-primary gap-2 p-3" style="background-image: url(assets/images/settings-bg.png)">
                <div>
                    <h5 class="mb-1 fw-bold text-white text-uppercase">Admin Customizer</h5>
                    <p class="text-white text-opacity-75 fst-italic fw-medium mb-0">Easily configure layout, styles, and preferences for your admin interface.</p>
                </div>

                <div class="flex-grow-0">
                    <button type="button" class="d-block btn btn-sm bg-white bg-opacity-25 text-white rounded-circle btn-icon" data-bs-dismiss="offcanvas">
                        <i data-lucide="x" class="fs-lg"></i>
                    </button>
                </div>
            </div>

            <div class="offcanvas-body theme-customizer-bar p-0 h-100" data-simplebar="">
                <div id="skin" class="p-3 border-bottom border-dashed">
                    <h5 class="mb-3 fw-bold">Select Theme</h5>
                    <div class="row g-3">
                        <div class="col-6" id="skin-default">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-default" value="default" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-default">
                                    <img src="assets/images/layouts/skin-default.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Default</h5>
                        </div>

                        <div class="col-6" id="skin-minimal">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-minimal" value="minimal" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-minimal">
                                    <img src="assets/images/layouts/skin-minimal.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Minimal</h5>
                        </div>

                        <div class="col-6" id="skin-modern">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-modern" value="modern" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-modern">
                                    <img src="assets/images/layouts/skin-modern.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Modern</h5>
                        </div>

                        <div class="col-6" id="skin-material">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-material" value="material" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-material">
                                    <img src="assets/images/layouts/skin-material.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Material</h5>
                        </div>

                        <div class="col-6" id="skin-saas">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-saas" value="saas" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-saas">
                                    <img src="assets/images/layouts/skin-saas.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">SaaS</h5>
                        </div>

                        <div class="col-6" id="skin-flat">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-flat" value="flat" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-flat">
                                    <img src="assets/images/layouts/skin-flat.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Flat</h5>
                        </div>

                        <div class="col-6" id="skin-galaxy">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-galaxy" value="galaxy" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-galaxy">
                                    <img src="assets/images/layouts/skin-galaxy.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Galaxy</h5>
                        </div>

                        <div class="col-6" id="skin-retro">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-retro" value="retro" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-retro">
                                    <img src="assets/images/layouts/skin-retro.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Retro</h5>
                        </div>

                        <div class="col-6" id="skin-neon">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-neon" value="neon" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-neon">
                                    <img src="assets/images/layouts/skin-neon.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Neon</h5>
                        </div>

                        <div class="col-6" id="skin-pixel">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-pixel" value="pixel" />
                                <label class="form-check-label p-0 w-100" for="demo-skin-pixel">
                                    <img src="assets/images/layouts/skin-pixel.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Pixel</h5>
                        </div>
                    </div>
                </div>

                <div id="theme" class="p-3 border-bottom border-dashed">
                    <h5 class="mb-3 fw-bold">Color Scheme</h5>
                    <div class="row">
                        <div class="col-4" id="theme-light">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-light" value="light" />
                                <label class="form-check-label p-0 w-100" for="layout-color-light">
                                    <img src="assets/images/layouts/theme-light.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Light</h5>
                        </div>

                        <div class="col-4" id="theme-dark">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-dark" value="dark" />
                                <label class="form-check-label p-0 w-100" for="layout-color-dark">
                                    <img src="assets/images/layouts/theme-dark.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Dark</h5>
                        </div>

                        <div class="col-4" id="theme-system">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-system" value="system" />
                                <label class="form-check-label p-0 w-100" for="layout-color-system">
                                    <img src="assets/images/layouts/theme-system.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">System</h5>
                        </div>
                    </div>
                </div>

                <div id="topbar-color" class="p-3 border-bottom border-dashed">
                    <h5 class="mb-3 fw-bold">Topbar Color</h5>

                    <div class="row g-3">
                        <div class="col-4" id="topbar-color-light">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar-color" id="layout-topbar-color-light" value="light" />
                                <label class="form-check-label p-0 w-100" for="layout-topbar-color-light">
                                    <img src="assets/images/layouts/topbar-color-light.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="text-center text-muted mt-2 mb-0">Light</h5>
                        </div>

                        <div class="col-4" id="topbar-color-dark">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar-color" id="layout-topbar-color-dark" value="dark" />
                                <label class="form-check-label p-0 w-100" for="layout-topbar-color-dark">
                                    <img src="assets/images/layouts/topbar-color-dark.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="fs-sm text-center text-muted mt-2 mb-0">Dark</h5>
                        </div>

                        <div class="col-4" id="topbar-color-gray">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar-color" id="layout-topbar-color-gray" value="gray" />
                                <label class="form-check-label p-0 w-100" for="layout-topbar-color-gray">
                                    <img src="assets/images/layouts/topbar-color-gray.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="fs-sm text-center text-muted mt-2 mb-0">Gray</h5>
                        </div>

                        <div class="col-4" id="topbar-color-gradient">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar-color" id="layout-topbar-color-gradient" value="gradient" />
                                <label class="form-check-label p-0 w-100" for="layout-topbar-color-gradient">
                                    <img src="assets/images/layouts/topbar-color-gradient.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="fs-sm text-center text-muted mt-2 mb-0">Gradient</h5>
                        </div>
                    </div>
                </div>

                <div id="sidenav-color" class="p-3 border-bottom border-dashed">
                    <h5 class="mb-3 fw-bold">Sidenav Color</h5>

                    <div class="row g-3">
                        <div class="col-4" id="sidenav-color-light">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-menu-color" id="layout-sidenav-color-light" value="light" />
                                <label class="form-check-label p-0 w-100" for="layout-sidenav-color-light">
                                    <img src="assets/images/layouts/sidenav-color-light.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="fs-sm text-center text-muted mt-2 mb-0">Light</h5>
                        </div>

                        <div class="col-4" id="sidenav-color-dark">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-menu-color" id="layout-sidenav-color-dark" value="dark" />
                                <label class="form-check-label p-0 w-100" for="layout-sidenav-color-dark">
                                    <img src="assets/images/layouts/sidenav-color-dark.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="fs-sm text-center text-muted mt-2 mb-0">Dark</h5>
                        </div>

                        <div class="col-4" id="sidenav-color-gray">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-menu-color" id="layout-sidenav-color-gray" value="gray" />
                                <label class="form-check-label p-0 w-100" for="layout-sidenav-color-gray">
                                    <img src="assets/images/layouts/sidenav-color-gray.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="fs-sm text-center text-muted mt-2 mb-0">Gray</h5>
                        </div>

                        <div class="col-4" id="sidenav-color-gradient">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-menu-color" id="layout-sidenav-color-gradient" value="gradient" />
                                <label class="form-check-label p-0 w-100" for="layout-sidenav-color-gradient">
                                    <img src="assets/images/layouts/sidenav-color-gradient.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="fs-sm text-center text-muted mt-2 mb-0">Gradient</h5>
                        </div>
                        <div class="col-4" id="sidenav-color-image">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-menu-color" id="layout-sidenav-color-image" value="image" />
                                <label class="form-check-label p-0 w-100" for="layout-sidenav-color-image">
                                    <img src="assets/images/layouts/sidenav-color-image.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="fs-sm text-center text-muted mt-2 mb-0">Image</h5>
                        </div>
                    </div>
                </div>

                <div id="sidenav-size" class="p-3 border-bottom border-dashed">
                    <h5 class="mb-3 fw-bold">Sidebar Size</h5>

                    <div class="row g-3">
                        <div class="col-4" id="sidenav-size-default">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidenav-size" id="layout-sidenav-size-default" value="default" />
                                <label class="form-check-label p-0 w-100" for="layout-sidenav-size-default">
                                    <img src="assets/images/layouts/sidenav-size-default.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="mb-0 text-center text-muted mt-2">Default</h5>
                        </div>

                        <div class="col-4" id="sidenav-size-compact">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidenav-size" id="layout-sidenav-size-compact" value="compact" />
                                <label class="form-check-label p-0 w-100" for="layout-sidenav-size-compact">
                                    <img src="assets/images/layouts/sidenav-size-compact.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="mb-0 text-center text-muted mt-2">Compact</h5>
                        </div>

                        <div class="col-4" id="sidenav-size-condensed">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidenav-size" id="layout-sidenav-size-condensed" value="condensed" />
                                <label class="form-check-label p-0 w-100" for="layout-sidenav-size-condensed">
                                    <img src="assets/images/layouts/sidenav-size-condensed.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="mb-0 text-center text-muted mt-2">Condensed</h5>
                        </div>

                        <div class="col-4" id="sidenav-size-on-hover">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidenav-size" id="layout-sidenav-size-small-hover" value="on-hover" />
                                <label class="form-check-label p-0 w-100" for="layout-sidenav-size-small-hover">
                                    <img src="assets/images/layouts/sidenav-size-on-hover.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="mb-0 text-center text-muted mt-2">On Hover</h5>
                        </div>

                        <div class="col-4" id="sidenav-size-on-hover-active">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidenav-size" id="layout-sidenav-size-small-hover-active" value="on-hover-active" />
                                <label class="form-check-label p-0 w-100" for="layout-sidenav-size-small-hover-active">
                                    <img src="assets/images/layouts/sidenav-size-on-hover-active.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="mb-0 fs-base text-center text-muted mt-2">On Hover - Show</h5>
                        </div>

                        <div class="col-4" id="sidenav-size-offcanvas">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidenav-size" id="layout-sidenav-size-offcanvas" value="offcanvas" />
                                <label class="form-check-label p-0 w-100" for="layout-sidenav-size-offcanvas">
                                    <img src="assets/images/layouts/sidenav-size-offcanvas.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="mb-0 text-center text-muted mt-2">Offcanvas</h5>
                        </div>
                    </div>
                </div>

                <div id="width" class="p-3 border-bottom border-dashed">
                    <h5 class="mb-3 fw-bold">Layout Width</h5>

                    <div class="row g-3">
                        <div class="col-4" id="width-fluid">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-fluid" value="fluid" />
                                <label class="form-check-label p-0 w-100" for="layout-width-fluid">
                                    <img src="assets/images/layouts/width-fluid.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="mb-0 text-center text-muted mt-2">Fluid</h5>
                        </div>

                        <div class="col-4" id="width-boxed">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-boxed" value="boxed" />
                                <label class="form-check-label p-0 w-100" for="layout-width-boxed">
                                    <img src="assets/images/layouts/width-boxed.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="mb-0 text-center text-muted mt-2">Boxed</h5>
                        </div>
                    </div>
                </div>

                <div id="dir" class="p-3 border-bottom border-dashed">
                    <h5 class="mb-3 fw-bold">Layout Direction</h5>

                    <div class="row g-3">
                        <div class="col-4" id="dir-ltr">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="dir" id="layout-dir-ltr" value="ltr" />
                                <label class="form-check-label p-0 w-100" for="layout-dir-ltr">
                                    <img src="assets/images/layouts/dir-ltr.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="mb-0 text-center text-muted mt-2">LTR</h5>
                        </div>

                        <div class="col-4" id="dir-rtl">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="dir" id="layout-dir-rtl" value="rtl" />
                                <label class="form-check-label p-0 w-100" for="layout-dir-rtl">
                                    <img src="assets/images/layouts/dir-rtl.png" alt="layout-img" class="img-fluid" />
                                </label>
                            </div>
                            <h5 class="mb-0 text-center text-muted mt-2">RTL</h5>
                        </div>
                    </div>
                </div>

                <div id="position" class="p-3 border-bottom border-dashed">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="fw-bold mb-0">Layout Position</h5>

                        <div class="d-flex gap-1">
                            <div id="position-fixed">
                                <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed" />
                                <label class="btn btn-sm btn-soft-warning w-sm" for="layout-position-fixed">Fixed</label>
                            </div>
                            <div id="position-scrollable">
                                <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable" />
                                <label class="btn btn-sm btn-soft-warning w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="sidenav-user" class="p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">
                            <label class="fw-bold m-0" for="sidebaruser-check">Sidebar User Info</label>
                        </h5>
                        <div class="form-check form-switch fs-lg">
                            <input type="checkbox" class="form-check-input" name="sidebar-user" id="sidebaruser-check" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="offcanvas-footer border-top p-3 text-center">
                <div class="row justify-content-end">
                    <div class="col-6">
                        <a href="https://1.envato.market/uboldadmin" class="btn btn-success fw-semibold py-2 w-100" target="_blank"><i data-lucide="shopping-basket" class="me-2 fs-md"></i> Buy Now</a>
                    </div>
                    <div class="col-6">
                        <button type="button" class="btn btn-danger fw-semibold py-2 w-100" id="reset-layout"><i data-lucide="refresh-ccw" class="me-2 fs-md"></i> Reset</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end offcanvas-->
 <!-- Vendor js -->
<script src="{{ asset('assets/js/vendors.min.js') }}"></script>

<!-- App js -->
<script src="{{ asset('assets') }}/js/app.js"></script>


        <!-- E Charts js --><script src="{{ asset('assets/plugins/chartjs/chart.umd.js') }}"></script>
        

        <!-- Custom table -->
<script src="{{ asset('assets/js/pages/custom-table.js') }}"></script>

        <!-- Dashboard Page js -->
        <script src="{{ asset('assets/js/pages/dashboard-ecommerce.js') }}"></script>
    </body>
</html>
