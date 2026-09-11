@extends('layouts.app')

@section('title', 'Data Siswa')

@section('content')
    <div class="card">
        <div class="page-heading">
            <h1>Data Siswa</h1>
            <a class="btn btn-primary" href="{{ route('siswa.create') }}">Tambah Siswa</a>
        </div>

        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($siswa as $item)
                        <tr>
                            <td>{{ $item->nis }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->kelas->nama_kelas ?? '-' }}</td>
                            <td>{{ $item->jenis_kelamin ?? '-' }}</td>
                            <td>
                                <a class="btn btn-secondary" href="{{ route('siswa.edit', $item) }}">Edit</a>
                                <form class="inline-form" method="POST" action="{{ route('siswa.destroy', $item) }}" onsubmit="return confirm('Hapus data siswa {{ $item->nama }}?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="empty" colspan="5">Belum ada data siswa.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
