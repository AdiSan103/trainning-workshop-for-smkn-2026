@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/kelas/show.css') }}">
@endpush
@section('title', 'Detail Kelas')
@section('title', 'Detail Kelas: ' . $kela->nama_kelas)

@section('content')
<div class="card">
    <div class="page-heading"><h1>Detail Kelas</h1>
        <a class="btn btn-secondary" href="{{ route('kelas.index') }}">Kembali</a>
    <div class="page-heading">
        <div>
            <h1>
                <i class="fa-solid fa-shapes" style="color: var(--emerald); font-size: 1.5rem;"></i>
                Detail Cluster Kelas
            </h1>
            <p style="color: var(--text-muted); font-size: 0.85rem; margin: 0.35rem 0 0;">
                Spesifikasi grup cluster kelas dan total beban entitas.
            </p>
        </div>
        <div style="display: flex; gap: 0.5rem;">
            <a class="btn btn-secondary btn-sm" href="{{ route('kelas.index') }}">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </a>
            <a class="btn btn-primary btn-sm" href="{{ route('kelas.edit', $kela) }}">
                <i class="fa-solid fa-pen-to-square"></i> Edit
            </a>
        </div>
    </div>
    <table>

    <table class="detail-table">
        <tbody>
            <tr><th>Nama Kelas</th><td>{{ $kela->nama_kelas }}</td></tr>
            <tr><th>Jumlah Siswa</th><td>{{ $kela->siswa()->count() }}</td></tr>
            <tr>
                <th><i class="fa-solid fa-chalkboard"></i> Nama Kelas</th>
                <td><span style="font-size: 1.05rem; font-weight: 700; color: #ffffff;">{{ $kela->nama_kelas }}</span></td>
            </tr>
            <tr>
                <th><i class="fa-solid fa-users"></i> Jumlah Anggota Siswa</th>
                <td>
                    <span class="count">{{ $kela->siswa()->count() }} Siswa</span>
                </td>
            </tr>
            <tr>
                <th><i class="fa-solid fa-network-wired"></i> Node Network Status</th>
                <td>
                    <span style="display: inline-flex; align-items: center; gap: 0.35rem; color: #34d399; font-family: var(--font-mono); font-size: 0.85rem;">
                        <i class="fa-solid fa-circle-check"></i> Distributed & Synchronized
                    </span>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
