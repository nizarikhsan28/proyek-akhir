@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="text-center">{{ isset($jabatan) ? 'Edit' : 'Tambah' }} Jabatan</h1>

        <a href="{{ route('jabatan.index') }}" class="btn btn-secondary mb-3">Kembali</a>
    <form action="{{ isset($jabatan) ? route('jabatan.update', $jabatan->id) : route('jabatan.store') }}" method="POST">
        @csrf
        @if(isset($jabatan))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Jabatan:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ isset($jabatan) ? $jabatan->nama : old('nama') }}" required>
        </div>
        <div class="mb-3">
            <label for="gaji_pokok" class="form-label">Gaji Pokok:</label>
            <input type="number" class="form-control" id="gaji_pokok" name="gaji_pokok" value="{{ isset($jabatan) ? $jabatan->gaji_pokok : old('gaji_pokok') }}" required>
        </div>
        <div class="mb-3">
            <label for="tunjangan_makan" class="form-label">Tunjangan Makan:</label>
            <input type="number" class="form-control" id="tunjangan_makan" name="tunjangan_makan" value="{{ isset($jabatan) ? $jabatan->tunjangan_makan : old('tunjangan_makan') }}" required>
        </div>
        <div class="mb-3">
            <label for="tunjangan_transportasi" class="form-label">Tunjangan Transportasi:</label>
            <input type="number" class="form-control" id="tunjangan_transportasi" name="tunjangan_transportasi" value="{{ isset($jabatan) ? $jabatan->tunjangan_transportasi : old('tunjangan_transportasi') }}" required>
        </div>
        <div class="mb-3">
            <label for="tunjangan_kesehatan" class="form-label">Tunjangan Kesehatan:</label>
            <input type="number" class="form-control" id="tunjangan_kesehatan" name="tunjangan_kesehatan" value="{{ isset($jabatan) ? $jabatan->tunjangan_kesehatan : old('tunjangan_kesehatan') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
