# PRD — Sistem Penginputan Data Siswa SMKN 2 Tabanan

**Jenis:** Mini Project Workshop
**Studi Kasus:** Aplikasi input & kelola data nama siswa
**Jumlah Tabel:** 2 (`siswa`, `kelas`)

---

## 1. Latar Belakang & Tujuan

Sekolah butuh cara sederhana catat data siswa per kelas — ganti catatan manual/Excel jadi aplikasi web basic. Tujuan: siswa praktik CRUD dasar (Create, Read, Update, Delete) dengan relasi 1 tabel ke tabel lain.

## 2. Scope (Fitur)

**Wajib:**
- Tambah data siswa (nama, NIS, kelas)
- Tampilkan daftar siswa (tabel)
- Edit data siswa
- Hapus data siswa
- Tambah & lihat daftar kelas (dropdown pilihan saat input siswa)

**Opsional (jika waktu cukup):**
- Search/filter siswa berdasarkan nama atau kelas
- Export daftar siswa ke CSV

**Di luar scope:**
- Login/autentikasi
- Nilai, absensi, atau data akademik lain
- Upload foto siswa

## 3. Skema Database (2 Tabel)

### Tabel `kelas`

| Kolom      | Tipe      | Keterangan                   |
| ---------- | --------- | ----------------------------- |
| id         | bigint    | primary key, auto increment  |
| nama_kelas | string    | contoh: "XI RPL 1"            |
| created_at, updated_at | timestamp | otomatis |

### Tabel `siswa`

| Kolom      | Tipe            | Keterangan                              |
| ---------- | --------------- | ---------------------------------------- |
| id         | bigint          | primary key, auto increment             |
| nis        | string, unique  | nomor induk siswa                       |
| nama       | string          | nama lengkap siswa                      |
| kelas_id   | bigint, FK      | relasi ke `kelas.id` (belongsTo)        |
| jenis_kelamin | enum ('L','P') | opsional, boleh dikosongkan             |
| created_at, updated_at | timestamp | otomatis                     |

**Relasi:** `siswa` belongsTo `kelas` — satu kelas punya banyak siswa (`hasMany`).

## 4. Alur Pengguna

1. User buka halaman → lihat daftar siswa (tabel, kolom: NIS, Nama, Kelas).
2. Klik "Tambah Siswa" → isi form (nama, NIS, pilih kelas dari dropdown) → simpan.
3. Klik "Edit" pada baris siswa → ubah data → simpan.
4. Klik "Hapus" → konfirmasi → data hilang dari daftar.
5. (Opsional) Ketik di kolom search → daftar ter-filter otomatis.

## 5. Tech Stack

Sama seperti workshop Todo List sebelumnya — Laravel + Blade + MySQL. Lihat [program-workshop-web-programming.md](program-workshop-web-programming.md) untuk stack detail & alat yang dibutuhkan.

## 6. Kriteria Selesai (Definition of Done)

- CRUD siswa lengkap & berfungsi
- Relasi kelas_id tersambung benar (nama kelas tampil di daftar siswa, bukan cuma ID)
- Validasi: NIS wajib unik, nama & kelas wajib diisi
- Tampilan rapi, tidak ada error di console/log saat pemakaian normal

---

**Catatan:** PRD ini sengaja dibatasi 2 tabel sesuai permintaan — skip fitur seperti absensi/nilai yang akan butuh tabel tambahan. Tambahkan tabel baru kalau scope project berkembang di sesi lanjutan.
