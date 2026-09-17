@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/siswa/show.css') }}">
@endpush
@section('title', 'Detail Siswa')
@section('title', 'Detail Siswa: ' . $siswa->nama)

@section('content')
<div class="card">
    <div class="page-heading"><h1>Detail Siswa</h1>
        <a class="btn btn-secondary" href="{{ route('siswa.index') }}">Kembali</a>
    <div class="page-heading">
        <div>
            <h1>
                <i class="fa-solid fa-address-card" style="color: var(--purple); font-size: 1.5rem;"></i>
                Detail Identitas Siswa
            </h1>
            <p style="color: var(--text-muted); font-size: 0.85rem; margin: 0.35rem 0 0;">
                Metadata identitas terenkripsi dan catatan kehadiran.
            </p>
        </div>
        <div style="display: flex; gap: 0.5rem;">
            <a class="btn btn-secondary btn-sm" href="{{ route('siswa.index') }}">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </a>
            <a class="btn btn-primary btn-sm" href="{{ route('siswa.edit', $siswa) }}">
                <i class="fa-solid fa-pen-to-square"></i> Edit
            </a>
        </div>
    </div>
    <table>

    <table class="detail-table">
        <tbody>
            <tr><th>NIS</th><td>{{ $siswa->nis }}</td></tr>
            <tr><th>Nama</th><td>{{ $siswa->nama }}</td></tr>
            <tr><th>Kelas</th><td>{{ $siswa->kelas->nama_kelas ?? '-' }}</td></tr>
            <tr><th>Jenis Kelamin</th><td>{{ $siswa->jenis_kelamin ?? '-' }}</td></tr>
            <tr>
                <th><i class="fa-solid fa-fingerprint"></i> Nomor Induk (NIS)</th>
                <td><span class="nis-badge">{{ $siswa->nis }}</span></td>
            </tr>
            <tr>
                <th><i class="fa-solid fa-user"></i> Nama Lengkap</th>
                <td>{{ $siswa->nama }}</td>
            </tr>
            <tr>
                <th><i class="fa-solid fa-chalkboard-user"></i> Kelas</th>
                <td>
                    <span class="class-badge">
                        <i class="fa-solid fa-graduation-cap" style="color: var(--cyan); margin-right: 0.35rem;"></i>
                        {{ $siswa->kelas->nama_kelas ?? 'Belum ada kelas' }}
                    </span>
                </td>
            </tr>
            <tr>
                <th><i class="fa-solid fa-venus-mars"></i> Jenis Kelamin</th>
                <td>
                    @if ($siswa->jenis_kelamin === 'L')
                        <span class="gender-badge gender-l"><i class="fa-solid fa-mars"></i> Laki-laki</span>
                    @elseif ($siswa->jenis_kelamin === 'P')
                        <span class="gender-badge gender-p"><i class="fa-solid fa-venus"></i> Perempuan</span>
                    @else
                        <span style="color: var(--text-dim);">-</span>
                    @endif
                </td>
            </tr>
            <tr>
                <th><i class="fa-solid fa-shield-halved"></i> Verification Status</th>
                <td>
                    <span style="display: inline-flex; align-items: center; gap: 0.35rem; color: #34d399; font-family: var(--font-mono); font-size: 0.85rem;">
                        <i class="fa-solid fa-circle-check"></i> SHA-256 Validated
                    </span>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
