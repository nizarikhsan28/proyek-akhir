@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center mb-4">Tambah Absensi</h1>

        <form action="{{ route('absensi.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="pegawai_id" class="form-label">Pegawai:</label>
                <select class="form-select" name="pegawai_id" required>
                    @foreach($pegawais as $pegawai)
                        <option value="{{ $pegawai->id }}">{{ $pegawai->nama_depan . ' ' . $pegawai->nama_belakang }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="tanggal_absen" class="form-label">Tanggal Absen:</label>
                <input type="date" class="form-control" name="tanggal_absen" required>
            </div>

            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan:</label>
                <input type="text" class="form-control" name="keterangan" required>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status:</label>
                <select class="form-select" name="status" required>
                    <option value="Hadir">Hadir</option>
                    <option value="Tidak Hadir">Tidak Hadir</option>
                </select>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="izin" id="izin">
                <label class="form-check-label" for="izin">Izin</label>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="alpa" id="alpa">
                <label class="form-check-label" for="alpa">Alpa</label>
            </div>

            <div class="mb-3">
                <label for="catatan" class="form-label">Catatan:</label>
                <textarea class="form-control" name="catatan"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    <!-- Add this line to include Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

@endsection
