@extends('layouts.master')
@section('content')
<h2>Edit Mahasiswa</h2>

@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $err)
        <li>{{ $err }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('mahasiswa.update', $mhs->id) }}" method="POST">
    @csrf @method('PUT')
    <label>Nama</label>
    <input type="text" name="nama" value="{{ old('nama', $mhs->nama) }}">
    <label>NIM</label>
    <input type="text" name="nim" value="{{ old('nim', $mhs->nim) }}">
    <label>Prodi</label>
    <input type="text" name="prodi" value="{{ old('prodi', $mhs->prodi) }}">
    <label>Angkatan</label>
    <input type="number" name="angkatan" value="{{ old('angkatan', $mhs->angkatan) }}">
    <button type="submit">Update</button>
</form>
@endsection