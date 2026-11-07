
@extends('layouts.app')

@section('content')
<div class="container py-4">

    <div class="mb-4">
        <h2>Tambah Kursus</h2>
        <p class="text-muted">Masukkan informasi kursus baru.</p>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            <form action="{{ route('courses.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Kode Kursus</label>
                    <input type="text" name="code"
                        class="form-control"
                        value="{{ old('code') }}"
                        placeholder="Contoh: WEB-101">
                    @error('code')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Kursus</label>
                    <input type="text" name="name"
                        class="form-control"
                        value="{{ old('name') }}"
                        placeholder="Masukkan nama kursus">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="description" class="form-control"
                        rows="3">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Biaya Kursus</label>
                    <input type="number" name="fee"
                        class="form-control"
                        value="{{ old('fee', 0) }}">
                    @error('fee')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Kuota</label>
                    <input type="number" name="quota"
                        class="form-control"
                        value="{{ old('quota', 20) }}">
                    @error('quota')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Mulai</label>
                    <input type="date" name="start_date"
                        class="form-control"
                        value="{{ old('start_date') }}">
                    @error('start_date')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Status Kursus</label>
                    <select name="status" class="form-select">
                        <option value="draft">Draft</option>
                        <option value="open">Open</option>
                        <option value="closed">Closed</option>
                    </select>
                    @error('status')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan Kursus
                </button>

                <a href="{{ route('courses.index') }}"
                    class="btn btn-secondary">
                    Kembali
                </a>

            </form>
        </div>
    </div>

</div>
@endsection
