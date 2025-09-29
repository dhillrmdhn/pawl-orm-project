@extends('layouts.master')
@section('content')
<h2>Tambah Mahasiswa</h2>

@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $err)
        <li>{{ $err }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('mahasiswa.store') }}" method="POST">
    @csrf
    <label>Nama</label>
    <input type="text" name="nama" value="{{ old('nama') }}">
    <label>NIM</label>
    <input type="text" name="nim" value="{{ old('nim') }}">
    <label>Prodi</label>
    <input type="text" name="prodi" value="{{ old('prodi') }}">
    <label>Angkatan</label>
    <input type="number" name="angkatan" value="{{ old('angkatan') }}">
    <button type="submit">Simpan</button>
</form>
@endsection