@extends('layouts.app')
@section('title', 'Edit Kelas')
@section('content')
<div class="card">
    <div class="page-heading"><h1>Edit Kelas</h1></div>
    <form method="POST" action="{{ route('kelas.update', $kela) }}">
        @csrf @method('PUT')
        <div class="form-group">
            <label for="nama_kelas">Nama Kelas</label>
            <input id="nama_kelas" name="nama_kelas" type="text" value="{{ old('nama_kelas', $kela->nama_kelas) }}" required>
        </div>
        <div class="form-actions">
            <button class="btn btn-primary" type="submit">Simpan</button>
            <a class="btn btn-secondary" href="{{ route('kelas.index') }}">Batal</a>
        </div>
    </form>
</div>
@endsection
