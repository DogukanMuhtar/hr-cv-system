@extends('layouts.app')

@section('page-title', 'Stajyer Detayı')

@section('page-actions')
<div class="d-flex gap-2">

    <a href="{{ route('interns.edit', $intern) }}" class="btn btn-warning">
        Düzenle
    </a>

    <a href="{{ route('interns.index') }}" class="btn btn-secondary">
        Geri Dön
    </a>

</div>
@endsection

@section('content')

<div class="card">

    <div class="card-header">
        <h4 class="card-title mb-0">
            Stajyer Bilgileri
        </h4>
    </div>

    <div class="card-body">

        <div class="row">

            <div class="col-md-6 mb-3">
                <strong>Ad</strong>
                <p>{{ $intern->first_name }}</p>
            </div>

            <div class="col-md-6 mb-3">
                <strong>Soyad</strong>
                <p>{{ $intern->last_name }}</p>
            </div>

            <div class="col-md-6 mb-3">
                <strong>TC No</strong>
                <p>{{ $intern->tc_no }}</p>
            </div>

            <div class="col-md-6 mb-3">
                <strong>Telefon</strong>
                <p>{{ $intern->phone }}</p>
            </div>

            <div class="col-md-6 mb-3">
                <strong>E-Mail</strong>
                <p>{{ $intern->email }}</p>
            </div>

            <div class="col-md-6 mb-3">
                <strong>Üniversite</strong>
                <p>{{ $intern->university }}</p>
            </div>

            <div class="col-md-6 mb-3">
                <strong>Bölüm</strong>
                <p>{{ $intern->department }}</p>
            </div>

            <div class="col-md-6 mb-3">
                <strong>Referans</strong>
                <p>{{ $intern->reference ?: 'Referans belirtilmemiş.' }}</p>
            </div>

            <div class="col-md-6 mb-3">
                <strong>Sınıf</strong>
                <p>{{ $intern->grade }}</p>
            </div>

            <div class="col-md-6 mb-3">
                <strong>Staj Türü</strong>
                <p>{{ $intern->internship_type }}</p>
            </div>

            <div class="col-md-6 mb-3">
                <strong>Staj Süresi</strong>
                <p>{{ $intern->internship_duration }}</p>
            </div>

            <div class="col-md-6 mb-3">
                <strong>Durum</strong>

                @if($intern->status == 'Beklemede')
                    <span class="badge bg-warning">Beklemede</span>
                @elseif($intern->status == 'Onaylandı')
                    <span class="badge bg-success">Onaylandı</span>
                @else
                    <span class="badge bg-danger">Reddedildi</span>
                @endif
            </div>

            <div class="col-12 mb-3">

                <strong>CV</strong>

                <br><br>

                <a href="{{ asset('storage/'.$intern->cv_path) }}"
                   target="_blank"
                   class="btn btn-info">
                    CV'yi Görüntüle
                </a>

            </div>

            <div class="col-12">

                <strong>İK Notu</strong>

                <div class="border rounded p-3 mt-2 bg-light">
                    {{ $intern->hr_note ?: 'Henüz not eklenmemiş.' }}
                </div>

            </div>

        </div>

    </div>

</div>


{{-- Görüşme Bilgileri --}}
<div class="card mt-4">

    <div class="card-header">
        <h4 class="card-title mb-0">
            Görüşme Bilgileri
        </h4>
    </div>

    <div class="card-body">

        @if($intern->interviews->count() > 0)

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

                        @foreach($intern->interviews as $interview)

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

@endsection