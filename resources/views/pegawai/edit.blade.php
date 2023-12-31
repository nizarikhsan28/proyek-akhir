<!-- resources/views/pegawai/edit.blade.php -->

@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <h1 style="text-align: center;">Edit Pegawai</h1>
            <a href="{{ route('pegawai.index') }}" class="btn btn-secondary mb-3">Kembali</a>
        <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="foto" class="form-label">Foto Pegawai</label>
                @if($pegawai->foto)
                    <img src="{{ asset('storage/foto_pegawai/' . $pegawai->foto) }}" alt="{{ $pegawai->nama_depan }}" class="img-thumbnail mb-2" style="max-width: 150px; max-height: 150px;">
                @else
                    <p>No Photo</p>
                @endif
                <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
            </div>

            <div class="mb-3">
                <label for="nama_depan" class="form-label">Nama Depan:</label>
                <input type="text" class="form-control" name="nama_depan" value="{{ old('nama_depan', $pegawai->nama_depan) }}" required>
            </div>

            <div class="mb-3">
                <label for="nama_belakang" class="form-label">Nama Belakang:</label>
                <input type="text" class="form-control" name="nama_belakang" value="{{ old('nama_belakang', $pegawai->nama_belakang) }}" required>
            </div>

            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label>
                <select class="form-select" name="jenis_kelamin" required>
                    <option value="Laki-laki" {{ old('jenis_kelamin', $pegawai->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ old('jenis_kelamin', $pegawai->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
                <input type="date" class="form-control" name="tanggal_lahir" value="{{ old('tanggal_lahir', $pegawai->tanggal_lahir) }}" required>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <textarea class="form-control" name="alamat" required>{{ old('alamat', $pegawai->alamat) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="nomor_telepon" class="form-label">Nomor Telepon:</label>
                <input type="text" class="form-control" name="nomor_telepon" value="{{ old('nomor_telepon', $pegawai->nomor_telepon) }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" value="{{ old('email', $pegawai->email) }}" required>
            </div>

            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan:</label>
                <input type="text" class="form-control" name="jabatan" value="{{ old('jabatan', $pegawai->jabatan) }}" required>
            </div>

            <div class="mb-3">
                <label for="tanggal_penerimaan_kerja" class="form-label">Tanggal Penerimaan Kerja:</label>
                <input type="date" class="form-control" name="tanggal_penerimaan_kerja" value="{{ old('tanggal_penerimaan_kerja', $pegawai->tanggal_penerimaan_kerja) }}" required>
            </div>

            <div class="mb-3">
                <label for="status_pekerjaan" class="form-label">Status Pekerjaan:</label>
                <select class="form-select" name="status_pekerjaan" required>
                    <option value="Aktif" {{ old('status_pekerjaan', $pegawai->status_pekerjaan) == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                    <option value="Nonaktif" {{ old('status_pekerjaan', $pegawai->status_pekerjaan) == 'Nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                    <option value="Cuti" {{ old('status_pekerjaan', $pegawai->status_pekerjaan) == 'Cuti' ? 'selected' : '' }}>Cuti</option>
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
