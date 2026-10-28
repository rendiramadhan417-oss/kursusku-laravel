```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kursusku</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #dbeafe, #ede9fe, #ffffff);
            color: #111827;
        }

        nav {
            background: linear-gradient(120deg, #1e3a8a, #5b21b6);
            color: white;
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        nav h2 {
            margin: 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 18px;
            font-weight: bold;
        }

        .hero {
            max-width: 1100px;
            margin: 60px auto;
            padding: 55px 30px;
            text-align: center;
            background: white;
            border-radius: 20px;
            box-shadow: 0 12px 35px rgba(91, 33, 182, .12);
        }

        .hero h1 {
            color: #5b21b6;
            font-size: 42px;
        }

        .hero p {
            color: #64748b;
            line-height: 1.8;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 13px 24px;
            background: linear-gradient(120deg, #2563eb, #6d28d9);
            color: white;
            text-decoration: none;
            border-radius: 9px;
            font-weight: bold;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #111827;
            color: white;
        }

        @media (max-width: 600px) {
            .hero {
                margin: 25px 15px;
                padding: 35px 20px;
            }

            .hero h1 {
                font-size: 30px;
            }

            nav a {
                margin-left: 0;
                margin-right: 12px;
            }
        }
    </style>
</head>

<body>
    <nav>
        <h2>Kursusku</h2>

        <div>
            <a href="/">Beranda</a>
            <a href="{{ route('enrollments.create') }}">Pendaftaran</a>
        </div>
    </nav>

    <main class="hero">
        <h1>Selamat Datang di Kursusku</h1>

        <p>
            Tingkatkan kemampuan dan pengetahuan kamu melalui
            berbagai pilihan kursus yang tersedia.
        </p>

        <p>
            Mulai belajar pemrograman web, PHP, dan Laravel
            bersama Kursusku.
        </p>

        <a href="{{ route('enrollments.create') }}" class="btn">
            Daftar Kursus Sekarang
        </a>
    </main>

    <footer>
        &copy; {{ date('Y') }} Kursusku. Semua hak dilindungi.
    </footer>
</body>
</html>
```