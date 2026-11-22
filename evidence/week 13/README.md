\# WEEK 13 — SEARCH, FILTER, DAN PAGINATION

\## Project KursusKu



\### 1. Tujuan Kegiatan



Pada Week 13, dilakukan pengembangan fitur pencarian, penyaringan data, dan pagination pada aplikasi KursusKu. Pengembangan ini bertujuan memudahkan pengguna dalam menemukan dan mengelola informasi kursus.



\### 2. Fitur yang Dikembangkan



Beberapa fitur yang dikembangkan meliputi:



1\. \*\*Search Kursus\*\*  

&#x20;  Pencarian data kursus berdasarkan kode dan nama kursus.



2\. \*\*Filter Status\*\*  

&#x20;  Penyaringan data berdasarkan status Open, Closed, dan Draft.



3\. \*\*Pagination\*\*  

&#x20;  Pembagian data menjadi beberapa halaman dengan maksimal 10 data pada setiap halaman.



4\. \*\*Query String\*\*  

&#x20;  Mempertahankan parameter pencarian dan filter ketika pengguna berpindah halaman.



5\. \*\*Empty Result\*\*  

&#x20;  Menampilkan pesan "Data Tidak Ditemukan" apabila hasil pencarian kosong.



6\. \*\*Reset Pencarian\*\*  

&#x20;  Mengembalikan tampilan ke seluruh data kursus.



\### 3. Implementasi Teknis



Pengembangan dilakukan pada file `CourseController.php` dan `resources/views/courses/index.blade.php`.



Pada bagian controller, pencarian dilakukan menggunakan kolom `code` dan `name`. Filter status menggunakan pilihan Open, Closed, dan Draft.



Pagination menggunakan kode:



```php

\->paginate(10)

\->withQueryString();

```



Fitur pencarian dan filter menggunakan metode GET sehingga tetap dapat digunakan tanpa JavaScript.



\### 4. Hasil Pengujian



Berdasarkan pengujian aplikasi, diperoleh hasil berikut:



| No. | Pengujian | Hasil |

|---|---|---|

| 1 | Tampilan daftar kursus | Berhasil |

| 2 | Search berdasarkan kode | Berhasil |

| 3 | Search berdasarkan nama | Berhasil |

| 4 | Filter Open | Berhasil |

| 5 | Filter Closed | Berhasil |

| 6 | Filter Draft | Berhasil |

| 7 | Pagination halaman 1, 2, dan 3 | Berhasil |

| 8 | Pencarian tanpa hasil | Berhasil |

| 9 | Reset pencarian | Berhasil |

| 10 | Query string saat berpindah halaman | Berhasil |



\### 5. Dokumentasi Screenshot



Dokumentasi pengujian disimpan dalam folder `screenshots`, meliputi:



\- `01-course-index.png` — Tampilan halaman daftar kursus.

\- `02-search-zero-result.png` — Tampilan ketika pencarian tidak menemukan data.

\- `03-pagination-query-filter.png` — Pagination dengan parameter filter tetap terbawa.

\- `04-course-controller-index.png` — Implementasi fungsi index pada CourseController.

\- `05-test-matrix.png` — Dokumentasi tabel pengujian.



\### 6. Network Evidence



Network Evidence tidak dilampirkan karena fitur pencarian dan filter pada aplikasi KursusKu menggunakan metode GET biasa, bukan AJAX. Oleh karena itu, pengujian dilakukan melalui pengiriman form dan pemuatan halaman secara normal pada browser.



\### 7. Kesimpulan



Berdasarkan hasil pengembangan dan pengujian Week 13, fitur pencarian, filter status, pagination, query string, dan penanganan hasil pencarian kosong telah berjalan sesuai dengan tujuan pengembangan.



Dengan adanya fitur tersebut, pengelolaan dan pencarian data kursus pada aplikasi KursusKu menjadi lebih mudah dan terstruktur.

