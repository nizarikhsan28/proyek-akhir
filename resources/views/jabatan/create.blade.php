<!-- resources/views/jabatan/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="text-center">Tambah Jabatan</h1>

    <a href="{{ route('jabatan.index') }}" class="btn btn-secondary mb-3">Kembali</a>

    <form method="POST" action="{{ route('jabatan.store') }}">
        @csrf

        <div class="form-group">
            <label for="nama">Nama Jabatan</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
            @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="gaji_pokok">Gaji Pokok</label>
            <input type="text" class="form-control @error('gaji_pokok') is-invalid @enderror" id="gaji_pokok" name="gaji_pokok" value="{{ old('gaji_pokok') }}" required>
            @error('gaji_pokok')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="tunjangan_makan">Tunjangan Makan</label>
            <input type="text" class="form-control @error('tunjangan_makan') is-invalid @enderror" id="tunjangan_makan" name="tunjangan_makan" value="{{ old('tunjangan_makan') }}" required>
            @error('tunjangan_makan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="tunjangan_transportasi">Tunjangan Transportasi</label>
            <input type="text" class="form-control @error('tunjangan_transportasi') is-invalid @enderror" id="tunjangan_transportasi" name="tunjangan_transportasi" value="{{ old('tunjangan_transportasi') }}" required>
            @error('tunjangan_transportasi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="tunjangan_kesehatan">Tunjangan Kesehatan</label>
            <input type="text" class="form-control @error('tunjangan_kesehatan') is-invalid @enderror" id="tunjangan_kesehatan" name="tunjangan_kesehatan" value="{{ old('tunjangan_kesehatan') }}" required>
            @error('tunjangan_kesehatan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
