@extends('layouts.app')

@section('title')
Laporan Penjualan Karya | ArtStation
@endsection

@section('content')
<h2>Laporan Penjualan Karya</h2>
<a class="btn-print" href="{{ route('karya.add-karya') }}">Tambah Data</a>
<a class="btn-cetak" href="{{ route('karya.download-pdf') }}">Cetak</a>
<table id="sales-table">
    <thead>
        <tr>
            <th>Photo</th>
            <th>Nama Karya</th>
            <th>Seniman</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($karya as $k)
        <tr>
            <td><img src="{{ asset('img_karya/' . $k->gambar) }}" alt="" width="300px"></td>
            <td>{{ $k->nama_karya }}</td>
            <td>{{ $k->seniman }}</td>
            <td>Rp. {{ number_format($k->harga) }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="4" align="center">Tidak ada data</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection

@section('scripts')
<script>
    function printTable() {
        window.print();
    }
</script>
@endsection
