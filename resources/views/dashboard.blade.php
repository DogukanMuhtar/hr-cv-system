@extends('layouts.app')

@section('page-title', 'Ana Sayfa')

@section('content')

<div class="row row-cols-xxl-4 row-cols-md-2 row-cols-1">

    <!-- Toplam Çalışan -->
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">

                    <div class="avatar fs-60 avatar-img-size flex-shrink-0">
                        <span class="avatar-title bg-primary-subtle text-primary rounded-circle fs-24">
                            <i data-lucide="briefcase"></i>
                        </span>
                    </div>

                    <div class="text-end">
                        <h3 class="mb-2 fw-normal">{{ $employeeCount }}</h3>
                        <p class="mb-0 text-muted">Toplam Çalışan</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Toplam Stajyer -->
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">

                    <div class="avatar fs-60 avatar-img-size flex-shrink-0">
                        <span class="avatar-title bg-success-subtle text-success rounded-circle fs-24">
                            <i data-lucide="graduation-cap"></i>
                        </span>
                    </div>

                    <div class="text-end">
                        <h3 class="mb-2 fw-normal">{{ $internCount }}</h3>
                        <p class="mb-0 text-muted">Toplam Stajyer</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Bekleyen -->
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">

                    <div class="avatar fs-60 avatar-img-size flex-shrink-0">
                        <span class="avatar-title bg-warning-subtle text-warning rounded-circle fs-24">
                            <i data-lucide="clock-3"></i>
                        </span>
                    </div>

                    <div class="text-end">
                        <h3 class="mb-2 fw-normal">{{ $pendingCount }}</h3>
                        <p class="mb-0 text-muted">Bekleyen Başvuru</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Onaylanan -->
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">

                    <div class="avatar fs-60 avatar-img-size flex-shrink-0">
                        <span class="avatar-title bg-info-subtle text-info rounded-circle fs-24">
                            <i data-lucide="badge-check"></i>
                        </span>
                    </div>

                    <div class="text-end">
                        <h3 class="mb-2 fw-normal">{{ $approvedCount }}</h3>
                        <p class="mb-0 text-muted">Onaylanan</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

@endsection