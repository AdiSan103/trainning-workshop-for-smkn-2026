@extends('layouts.app')

@section('title', 'Detail Siswa')

@section('content')
<div class="card">
    <div class="page-heading"><h1>Detail Siswa</h1>
        <a class="btn btn-secondary" href="{{ route('siswa.index') }}">Kembali</a>
    </div>
    <table>
        <tbody>
            <tr><th>NIS</th><td>{{ $siswa->nis }}</td></tr>
            <tr><th>Nama</th><td>{{ $siswa->nama }}</td></tr>
            <tr><th>Kelas</th><td>{{ $siswa->kelas->nama_kelas ?? '-' }}</td></tr>
            <tr><th>Jenis Kelamin</th><td>{{ $siswa->jenis_kelamin ?? '-' }}</td></tr>
        </tbody>
    </table>
</div>
@endsection
