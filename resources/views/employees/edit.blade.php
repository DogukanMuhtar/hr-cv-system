@extends('layouts.app')

@section('page-title', 'Çalışan Düzenle')

@section('page-actions')
<a href="{{ route('employees.index') }}" class="btn btn-secondary">
    Geri Dön
</a>
@endsection

@section('content')

@if($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="card">

    <div class="card-header">
        <h4 class="card-title mb-0">
            Çalışan Bilgilerini Düzenle
        </h4>
    </div>

    <div class="card-body">

        <form action="{{ route('employees.update', $employee) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="row">

                <div class="col-lg-6 mb-3">
                    <label class="form-label">Ad</label>
                    <input type="text"
                           class="form-control"
                           name="first_name"
                           value="{{ old('first_name', $employee->first_name) }}">
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="form-label">Soyad</label>
                    <input type="text"
                           class="form-control"
                           name="last_name"
                           value="{{ old('last_name', $employee->last_name) }}">
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="form-label">TC No</label>
                    <input type="text"
                           class="form-control"
                           name="tc_no"
                           value="{{ old('tc_no', $employee->tc_no) }}">
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="form-label">Telefon</label>
                    <input type="text"
                           class="form-control"
                           name="phone"
                           value="{{ old('phone', $employee->phone) }}">
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="form-label">E-Mail</label>
                    <input type="email"
                           class="form-control"
                           name="email"
                           value="{{ old('email', $employee->email) }}">
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="form-label">Meslek</label>
                    <input type="text"
                           class="form-control"
                           name="profession"
                           value="{{ old('profession', $employee->profession) }}">
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="form-label">Başvurulan Pozisyon</label>
                    <input type="text"
                           class="form-control"
                           name="position"
                           value="{{ old('position', $employee->position) }}">
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="form-label">Durum</label>

                    <select class="form-select" name="status">

                        <option value="Beklemede"
                            {{ old('status', $employee->status) == 'Beklemede' ? 'selected' : '' }}>
                            Beklemede
                        </option>

                        <option value="Onaylandı"
                            {{ old('status', $employee->status) == 'Onaylandı' ? 'selected' : '' }}>
                            Onaylandı
                        </option>

                        <option value="Reddedildi"
                            {{ old('status', $employee->status) == 'Reddedildi' ? 'selected' : '' }}>
                            Reddedildi
                        </option>

                    </select>
                </div>

                <div class="col-lg-6 mb-3">
    <label class="form-label">Görüşmeyi Yapan</label>

    <input type="text"
           class="form-control"
           name="interviewer"
           value="{{ old('interviewer', $employee->interviewer) }}"
           placeholder="Örn: Mehmet Yılmaz">
</div>

<div class="col-lg-6 mb-3">
    <label class="form-label">Görüşme Tarihi</label>

    <input type="date"
           class="form-control"
           name="interview_date"
           value="{{ old('interview_date', $employee->interview_date) }}">
</div>

                <div class="col-12 mb-4">
                    <label class="form-label">İK Notu</label>

                    <textarea class="form-control"
                              rows="5"
                              name="hr_note">{{ old('hr_note', $employee->hr_note) }}</textarea>
                </div>

            </div>

            <div class="text-end">

                <button type="submit" class="btn btn-warning px-5">
                    Güncelle
                </button>

            </div>

        </form>

    </div>

</div>

@endsection