@extends('layouts.app')

@section('page-title', 'Stajyer Düzenle')

@section('page-actions')
<a href="{{ route('interns.index') }}" class="btn btn-secondary">
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
        <h4 class="card-title mb-0">Stajyer Bilgilerini Düzenle</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('interns.update',$intern) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="row">

                <div class="col-lg-6 mb-3">
                    <label class="form-label">Ad</label>
                    <input type="text" class="form-control" name="first_name"
                        value="{{ old('first_name',$intern->first_name) }}">
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="form-label">Soyad</label>
                    <input type="text" class="form-control" name="last_name"
                        value="{{ old('last_name',$intern->last_name) }}">
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="form-label">TC No</label>
                    <input type="text" class="form-control" name="tc_no"
                        value="{{ old('tc_no',$intern->tc_no) }}">
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="form-label">Telefon</label>
                    <input type="text" class="form-control" name="phone"
                        value="{{ old('phone',$intern->phone) }}">
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="form-label">E-Mail</label>
                    <input type="email" class="form-control" name="email"
                        value="{{ old('email',$intern->email) }}">
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="form-label">Üniversite</label>
                    <input type="text" class="form-control" name="university"
                        value="{{ old('university',$intern->university) }}">
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="form-label">Bölüm</label>
                    <input type="text" class="form-control" name="department"
                        value="{{ old('department',$intern->department) }}">
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="form-label">Sınıf</label>
                    <input type="text" class="form-control" name="grade"
                        value="{{ old('grade',$intern->grade) }}">
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="form-label">Staj Türü</label>
                    <input type="text" class="form-control" name="internship_type"
                        value="{{ old('internship_type',$intern->internship_type) }}">
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="form-label">Staj Süresi</label>
                    <input type="text" class="form-control" name="internship_duration"
                        value="{{ old('internship_duration',$intern->internship_duration) }}">
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="form-label">Durum</label>

                    <select class="form-select" name="status">

                        <option value="Beklemede" {{ old('status',$intern->status)=='Beklemede'?'selected':'' }}>Beklemede</option>

                        <option value="Onaylandı" {{ old('status',$intern->status)=='Onaylandı'?'selected':'' }}>Onaylandı</option>

                        <option value="Reddedildi" {{ old('status',$intern->status)=='Reddedildi'?'selected':'' }}>Reddedildi</option>

                    </select>

                </div>

                
                
                
                <div class="col-12 mb-4">

                    <label class="form-label">İK Notu</label>

                    <textarea class="form-control" rows="5"
                        name="hr_note">{{ old('hr_note',$intern->hr_note) }}</textarea>

                </div>

            </div>

            <div class="text-end">

                <button class="btn btn-warning px-5">
                    Güncelle
                </button>

            </div>

        </form>

    </div>

</div>

<div class="card mt-4">

    <div class="card-header">
        <h4 class="card-title mb-0">
            Yeni Görüşme Ekle
        </h4>
    </div>

    <div class="card-body">

        <form method="POST"
              action="{{ route('interns.interviews.store', $intern) }}">

            @csrf

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label for="interviewer" class="form-label">
                        Görüşmeyi Yapan
                    </label>

                    <input
                        type="text"
                        name="interviewer"
                        id="interviewer"
                        class="form-control"
                        required
                    >

                </div>

                <div class="col-md-6 mb-3">

                    <label for="interview_date" class="form-label">
                        Görüşme Tarihi
                    </label>

                    <input
                        type="date"
                        name="interview_date"
                        id="interview_date"
                        class="form-control"
                        required
                    >

                </div>

            </div>

            <button type="submit" class="btn btn-primary">
                Görüşme Ekle
            </button>

        </form>

    </div>

</div>

@endsection