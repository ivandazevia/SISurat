# SISurat
Sistem Informasi Surat Menyurat

Cara Menjalankan:
1. Pastikan pada laptop/komputer anda sudah terinstall Laravel.
2. Unduh source code SISurat
3. Buat database baru dengan nama **sisurat**
4. Copy dan jalankan query yang ada pada file **sisurat.sql**
5. Buka cmd, jalankan sintaks berikut **composer install**
6. Kemudian jalankan **copy .env.example .env**, setelah tercopy sesuaikan koneksi database yang ada pada file **.env**
7. Jalankan **php artisan key:generate**
8. Jalankan **php artisan migrate**
9. Jalankan **php artisan db:seed**
10. Jalankan **php artisan serve**
11. SI Surat dapat diakses pada alamat ** localhost:8000** atau **127.0.0.1:8000**



Sistem ini memiliki 2 level user, yaitu level administrator dan user biasa. Masing-masing level memiliki fitur yang berbeda, fitur tersebut antara lain:
1.	Account administrator
- Mengelola user account (create, update, delete)
- Mengelola data departemen/bagian (create, update, delete)
- Mengelola data jabatan (create, update, delete)
- Mengelola data surat masuk dan keluar perusahaan (create, update, delete)
- Melihat data system informasi yang telah tersimpan secara keseluruhan
- Melihat system log atau histori untuk mengetahui kapan terakhir informasi dalam system berubah.
- Melakukan export atau menyimpan laporan yang berisikan informasi data-data surat masuk.

2.	User

User biasa
-	Melihat surat masuk yang didisposisikan kepada user tersebut.
-	Melakukan aksi terhadap surat disposisi yang dating kepada user tersebut.
-	Melakukan perubahan profil account miliknya.
-	Perubahan password untuk login ke system.
-	Melihat histori surat yang telah didisposisikan maupun telah diterima.

User dengan jabatan sekretaris
-	Melihat surat masuk yang didisposisikan kepada user tersebut.
-	Melakukan aksi terhadap surat disposisi yang dating kepada user tersebut.
-	Melakukan perubahan profil account miliknya.
-	Perubahan password untuk login ke system.
-	Melihat histori surat yang telah didisposisikan maupun telah diterima.
-	Input surat internal dan keluar dari bagian/departemen di tempat dia menjabat.
-	Melakukan perubahan data surat internal dan keluar.
-	Melihat histori arsip surat internal dan keluar

Berikut terlampir beberapa contoh tampilan dari SI Surat:
![image](https://user-images.githubusercontent.com/32997439/196529000-745cd197-f3c1-468f-a033-abeae7e21aaa.png)
<sub><p align="center">Halaman Login</p></sub>

![image](https://user-images.githubusercontent.com/32997439/196529306-66366591-26b9-4189-bd98-e820209883af.png)
<sub><p align="center">Halaman Dashboard</p></sub>

![image](https://user-images.githubusercontent.com/32997439/196529480-d30849eb-5e52-48fc-8fe2-93d515598a79.png)
<sub><p align="center">Halaman Manage User</p></sub>

![image](https://user-images.githubusercontent.com/32997439/196529569-5e67e681-5371-491d-a737-16a7670f8b72.png)
<sub><p align="center">Halaman Manage Bagian</p></sub>

![image](https://user-images.githubusercontent.com/32997439/196529719-73bbd7f7-2cc0-4d06-b3d2-7d320dd3efac.png)
<sub><p align="center">Halaman Manage Jabatan</p></sub>

![image](https://user-images.githubusercontent.com/32997439/196529794-867ee533-d11e-4f19-9e60-92d0c574fb37.png)
<sub><p align="center">Halaman Manage Root Jabatan</p></sub>

![image](https://user-images.githubusercontent.com/32997439/196529901-74672cf6-fa42-4324-a635-3b5286b427e5.png)
<sub><p align="center">Halaman Manage Surat Eksternal</p></sub>

![image](https://user-images.githubusercontent.com/32997439/196529994-490b2dd4-b1c9-40ba-8f1a-cf8f7f112ad5.png)
<sub><p align="center">Halaman Manage Surat Internal</p></sub>

![image](https://user-images.githubusercontent.com/32997439/196530132-79e9fb3c-4594-4096-9c54-cd677e0745b0.png)
<sub><p align="center">Halaman Manage Disposisi</p></sub>

![image](https://user-images.githubusercontent.com/32997439/196530240-1ef22d48-358c-472d-b920-14d437d0ab7c.png)
<sub><p align="center">Halaman Cetak Laporan Surat</p></sub>

![image](https://user-images.githubusercontent.com/32997439/196530327-62e21950-dadd-46d0-bf47-1129e8de630c.png)
<sub><p align="center">Halaman Profil User</p></sub>
