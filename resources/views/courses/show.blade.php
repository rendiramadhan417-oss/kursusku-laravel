@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2>Detail Kursus</h2>

    <div class="card mt-3">
        <div class="card-body">
            <h4>{{ $course->name }}</h4>

            <p><strong>Kode:</strong> {{ $course->code }}</p>
            <p><strong>Deskripsi:</strong> {{ $course->description ?? '-' }}</p>
            <p><strong>Biaya:</strong> Rp{{ number_format($course->fee, 0, ',', '.') }}</p>
            <p><strong>Kuota:</strong> {{ $course->quota }}</p>
            <p><strong>Tanggal Mulai:</strong> {{ $course->start_date->format('d-m-Y') }}</p>
            <p><strong>Status:</strong> {{ ucfirst($course->status) }}</p>

            <a href="{{ route('courses.index') }}" class="btn btn-secondary">
                Kembali
            </a>
        </div>
    </div>
</div>
@endsection