# Program Workshop Web Programming (5 Hari)

### Project-Based Learning — Aplikasi Todo List dengan Laravel

**Peserta:** Siswa Kelas XI — Konsentrasi Keahlian Rekayasa Perangkat Lunak
**Metode:** Project-Based Learning (PjBL) — satu project dikembangkan bertahap dari hari 1 sampai hari 5
**Studi Kasus:** Aplikasi **Todo List** (manajemen tugas harian)
**Pelaksanaan:** Senin, 14 September 2026 — Jumat, 18 September 2026
**Waktu:** 09.00 — 14.00 WITA setiap hari (5 jam/hari, termasuk istirahat)
**Total Alokasi Waktu:** 25 JP (5 hari × 5 JP)

---

## 1. Tujuan Workshop

Di akhir workshop, siswa mampu:

1. Menerapkan perintah HTML.
2. Menerapkan perintah CSS.
3. Menerapkan pemrograman JavaScript.
4. Menerapkan framework pada pembuatan web statis.
5. Menerapkan dokumentasi dan presentasi web statis.
6. Menerapkan pemrograman server-side.
7. Menerapkan framework pada pembuatan web dinamis.
8. Memahami UI/UX untuk berbagai platform aplikasi.

## 2. Capaian Pembelajaran

Pada akhir Fase F, murid memiliki kemampuan menerapkan bahasa pemrograman server-side, framework, dan pendokumentasian pada pembuatan web statis dan dinamis untuk beragam kebutuhan yang kontekstual.

## 3. Gambaran Project

Siswa akan membangun **Aplikasi Todo List** secara bertahap — setiap hari menambah satu lapisan baru ke project yang sama, bukan latihan-latihan terpisah.

**Fitur akhir yang harus tercapai di hari ke-4:**

- Menambah tugas baru
- Menampilkan daftar tugas
- Menandai tugas selesai / belum selesai
- Mengedit tugas
- Menghapus tugas
- Progress bar ("3 dari 10 tugas selesai")

**Struktur tabel database (`tasks`):**

| Kolom                  | Tipe            | Keterangan                           |
| ---------------------- | --------------- | ------------------------------------ |
| id                     | bigint          | primary key, auto increment          |
| title                  | string          | judul tugas                          |
| description            | text (nullable) | detail tugas                         |
| is_done                | boolean         | status selesai/belum (default false) |
| due_date               | date (nullable) | tenggat waktu                        |
| created_at, updated_at | timestamp       | otomatis dari Laravel                |

**Pengembangan opsional** (untuk kelompok/siswa yang lebih cepat):

- Kategori tugas (Kerja / Kuliah / Pribadi) → relasi `belongsTo`
- Sorting berdasarkan deadline
- Filter/search menggunakan query Eloquent

### Tech Stack yang Digunakan

| Layer       | Teknologi                               | Versi                              |
| ----------- | --------------------------------------- | ---------------------------------- |
| Frontend    | HTML5, CSS3 (native), JavaScript, Blade | HTML5, CSS3, ES2023+, Laravel 12.x |
| Backend     | PHP, Laravel                            | PHP 8.2+, Laravel 12.x             |
| Database    | MySQL, Eloquent ORM                     | MySQL 8.0+, Laravel 12.x           |
| Development | Composer, Laragon/XAMPP, VS Code        | Composer 2.x, versi stabil         |
| Testing     | Browser DevTools (Chrome/Edge)          | Versi stabil terbaru               |

---

## 4. Alat & Perangkat yang Dibutuhkan

| Kebutuhan          | Keterangan                                                        |
| ------------------ | ----------------------------------------------------------------- |
| Laragon / XAMPP    | Web server lokal (disarankan Laragon karena lebih ramah Composer) |
| Composer           | Package manager PHP untuk instalasi Laravel                       |
| Text Editor        | VS Code (disarankan, plus extension PHP & Laravel)                |
| Browser            | Chrome/Edge dengan DevTools                                       |
| Node.js (opsional) | Jika ingin styling dengan Tailwind CSS                            |

> **Catatan:** Siapkan starter project Laravel yang sudah di-_composer install_ sebelumnya di tiap laptop siswa, agar waktu praktik tidak habis untuk proses instalasi/download dependency. Hari 1 cukup padat (gabungan 3 topik), jadi persiapan teknis di awal sangat menentukan kelancaran.

---

## 5. Kerangka Waktu Harian (Template)

Digunakan sama setiap hari, total 5 jam (09.00–14.00), sudah termasuk jeda istirahat:

| Waktu         | Durasi   | Kegiatan                            |
| ------------- | -------- | ----------------------------------- |
| 09.00 – 10.30 | 90 menit | Sesi 1 (Jam ke 1-2)                 |
| 10.30 – 10.45 | 15 menit | _Coffee break_                      |
| 10.45 – 12.15 | 90 menit | Sesi 2 (Jam ke 3-4)                 |
| 12.15 – 13.00 | 45 menit | _Ishoma_ (Istirahat, Sholat, Makan) |
| 13.00 – 14.00 | 60 menit | Sesi 3 (Jam ke 5)                   |

---

## 6. Rincian Jadwal Harian

### 🗓️ Hari 1 — Senin, 14 September 2026

**Tampilan Web, Interaktivitas JS & Instalasi Laravel**

| Waktu         | Sesi     | Kegiatan                                                                                                                                                                                                                                  |
| ------------- | -------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 09.00 – 10.30 | Sesi 1   | Pembukaan workshop, motivasi industri pembuatan web & tren UI/UX modern. Brief project: "Bangun Aplikasi Todo List". Diskusi kelompok: menentukan data & fitur yang dibutuhkan. Review cepat HTML5 & CSS Flexbox/Grid.                    |
| 10.30 – 10.45 | _Break_  | —                                                                                                                                                                                                                                         |
| 10.45 – 12.15 | Sesi 2   | Praktik: membangun halaman utama todo list (header, daftar tugas dummy, tombol tambah/edit/hapus — belum fungsional). Menerapkan Responsive Design (Media Queries). JavaScript dasar: variabel, fungsi, event listener, DOM Manipulation. |
| 12.15 – 13.00 | _Ishoma_ | —                                                                                                                                                                                                                                         |
| 13.00 – 14.00 | Sesi 3   | Praktik: validasi form kosong, filter tampilan (semua/selesai/belum) di sisi client. Instalasi Laravel via Composer, struktur folder, `php artisan serve`. Memindahkan tampilan HTML/CSS/JS ke Blade layout di dalam project Laravel.     |

**Output hari ini:** Tampilan Todo List interaktif sudah berjalan di dalam project Laravel (data masih dummy, belum tersambung database).

---

### 🗓️ Hari 2 — Selasa, 15 September 2026

**Database & Fitur Create + Read**

| Waktu         | Sesi     | Kegiatan                                                                                                                                                                         |
| ------------- | -------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 09.00 – 10.30 | Sesi 1   | Konsep arsitektur MVC (Model-View-Controller). Konfigurasi koneksi database via `.env`.                                                                                          |
| 10.30 – 10.45 | _Break_  | —                                                                                                                                                                                |
| 10.45 – 12.15 | Sesi 2   | Merancang struktur tabel `tasks` bersama-sama. Migration: membuat tabel melalui kode (`php artisan make:migration`). Pengenalan Model & Eloquent ORM.                            |
| 12.15 – 13.00 | _Ishoma_ | —                                                                                                                                                                                |
| 13.00 – 14.00 | Sesi 3   | Membuat Controller (`php artisan make:controller`). Praktik: form tambah tugas baru → data tersimpan ke database (**Create**), tampilkan data dari database ke tabel (**Read**). |

**Output hari ini:** Aplikasi bisa menambah tugas baru, dan data langsung muncul dari database (dummy data tergantikan data asli).

---

### 🗓️ Hari 3 — Rabu, 16 September 2026

**Fitur Update & Delete**

| Waktu         | Sesi     | Kegiatan                                                                                                                                                      |
| ------------- | -------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 09.00 – 10.30 | Sesi 1   | Review alur CRUD yang sudah berjalan. Praktik fitur **Update**: menandai tugas selesai/belum (toggle status).                                                 |
| 10.30 – 10.45 | _Break_  | —                                                                                                                                                             |
| 10.45 – 12.15 | Sesi 2   | Praktik fitur **Update** lanjutan: mengedit judul/deskripsi tugas. Validasi server-side (`$request->validate()`).                                             |
| 12.15 – 13.00 | _Ishoma_ | —                                                                                                                                                             |
| 13.00 – 14.00 | Sesi 3   | Praktik fitur **Delete**: menghapus tugas dengan konfirmasi, flash message sukses/gagal. (Opsional kelompok cepat: kategori tugas dengan relasi `belongsTo`). |

**Output hari ini:** CRUD lengkap (Create, Read, Update, Delete) — aplikasi sudah fungsional penuh.

---

### 🗓️ Hari 4 — Kamis, 17 September 2026

**Polish UI, Testing & Bug Fixing**

| Waktu         | Sesi     | Kegiatan                                                                                                                                                              |
| ------------- | -------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 09.00 – 10.30 | Sesi 1   | Polishing UI: progress bar ("x dari y tugas selesai"), loading state, penyempurnaan tampilan agar lebih rapi dan profesional.                                         |
| 10.30 – 10.45 | _Break_  | —                                                                                                                                                                     |
| 10.45 – 12.15 | Sesi 2   | Review konsistensi desain di seluruh halaman. Testing menyeluruh: menjalankan seluruh alur aplikasi dari awal (tambah → tandai selesai → edit → hapus).               |
| 12.15 – 13.00 | _Ishoma_ | —                                                                                                                                                                     |
| 13.00 – 14.00 | Sesi 3   | Identifikasi dan perbaikan bug (bug fixing) secara mandiri/berkelompok. Uji responsivitas di berbagai ukuran layar. Persiapan bahan presentasi untuk hari berikutnya. |

**Output hari ini:** Aplikasi Todo List sudah stabil, bebas bug utama, tampilan rapi — siap untuk didemokan.

---

### 🗓️ Hari 5 — Jumat, 18 September 2026

**Presentasi & Evaluasi**

| Waktu         | Sesi     | Kegiatan                                                                                                                                                                                                            |
| ------------- | -------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 09.00 – 10.30 | Sesi 1   | Persiapan akhir presentasi (gladi bersih singkat per kelompok/siswa). Presentasi hasil project dimulai: demo aplikasi, penjelasan alur fitur.                                                                       |
| 10.30 – 10.45 | _Break_  | —                                                                                                                                                                                                                   |
| 10.45 – 12.15 | Sesi 2   | Lanjutan presentasi seluruh kelompok/siswa. Penjelasan tantangan yang dihadapi selama pengerjaan project.                                                                                                           |
| 12.15 – 13.00 | _Ishoma_ | —                                                                                                                                                                                                                   |
| 13.00 – 14.00 | Sesi 3   | Sesi tanya jawab dan masukan dari fasilitator/guru pendamping. Diskusi seputar dunia kerja industri IT (peluang karier, skill yang dicari industri). Evaluasi keseluruhan workshop dan penutupan program guru tamu. |

**Output hari ini:** Seluruh siswa telah mempresentasikan project, mendapat umpan balik, dan memiliki portofolio nyata berupa aplikasi Todo List berbasis Laravel.

---

## 7. Rekap Jadwal Pelaksanaan

| Hari | Tanggal                   | Fokus                           | Waktu         |
| ---- | ------------------------- | ------------------------------- | ------------- |
| 1    | Senin, 14 September 2026  | HTML/CSS/JS + Instalasi Laravel | 09.00 – 14.00 |
| 2    | Selasa, 15 September 2026 | Database + Create & Read        | 09.00 – 14.00 |
| 3    | Rabu, 16 September 2026   | Update & Delete (CRUD lengkap)  | 09.00 – 14.00 |
| 4    | Kamis, 17 September 2026  | Polish UI, Testing, Bug Fixing  | 09.00 – 14.00 |
| 5    | Jumat, 18 September 2026  | Presentasi & Evaluasi           | 09.00 – 14.00 |

## 8. Ringkasan Progres Project per Hari

```
Hari 1 (14 Sep) → Tampilan interaktif + masuk Laravel (HTML/CSS/JS/Blade)
Hari 2 (15 Sep) → Terhubung database (Create + Read)
Hari 3 (16 Sep) → CRUD lengkap (Update + Delete)
Hari 4 (17 Sep) → Polish UI, testing, bug fixing
Hari 5 (18 Sep) → Presentasi & evaluasi
```

## 9. Skema Penilaian (Usulan)

| Aspek                                                         | Bobot |
| ------------------------------------------------------------- | ----- |
| Partisipasi & keaktifan harian                                | 20%   |
| Kesesuaian progres project per hari                           | 25%   |
| Fungsionalitas aplikasi akhir (CRUD lengkap, bebas bug utama) | 30%   |
| Presentasi & pemahaman konsep                                 | 25%   |

## 10. Catatan untuk Fasilitator

- **Hari 1 adalah hari paling padat** (3 topik besar: HTML/CSS, JavaScript, instalasi Laravel). Siapkan starter file agar tidak banyak waktu terbuang di setup.
- Jam istirahat (_coffee break_ & _ishoma_) bersifat tetap setiap hari agar siswa terbiasa dengan ritme workshop — sesuaikan durasi _ishoma_ dengan jadwal sholat setempat jika diperlukan.
- Prioritaskan **progres yang terlihat tiap hari** dibanding menuntaskan seluruh teori — ini kunci dari pendekatan project-based learning.
- Untuk siswa/kelompok yang lebih cepat menyelesaikan CRUD di hari 3, siapkan tantangan tambahan (kategori tugas, filter, sorting) agar tidak menganggur menunggu kelompok lain.
- Fitur login/autentikasi (Laravel Breeze) **tidak** dimasukkan dalam scope workshop ini — cakupannya sudah cukup padat tanpa itu.
- Hari 4 (testing & bug fixing) penting untuk **tidak dipotong atau digabung** — di sinilah siswa belajar debugging, skill yang sangat relevan dengan dunia kerja nyata.
- Dokumentasikan progres tiap hari (screenshot/demo singkat) sebagai bahan evaluasi dan portofolio siswa.
