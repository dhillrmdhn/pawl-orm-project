@extends('layouts.master')
@section('content')
<h2>Daftar Buku</h2>
<a href="{{ route('buku.create') }}">+ Tambah Buku</a>

@if(session('success'))
<div>{{ session('success') }}</div>
@endif

<ul>
    @foreach($data as $b)
    <li>
        {{ $b->judul }} - {{ $b->pengarang }} ({{ $b->tahun_terbit }})
        <a href="{{ route('buku.show', $b->id) }}">Detail</a>
        <a href="{{ route('buku.edit', $b->id) }}">Edit</a>
        <form action="{{ route('buku.destroy', $b->id) }}" method="POST" style="display:inline">
            @csrf @method('DELETE')
            <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
        </form>
    </li>
    @endforeach
</ul>
@endsection