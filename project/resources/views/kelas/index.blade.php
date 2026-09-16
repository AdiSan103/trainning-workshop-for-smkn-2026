@extends('layouts.app')
@section('title', 'Data Kelas')
@section('content')
<div class="card">
    <div class="page-heading"><h1>Data Kelas</h1>
        <a class="btn btn-primary" href="{{ route('kelas.create') }}">Tambah Kelas</a>
    </div>
    <div class="table-wrap"><table>
        <thead><tr><th>Nama Kelas</th><th>Jumlah Siswa</th><th>Aksi</th></tr></thead>
        <tbody>
        @forelse ($kelas as $item)
            <tr><td>{{ $item->nama_kelas }}</td><td>{{ $item->siswa_count }}</td>
                <td><a class="btn btn-secondary" href="{{ route('kelas.show', $item) }}">Detail</a>
                    <a class="btn btn-secondary" href="{{ route('kelas.edit', $item) }}">Edit</a>
                    <form class="inline-form" method="POST" action="{{ route('kelas.destroy', $item) }}" onsubmit="return confirm('Hapus kelas ini?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger" type="submit">Hapus</button>
                    </form></td></tr>
        @empty
            <tr><td class="empty" colspan="3">Belum ada data kelas.</td></tr>
        @endforelse
        </tbody>
    </table></div>
</div>
@endsection
