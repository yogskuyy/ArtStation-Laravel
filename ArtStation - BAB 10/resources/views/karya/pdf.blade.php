<!DOCTYPE html>
<html>
<head>
    <title>Laporan Penjualan Karya</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }
        h2 {
            text-align: center;
            color: #2c3e50;
            margin: 20px 0;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 2px 3px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            border: 1px #000 solid;
        }
        th {
            background-color: #3498db;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e9e9e9;
        }
        img {
            width: 150px;
            height: auto;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <h2>Laporan Penjualan Karya</h2>
    <table>
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
                <td><img src="{{ public_path('img_karya/' . $k->gambar) }}" alt=""></td>
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
</body>
</html>
