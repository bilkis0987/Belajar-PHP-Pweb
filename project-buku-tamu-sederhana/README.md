# 📘 Buku Tamu Sederhana

> Aplikasi buku tamu minimalis berbasis web menggunakan PHP dan MySQL

![PHP](https://img.shields.io/badge/PHP-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)
![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white)

## 🌟 Fitur Utama

- 📝 Form input sederhana untuk pengunjung
- 💾 Penyimpanan data ke database MySQL
- 📋 Tampilan daftar pesan terbaru
- 🔒 Keamanan input dasar (XSS protection)
- 🎨 Desain responsif dan modern

## 📁 Struktur Project

```
project-buku-tamu-sederhana/
├── database.sql          # Skema database
├── config.php           # Konfigurasi koneksi database
├── index.php            # Halaman utama
└── README.md            # Dokumentasi
```

## 🚀 Cara Penggunaan

### Prasyarat
- Web server dengan PHP (XAMPP, Laragon, WAMP)
- MySQL/MariaDB
- Browser web

### Instalasi

1. **Clone atau download project** ke direktori web server (htdocs/www)

2. **Buat database MySQL**:
   ```sql
   CREATE DATABASE buku_tamu;
   ```

3. **Import skema database**:
   - Buka phpMyAdmin
   - Pilih database `buku_tamu`
   - Import file `database.sql`

4. **Atur konfigurasi database** di `config.php`:
   ```php
   $host = "localhost";      // Alamat server database
   $username = "root";       // Username database
   $password = "";           // Password database
   $dbname = "buku_tamu";    // Nama database
   ```

5. **Jalankan aplikasi**:
   - Buka browser
   - Akses `http://localhost/project-buku-tamu-sederhana`

## 🛠️ Teknologi yang Digunakan

- **PHP** - Server-side scripting
- **PDO** - Database connection & security
- **MySQL** - Database management
- **HTML5 & CSS3** - Frontend structure & styling
- **Prepared Statements** - Protection against SQL injection

## 📚 Konsep yang Dipelajari

1. **Koneksi Database** - Menggunakan PDO untuk koneksi aman
2. **CRUD Operation** - Create (INSERT) dan Read (SELECT) dasar
3. **Form Handling** - Processing input dari pengguna
4. **Security** - Sanitasi input dan prepared statements
5. **Responsive Design** - Tampilan yang menyesuaikan perangkat

## 🧪 Struktur Database

| Kolom | Tipe Data | Deskripsi |
|-------|-----------|-----------|
| id | INT (AUTO_INCREMENT) | Primary key |
| nama | VARCHAR(100) | Nama pengirim (required) |
| email | VARCHAR(100) | Email pengirim (optional) |
| pesan | TEXT | Isi pesan (required) |
| tanggal | TIMESTAMP | Tanggal otomatis saat pesan dibuat |

## 🎯 Contoh Penggunaan

1. Isi form dengan **nama** dan **pesan**
2. (Opsional) Tambahkan **email**
3. Klik **"Kirim Pesan"**
4. Lihat pesan muncul di bagian bawah halaman

## 🔧 Pengembangan Lanjutan

- [ ] Fitur edit/hapus pesan
- [ ] Sistem autentikasi admin
- [ ] Pagination untuk pesan
- [ ] Validasi input yang lebih ketat
- [ ] Integrasi dengan framework CSS (Bootstrap/Tailwind)

## 🤝 Kontribusi

1. Fork project ini
2. Buat branch fitur (`git checkout -b fitur/fitur-baru`)
3. Commit perubahan (`git commit -m 'Tambah fitur baru'`)
4. Push ke branch (`git push origin fitur/fitur-baru`)
5. Buat Pull Request

## 📄 Lisensi

Proyek ini dilisensikan di bawah Lisensi MIT - lihat file [LICENSE](LICENSE) untuk detail lebih lanjut.

## 💬 Saran untuk Pemula

Project ini adalah titik awal yang ideal untuk belajar integrasi PHP dan database. Setelah menguasai dasar-dasar di sini, cobalah menambahkan fitur-fitur tambahan seperti sistem login atau fitur pencarian untuk meningkatkan kemampuan pemrograman web Anda.

---

<div align="center">

**Dibuat dengan ❤️ untuk pembelajaran**

Jika Anda menemukan project ini bermanfaat, jangan lupa untuk memberikan ⭐ star!

</div>