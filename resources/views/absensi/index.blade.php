<!-- resources/views/absensi/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 style="text-align: center;">Data Absensi</h1>

        <a href="{{ route('absensi.create') }}" class="btn btn-primary mb-3">Tambah Absensi</a>

        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pegawai</th>
                    <th>Tanggal Absen</th>
                    <th>Keterangan</th>
                    <th>Status</th>
                    <th>Izin</th>
                    <th>Alpa</th>
                    <th>Catatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($absensis as $absensi)
                    <tr>
                        <td>{{ $absensi->id }}</td>
<td>
                            @if($absensi->pegawai)
                                {{ $absensi->pegawai->nama_depan . ' ' . $absensi->pegawai->nama_belakang }}
                            @else
                                N/A
                            @endif
                        </td>
                        <td>{{ $absensi->tanggal_absen }}</td>
                        <td>{{ $absensi->keterangan }}</td>
                        <td>{{ $absensi->status }}</td>
                        <td>{{ $absensi->izin ? 'Ya' : 'Tidak' }}</td>
                        <td>{{ $absensi->alpa ? 'Ya' : 'Tidak' }}</td>
                        <td>{{ $absensi->catatan }}</td>
                        <td>
                            <a href="{{ route('absensi.edit', $absensi->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('absensi.destroy', $absensi->id) }}" method="POST" style="display: inline-block;">
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
