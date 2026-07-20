@extends('layouts.app')

@section('page-title', 'Çalışan Detayı')

@section('page-actions')
<div class="d-flex gap-2">
    <a href="{{ route('employees.edit', $employee) }}" class="btn btn-warning">
        Düzenle
    </a>

    <a href="{{ route('employees.index') }}" class="btn btn-secondary">
        Geri Dön
    </a>
</div>
@endsection

@section('content')

<div class="card">

    <div class="card-header">
        <h4 class="card-title mb-0">
            Çalışan Bilgileri
        </h4>
    </div>

    <div class="card-body">

        <div class="row">

            <div class="col-md-6 mb-3">
                <strong>Ad</strong>
                <p>{{ $employee->first_name }}</p>
            </div>

            <div class="col-md-6 mb-3">
                <strong>Soyad</strong>
                <p>{{ $employee->last_name }}</p>
            </div>

            <div class="col-md-6 mb-3">
                <strong>TC No</strong>
                <p>{{ $employee->tc_no }}</p>
            </div>

            <div class="col-md-6 mb-3">
                <strong>Telefon</strong>
                <p>{{ $employee->phone }}</p>
            </div>

            <div class="col-md-6 mb-3">
                <strong>E-Mail</strong>
                <p>{{ $employee->email }}</p>
            </div>

            <div class="col-md-6 mb-3">
                <strong>Meslek</strong>
                <p>{{ $employee->profession }}</p>
            </div>

            <div class="col-md-6 mb-3">
                <strong>Pozisyon</strong>
                <p>{{ $employee->position }}</p>
            </div>


            <div class="col-md-6 mb-3">
                <strong>Referans</strong>
                <p>{{ $employee->reference ?: 'Referans belirtilmemiş.' }}</p>
            </div>

            <div class="col-md-6 mb-3">
                <strong>Durum</strong>

                @if($employee->status == 'Beklemede')
                    <span class="badge bg-warning">Beklemede</span>
                @elseif($employee->status == 'Onaylandı')
                    <span class="badge bg-success">Onaylandı</span>
                @else
                    <span class="badge bg-danger">Reddedildi</span>
                @endif

            </div>

            <div class="col-12 mb-3">
                <strong>CV</strong>
                <br><br>

                <a href="{{ asset('storage/' . $employee->cv_path) }}"
                   target="_blank"
                   class="btn btn-info">

                    CV'yi Görüntüle

                </a>
            </div>

            <div class="col-12">

                <strong>İK Notu</strong>

                <div class="border rounded p-3 mt-2 bg-light">

                    {{ $employee->hr_note ?: 'Henüz not eklenmemiş.' }}

                </div>

            </div>

        </div>

    </div>

            <div class="card mt-4">

            <div class="card-header">
            <h4 class="card-title mb-0">
            Görüşme Bilgileri
            </h4>
        </div>

    @if($employee->interviews->count() > 0)

            <div class="table-responsive mb-4">

            <table class="table table-bordered align-middle">

            <thead>
            <tr>
            <th>#</th>
            <th>Görüşmeyi Yapan</th>
            <th>Görüşme Tarihi</th>
            </tr>
        </thead>

        <tbody>

            @foreach($employee->interviews as $interview)

                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $interview->interviewer }}</td>
                    <td>{{ $interview->interview_date->format('d.m.Y') }}</td>
                </tr>

            @endforeach

        </tbody>

    </table>

</div>

@else

            <div class="alert alert-info">
        Bu başvuru için henüz görüşme eklenmemiş.
            </div>

@endif



    </div>

</div>


</div>

@endsection