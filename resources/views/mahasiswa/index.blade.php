@extends('layouts.master')
@section('content')
<h2>Daftar Mahasiswa</h2>
<a href="{{ route('mahasiswa.create') }}">+ Tambah Mahasiswa</a>

@if(session('success'))
<div>{{ session('success') }}</div>
@endif

<ul>
    @foreach($data as $m)
    <li>
        {{ $m->nim }} - {{ $m->nama }} ({{ $m->prodi }}) - Angk: {{ $m->angkatan ?? '-' }}
        <a href="{{ route('mahasiswa.show', $m->id) }}">Detail</a>
        <a href="{{ route('mahasiswa.edit', $m->id) }}">Edit</a>
        <form action="{{ route('mahasiswa.destroy', $m->id) }}" method="POST" style="display:inline">
            @csrf @method('DELETE')
            <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
        </form>
    </li>
    @endforeach
</ul>
@endsection