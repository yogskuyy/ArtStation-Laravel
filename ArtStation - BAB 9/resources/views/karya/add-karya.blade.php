@extends('layouts.app')

@section('title')
Tambah Karya | ArtStation
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/add-karya.css') }}">

<h2>Tambah Karya</h2>
<form action="{{ route('karya.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="nama">Nama Karya:</label>
        <input type="text" id="nama" name="nama_karya" required>
    </div>
    <div>
        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga" required>
    </div>
    <div>
        <label for="seniman">Seniman:</label>
        <input type="text" id="seniman" name="seniman" required>
    </div>
    <div>
        <label for="gambar">Gambar Karya:</label>
        <input type="file" id="gambar" name="gambar" required>
    </div>
    <button type="submit">Tambah</button>
</form>
<a class="kembali" href="{{ route('karya.index') }}">Kembali</a>
@endsection
