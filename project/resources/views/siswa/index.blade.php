@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/siswa/index.css') }}">
@endpush
@section('title', 'Data Siswa')

@section('content')
<!-- Telemetry Widgets -->
<div class="telemetry-row">
    <div class="telemetry-card">
        <div class="telemetry-header">
            <span class="telemetry-title">Identitas Terverifikasi</span>
            <i class="fa-solid fa-id-card-clip telemetry-icon"></i>
        </div>
        <div class="telemetry-value">{{ count($siswa) }}</div>
        <div class="telemetry-sub">
            <i class="fa-solid fa-shield-check"></i>
            <span>All Records Multi-Sig Signed</span>
        </div>
    </div>

    <div class="telemetry-card">
        <div class="telemetry-header">
            <span class="telemetry-title">Security State</span>
            <i class="fa-solid fa-lock telemetry-icon" style="color: #34d399;"></i>
        </div>
        <div class="telemetry-value" style="color: #34d399;">SECURE</div>
        <div class="telemetry-sub">
            <i class="fa-solid fa-circle-check"></i>
            <span>Zero-Knowledge Proof Active</span>
        </div>
    </div>

    <div class="telemetry-card">
        <div class="telemetry-header">
            <span class="telemetry-title">Smart Ledger Hash</span>
            <i class="fa-solid fa-cube telemetry-icon" style="color: #a78bfa;"></i>
        </div>
        <div class="telemetry-value" style="font-size: 1.15rem; letter-spacing: 0.04em; padding-top: 0.35rem;">
            0x8F4A...3B9C
        </div>
        <div class="telemetry-sub" style="color: #94a3b8;">
            <i class="fa-solid fa-link"></i>
            <span>Block #19,842,104 Synced</span>
        </div>
    </div>
</div>

<div class="card">
    <div class="page-heading">
        <div>
            <h1>
                <i class="fa-solid fa-users-gear" style="color: var(--cyan); font-size: 1.6rem;"></i>
                Data Siswa
                <span class="h1-badge">Live Ledger</span>
            </h1>
        </div>
        <a class="btn btn-primary" href="{{ route('siswa.create') }}">
            <i class="fa-solid fa-user-plus"></i> Tambah Siswa
        </a>
    </div>

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th><i class="fa-solid fa-hashtag"></i> NIS</th>
                    <th><i class="fa-solid fa-user"></i> Nama Siswa</th>
                    <th><i class="fa-solid fa-chalkboard-user"></i> Kelas</th>
                    <th><i class="fa-solid fa-venus-mars"></i> Gender</th>
                    <th style="text-align: right;"><i class="fa-solid fa-sliders"></i> Aksi</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($siswa as $item)
                <tr>
                    <td>
                        <span class="nis-badge">{{ $item->nis }}</span>
                    </td>
                    <td>
                        <div style="font-weight: 600; color: #ffffff;">{{ $item->nama }}</div>
                    </td>
                    <td>
                        <span class="class-badge">
                            <i class="fa-solid fa-graduation-cap" style="color: var(--cyan); margin-right: 0.35rem;"></i>
                            {{ $item->kelas->nama_kelas ?? 'Belum ada kelas' }}
                        </span>
                    </td>
                    <td>
                        @if ($item->jenis_kelamin === 'L')
                            <span class="gender-badge gender-l">
                                <i class="fa-solid fa-mars"></i> Laki-laki
                            </span>
                        @elseif ($item->jenis_kelamin === 'P')
                            <span class="gender-badge gender-p">
                                <i class="fa-solid fa-venus"></i> Perempuan
                            </span>
                        @else
                            <span style="color: var(--text-dim);">-</span>
                        @endif
                    </td>
                    <td style="text-align: right;">
                        <div style="display: inline-flex; gap: 0.4rem;">
                            <a class="btn btn-secondary btn-sm" href="{{ route('siswa.show', $item) }}" title="Lihat Detail">
                                <i class="fa-solid fa-eye"></i> Detail
                            </a>
                            <a class="btn btn-secondary btn-sm" href="{{ route('siswa.edit', $item) }}" title="Edit Data">
                                <i class="fa-solid fa-pen-to-square"></i> Edit
                            </a>
                            <form class="inline-form" method="POST" action="{{ route('siswa.destroy', $item) }}" onsubmit="return confirm('Hapus data siswa ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit" title="Hapus Data">
                                    <i class="fa-solid fa-trash-can"></i> Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="empty" colspan="5">
                        <i class="fa-solid fa-database" style="font-size: 2rem; margin-bottom: 0.5rem; display: block; opacity: 0.4;"></i>
                        Belum ada data siswa dalam cryptographic vault ini.
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
