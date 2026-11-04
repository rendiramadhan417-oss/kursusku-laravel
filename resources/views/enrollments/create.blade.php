
@extends('layouts.app')

@section('title', 'Pendaftaran Kursus - Kursusku')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card shadow border-0 rounded-4">

            <div class="card-header text-white p-3"
                 style="background: linear-gradient(90deg, #312e81, #2563eb);">
                <h4 class="mb-0">Form Pendaftaran Kursus</h4>
            </div>

            <div class="card-body p-4">

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('enrollments.preview') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text"
                               name="name"
                               class="form-control"
                               placeholder="Masukkan nama lengkap"
                               value="{{ old('name') }}"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email"
                               name="email"
                               class="form-control"
                               placeholder="Masukkan email"
                               value="{{ old('email') }}"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Pilih Kursus</label>

                        <select name="course_code"
                                id="courseSelect"
                                class="form-select"
                                required>

                            <option value="">-- Pilih Kursus --</option>

                            <option value="WEB-01" data-course-id="1"
                                {{ old('course_code') == 'WEB-01' ? 'selected' : '' }}>
                                Web Dasar
                            </option>

                            <option value="PHP-01" data-course-id="2"
                                {{ old('course_code') == 'PHP-01' ? 'selected' : '' }}>
                                PHP Dasar
                            </option>

                            <option value="LAR-01" data-course-id="3"
                                {{ old('course_code') == 'LAR-01' ? 'selected' : '' }}>
                                Laravel Dasar
                            </option>

                        </select>

                        <div id="availability" class="mt-2 text-primary fw-bold">
                            Silakan pilih kursus untuk melihat sisa kursi.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jenis Peserta</label>
                        <select name="participant_type" class="form-select" required>
                            <option value="">-- Pilih Jenis Peserta --</option>
                            <option value="Mahasiswa">Mahasiswa</option>
                            <option value="Umum">Umum</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Metode Pembelajaran</label>
                        <select name="learning_mode" class="form-select" required>
                            <option value="">-- Pilih Metode --</option>
                            <option value="Online">Online</option>
                            <option value="Offline">Offline</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jumlah Paket</label>
                        <input type="number"
                               name="package_count"
                               class="form-control"
                               min="1"
                               value="1"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Catatan</label>
                        <textarea name="notes"
                                  class="form-control"
                                  rows="3"
                                  placeholder="Catatan tambahan">{{ old('notes') }}</textarea>
                    </div>

                    <button type="submit"
                            class="btn text-white w-100 fw-bold"
                            style="background: #4338ca;">
                        Lanjutkan Pendaftaran
                    </button>

                </form>

            </div>
        </div>

    </div>
</div>

@endsection
