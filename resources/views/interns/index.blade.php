@extends('layouts.app')

@section('page-title', 'Stajyer Başvuruları')

@section('page-actions')
<a href="{{ route('interns.create') }}" class="btn btn-success">
    + Yeni Stajyer Başvurusu
</a>
@endsection

@section('content')

<div class="card">

    <div class="card-header">
        <h4 class="card-title mb-0">Stajyer Listesi</h4>
    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table data-tables="basic" class="table table-striped dt-responsive align-middle mb-0">

                <thead class="thead-sm text-uppercase fs-xxs">
                    <tr>
                        <th>Ad</th>
                        <th>Soyad</th>
                        <th>Üniversite</th>
                        <th>Bölüm</th>
                        <th>Durum</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($interns as $intern)

                    <tr>

                        <td>{{ $intern->first_name }}</td>
                        <td>{{ $intern->last_name }}</td>
                        <td>{{ $intern->university }}</td>
                        <td>{{ $intern->department }}</td>

                        <td>
                            <td>
                            @if($intern->status == 'Onaylandı')
                                <span class="badge bg-success-subtle text-success">Onaylandı</span>
                            @elseif($intern->status == 'Beklemede')
                                <span class="badge bg-warning-subtle text-warning">Beklemede</span>
                            @else
                                <span class="badge bg-danger-subtle text-danger">Reddedildi</span>
                            @endif
                        </td>

                        <td>

    <div class="btn-group">

        <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-bs-toggle="dropdown">
            Durum
        </button>

        <ul class="dropdown-menu">

    <li>
        <form action="{{ route('interns.updateStatus', $intern->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <input type="hidden" name="status" value="Onaylandı">
            <button type="submit" class="dropdown-item">Onaylandı</button>
        </form>
    </li>

    <li>
        <form action="{{ route('interns.updateStatus', $intern->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <input type="hidden" name="status" value="Beklemede">
            <button type="submit" class="dropdown-item">Beklemede</button>
        </form>
    </li>

    <li>
        <form action="{{ route('interns.updateStatus', $intern->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <input type="hidden" name="status" value="Reddedildi">
            <button type="submit" class="dropdown-item">Reddedildi</button>
        </form>
    </li>

</ul>

    </div>

    <a href="{{ route('interns.show', $intern->id) }}" class="btn btn-primary btn-sm">
        Detay
    </a>

    <a href="{{ route('interns.edit', $intern->id) }}" class="btn btn-warning btn-sm">
        Düzenle
    </a>

    <form action="{{ route('interns.destroy', $intern->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm">
            Sil
        </button>
    </form>

</td>
                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection