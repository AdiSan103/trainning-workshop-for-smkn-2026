@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/kelas/index.css') }}">
@endpush
@section('title', 'Data Kelas')

@section('content')
<!-- Telemetry Widgets -->
<div class="telemetry-row">
    <div class="telemetry-card">
        <div class="telemetry-header">
            <span class="telemetry-title">Total Cluster / Kelas</span>
            <i class="fa-solid fa-layer-group telemetry-icon" style="color: var(--emerald);"></i>
        </div>
        <div class="telemetry-value" style="color: #34d399;">{{ count($kelas) }}</div>
        <div class="telemetry-sub">
            <i class="fa-solid fa-network-wired"></i>
            <span>All Class Nodes Active</span>
        </div>
    </div>

    <div class="telemetry-card">
        <div class="telemetry-header">
            <span class="telemetry-title">Consensus Health</span>
            <i class="fa-solid fa-heart-pulse telemetry-icon" style="color: var(--cyan);"></i>
        </div>
        <div class="telemetry-value">99.98%</div>
        <div class="telemetry-sub">
            <i class="fa-solid fa-circle-check"></i>
            <span>Latency < 12ms</span>
        </div>
    </div>

    <div class="telemetry-card">
        <div class="telemetry-header">
            <span class="telemetry-title">Ledger Integrity</span>
            <i class="fa-solid fa-shield-halved telemetry-icon" style="color: #60a5fa;"></i>
        </div>
        <div class="telemetry-value" style="color: #60a5fa;">OPTIMAL</div>
        <div class="telemetry-sub" style="color: #94a3b8;">
            <i class="fa-solid fa-fingerprint"></i>
            <span>Merkle Tree Verified</span>
        </div>
    </div>
</div>

<div class="card">
    <div class="page-heading">
        <div>
            <h1>
                <i class="fa-solid fa-shapes" style="color: var(--emerald); font-size: 1.6rem;"></i>
                Data Kelas
                <span class="h1-badge" style="background: rgba(16, 185, 129, 0.15); border-color: rgba(16, 185, 129, 0.3); color: #6ee7b7;">Clusters</span>
            </h1>
        </div>
        <a class="btn btn-primary" href="{{ route('kelas.create') }}">
            <i class="fa-solid fa-plus"></i> Tambah Kelas
        </a>
    </div>

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th><i class="fa-solid fa-chalkboard"></i> Nama Kelas</th>
                    <th><i class="fa-solid fa-users"></i> Jumlah Siswa Terdaftar</th>
                    <th style="text-align: right;"><i class="fa-solid fa-sliders"></i> Aksi</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($kelas as $item)
                <tr>
                    <td>
                        <div style="font-weight: 700; color: #ffffff; font-size: 0.98rem;">
                            {{ $item->nama_kelas }}
                        </div>
                    </td>
                    <td>
                        <span class="count">{{ $item->siswa_count ?? 0 }} Siswa</span>
                    </td>
                    <td style="text-align: right;">
                        <div style="display: inline-flex; gap: 0.4rem;">
                            <a class="btn btn-secondary btn-sm" href="{{ route('kelas.show', $item) }}" title="Detail Kelas">
                                <i class="fa-solid fa-eye"></i> Detail
                            </a>
                            <a class="btn btn-secondary btn-sm" href="{{ route('kelas.edit', $item) }}" title="Edit Kelas">
                                <i class="fa-solid fa-pen-to-square"></i> Edit
                            </a>
                            <form class="inline-form" method="POST" action="{{ route('kelas.destroy', $item) }}" onsubmit="return confirm('Hapus kelas ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit" title="Hapus Kelas">
                                    <i class="fa-solid fa-trash-can"></i> Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="empty" colspan="3">
                        <i class="fa-solid fa-layer-group" style="font-size: 2rem; margin-bottom: 0.5rem; display: block; opacity: 0.4;"></i>
                        Belum ada data cluster kelas.
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
