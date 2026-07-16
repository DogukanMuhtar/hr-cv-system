@extends('layouts.user')

@section('page-title', 'Yeni Stajyer Başvurusu')

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

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="card">

    <div class="card-header">
        <h4 class="card-title mb-0">
            Stajyer Bilgileri
        </h4>
    </div>

    <div class="card-body">

       <form action="{{ route('intern.apply') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="row">

                <div class="col-lg-6 mb-3">
                    <label class="form-label">Ad</label>
                    <input type="text"
                           class="form-control"
                           name="first_name"
                           value="{{ old('first_name') }}"
                           placeholder="Adınızı giriniz">
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="form-label">Soyad</label>
                    <input type="text"
                           class="form-control"
                           name="last_name"
                           value="{{ old('last_name') }}"
                           placeholder="Soyadınızı giriniz">
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="form-label">TC No</label>
                    <input type="text"
                           class="form-control"
                           name="tc_no"
                           value="{{ old('tc_no') }}"
                           placeholder="TC No">
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="form-label">Telefon</label>
                    <input type="text"
                           class="form-control"
                           name="phone"
                           value="{{ old('phone') }}"
                           placeholder="Telefon">
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="form-label">E-Mail</label>
                    <input type="email"
                           class="form-control"
                           name="email"
                           value="{{ old('email') }}"
                           placeholder="E-Mail">
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="form-label">Üniversite</label>
                    <input type="text"
                           class="form-control"
                           name="university"
                           value="{{ old('university') }}"
                           placeholder="Üniversitenizi giriniz">
                </div>

                <div class="col-lg-6 mb-3">
                    <label class="form-label">Bölüm</label>
                    <input type="text"
                           class="form-control"
                           name="department"
                           value="{{ old('department') }}"
                           placeholder="Okuduğunuz bölümü giriniz">
                </div>
                <div class="col-lg-6 mb-3">
    <label class="form-label">Sınıf</label>
    <input
        type="text"
        class="form-control"
        name="grade"
        value="{{ old('grade') }}"
        placeholder="Örn: 3. Sınıf">
</div>

<div class="col-lg-6 mb-3">
    <label class="form-label">Staj Türü</label>
    <input
        type="text"
        class="form-control"
        name="internship_type"
        value="{{ old('internship_type') }}"
        placeholder="Örn: Zorunlu / Gönüllü">
</div>

<div class="col-lg-6 mb-3">
    <label class="form-label">Staj Süresi</label>
    <input
        type="text"
        class="form-control"
        name="internship_duration"
        value="{{ old('internship_duration') }}"
        placeholder="Örn: 20 İş Günü">
</div>
                <div class="col-lg-6 mb-3">
            <label class="form-label">Durum</label>

            <select class="form-select" name="status">
                <option value="Beklemede">Beklemede</option>
                <option value="Onaylandı">Onaylandı</option>
                <option value="Reddedildi">Reddedildi</option>
            </select>
        </div>

        <div class="col-lg-6 mb-3">
            <label class="form-label">Görüşmeyi Yapan</label>

            <input type="text"
                class="form-control"
                name="interviewer"
                value="{{ old('interviewer') }}"
                placeholder="Görüşmeyi yapan kişi">
        </div>

        <div class="col-lg-6 mb-3">
            <label class="form-label">Görüşme Tarihi</label>

            <input type="date"
                class="form-control"
                name="interview_date"
                value="{{ old('interview_date') }}">
        </div>
        
                <div class="col-12 mb-4">
                    <label class="form-label">CV (PDF)</label>

                    <input type="file"
                           class="form-control"
                           name="cv_path"
                           accept=".pdf">
                </div>

            </div>

            <div class="text-end">

                <button type="submit" class="btn btn-success px-5">
                    Başvuruyu Kaydet
                </button>

            </div>

        </form>

    </div>

</div>

@endsection