@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/siswa/create.css') }}">
@endpush
@section('title', 'Tambah Siswa')

@section('content')
<div class="card">
    <div class="page-heading">
        <div>
            <h1>
                <i class="fa-solid fa-user-plus" style="color: var(--cyan); font-size: 1.5rem;"></i>
                Tambah Siswa Baru
            </h1>
            <p style="color: var(--text-muted); font-size: 0.85rem; margin: 0.35rem 0 0;">
                Daftarkan profil siswa baru ke dalam immutable database terenkripsi.
            </p>
        </div>
        <a class="btn btn-secondary btn-sm" href="{{ route('siswa.index') }}">
            <i class="fa-solid fa-arrow-left"></i> Kembali
        </a>
    </div>

    <form method="POST" action="{{ route('siswa.store') }}">
        @csrf
        <div class="form-group">
            <label for="nis"><i class="fa-solid fa-fingerprint" style="color: var(--cyan);"></i> Nomor Induk Siswa (NIS)</label>
            <input id="nis" name="nis" type="text" placeholder="Contoh: 21084201" value="{{ old('nis') }}" required autofocus>
        </div>

        <div class="form-group">
            <label for="nama"><i class="fa-solid fa-user" style="color: var(--cyan);"></i> Nama Lengkap</label>
            <input id="nama" name="nama" type="text" placeholder="Masukkan nama lengkap siswa" value="{{ old('nama') }}" required>
        </div>

        <div class="form-group">
            <label for="kelas_id"><i class="fa-solid fa-layer-group" style="color: var(--cyan);"></i> Pilih Kelas</label>
            <select id="kelas_id" name="kelas_id" required>
                <option value="">-- Pilih Kelas Terdaftar --</option>
                @foreach ($kelas as $item)
                    <option value="{{ $item->id }}" @selected(old('kelas_id') == $item->id)>{{ $item->nama_kelas }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="jenis_kelamin"><i class="fa-solid fa-venus-mars" style="color: var(--cyan);"></i> Jenis Kelamin</label>
            <select id="jenis_kelamin" name="jenis_kelamin">
                <option value="">-- Tidak Diisi / Opsional --</option>
                <option value="L" @selected(old('jenis_kelamin') === 'L')>Laki-laki (L)</option>
                <option value="P" @selected(old('jenis_kelamin') === 'P')>Perempuan (P)</option>
            </select>
        </div>

        <div class="form-actions">
            <button class="btn btn-primary" type="submit">
                <i class="fa-solid fa-shield-halved"></i> Simpan & Otorisasi
            </button>
            <a class="btn btn-secondary" href="{{ route('siswa.index') }}">
                <i class="fa-solid fa-xmark"></i> Batal
            </a>
        </div>
    </form>
</div>
@endsection
