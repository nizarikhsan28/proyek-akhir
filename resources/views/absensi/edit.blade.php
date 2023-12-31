@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="text-center">Edit Absensi</h1>

    <a href="{{ route('absensi.index') }}" class="btn btn-secondary mb-3">Kembali</a>

    <form action="{{ route('absensi.update', $absensi->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="pegawai_id" class="form-label">Pegawai:</label>
            <select class="form-select" id="pegawai_id" name="pegawai_id" required>
                @foreach($pegawais as $pegawai)
                    <option value="{{ $pegawai->id }}" {{ $absensi->pegawai_id == $pegawai->id ? 'selected' : '' }}>
                        {{ $pegawai->nama_depan . ' ' . $pegawai->nama_belakang }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tanggal_absen" class="form-label">Tanggal Absen:</label>
            <input type="date" class="form-control" id="tanggal_absen" name="tanggal_absen" value="{{ $absensi->tanggal_absen }}" required>
        </div>

        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan:</label>
            <textarea class="form-control" id="keterangan" name="keterangan" rows="3" required>{{ $absensi->keterangan }}</textarea>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status:</label>
            <select class="form-select" id="status" name="status" required>
                <option value="Hadir" {{ $absensi->status == 'Hadir' ? 'selected' : '' }}>Hadir</option>
                <option value="Tidak Hadir" {{ $absensi->status == 'Tidak Hadir' ? 'selected' : '' }}>Tidak Hadir</option>
            </select>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="izin" name="izin" {{ $absensi->izin ? 'checked' : '' }}>
            <label class="form-check-label" for="izin">Izin</label>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="alpa" name="alpa" {{ $absensi->alpa ? 'checked' : '' }}>
            <label class="form-check-label" for="alpa">Alpa</label>
        </div>

        <div class="mb-3">
            <label for="catatan" class="form-label">Catatan:</label>
            <textarea class="form-control" id="catatan" name="catatan" rows="3">{{ $absensi->catatan }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
