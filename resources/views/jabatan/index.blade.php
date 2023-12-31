<!-- resources/views/jabatan/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 style="text-align: center;">Data Jabatan</h1>

    <a href="{{ route('jabatan.create') }}" class="btn btn-primary mb-3">Tambah Jabatan</a>

    <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Jabatan</th>
                <th>Gaji Pokok</th>
                <th>Tunjangan Makan</th>
                <th>Tunjangan Transportasi</th>
                <th>Tunjangan Kesehatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jabatan as $j)
            <tr>
                <td>{{ $j->id }}</td>
                <td>{{ $j->nama }}</td>
                <td>{{ $j->gaji_pokok }}</td>
                <td>{{ $j->tunjangan_makan }}</td>
                <td>{{ $j->tunjangan_transportasi }}</td>
                <td>{{ $j->tunjangan_kesehatan }}</td>
                <td>
                    <a href="{{ route('jabatan.edit', $j->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('jabatan.destroy', $j->id) }}" method="POST" style="display: inline-block;">
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

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection
