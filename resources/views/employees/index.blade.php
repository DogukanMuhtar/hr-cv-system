@extends('layouts.app')

@section('page-title', 'Çalışan Başvuruları')

@section('page-actions')
<a href="{{ route('employees.create') }}" class="btn btn-success">
    + Yeni Çalışan Başvurusu
</a>
@endsection

@section('content')

<div class="card">

    <div class="card-header">
        <h5 class="card-title mb-0">Çalışan Listesi</h5>
    </div>

    <div class="card-body">
        <div class="table-responsive">

            <table data-tables="basic" class="table table-striped dt-responsive align-middle mb-0">

                <thead class="thead-sm text-uppercase fs-xxs">
                    <tr>
                        <th>Ad</th>
                        <th>Soyad</th>
                        <th>Meslek</th>
                        <th>Pozisyon</th>
                        <th>Durum</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($employees as $employee)

                    <tr>
                        <td>{{ $employee->first_name }}</td>
                        <td>{{ $employee->last_name }}</td>
                        <td>{{ $employee->profession }}</td>
                        <td>{{ $employee->position }}</td>
                        <td>
                            @if($employee->status == 'Onaylandı')
                                <span class="badge bg-success-subtle text-success">Onaylandı</span>
                            @elseif($employee->status == 'Beklemede')
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
        <form action="{{ route('employees.updateStatus', $employee->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <input type="hidden" name="status" value="Onaylandı">
            <button type="submit" class="dropdown-item">Onaylandı</button>
        </form>
    </li>

    <li>
        <form action="{{ route('employees.updateStatus', $employee->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <input type="hidden" name="status" value="Beklemede">
            <button type="submit" class="dropdown-item">Beklemede</button>
        </form>
    </li>

    <li>
        <form action="{{ route('employees.updateStatus', $employee->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <input type="hidden" name="status" value="Reddedildi">
            <button type="submit" class="dropdown-item">Reddedildi</button>
        </form>
    </li>

</ul>

    </div>

    <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-primary btn-sm">
        Detay
    </a>

    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning btn-sm">
        Düzenle
    </a>

    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;">
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