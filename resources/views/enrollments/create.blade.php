```php
@extends('layouts.app')

@section('title', 'Tambah Enrollment - KursusKu')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card shadow border-0 rounded-4">

            <div class="card-header text-white p-3"
                 style="background: linear-gradient(90deg, #312e81, #2563eb);">
                <h4 class="mb-0">Tambah Enrollment</h4>
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

                <form action="{{ route('enrollments.store') }}" method="POST">
                    @csrf

                    {{-- Pilihan Peserta --}}
                    <div class="mb-3">
                        <label for="participant_id" class="form-label">
                            Nama Peserta
                        </label>

                        <select name="participant_id"
                                id="participant_id"
                                class="form-select"
                                required>

                            <option value="">-- Pilih Peserta --</option>

                            @foreach($participants as $participant)
                                <option value="{{ $participant->id }}"
                                    @selected(old('participant_id') == $participant->id)>
                                    {{ $participant->name }} - {{ $participant->email }}
                                </option>
                            @endforeach

                        </select>

                        @error('participant_id')
                            <div class="text-danger small mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Pilihan Kursus --}}
                    <div class="mb-3">
                        <label for="course_id" class="form-label">
                            Pilih Kursus
                        </label>

                        <select name="course_id"
                                id="course_id"
                                class="form-select"
                                required>

                            <option value="">-- Pilih Kursus --</option>

                            @foreach($courses as $course)
                                <option value="{{ $course->id }}"
                                    @selected(old('course_id') == $course->id)>
                                    {{ $course->code }} - {{ $course->name }}
                                </option>
                            @endforeach

                        </select>

                        @error('course_id')
                            <div class="text-danger small mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Informasi Status --}}
                    <div class="alert alert-info">
                        <strong>Informasi:</strong>
                        Status pendaftaran akan otomatis diatur menjadi
                        <strong>registered</strong>.
                    </div>

                    {{-- Tombol --}}
                    <div class="d-flex gap-2">
                        <button type="submit"
                                class="btn text-white fw-bold"
                                style="background: #4338ca;">
                            Simpan Enrollment
                        </button>

                        <a href="{{ route('enrollments.index') }}"
                           class="btn btn-outline-secondary">
                            Kembali
                        </a>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>
@endsection
```