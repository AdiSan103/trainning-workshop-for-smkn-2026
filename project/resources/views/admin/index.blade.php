@extends('layouts.app')
@section('title', 'Dashboard Admin')
@section('content')
<div class="card">
    <div class="page-heading"><h1>Data Admin</h1>
        <div class="nav-links">
            <a class="btn btn-primary" href="{{ route('admin.register') }}">Tambah Admin</a>
            <form class="inline-form" method="POST" action="{{ route('admin.logout') }}">@csrf
                <button class="btn btn-secondary" type="submit">Logout</button></form>
        </div>
    </div>
    <div class="table-wrap"><table>
        <thead><tr><th>Username</th><th>Email</th><th>Aksi</th></tr></thead>
        <tbody>
        @forelse ($admin as $item)
            <tr><td>{{ $item->username }}</td><td>{{ $item->email }}</td>
            <td><a class="btn btn-secondary" href="{{ route('admin.edit', $item) }}">Edit</a>
                <form class="inline-form" method="POST" action="{{ route('admin.destroy', $item) }}" onsubmit="return confirm('Hapus admin ini?')">@csrf @method('DELETE')
                    <button class="btn btn-danger" type="submit">Hapus</button></form></td></tr>
        @empty
            <tr><td class="empty" colspan="3">Belum ada data admin.</td></tr>
        @endforelse
        </tbody>
    </table></div>
</div>
@endsection
