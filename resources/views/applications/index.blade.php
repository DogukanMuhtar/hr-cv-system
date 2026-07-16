@extends('layouts.user')
@section('title', 'Başvuru Sistemi')
@section('page-title', 'Başvuru Sistemi')
@section('content')


<div class="row">

    <div class="col-md-6">

        <div class="card">

            <div class="card-body text-center">


                <h3>Çalışan Başvurusu</h3>

               <a href="/apply/employee" class="btn btn-primary mt-3">
                    Başvuru Yap
                </a>

            </div>

        </div>

    </div>

    <div class="col-md-6">

        <div class="card">

            <div class="card-body text-center">

                <h3>Stajyer Başvurusu</h3>

                <a href="{{ route('intern.apply') }}" class="btn btn-success mt-3">
                    Başvuru Yap
                </a>

            </div>

        </div>

    </div>

</div>

@endsection