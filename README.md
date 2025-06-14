# 🎬 Tugas Quiz PBW - Aplikasi CRUD Data Film

Ini adalah proyek sederhana yang saya buat untuk memenuhi tugas quiz mata kuliah **Pemrograman Berbasis Web (PBW)**. Proyek ini berisi aplikasi **CRUD (Create, Read, Update, Delete)** data film menggunakan **PHP native** dan **validasi input menggunakan JavaScript**.

---

## 📌 Fitur Aplikasi

- Menampilkan daftar film dari database.
- Menambahkan data film baru.
- Mengedit data film.
- Menghapus data film.
- Validasi input di sisi client menggunakan JavaScript, khusus untuk field **Gmail**.

---

## 🧾 Struktur Data Film

Aplikasi ini menggunakan database dengan tabel bernama `film` yang memiliki field sebagai berikut:

| No | Nama Field | Tipe Data    | Keterangan                |
|----|------------|--------------|----------------------------|
| 1  | id         | INT (Auto)   | Primary Key               |
| 2  | judul      | VARCHAR      | Judul Film                |
| 3  | genre      | VARCHAR      | Genre Film                |
| 4  | sutradara  | VARCHAR      | Nama Sutradara            |
| 5  | tahun      | INT          | Tahun Rilis               |
| 6  | gmail      | VARCHAR      | Alamat Gmail (validasi JS)|

---

## 📁 File dan Fungsinya

- `koneksi.php` → Menghubungkan ke database MySQL.
- `index.php` → Menampilkan daftar film dan tombol aksi Edit / Hapus.
- `create.php` → Form tambah data film dengan validasi Gmail.
- `edit.php` → Form edit data film.
- `delete.php` → Menghapus data film.
- `validasi.js` → JavaScript validasi form input (wajib mengandung `@` di gmail).

---

## ✅ Validasi JavaScript

File `validasi.js` digunakan untuk memvalidasi agar field Gmail:
- **Tidak kosong**
- **Harus berisi karakter `@`**

Jika tidak memenuhi, maka data tidak bisa disubmit.

---

