@extends('layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')

<div class="row">

    <div class="col-md-6 col-xl-2">
        <div class="card">
            <div class="card-body">
                <h5 class="text-muted fw-normal mt-0">Çalışan Başvuruları</h5>
                <h2 class="mt-3 mb-3">{{ $employeeCount }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <h5 class="text-muted fw-normal mt-0">Stajyer Başvuruları</h5>
                <h2 class="mt-3 mb-3">{{ $internCount }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-8 col-xl-2">
        <div class="card">
            <div class="card-body">
                <h5 class="text-success fw-normal mt-0">Onaylanan</h5>
                <h2 class="mt-3 mb-3">{{ $approvedCount }}</h2>
            </div>
        </div>
    </div>
    
    
    <div class="col-md-8 col-xl-2">
        <div class="card">
            <div class="card-body">
                <h5 class="text-warning fw-normal mt-0">Bekleyen</h5>
                <h2 class="mt-3 mb-3">{{ $pendingCount }}</h2>
            </div>
        </div>
    </div>

    

    <div class="col-md-6 col-xl-2">
        <div class="card">
            <div class="card-body">
                <h5 class="text-danger fw-normal mt-0">Reddedilen</h5>
                <h2 class="mt-3 mb-3">{{ $rejectedCount }}</h2>
            </div>
        </div>
    </div>

</div>

@endsection