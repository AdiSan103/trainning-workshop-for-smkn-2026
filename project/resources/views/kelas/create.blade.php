@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/kelas/create.css') }}">
@endpush
@section('title', 'Tambah Kelas')

@section('content')
<div class="card">
    <div class="page-heading">
        <div>
            <h1>
                <i class="fa-solid fa-folder-plus" style="color: var(--emerald); font-size: 1.5rem;"></i>
                Tambah Cluster Kelas
            </h1>
            <p style="color: var(--text-muted); font-size: 0.85rem; margin: 0.35rem 0 0;">
                Tambahkan grup cluster kelas baru ke dalam sistem terdistribusi.
            </p>
        </div>
        <a class="btn btn-secondary btn-sm" href="{{ route('kelas.index') }}">
            <i class="fa-solid fa-arrow-left"></i> Kembali
        </a>
    </div>

    <form method="POST" action="{{ route('kelas.store') }}">
        @csrf
        <div class="form-group">
            <label for="nama_kelas"><i class="fa-solid fa-tag" style="color: var(--emerald);"></i> Nama Kelas</label>
            <input id="nama_kelas" name="nama_kelas" type="text" placeholder="Contoh: XII RPL 1 / Cyber Security A" value="{{ old('nama_kelas') }}" required autofocus>
        </div>

        <div class="form-actions">
            <button class="btn btn-primary" type="submit">
                <i class="fa-solid fa-check"></i> Simpan Kelas
            </button>
            <a class="btn btn-secondary" href="{{ route('kelas.index') }}">
                <i class="fa-solid fa-xmark"></i> Batal
            </a>
        </div>
    </form>
</div>
@endsection
