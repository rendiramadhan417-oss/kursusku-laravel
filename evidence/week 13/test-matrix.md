# Test Matrix Praktikum Pertemuan 13 -- KursusKu

**Nama project:** KursusKu\
**Fitur yang diuji:** Pencarian, filter status, dan pagination\
**Jumlah data uji:** 21 data kursus\
**Tanggal pengujian:** 22 November 2026

## A. Tabel Pengujian

  ------------------------------------------------------------------------------------------
  No.         Skenario         Langkah Pengujian      Hasil yang    Hasil Aktual Status
              Pengujian                               Diharapkan                 
  ----------- ---------------- ---------------------- ------------- ------------ -----------
  1           Pencarian tidak  Masukkan kata kunci    Pesan "Tidak  Pesan data   Lulus
              menemukan data   `KursusTidakAda123`,   ada data      tidak        
                               lalu klik Cari         kursus"       ditemukan    
                                                      ditampilkan   tampil       

  2           Filter status    Pilih status Open,     Hanya kursus  Pengujian    Lulus
              Open             lalu klik Cari         berstatus     telah        
                                                      Open yang     dilakukan;   
                                                      ditampilkan   hasil sesuai 

  3           Filter status    Pilih status Closed,   Hanya kursus  Pengujian    Lulus
              Closed           lalu klik Cari         berstatus     telah        
                                                      Closed yang   dilakukan;   
                                                      ditampilkan   hasil sesuai 

  4           Filter status    Pilih status Draft,    Hanya kursus  Pengujian    Lulus
              Draft            lalu klik Cari         berstatus     telah        
                                                      Draft yang    dilakukan;   
                                                      ditampilkan   hasil sesuai 

  5           Pagination       Buka daftar kursus     Data dibagi   Navigasi     Lulus
              dengan lebih     yang berisi 21 data    menjadi       halaman      
              dari 10 data                            beberapa      tampil       
                                                      halaman,                   
                                                      maksimal 10                
                                                      data per                   
                                                      halaman                    

  6           Membuka halaman  Klik Next atau halaman Data pada     Halaman      Lulus
              kedua            2                      halaman kedua kedua        
                                                      ditampilkan   berhasil     
                                                                    dibuka       

  7           Kombinasi        Isi kata kunci dan     Hasil         Belum diuji  Belum diuji
              pencarian dan    pilih salah satu       memenuhi kata              
              filter           status, lalu klik Cari kunci dan                  
                                                      status yang                
                                                      dipilih                    

  8           Mempertahankan   Lakukan                Parameter     Belum diuji  Belum diuji
              query saat       pencarian/filter yang  pencarian dan              
              pindah halaman   menghasilkan lebih     filter tetap               
                               dari 10 data, lalu     ada pada URL               
                               pindah halaman         dan hasil                  
  ------------------------------------------------------------------------------------------

## B. Kesimpulan Pengujian

Berdasarkan pengujian yang telah dilakukan, fitur pencarian tanpa hasil,
filter status, dan navigasi pagination telah berjalan sesuai hasil yang
diharapkan. Data kursus berjumlah 21 sehingga pembagian halaman dapat
diuji.

Pengujian kombinasi pencarian dengan filter serta pemeliharaan parameter
pencarian ketika berpindah halaman masih perlu dilakukan. Status
pengujian tersebut tidak dinyatakan lulus sebelum benar-benar diuji.

## C. Catatan Bukti Pengujian

Simpan screenshot berikut sebagai bukti praktikum:

1.  Halaman daftar kursus yang menampilkan data.
2.  Hasil pencarian `KursusTidakAda123` dengan pesan data tidak
    ditemukan.
3.  Hasil filter status Open, Closed, dan Draft.
4.  Halaman pertama yang menampilkan maksimal 10 data.
5.  Halaman kedua dengan navigasi pagination.
6.  URL halaman hasil pencarian/filter ketika berpindah halaman, setelah
    skenario tersebut diuji.

------------------------------------------------------------------------

**Catatan:** Jika hasil pengujian aktual berbeda, perbarui kolom Hasil
Aktual dan Status sesuai kondisi sebenarnya.
