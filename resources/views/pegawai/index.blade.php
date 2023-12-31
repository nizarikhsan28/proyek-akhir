<!-- resources/views/pegawai/index.blade.php -->

@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <style>
    th {
        vertical-align: middle; /* Adjust this property to 'top', 'middle', or 'bottom' as needed */
    }
</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <h1 style="text-align: center;">Data Pegawai</h1>

        <a href="{{ route('pegawai.create') }}" class="btn btn-primary mb-3">Tambah Pegawai</a>

        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Email</th>
                    <th>Jabatan</th>
                    <th>Tanggal Penerimaan Kerja</th>
                    <th>Status Pekerjaan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pegawai as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>
                            @if($p->foto)
                                <img src="{{ asset('storage/foto_pegawai/' . $p->foto) }}" alt="{{ $p->nama_depan }}" style="width: 50px; height: 50px;">
                            @else
                                No Photo
                            @endif
                        </td>
                        <td>{{ $p->nama_depan . ' ' . $p->nama_belakang }}</td>
                        <td>{{ $p->jenis_kelamin }}</td>
                        <td>{{ $p->tanggal_lahir }}</td>
                        <td>{{ $p->alamat }}</td>
                        <td>{{ $p->nomor_telepon }}</td>
                        <td>{{ $p->email }}</td>
                        <td>{{ $p->jabatan }}</td>
                        <td>{{ $p->tanggal_penerimaan_kerja }}</td>
                        <td>{{ $p->status_pekerjaan }}</td>
                        <td>
                            <a href="{{ route('pegawai.show', $p->id) }}" class="btn btn-info btn-sm">Lihat</a>
                            <a href="{{ route('pegawai.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('pegawai.destroy', $p->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS (if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection
