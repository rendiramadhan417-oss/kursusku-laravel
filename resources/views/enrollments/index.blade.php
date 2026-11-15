```php
@extends('layouts.app')

@section('title', 'Laporan Enrollment - KursusKu')

@section('content')

<div class="card shadow border-0 rounded-4">

    <div class="card-header text-white p-3"
         style="background: linear-gradient(90deg, #312e81, #2563eb);">
        <h4 class="mb-0">Laporan Enrollment KursusKu</h4>
    </div>

    <div class="card-body p-4">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">Data Pendaftaran Peserta</h5>

            <a href="{{ route('enrollments.create') }}"
               class="btn text-white fw-bold"
               style="background: #4338ca;">
                + Tambah Enrollment
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">

                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Nama Peserta</th>
                        <th>Nama Kursus</th>
                        <th>Tanggal Mulai</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($enrollments as $enrollment)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>
                                {{ $enrollment->participant->name ?? '-' }}
                            </td>

                            <td>
                                {{ $enrollment->course->name ?? '-' }}
                            </td>

                            <td>
                                {{ $enrollment->course?->start_date?->format('d-m-Y') ?? '-' }}
                            </td>

                            <td>
                                <span class="badge bg-success">
                                    {{ $enrollment->status }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">
                                Belum ada enrollment.
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>

    </div>
</div>

@endsection
```