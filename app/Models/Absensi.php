<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'absensis';
    protected $fillable = [
        'pegawai_id', 'tanggal_absen', 'keterangan',
        'status', 'izin', 'alpa', 'catatan'
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
