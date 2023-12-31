<!-- resources/views/pegawai/create.blade.php -->

@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <div class="container mt-4">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h1 style="text-align: center;">Tambah Pegawai</h1>

        <form action="{{ route('pegawai.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Input untuk foto -->
            <div class="mb-3">
                <label for="foto" class="form-label">Foto Pegawai</label>
                <input type="file" class="form-control" id="foto" name="foto" accept="image/*" required>
            </div>
            <div class="mb-3">
                <label for="nama_depan" class="form-label">Nama Depan:</label>
                <input type="text" class="form-control" id="nama_depan" name="nama_depan" value="{{ old('nama_depan') }}" required>
            </div>
            <div class="mb-3">
                <label for="nama_belakang" class="form-label">Nama Belakang:</label>
                <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" value="{{ old('nama_belakang') }}" required>
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label>
                <select class="form-select" name="jenis_kelamin" required>
                    <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
                <input type="date" class="form-control" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <textarea class="form-control" name="alamat" required>{{ old('alamat') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="nomor_telepon" class="form-label">Nomor Telepon:</label>
                <input type="text" class="form-control" name="nomor_telepon" value="{{ old('nomor_telepon') }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan:</label>
                <select class="form-select" name="jabatan" required>
                    @foreach ($jabatan as $j)
                        <option value="{{ $j->id }}">{{ $j->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="tanggal_penerimaan_kerja" class="form-label">Tanggal Penerimaan Kerja:</label>
                <input type="date" class="form-control" name="tanggal_penerimaan_kerja" value="{{ old('tanggal_penerimaan_kerja') }}" required>
            </div>
            <div class="mb-3">
                <label for="status_pekerjaan" class="form-label">Status Pekerjaan:</label>
                <select class="form-select" name="status_pekerjaan" required>
                    <option value="Aktif" {{ old('status_pekerjaan') == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                    <option value="Nonaktif" {{ old('status_pekerjaan') == 'Nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                    <option value="Cuti" {{ old('status_pekerjaan') == 'Cuti' ? 'selected' : '' }}>Cuti</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <!-- Bootstrap JS (if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection
