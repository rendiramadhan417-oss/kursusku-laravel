@extends('layouts.app')

@section('content')
<div class="container py-4">

    {{-- Judul halaman --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2>Daftar Kursus</h2>
            <p class="text-muted">Kelola data kursus KursusKu.</p>
        </div>

        <a href="{{ route('courses.create') }}" class="btn btn-primary">
            + Tambah Kursus
        </a>
    </div>

    {{-- Notifikasi berhasil --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Pencarian dan filter --}}
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form action="{{ route('courses.index') }}" method="GET">
                <div class="row g-3">

                    <div class="col-md-6">
                        <label for="q" class="form-label">
                            Cari Kursus
                        </label>

                        <input
                            type="text"
                            name="q"
                            id="q"
                            class="form-control"
                            placeholder="Masukkan kode atau nama kursus..."
                            value="{{ $search ?? '' }}"
                        >
                    </div>

                    <div class="col-md-4">
                        <label for="status" class="form-label">
                            Filter Status
                        </label>

                        <select name="status" id="status" class="form-select">
                            <option value="">Semua Status</option>

                            <option value="open"
                                {{ ($status ?? '') == 'open' ? 'selected' : '' }}>
                                Open
                            </option>

                            <option value="closed"
                                {{ ($status ?? '') == 'closed' ? 'selected' : '' }}>
                                Closed
                            </option>

                            <option value="draft"
                                {{ ($status ?? '') == 'draft' ? 'selected' : '' }}>
                                Draft
                            </option>
                        </select>
                    </div>

                    <div class="col-md-2 d-flex align-items-end">
                        <button type="submit" class="btn btn-primary w-100">
                            Cari
                        </button>
                    </div>

                </div>

                <div class="mt-3">
                    <a href="{{ route('courses.index') }}"
                       class="btn btn-secondary btn-sm">
                        Reset Pencarian
                    </a>
                </div>
            </form>
        </div>
    </div>

    {{-- Tabel kursus --}}
    <div class="card shadow-sm">
        <div class="card-body">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">Data Kursus</h5>

                <span class="text-muted">
                    Total: {{ $courses->total() }} data
                </span>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">

                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama Kursus</th>
                            <th>Biaya</th>
                            <th>Kuota</th>
                            <th>Tanggal Mulai</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($courses as $course)
                            <tr>
                                <td>
                                    {{ $courses->firstItem() + $loop->index }}
                                </td>

                                <td>{{ $course->code }}</td>

                                <td>
                                    <a href="{{ route('courses.show', $course->id) }}">
                                        {{ $course->name }}
                                    </a>
                                </td>

                                <td>
                                    Rp {{ number_format($course->fee, 0, ',', '.') }}
                                </td>

                                <td>{{ $course->quota }}</td>

                                <td>
                                    {{ $course->start_date
                                        ? $course->start_date->format('d-m-Y')
                                        : '-' }}
                                </td>

                                <td>
                                    @if ($course->status == 'open')
                                        <span class="badge bg-success">Open</span>
                                    @elseif ($course->status == 'closed')
                                        <span class="badge bg-danger">Closed</span>
                                    @else
                                        <span class="badge bg-secondary">Draft</span>
                                    @endif
                                </td>

                                <td>
                                    <a href="{{ route('courses.edit', $course->id) }}"
                                       class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <form
                                        action="{{ route('courses.destroy', $course->id) }}"
                                        method="POST"
                                        class="d-inline"
                                        onsubmit="return confirm('Yakin ingin menghapus kursus ini?')">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger btn-sm">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="8" class="text-center py-4">
                                    <strong>Tidak ada data kursus.</strong>
                                    <p class="text-muted mb-0">
                                        Coba ubah kata kunci pencarian atau filter status.
                                    </p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>

            {{-- Pagination Bootstrap 5 --}}
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mt-3">

                <div class="text-muted small">
                    Menampilkan
                    {{ $courses->firstItem() ?? 0 }}
                    sampai
                    {{ $courses->lastItem() ?? 0 }}
                    dari
                    {{ $courses->total() }} data
                </div>

                <div>
                    {{ $courses->links('pagination::bootstrap-5') }}
                </div>

            </div>

        </div>
    </div>

</div>
@endsection
