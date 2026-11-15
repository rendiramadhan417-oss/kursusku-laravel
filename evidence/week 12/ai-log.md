# AI Usage Log – Praktikum Pertemuan 12

**Nama Proyek:** KursusKu  
**Materi:** Relasi Antar Tabel, Enrollment, dan Cascade Delete  
**Framework:** Laravel 13  
**Database:** MySQL  

## 1. Tujuan Penggunaan AI

AI digunakan sebagai asisten untuk membantu memahami materi praktikum, memberikan arahan implementasi kode Laravel, memperbaiki kesalahan, dan membantu proses pengujian fitur enrollment.

## 2. Riwayat Penggunaan AI

| No. | Aktivitas | Bantuan AI |
|---|---|---|
| 1 | Membuat migration participants | Membantu menyusun struktur tabel peserta beserta kolom nama, email, dan nomor telepon. |
| 2 | Membuat migration enrollments | Membantu membuat relasi foreign key antara tabel participants dan courses. |
| 3 | Mengatur cascade delete | Menjelaskan penggunaan cascadeOnDelete() agar data enrollment terhapus ketika peserta atau kursus dihapus. |
| 4 | Membuat model Participant | Membantu mengatur relasi hasMany dan belongsToMany. |
| 5 | Membuat model Enrollment | Membantu mengatur relasi belongsTo dengan Participant dan Course. |
| 6 | Memperbarui model Course | Membantu menambahkan relasi enrollment dan participant. |
| 7 | Membuat EnrollmentController | Membantu menyusun fungsi index(), create(), dan store(). |
| 8 | Validasi enrollment | Membantu membuat validasi agar peserta tidak mendaftar pada kursus yang sama lebih dari satu kali. |
| 9 | Membuat form enrollment | Membantu menyusun tampilan formulir pendaftaran peserta kursus. |
| 10 | Menguji duplicate enrollment | Membantu menjelaskan cara menguji penolakan pendaftaran ganda. |
| 11 | Menguji cascade delete | Membantu menyusun pengujian penghapusan enrollment ketika course atau participant dihapus. |

## 3. Contoh Prompt yang Digunakan

- Bagaimana cara membuat migration tabel participants dan enrollments di Laravel?
- Bagaimana cara menghubungkan tabel enrollments dengan participants dan courses?
- Bagaimana cara menggunakan cascadeOnDelete()?
- Bagaimana cara membuat validasi agar peserta tidak mendaftar pada kursus yang sama dua kali?
- Bagaimana cara menguji cascade delete menggunakan Laravel Tinker?

## 4. Hasil Penggunaan AI

Dengan bantuan AI, proses pengerjaan praktikum menjadi lebih terarah. Fitur enrollment berhasil dibuat, relasi antar tabel dapat diterapkan, validasi pendaftaran ganda disiapkan, dan pengujian cascade delete berhasil dilakukan berdasarkan hasil pengujian.

## 5. Evaluasi

AI digunakan sebagai alat bantu pembelajaran dan pemecahan masalah. Setiap kode yang diberikan diperiksa dan disesuaikan dengan struktur proyek KursusKu, kemudian dijalankan dan diuji secara langsung.

**Kesimpulan:** Penggunaan AI membantu memahami implementasi relasi database dan fitur enrollment pada Laravel, tetapi proses penerapan dan pengujian tetap dilakukan secara langsung pada proyek.