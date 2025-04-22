<!DOCTYPE html>
<html>
<head>
    <title>Daftar Ruangan</title>
</head>
<body>
    <h1>Daftar Ruangan Tersedia</h1>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Kapasitas</th>
            <th>Deskripsi</th>
            <th>Status</th>
        </tr>
        @foreach ($ruangan as $r)
        <tr>
            <td>{{ $r->nama }}</td>
            <td>{{ $r->kapasitas }}</td>
            <td>{{ $r->deskripsi }}</td>
            <td>{{ $r->tersedia ? 'Tersedia' : 'Tidak Tersedia' }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
