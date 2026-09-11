@extends('layouts.app')

@section('title', 'Edit Siswa')

@section('content')
    <div class="card">
        <div class="page-heading">
            <h1>Edit Siswa</h1>
        </div>
        <form method="POST" action="{{ route('siswa.update', $siswa) }}">
            @csrf
            @method('PUT')
            @include('siswa.form')
        </form>
    </div>
@endsection
