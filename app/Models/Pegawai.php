<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{

    use HasFactory;
    protected $table = 'pegawai';

    protected $fillable = [
        'foto','nama_depan', 'nama_belakang', 'jenis_kelamin', 'tanggal_lahir',
        'alamat', 'nomor_telepon', 'email', 'jabatan',
        'tanggal_penerimaan_kerja', 'status_pekerjaan',
    ];
}
