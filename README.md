# Sistem Manajemen Lab dan Alat

Sistem Manajemen Lab dan Alat adalah proyek akademik berupa aplikasi web untuk membantu proses pengelolaan peminjaman laboratorium dan alat kampus secara digital. Sistem ini dirancang agar proses pencatatan, pengajuan peminjaman, pengelolaan inventaris, dan pemantauan penggunaan alat dapat dilakukan secara lebih terstruktur.

Project ini dibuat sebagai bagian dari tugas akademik Program Studi Teknik Informatika, Politeknik Caltex Riau.

## Deskripsi Project

Laboratorium merupakan fasilitas penting dalam kegiatan praktikum, pembelajaran, dan penelitian. Pengelolaan alat serta ruangan laboratorium secara manual dapat menyebabkan beberapa kendala, seperti pencatatan yang tidak konsisten, kesulitan mengetahui ketersediaan alat, keterlambatan proses persetujuan, serta risiko kehilangan atau kerusakan alat yang tidak terdokumentasi dengan baik.

Sistem ini dikembangkan untuk membantu digitalisasi proses manajemen laboratorium, khususnya pada proses peminjaman ruangan dan alat. Melalui sistem ini, pengguna dapat mengajukan peminjaman, sedangkan admin/PLP dapat mengelola data alat, ruangan, permohonan peminjaman, status penggunaan, dan catatan terkait inventaris.

## Tujuan Project

* Mendigitalisasi proses peminjaman ruangan laboratorium dan alat laboratorium.
* Memudahkan pengguna dalam mengajukan permohonan peminjaman.
* Membantu admin/PLP dalam mengelola data alat dan ruangan.
* Meningkatkan akurasi pencatatan inventaris dan riwayat peminjaman.
* Membantu pemantauan status penggunaan alat dan ruangan.
* Mengurangi risiko kehilangan data, kerusakan tidak tercatat, dan proses manual yang tidak efisien.

## Fitur Utama

* Dashboard pengguna
* Dashboard admin
* Pengelolaan data alat laboratorium
* Pengelolaan data ruangan laboratorium
* Pengajuan peminjaman alat atau ruangan
* Persetujuan atau penolakan permohonan peminjaman
* Riwayat peminjaman
* Pencatatan status peminjaman
* Pengelolaan data inventaris
* Dokumentasi penggunaan alat dan ruangan

## Aktor Pengguna

### User / Mahasiswa

User atau mahasiswa dapat menggunakan sistem untuk:

* Melihat informasi alat dan ruangan.
* Mengajukan peminjaman alat atau ruangan.
* Melihat status permohonan peminjaman.
* Melihat riwayat peminjaman.

### Admin / PLP

Admin atau PLP dapat menggunakan sistem untuk:

* Mengelola data alat laboratorium.
* Mengelola data ruangan laboratorium.
* Melihat daftar permohonan peminjaman.
* Menyetujui atau menolak permohonan peminjaman.
* Mengelola status penggunaan alat dan ruangan.
* Melihat riwayat penggunaan dan peminjaman.

## Alur Proses Sistem

Alur utama sistem adalah sebagai berikut:

1. User membuka sistem dan melihat informasi alat atau ruangan yang tersedia.
2. User mengajukan permohonan peminjaman.
3. Sistem menyimpan data permohonan.
4. Admin/PLP memeriksa detail permohonan.
5. Admin/PLP menyetujui atau menolak permohonan.
6. Sistem memperbarui status peminjaman.
7. User melihat status permohonan.
8. Setelah penggunaan selesai, data peminjaman tersimpan sebagai riwayat.

## Teknologi yang Digunakan

* PHP Native
* MVC Pattern
* HTML
* CSS
* JavaScript
* MySQL
* Database Design
* Git & GitHub

## Struktur Folder

```bash
Sistem-Manajemen-Lab-Alat/
├── Controllers/
│   └── Berisi file controller untuk mengatur proses dan alur data
├── Core/
│   └── Berisi konfigurasi inti aplikasi dan routing
├── Models/
│   └── Berisi model untuk mengelola data dan koneksi database
├── Views/
│   └── Berisi tampilan halaman aplikasi
├── asset/
│   └── Berisi file pendukung seperti CSS, JavaScript, gambar, dan aset tampilan
├── index.php
└── README.md
```

## Peran Saya

**Farizy Rahman Hidayat**
**Role:** Project Manager / Requirement Analyst / System Documentation Contributor

Kontribusi saya dalam project ini meliputi:

* Berperan sebagai Project Manager dalam perencanaan dan pengelolaan project.
* Berkontribusi dalam penyusunan dokumen requirement perangkat lunak.
* Membantu identifikasi kebutuhan pengguna dan kebutuhan sistem.
* Menyusun atau mendukung penyusunan kebutuhan fungsional dan non-fungsional.
* Berkontribusi dalam analisis proses bisnis peminjaman lab dan alat.
* Mendukung perancangan alur sistem, data dictionary, dan ERD.
* Membantu dokumentasi hasil wawancara, observasi, dan kebutuhan sistem.
* Mendukung koordinasi tim dalam proses perancangan dan pengembangan sistem.

## Tim Project

* Farizy Rahman Hidayat
* Farhan Zulfa
* Mela Zuliana
* Mhd. Imam Alghifari
* Izazier Ilmi Firdaus

## Dokumentasi Sistem

Dokumentasi yang mendukung project ini meliputi:

* Dokumen Requirement Perangkat Lunak
* System Request
* Feasibility Analysis
* Work Breakdown Structure
* Gantt Chart
* Business Process Modeling
* Hasil Wawancara dan Observasi
* User Requirement
* System Requirement
* Functional Requirement
* Non-Functional Requirement
* Data Dictionary
* Entity Relationship Diagram
* User Story
* Prioritas Kegiatan

## Cara Menjalankan Project

1. Clone repository:

```bash
git clone https://github.com/FarizyRH/Sistem-Manajemen-Lab-Alat.git
```

2. Masuk ke folder project:

```bash
cd Sistem-Manajemen-Lab-Alat
```

3. Pindahkan folder project ke direktori server lokal, misalnya:

```bash
C:/xampp/htdocs/Sistem-Manajemen-Lab-Alat
```

4. Jalankan Apache dan MySQL melalui XAMPP.

5. Buat database baru melalui phpMyAdmin.

6. Import file database jika tersedia.

7. Sesuaikan konfigurasi koneksi database pada file konfigurasi project.

8. Buka aplikasi melalui browser:

```text
http://localhost/Sistem-Manajemen-Lab-Alat
```

## Catatan Konfigurasi Database

Pastikan konfigurasi database sesuai dengan environment lokal yang digunakan, seperti:

```text
DB_HOST=localhost
DB_NAME=nama_database
DB_USER=root
DB_PASSWORD=
```

> Nama file konfigurasi dapat disesuaikan dengan struktur project yang digunakan.

## Status Project

Status: **Academic Project / Prototype**

Project ini dibuat untuk kebutuhan akademik sebagai prototype sistem manajemen laboratorium dan alat. Sistem belum ditujukan sebagai aplikasi produksi penuh, tetapi dapat digunakan sebagai gambaran digitalisasi proses peminjaman dan pengelolaan inventaris laboratorium.

## Catatan Keamanan

Jangan menyimpan data sensitif di repository publik, seperti:

* Password database
* API key
* Token akses
* Data pribadi pengguna asli
* File credential

Jika terdapat file konfigurasi sensitif, gunakan file contoh seperti `.env.example` atau dokumentasikan format konfigurasinya tanpa menyertakan data rahasia.

## Lisensi

Project ini dibuat untuk kebutuhan akademik. Penggunaan ulang kode atau dokumen dapat disesuaikan dengan persetujuan anggota kelompok.
