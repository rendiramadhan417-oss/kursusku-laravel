
<nav class="navbar navbar-expand-lg navbar-dark"
     style="background: #080b18;">
    <div class="container">

        <!-- Logo kiri dan nama KursusKu -->
        <a class="navbar-brand d-flex align-items-center gap-2"
           href="{{ route('home') }}">
            <img src="{{ asset('images/kursusku-logo.png') }}"
                 alt="Logo KursusKu"
                 style="width: 50px; height: 50px; object-fit: contain;">

            <span class="fw-bold fs-4">
                Kursus<span style="color: #6366f1;">Ku</span>
            </span>
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        Beranda
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('enrollments.create') }}">
                        Pendaftaran
                    </a>
                </li>
            </ul>
        </div>

        <!-- Logo kanan -->
        <img src="{{ asset('images/kursusku-logo.png') }}"
             alt="Logo KursusKu"
             class="ms-3"
             style="width: 55px; height: 55px; object-fit: contain;">

    </div>
</nav>
