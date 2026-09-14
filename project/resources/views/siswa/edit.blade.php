@extends('layouts.app')

@section('title', 'Edit Siswa')

@section('content')
<div class="card">
    <div class="page-heading"><h1>Edit Siswa</h1></div>
    <form method="POST" action="{{ route('siswa.update', $siswa) }}">
        @csrf @method('PUT')
        <div class="form-group">
            <label for="nis">NIS</label>
            <input id="nis" name="nis" type="text" value="{{ old('nis', $siswa->nis) }}" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input id="nama" name="nama" type="text" value="{{ old('nama', $siswa->nama) }}" required>
        </div>
        <div class="form-group">
            <label for="kelas_id">Kelas</label>
            <select id="kelas_id" name="kelas_id" required>
                <option value="">-- Pilih Kelas --</option>
                @foreach ($kelas as $item)
                    <option value="{{ $item->id }}" @if (old('kelas_id', $siswa->kelas_id) == $item->id) selected @endif>{{ $item->nama_kelas }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select id="jenis_kelamin" name="jenis_kelamin">
                <option value="">-- Tidak diisi --</option>
                <option value="L" @if (old('jenis_kelamin', $siswa->jenis_kelamin) === 'L') selected @endif>Laki-laki</option>
                <option value="P" @if (old('jenis_kelamin', $siswa->jenis_kelamin) === 'P') selected @endif>Perempuan</option>
            </select>
        </div>
        <div class="form-actions">
            <button class="btn btn-primary" type="submit">Simpan</button>
            <a class="btn btn-secondary" href="{{ route('siswa.index') }}">Batal</a>
        </div>
    </form>
</div>
@endsection
