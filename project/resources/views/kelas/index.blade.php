@extends('layouts.app')

@section('title', 'Data Kelas')

@section('content')
    <div class="card">
        <div class="page-heading">
            <h1>Data Kelas</h1>
        </div>

        <form method="POST" action="{{ route('kelas.store') }}" class="form-group">
            @csrf
            <label for="nama_kelas">Nama Kelas Baru</label>
            <div class="nav-links">
                <input id="nama_kelas" name="nama_kelas" type="text" value="{{ old('nama_kelas') }}" placeholder="contoh: XI RPL 1" required>
                <button class="btn btn-primary" type="submit">Tambah</button>
            </div>
        </form>

        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>Nama Kelas</th>
                        <th>Jumlah Siswa</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($kelas as $item)
                        <tr>
                            <td>{{ $item->nama_kelas }}</td>
                            <td>{{ $item->siswa_count }}</td>
                            <td>
                                <form class="inline-form" method="POST" action="{{ route('kelas.destroy', $item) }}" onsubmit="return confirm('Hapus kelas {{ $item->nama_kelas }}?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="empty" colspan="3">Belum ada data kelas.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
