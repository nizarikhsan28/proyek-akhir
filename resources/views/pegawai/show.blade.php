<!-- resources/views/pegawai/show.blade.php -->

@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <h1 style="text-align: center;">Detail Pegawai</h1>

        <a href="{{ route('pegawai.index') }}" class="btn btn-primary mb-3">Kembali</a>

        <div class="card">
            <div class="card-body">
                <img src="{{ asset('storage/foto_pegawai/' . $pegawai->foto) }}" alt="{{ $pegawai->nama_depan }}" style="width: 100px; height: 100px;">
                <h5 class="card-title">{{ $pegawai->nama_depan . ' ' . $pegawai->nama_belakang }}</h5>
                <p class="card-text">ID: {{ $pegawai->id }}</p>
                <p class="card-text">Jenis Kelamin: {{ $pegawai->jenis_kelamin }}</p>
                <p class="card-text">Tanggal Lahir: {{ $pegawai->tanggal_lahir }}</p>
                <p class="card-text">Alamat: {{ $pegawai->alamat }}</p>
                <p class="card-text">Nomor Telepon: {{ $pegawai->nomor_telepon }}</p>
                <p class="card-text">Email: {{ $pegawai->email }}</p>
                <p class="card-text">Jabatan: {{ $pegawai->jabatan }}</p>
                <p class="card-text">Tanggal Penerimaan Kerja: {{ $pegawai->tanggal_penerimaan_kerja }}</p>
                <p class="card-text">Status Pekerjaan: {{ $pegawai->status_pekerjaan }}</p>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS (if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection
