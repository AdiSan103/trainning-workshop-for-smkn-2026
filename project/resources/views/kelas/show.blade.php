@extends('layouts.app')

@section('title', 'Detail Kelas')

@section('content')
<div class="card">
    <div class="page-heading"><h1>Detail Kelas</h1>
        <a class="btn btn-secondary" href="{{ route('kelas.index') }}">Kembali</a>
    </div>
    <table>
        <tbody>
            <tr><th>Nama Kelas</th><td>{{ $kela->nama_kelas }}</td></tr>
            <tr><th>Jumlah Siswa</th><td>{{ $kela->siswa()->count() }}</td></tr>
        </tbody>
    </table>
</div>
@endsection
