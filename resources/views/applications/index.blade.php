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

 <div class="card mt-4">

    <div class="card-header">
        <h4 class="card-title mb-0">
            Başvurularım
        </h4>
    </div>

    <div class="card-body">

        <p class="text">
            Yaptığınız çalışan ve stajyer başvurularını buradan takip edebilirsiniz.
        </p>
    @if($employees->count() > 0)

    <h5 class="mt-4 mb-3">
        Çalışan Başvurularım
    </h5>

    <div class="table-responsive">

        <table class="table table-bordered align-middle">

            <thead>
                <tr>
                    <th>Pozisyon</th>
                    <th>Başvuru Tarihi</th>
                    <th>Görüşme Tarihleri</th>
                    <th>Durum</th>
                </tr>
            </thead>

            <tbody>

                @foreach($employees as $employee)

                    <tr>
                        <td>{{ $employee->position }}</td>

                        <td>
                            {{ $employee->created_at->format('d.m.Y') }}
                        </td>

                        <td>
            @forelse($employee->interviews as $interview)

                    <div>
                        {{ $interview->interview_date->format('d.m.Y') }}
                    </div>

                    @empty

                    <span class="text-muted">
                        Henüz görüşme tarihi yok
                    </span>

                @endforelse
            </td>

                        <td>
                            @if($employee->status == 'Beklemede')
                                <span class="badge bg-warning">
                                    Beklemede
                                </span>
                            @elseif($employee->status == 'Onaylandı')
                                <span class="badge bg-success">
                                    Onaylandı
                                </span>
                            @else
                                <span class="badge bg-danger">
                                    Reddedildi
                                </span>
                            @endif
                        </td>
                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>

    @endif

    @if($interns->count() > 0)

    <h5 class="mt-4 mb-3">
        Stajyer Başvurularım
    </h5>

    <div class="table-responsive">

        <table class="table table-bordered align-middle">

            <thead>
                <tr>
                    <th>Bölüm</th>
                    <th>Staj Türü</th>
                    <th>Başvuru Tarihi</th>
                    <th>Görüşme Tarihleri</th>
                    <th>Durum</th>
                </tr>
            </thead>

            <tbody>

                @foreach($interns as $intern)

                    <tr>
                        <td>{{ $intern->department }}</td>

                        <td>{{ $intern->internship_type }}</td>

                        <td>
                            {{ $intern->created_at->format('d.m.Y') }}
                        </td>

                        <td>
                        @forelse($intern->interviews as $interview)

                        <div>
                            {{ $interview->interview_date->format('d.m.Y') }}
                        </div>

                    @empty

                        <span class="text-muted">
                            Henüz görüşme tarihi yok
                        </span>

                    @endforelse
                    </td>

                        <td>
                            @if($intern->status == 'Beklemede')
                                <span class="badge bg-warning">
                                    Beklemede
                                </span>
                            @elseif($intern->status == 'Onaylandı')
                                <span class="badge bg-success">
                                    Onaylandı
                                </span>
                            @else
                                <span class="badge bg-danger">
                                    Reddedildi
                                </span>
                            @endif
                        </td>
                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>

@endif

    </div>

</div>

@endsection