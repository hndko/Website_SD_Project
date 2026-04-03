# Website Profil SD Cendekia

Website profil sekolah dasar berbasis PHP native dengan panel admin sederhana untuk mengelola konten galeri dan pesan kontak.

## Short Description (GitHub About)

Gunakan salah satu deskripsi singkat berikut di bagian **About** repository:

1. Website profil SD berbasis PHP native dengan halaman publik, form kontak, dan panel admin sederhana.
2. School profile website (PHP + MySQL) dengan fitur profil, fasilitas, galeri, kontak, serta dashboard admin.
3. Template website SD Cendekia dengan frontend informatif dan backend manajemen pesan serta galeri.

## Fitur Utama

- Halaman frontend: beranda, profil, fasilitas, galeri, kontak.
- Form kontak yang menyimpan pesan ke database.
- Login admin.
- Dashboard backend.
- Manajemen pesan masuk.
- Halaman pengelolaan profil dan galeri (struktur sudah tersedia).
- Routing sederhana berbasis konfigurasi.

## Teknologi

- PHP (native, tanpa framework)
- MySQL
- Bootstrap 5
- HTML, CSS, JavaScript

## Struktur Singkat Proyek

- `index.php` sebagai entry point.
- `application/config/` untuk konfigurasi aplikasi, database, dan routing.
- `application/controllers/` untuk aksi form dan logout.
- `application/models/` untuk akses data.
- `application/views/` untuk frontend, backend, auth, dan layout.
- `assets/` untuk CSS dan gambar.
- `sd_website.sql` untuk skema dan data awal database.

## Persyaratan

- PHP 7.x
- MySQL 5.x
- Web server lokal (Laragon/XAMPP/WAMP)

## Cara Menjalankan (Local)

1. Clone repository ini ke folder web server lokal.
2. Buat database baru bernama `sd_website`.
3. Import file `sd_website.sql` ke database tersebut.
4. Cek konfigurasi database di `application/config/database.php`:
   - `DB_HOST`
   - `DB_USER`
   - `DB_PASS`
   - `DB_NAME`
5. Jalankan project melalui browser, contoh:
   - `http://localhost/Website_SD_Project/`

## Akun Admin Default

Data awal dari dump database:

- Username: `admin`
- Password: `password`

Catatan: segera ubah password default setelah deploy/testing.

## Kontribusi

Kontribusi sangat terbuka. Jika ada yang berkenan untuk mengembangkan project ini bersama, silakan fork repository ini lalu kirim Pull Request.

Langkah kontribusi yang disarankan:

1. Fork repository.
2. Buat branch fitur/perbaikan baru.
3. Commit perubahan dengan pesan yang jelas.
4. Push ke fork.
5. Buat Pull Request ke branch utama.

Silakan gunakan Issue untuk diskusi ide, bug report, atau request fitur.

## Saran Nama Repository

Jika ingin nama repo yang lebih jelas dan profesional, opsi berikut bisa dipakai:

1. `sd-cendekia-school-website`
2. `website-profil-sd-cendekia`
3. `sd-cendekia-php-mysql`
4. `school-profile-website-php`

Rekomendasi utama: `sd-cendekia-school-website`.

## Catatan

Project ini cocok dijadikan dasar pengembangan website sekolah dengan arsitektur sederhana dan mudah dipelajari.
