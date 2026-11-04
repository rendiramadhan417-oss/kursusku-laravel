
@extends('layouts.app')

@section('title', 'Beranda - KursusKu Informatika Rendy')

@section('content')

<!-- HERO / BAGIAN SAMBUTAN -->
<div class="p-4 p-md-5 mb-4 rounded-4 text-white"
     style="background: linear-gradient(120deg, #080b18, #312e81, #2563eb);">

    <div class="row align-items-center g-4">

        <!-- LOGO KIRI -->
        <div class="col-md-2 text-center">
            <img src="{{ asset('images/kursusku-logo.png') }}"
                 alt="Logo KursusKu"
                 style="width: 140px; height: 140px; object-fit: contain;">
        </div>

        <!-- TULISAN TENGAH -->
        <div class="col-md-6">
            <h1 class="fw-bold">
                Selamat Datang di KURSUSKU
            </h1>

            <h4 class="fw-semibold" style="color: #c4b5fd;">
                Informatika Rendy
            </h4>

            <p class="mb-0">
                Platform Pembelajaran Teknologi dan Informatika.
                Tingkatkan kemampuanmu bersama KursusKu.
            </p>
        </div>

        <!-- BANNER KANAN -->
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/kursusku-banner.png') }}"
                 alt="Banner KursusKu"
                 class="img-fluid rounded-4"
                 style="width: 100%; max-height: 240px; object-fit: contain;">
        </div>

    </div>

    <hr class="border-light opacity-25 my-4">

    <p class="fs-5">
        Tingkatkan kemampuan dan pengetahuan melalui berbagai
        pilihan kursus yang tersedia.
    </p>

    <a href="{{ route('enrollments.create') }}"
       class="btn btn-light text-primary fw-bold px-4">
        Daftar Sekarang
    </a>

</div>

<!-- PILIHAN KURSUS -->
<h3 class="fw-bold mb-4">Pilihan Kursus</h3>

<div class="row g-4">

    <!-- WEB DASAR -->
    <div class="col-md-4">
        <div class="card shadow-sm border-0 h-100 rounded-4">
            <div class="card-body p-4">
                <h5 class="fw-bold">Web Dasar</h5>
                <p class="text-secondary">
                    Pelajari dasar pembuatan website menggunakan
                    HTML, CSS, dan JavaScript.
                </p>

                <a href="{{ route('enrollments.create') }}"
                   class="btn btn-outline-primary">
                    Lihat Kursus
                </a>
            </div>
        </div>
    </div>

    <!-- PHP DASAR -->
    <div class="col-md-4">
        <div class="card shadow-sm border-0 h-100 rounded-4">
            <div class="card-body p-4">
                <h5 class="fw-bold">PHP Dasar</h5>
                <p class="text-secondary">
                    Pelajari pemrograman PHP untuk membangun
                    website yang dinamis.
                </p>

                <a href="{{ route('enrollments.create') }}"
                   class="btn btn-outline-primary">
                    Lihat Kursus
                </a>
            </div>
        </div>
    </div>

    <!-- LARAVEL DASAR -->
    <div class="col-md-4">
        <div class="card shadow-sm border-0 h-100 rounded-4">
            <div class="card-body p-4">
                <h5 class="fw-bold">Laravel Dasar</h5>
                <p class="text-secondary">
                    Pelajari framework Laravel untuk membuat
                    aplikasi web modern.
                </p>

                <a href="{{ route('enrollments.create') }}"
                   class="btn btn-outline-primary">
                    Lihat Kursus
                </a>
            </div>
        </div>
    </div>

</div>

@endsection
