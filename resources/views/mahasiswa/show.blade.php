@extends('layouts.master')
@section('content')
<h2>Detail Mahasiswa</h2>
<p><strong>NIM:</strong> {{ $mhs->nim }}</p>
<p><strong>Nama:</strong> {{ $mhs->nama }}</p>
<p><strong>Prodi:</strong> {{ $mhs->prodi }}</p>
<p><strong>Angkatan:</strong> {{ $mhs->angkatan }}</p>
<a href="{{ route('mahasiswa.index') }}">Kembali</a>
@endsection