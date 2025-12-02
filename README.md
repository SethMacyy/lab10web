Praktikum 10 – PHP OOP & Modularisasi

Nama    : SURYA PUTRA DARMA JAYA

NIM     : 312410405

Kelas   : TI.24.A.3

Mata Kuliah: Pemrograman Web

# Tujuan Praktikum

Praktikum ini bertujuan agar mahasiswa:

Memahami konsep dasar OOP pada PHP.

Dapat membuat class dan object.

Dapat menerapkan modularisasi menggunakan class library.

Mampu memanfaatkan class Form dan Database dalam program PHP.

# 1. Pembuatan Class dan Object (mobil.php)

Pada bagian ini dibuat sebuah class yang digunakan untuk mempraktikkan dasar OOP, seperti:

Property (variabel dalam class)

Constructor

Method

Pembuatan objek dan pemanggilan method

File ini bertujuan mengenalkan konsep dasar OOP dalam PHP.

# 2. Pembuatan Class Library (form.php)

Bagian ini bertujuan mengimplementasikan modularisasi, yaitu memisahkan kode ke dalam file terpisah.

Class Form digunakan sebagai library untuk:

Menambahkan field input

Menampilkan form secara dinamis

Mengurangi pengulangan kode pada halaman lain

File ini tidak dijalankan langsung, tetapi dipanggil dari file lain.

# 3. Pemanggilan Class Form (form_input.php)

File ini berfungsi untuk:

Memanggil class Form dari file form.php

Membuat form input sederhana

Menampilkan form ke pengguna

Ini membuktikan bahwa class library dapat digunakan kembali (reusable).

# 4. Pembuatan Class Library Database (database.php)

Pada tahap ini dibuat class database yang berfungsi untuk:

Mengatur konfigurasi database

Membuat koneksi otomatis

Menyediakan method untuk operasi CRUD (Insert, Select, Update, Delete)

Menggunakan file config.php sebagai penyimpanan konfigurasi

Class ini merupakan implementasi modularisasi untuk manajemen database.

# 5. Implementasi Modularisasi pada File index.php

File utama index.php menggabungkan dua class library:

Menggunakan class Form:

Menampilkan form input mahasiswa

Mengelola input dari pengguna

Menggunakan class Database:

Menyimpan data ke database

Menampilkan data dari tabel mahasiswa

Memberikan fitur hapus data

Dengan demikian, index.php menjadi implementasi penuh dari:

✔ OOP

✔ Modularisasi

✔ Class Library

✔ Reusability

✔ Database Connection

# Cara Menjalankan Program

Jalankan XAMPP → hidupkan Apache dan MySQL.

Simpan folder project ke dalam:

C:\xampp\htdocs\Lab10Web


Buka phpMyAdmin dan buat database dengan nama:

latihan_oop


Buat tabel mahasiswa dengan kolom:

id (Primary Key, Auto Increment)

nim

nama

alamat

Jalankan program melalui browser:

http://localhost/Lab10Web/index.php

# Kesimpulan

Dalam praktikum ini telah dipelajari dan diterapkan:

Dasar OOP dalam PHP

Pembuatan class dan object

Penerapan modularisasi melalui penggunaan class library

Pemisahan fungsi form dan database ke dalam file terpisah

Penggunaan kembali class pada file utama

Pengelolaan data melalui tampilan form dan database

Program menjadi lebih:

✔ Terstruktur

✔ Mudah dikembangkan

✔ Reusable

✔ Lebih profesional sesuai standar industri
