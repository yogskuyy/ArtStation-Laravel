@extends('layouts.app')

@section('title')
Karya | ArtStation
@endsection

@section('content')
<h2>List Penjualan Karya</h2>
<a class="btn-print" href="{{ route('karya.add-karya') }}">Tambah Data</a>
<table id="sales-table">
  <thead>
    <tr>
        <th>Photo</th>
        
        <th>Nama Karya</th>
        <th>Seniman</th>
        <th>Harga</th>
        <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($karya as $karya)
    <tr>
      <td><img src="{{ asset('img_karya/' . $karya->gambar)  }}" alt="" width="300px"></td>
      <td>{{ $karya->nama_karya }}</td>
      <td>{{ $karya->seniman }}</td>
      <td>Rp. {{ number_format($karya->harga) }}</td>
      <td>
        <a class='btn-edit' href="/karya/edit/{{ $karya->id_karya }}">Edit</a>
        <a class='btn-delete' href="/karya/hapus/{{ $karya->id_karya }}">Hapus</a>
      </td>
    </tr>
    @empty
    <tr>
      <td colspan="5" align="center">Tidak ada data</td>
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
