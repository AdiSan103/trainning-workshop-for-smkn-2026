@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/kelas/edit.css') }}">
@endpush
@section('title', 'Edit Kelas')
@section('title', 'Edit Kelas: ' . $kela->nama_kelas)

@section('content')
<div class="card">
    <div class="page-heading"><h1>Edit Kelas</h1></div>
    <div class="page-heading">
        <div>
            <h1>
                <i class="fa-solid fa-pen-to-square" style="color: var(--primary); font-size: 1.5rem;"></i>
                Edit Cluster Kelas
            </h1>
            <p style="color: var(--text-muted); font-size: 0.85rem; margin: 0.35rem 0 0;">
                Perbarui parameter nama cluster kelas.
            </p>
        </div>
        <a class="btn btn-secondary btn-sm" href="{{ route('kelas.index') }}">
            <i class="fa-solid fa-arrow-left"></i> Kembali
        </a>
    </div>

    <form method="POST" action="{{ route('kelas.update', $kela) }}">
        @csrf @method('PUT')
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_kelas">Nama Kelas</label>
            <label for="nama_kelas"><i class="fa-solid fa-tag" style="color: var(--primary);"></i> Nama Kelas</label>
            <input id="nama_kelas" name="nama_kelas" type="text" value="{{ old('nama_kelas', $kela->nama_kelas) }}" required>
        </div>

        <div class="form-actions">
            <button class="btn btn-primary" type="submit">Simpan</button>
            <a class="btn btn-secondary" href="{{ route('kelas.index') }}">Batal</a>
            <button class="btn btn-primary" type="submit">
                <i class="fa-solid fa-floppy-disk"></i> Perbarui Kelas
            </button>
            <a class="btn btn-secondary" href="{{ route('kelas.index') }}">
                <i class="fa-solid fa-xmark"></i> Batal
            </a>
        </div>
    </form>
</div>
@endsection
