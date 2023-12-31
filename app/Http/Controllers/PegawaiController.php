<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Storage;
use App\Models\Jabatan;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('pegawai.index', compact('pegawai'));
    }


    public function dashboard()
    {
        $totalPegawai = Pegawai::count();
        $maleEmployees = Pegawai::where('jenis_kelamin', 'Laki-laki')->count();
        $activeEmployees = Pegawai::where('status_pekerjaan', 'Aktif')->count();

        return view('dashboard', compact('totalPegawai', 'maleEmployees', 'activeEmployees'));
    }
    public function create()
    {
        $jabatan = Jabatan::all();
        return view('pegawai.create', compact('jabatan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // aturan untuk foto
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'nomor_telepon' => 'required',
            'email' => 'required|email',
            'jabatan' => 'required',
            'tanggal_penerimaan_kerja' => 'required',
            'status_pekerjaan' => 'required',

        ]);

        $input = $request->all();

        // Proses unggah foto
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('public/foto_pegawai');
            $input['foto'] = basename($fotoPath);
        }

        Pegawai::create($input);

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan.');
    }

    public function show($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.show', compact('pegawai'));
    }

    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.edit', compact('pegawai'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'nomor_telepon' => 'required',
            'email' => 'required|email',
            'jabatan' => 'required',
            'tanggal_penerimaan_kerja' => 'required',
            'status_pekerjaan' => 'required',
        ]);

        $pegawai = Pegawai::findOrFail($id);

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($pegawai->foto) {
                Storage::delete('public/foto_pegawai/' . $pegawai->foto);
            }

            // Upload foto baru
            $fotoPath = $request->file('foto')->store('public/foto_pegawai');
            $pegawai->foto = basename($fotoPath);
        }

        // Update data pegawai
        $pegawai->update($request->except(['_token', '_method', 'foto']));

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $pegawai = Pegawai::findOrFail($id);

        // Hapus foto sebelum menghapus pegawai
        if ($pegawai->foto) {
            Storage::delete('public/foto_pegawai/' . $pegawai->foto);
        }

        $pegawai->delete();

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil dihapus.');
    }
}
