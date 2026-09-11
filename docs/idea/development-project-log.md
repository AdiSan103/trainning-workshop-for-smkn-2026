# Development Project Log

## Guidebook: Membuat Project Sistem Input Data Siswa

Dokumen ini menjadi catatan proses belajar dari ide sampai project Laravel berjalan. Ikuti langkah berurutan. Setiap perubahan baru tambahkan pada bagian **Log Perubahan** paling bawah.

---

## 1. Pahami kebutuhan project

Baca dokumen PRD:

```text
docs/idea/prd-sistem-input-data-siswa.md
```

Target project:

- Mengelola data `siswa`.
- Mengelola data `kelas`.
- Menghubungkan setiap siswa dengan satu kelas.
- Menerapkan CRUD: Create, Read, Update, Delete.
- Membatasi project pada dua tabel.

Fitur wajib:

- Tambah, lihat, edit, dan hapus siswa.
- Tambah dan lihat kelas.
- Pilih kelas saat mengisi data siswa.
- Validasi NIS unik, nama wajib, dan kelas wajib.

Fitur yang sengaja belum dibuat:

- Login.
- Nilai dan absensi.
- Upload foto.
- Search dan export CSV.

**Pelajaran:** PRD membatasi pekerjaan. Jangan langsung menambah fitur di luar kebutuhan.

---

## 2. Siapkan tools

Gunakan:

- XAMPP 8.2.x: Apache, MySQL, PHP 8.2.x.
- PHP minimum 7.3.
- Composer 2.x.
- Node.js dan npm.
- Editor kode.
- Git, opsional.

Cek instalasi:

```bash
php --version
composer --version
node --version
npm --version
```

Start Apache dan MySQL melalui XAMPP Control Panel.

**Pelajaran:** Pastikan tools siap sebelum debugging kode.

---

## 3. Siapkan project Laravel

Masuk ke folder project:

```bash
cd project
```

Install dependency PHP:

```bash
composer install
```

Buat file konfigurasi environment:

```bash
copy .env.example .env
php artisan key:generate
```

Install dependency frontend:

```bash
npm install
```

**Pelajaran:** `composer.json` mengatur dependency PHP; `package.json` mengatur dependency frontend.

---

## 4. Konfigurasi database

Buat database bernama `laravel` melalui phpMyAdmin.

Periksa `.env`:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

Jangan menyimpan password database asli di Git.

**Pelajaran:** `.env` berisi konfigurasi lokal. File ini tidak boleh dibagikan sembarangan.

---

## 5. Rancang database dari relasi

PRD menetapkan dua tabel:

- `kelas`: menyimpan nama kelas.
- `siswa`: menyimpan NIS, nama, kelas, dan jenis kelamin.

Relasi:

```text
kelas 1 ---- banyak siswa
siswa banyak ---- 1 kelas
```

Kolom penting:

```text
kelas:
- id
- nama_kelas, unique
- created_at
- updated_at

siswa:
- id
- nis, unique
- nama
- kelas_id, foreign key ke kelas.id
- jenis_kelamin, L/P, nullable
- created_at
- updated_at
```

**Pelajaran:** Rancang tabel dan relasi sebelum membuat form atau controller.

---

## 6. Buat migration

File:

```text
project/database/migrations/2026_09_08_000001_create_kelas_table.php
project/database/migrations/2026_09_08_000002_create_siswa_table.php
```

Migration `kelas` membuat kolom `nama_kelas` unik.

Migration `siswa` membuat:

- NIS unik.
- Foreign key `kelas_id`.
- `jenis_kelamin` nullable dengan pilihan `L` atau `P`.
- `cascadeOnDelete` di database.

Jalankan migration:

```bash
php artisan migrate
```

Saat ingin menghapus dan membuat ulang semua tabel pada database development:

```bash
php artisan migrate:fresh
```

**Pelajaran:** Migration adalah version control untuk struktur database. Jangan mengubah database manual tanpa mencatat perubahan di migration.

---

## 7. Buat model dan relasi Eloquent

File:

```text
project/app/Models/Kelas.php
project/app/Models/Siswa.php
```

Model `Kelas`:

- Table: `kelas`.
- Fillable: `nama_kelas`.
- Relasi: `hasMany(Siswa::class)`.

Model `Siswa`:

- Table: `siswa`.
- Fillable: `nis`, `nama`, `kelas_id`, `jenis_kelamin`.
- Relasi: `belongsTo(Kelas::class)`.

Contoh pemakaian relasi:

```php
$siswa->kelas->nama_kelas;
$kelas->siswa;
```

**Pelajaran:** Model menerjemahkan tabel database menjadi object PHP. Relasi mencegah query manual berulang.

---

## 8. Buat controller siswa

File:

```text
project/app/Http/Controllers/SiswaController.php
```

Action yang dibuat:

- `index`: mengambil dan menampilkan daftar siswa.
- `create`: menampilkan form tambah siswa dan daftar kelas.
- `store`: memvalidasi lalu menyimpan siswa.
- `edit`: menampilkan form edit.
- `update`: memvalidasi lalu memperbarui siswa.
- `destroy`: menghapus siswa.

Data siswa diambil dengan eager loading:

```php
Siswa::with('kelas')->orderBy('nama')->get();
```

**Pelajaran:** Satu controller resource mengikuti pola CRUD Laravel. Eager loading membantu mengambil nama kelas tanpa query berulang.

---

## 9. Buat controller kelas

File:

```text
project/app/Http/Controllers/KelasController.php
```

Action yang dibuat:

- `index`: menampilkan daftar kelas dan jumlah siswa.
- `store`: memvalidasi lalu menyimpan kelas.
- `destroy`: menghapus kelas jika belum memiliki siswa.

Kelas yang masih memiliki siswa tidak boleh dihapus. Ini mencegah kehilangan data karena foreign key memakai cascade.

**Pelajaran:** Validasi bisnis tetap diperlukan walaupun database memiliki foreign key.

---

## 10. Daftarkan route

File:

```text
project/routes/web.php
```

Route utama:

```text
/                  redirect ke daftar siswa
/siswa             daftar siswa
/siswa/create      form tambah siswa
/siswa/{siswa}/edit form edit siswa
/kelas             daftar dan tambah kelas
```

Periksa route:

```bash
php artisan route:list
```

**Pelajaran:** Route menghubungkan URL dengan controller action.

---

## 11. Buat layout Blade

File:

```text
project/resources/views/layouts/app.blade.php
```

Layout berisi:

- HTML dasar.
- Navigation.
- Link CSS.
- Flash message sukses/error.
- Error validasi.
- `@yield('content')`.

Blade menggunakan escaping output:

```blade
{{ $value }}
```

Form wajib memakai CSRF:

```blade
@csrf
```

Form edit/hapus memakai method spoofing:

```blade
@method('PUT')
@method('DELETE')
```

**Pelajaran:** Layout mengurangi HTML berulang. `@csrf` melindungi form dari CSRF.

---

## 12. Buat halaman siswa

File:

```text
project/resources/views/siswa/index.blade.php
project/resources/views/siswa/create.blade.php
project/resources/views/siswa/edit.blade.php
project/resources/views/siswa/form.blade.php
```

Halaman daftar menampilkan:

- NIS.
- Nama.
- Kelas.
- Jenis kelamin.
- Tombol edit.
- Tombol hapus dengan konfirmasi.

Partial `form.blade.php` dipakai oleh halaman tambah dan edit agar field tidak ditulis dua kali.

**Pelajaran:** Partial cocok untuk form yang dipakai lebih dari satu halaman.

---

## 13. Buat halaman kelas

File:

```text
project/resources/views/kelas/index.blade.php
```

Halaman ini menyediakan:

- Form tambah kelas.
- Daftar kelas.
- Jumlah siswa per kelas.
- Tombol hapus.
- Pesan jika kelas masih memiliki siswa.

**Pelajaran:** Buat UI sederhana dulu. CSS tambahan hanya diperlukan jika memperbaiki keterbacaan atau aksesibilitas.

---

## 14. Tambahkan CSS

File:

```text
project/resources/css/app.css
```

CSS mengatur tampilan melalui beberapa lapisan:

- **Design token:** `:root` menyimpan warna, surface, border, teks, state, dan shadow seperti `--navy`, `--blue`, `--text`, `--line`, serta `--shadow`.
- **Layout:** `.container` membatasi lebar konten; `.navbar`, `.page-heading`, dan `.form-actions` memakai Flexbox.
- **Komponen:** `.card`, tabel, form, tombol `.btn-primary`/`.btn-secondary`/`.btn-danger`, serta `.alert-success`/`.alert-error`.
- **Interaksi:** hover state memberi feedback; `:focus-visible` memberi outline keyboard pada button, input, dan select.
- **Responsive:** media query `max-width: 640px` membungkus navbar, menumpuk heading/form, membuat tombol full-width, dan mengecilkan padding tabel.
- **Motion:** `prefers-reduced-motion: reduce` mengurangi transisi dan animasi bagi user yang meminta gerakan minimal.

Contoh token:

```css
:root {
    --navy: #102a43;
    --blue: #1769aa;
    --surface: #ffffff;
    --shadow: 0 14px 35px rgb(16 42 67 / 10%);
}
```

Build asset jika diperlukan:

```bash
npm run dev
```

**Pelajaran:** HTML membentuk struktur, Blade mengisi data, CSS mengatur tampilan.

---

## 15. Hapus halaman starter

Halaman default Laravel diganti dengan daftar siswa melalui route `/`.

File default yang tidak lagi dipakai:

```text
project/resources/views/welcome.blade.php
```

Route `/` mengarahkan user ke `siswa.index`.

**Pelajaran:** Hapus kode starter yang tidak digunakan agar project tetap mudah dipahami.

---

## 16. Buat pengujian otomatis

File:

```text
project/tests/Feature/SiswaTest.php
project/tests/Feature/ExampleTest.php
```

Test mencakup:

- User dapat membuat dan melihat siswa.
- NIS harus unik.
- Kelas yang memiliki siswa tidak dapat dihapus.
- Route `/` mengarah ke daftar siswa.

PHPUnit memakai SQLite in-memory melalui `project/phpunit.xml`, sehingga test tidak mengubah database MySQL development.

Jalankan:

```bash
php artisan test
```

Target hasil:

```text
5 passed
```

**Pelajaran:** Test menangkap regresi setelah perubahan kode.

---

## 17. Jalankan project

Start Apache dan MySQL di XAMPP, lalu:

```bash
cd project
php artisan serve
```

Buka:

```text
http://127.0.0.1:8000
```

Uji alur manual:

1. Buka daftar siswa.
2. Buka Data Kelas.
3. Tambah kelas `XI RPL 1`.
4. Kembali ke Data Siswa.
5. Tambah siswa dengan NIS, nama, kelas, dan jenis kelamin.
6. Pastikan nama kelas tampil, bukan hanya ID.
7. Edit data siswa.
8. Coba menyimpan NIS duplikat; pastikan ditolak.
9. Hapus siswa.
10. Hapus kelas kosong.
11. Coba hapus kelas yang masih memiliki siswa; pastikan ditolak.

**Pelajaran:** Test manual memeriksa pengalaman user, bukan hanya kode backend.

---

## 18. Pemeriksaan akhir

Jalankan:

```bash
php artisan route:list
php artisan test
git diff --check
```

Pastikan:

- Tidak ada error di log saat alur normal.
- Semua input form punya label.
- Semua form memakai CSRF.
- Output Blade memakai escaping.
- NIS tidak boleh duplikat.
- Relasi kelas tampil benar.
- Perubahan tercatat di dokumen ini.

---

# Log Perubahan

## 2026-09-08 — Implementasi CRUD Data Siswa

### Perubahan kode

- Membuat migration tabel `kelas` dan `siswa` sesuai PRD.
- Menambahkan model `Kelas` dan `Siswa` dengan relasi `hasMany`/`belongsTo`.
- Menambahkan CRUD siswa: daftar, tambah, edit, hapus.
- Menambahkan tambah, lihat, dan hapus kelas.
- Menambahkan validasi nama, kelas, jenis kelamin, dan NIS unik.
- Menambahkan perlindungan agar kelas yang masih memiliki siswa tidak dapat dihapus.
- Mengganti halaman Laravel default dengan UI Blade responsif berbasis HTML/CSS.
- Menambahkan feature test untuk CRUD siswa, validasi NIS, dan penghapusan kelas.
- Mengaktifkan SQLite in-memory untuk PHPUnit.
- Memperbarui test route root agar mengharapkan redirect ke daftar siswa.

### File penting

- `project/database/migrations/2026_09_08_000001_create_kelas_table.php`
- `project/database/migrations/2026_09_08_000002_create_siswa_table.php`
- `project/app/Models/Kelas.php`
- `project/app/Models/Siswa.php`
- `project/app/Http/Controllers/KelasController.php`
- `project/app/Http/Controllers/SiswaController.php`
- `project/routes/web.php`
- `project/resources/views/layouts/app.blade.php`
- `project/resources/views/siswa/`
- `project/resources/views/kelas/`
- `project/resources/css/app.css`
- `project/tests/Feature/SiswaTest.php`

### Verifikasi

- `php artisan route:list` passed; semua route siswa dan kelas terdaftar.
- `php artisan test` passed; **5 tests passed**.
- `git diff --check` passed.

---

## 2026-09-08 — Perindah visual slide dunia kerja & Laravel

### Tujuan
- `dunia-kerja-teknologi-laravel.html` terlihat polos, minta ikon, gambar, vektor, animasi.

### Langkah yang dilakukan
1. Tambah progress bar atas + animasi masuk per elemen (`riseIn` keyframes, staggered delay).
2. Tambah `icon-badge` emoji di tiap kicker/box sebagai pengganti icon set eksternal (hindari dependency baru).
3. Tambah foto Unsplash (cover, penutup, 2 slide isi) via `<img loading="lazy">` + `onerror` fallback sembunyikan frame kalau offline.
4. Tambah ilustrasi vektor gaya undraw sebagai inline SVG custom (bukan file eksternal) — tetap single-file, tetap jalan offline.
5. Restart animasi tiap ganti slide di `show()` (`classList.remove/add` + reflow).

### File yang berubah
- `docs/ppt/dunia-kerja-teknologi-laravel.html` — visual rework lengkap (CSS + JS + markup), konten & navigasi lama dipertahankan.

### Verifikasi
- Cek manual: buka file di browser, next/prev/keyboard tetap jalan, gambar Unsplash gagal load pun tidak merusak layout (fallback `onerror`).

### Pelajaran
- Progressive enhancement: fitur visual (gambar eksternal) boleh gagal tanpa merusak fungsi inti (navigasi & isi materi).
- Inline SVG lebih aman dari dependency luar (unDraw) untuk file yang harus tetap portable.

### Catatan lanjutan
- Belum pakai `prefers-reduced-motion` media query — tambahkan jika ada siswa sensitif animasi.

---

## 2026-09-08 — Tambah animasi particles.js

### Perubahan
- Menambahkan background partikel melalui `particles.js@2.0.0` dari jsDelivr.
- Partikel memakai warna biru transparan, garis koneksi halus, gerak lambat, dan interaksi hover `grab`.
- Menambahkan `prefers-reduced-motion: reduce`; animasi partikel tidak dijalankan jika user meminta gerakan minimal.
- Canvas dibuat fixed di belakang slide dengan `pointer-events: none`, sehingga navigasi tetap berfungsi.

### File berubah
- `docs/ppt/dunia-kerja-teknologi-laravel.html`

### Verifikasi
- Cek sintaks visual: canvas berada di belakang deck.
- Fallback: jika CDN gagal dimuat, slide tetap tampil tanpa partikel.

---

## 2026-09-08 — Perbaiki visibilitas particles.js dan gradient

### Perubahan
- Background body diganti gradient multi-layer: ungu, cyan, indigo.
- Layer `#particles-bg` dinaikkan ke atas slide (`z-index: 2`) dengan `mix-blend-mode: screen` agar partikel terlihat.
- Canvas particles diberi ukuran penuh viewport.
- Partikel tetap dijalankan tanpa memblokir interaksi slide; `pointer-events: none` dipertahankan.

### File berubah
- `docs/ppt/dunia-kerja-teknologi-laravel.html`

---

## 2026-09-08 — Tampilkan partikel di atas slide putih

- Layer particles dipindah ke atas slide dengan opacity `.42` dan `mix-blend-mode: multiply`.
- Warna partikel diganti biru, ungu, cyan agar kontras di background putih.
- Ukuran, opacity, dan garis koneksi diperkuat.

File: `docs/ppt/dunia-kerja-teknologi-laravel.html`

---

## 2026-09-08 — Ubah Slide 16 menjadi rencana project 5 hari

- Mengganti materi `Rencana 90 Hari` menjadi timeline project Sistem Input Data Siswa selama 5 hari.
- Hari 1: rencana dan setup.
- Hari 2: database dan relasi.
- Hari 3: backend CRUD dan validasi.
- Hari 4: Blade, form, tabel, dan CSS.
- Hari 5: testing, dokumentasi, dan presentasi.

File: `docs/ppt/dunia-kerja-teknologi-laravel.html`

---

## 2026-09-08 — Perindah visual guidebook slide (index.html)

### Perubahan
- Background gradient ungu/cyan/indigo, sama seperti presentasi kedua (konsisten tema).
- Tambah `particles.js@2.0.0` sebagai animasi latar, warna biru/ungu/cyan, blend `multiply` agar terlihat di kartu putih.
- Tambah progress bar atas dan animasi masuk (`riseIn`) tiap elemen slide.
- Tambah icon-badge emoji di tiap step (🎯🧰📦🗄️🧩🧱🔗🎓🏫🛣️🖼️📋🏷️🎨🧹🧪▶️✅🎉).
- Card fitur (`.cols .box`) diberi hover lift.
- Struktur konten dan urutan 18 step dipertahankan, tidak ada perubahan materi.

### File berubah
- `docs/ppt/index.html`

### Verifikasi
- Cek manual: navigasi tombol/keyboard tetap jalan, partikel terlihat di atas slide putih, fallback aman jika CDN gagal.

---

## 2026-09-08 — Tambah database seeder

### Perubahan
- `DatabaseSeeder` mengisi 4 kelas contoh (`X RPL 1` – `XII RPL 1`) dan 8 siswa dengan NIS, nama, jenis kelamin, serta kelas berputar.
- Seeder dipakai lewat `php artisan migrate --seed` atau `php artisan db:seed`.

### File berubah
- `project/database/seeders/DatabaseSeeder.php`

### Verifikasi
- `php artisan migrate --seed` — seeding sukses di database `laravel_training_smk2tbn_14sep`.
- `php artisan test` — semua test PASS.

### Pelajaran
- Seeder memberi data awal untuk demo tanpa input manual lewat form.

---

## 2026-09-08 — Buat seeder aman dijalankan ulang

- Ganti `Kelas::create()` menjadi `Kelas::firstOrCreate()` agar kelas unik tidak gagal saat `php artisan db:seed` dijalankan lagi.
- Ganti `Siswa::create()` menjadi `Siswa::firstOrCreate()` berdasarkan NIS agar data siswa tidak duplikat.
- Verifikasi: `php artisan db:seed` dijalankan dua kali berturut-turut tanpa error.

File: `project/database/seeders/DatabaseSeeder.php`

---

## 2026-09-08 — Refresh styling CSS project Laravel

### Perubahan
- Memperbarui `project/resources/css/app.css` tanpa mengubah Blade atau alur CRUD.
- Menambahkan tema warna navy/blue, background gradient, card, shadow, tabel, tombol, form, alert, dan error state.
- Menambahkan focus state untuk keyboard serta layout responsive untuk layar kecil.
- Menambahkan `prefers-reduced-motion` agar transisi diminimalkan saat diperlukan.

### File berubah
- `project/resources/css/app.css`

### Verifikasi
- Struktur class CSS tetap kompatibel dengan layout, halaman siswa, dan halaman kelas.
- Build asset dapat dijalankan dengan `npm run dev`.

### Pelajaran
- CSS mengatur presentasi tanpa mencampur styling ke Blade.
- Responsive CSS memakai flexbox, overflow tabel, dan media query.

---

## 2026-09-08 — Perbaiki CSS tidak termuat di browser

### Masalah
- `public/css/app.css` belum tersedia karena `npm run dev` gagal pada dependency webpack.
- Layout Blade memuat asset dari `public/css/app.css`, bukan langsung dari `resources/css/app.css`.

### Perbaikan
- Menyalin stylesheet final ke `project/public/css/app.css` agar Laravel langsung menyajikan CSS.
- Build frontend webpack tidak lagi menjadi syarat untuk tampilan CSS CRUD sederhana.

### Verifikasi
- File asset tersedia di `project/public/css/app.css`.
- `npm run dev` masih gagal dengan `Cannot find module 'webpack/lib/SizeFormatHelpers'`; tidak memblokir CSS runtime.

### Pelajaran
- `resources/css` adalah source; `public/css` adalah asset yang dibaca browser saat memakai `asset('css/app.css')`.

---

## Template log perubahan berikutnya

Salin template ini setiap ada pekerjaan baru:

```markdown
## YYYY-MM-DD — Judul perubahan

### Tujuan
- Masalah atau kebutuhan yang ingin diselesaikan.

### Langkah yang dilakukan
1. File/folder yang dibaca.
2. Perubahan database.
3. Perubahan model/controller/route.
4. Perubahan Blade/CSS.
5. Test yang ditambahkan atau diperbarui.

### File yang berubah
- `path/file.php` — alasan perubahan.

### Verifikasi
- `command` — hasil.
- Skenario manual — hasil.

### Pelajaran
- Konsep yang dipelajari.

### Catatan lanjutan
- Pekerjaan yang sengaja belum dibuat.
```
