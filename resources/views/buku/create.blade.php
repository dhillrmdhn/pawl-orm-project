@extends('layouts.master')
@section('content')
<h2>Tambah Buku</h2>
@if ($errors->any())
<div>
    <ul>@foreach ($errors->all() as $err)<li>{{ $err }}</li>@endforeach</ul>
</div>
@endif
<form action="{{ route('buku.store') }}" method="POST">
    @csrf
    <label>Judul</label>
    <input type="text" name="judul" value="{{ old('judul') }}">
    <label>Pengarang</label>
    <input type="text" name="pengarang" value="{{ old('pengarang') }}">
    <label>Tahun Terbit</label>
    <input type="number" name="tahun_terbit" value="{{ old('tahun_terbit') }}">
    <button type="submit">Simpan</button>
</form>
@endsection