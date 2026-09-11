@extends('layouts.app')

@section('title', 'Tambah Siswa')

@section('content')
    <div class="card">
        <div class="page-heading">
            <h1>Tambah Siswa</h1>
        </div>
        <form method="POST" action="{{ route('siswa.store') }}">
            @csrf
            @include('siswa.form')
        </form>
    </div>
@endsection
