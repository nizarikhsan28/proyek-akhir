<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;
        protected $table = 'jabatan';
    protected $fillable = [
        'nama', 'gaji_pokok', 'tunjangan_makan', 'tunjangan_transportasi', 'tunjangan_kesehatan'
    ];
    public function pegawais()
    {
        return $this->hasMany(Pegawai::class, 'jabatan_id');
    }
}
