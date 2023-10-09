<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $table = 'datas';
    protected $fillable = [
        'no_registrasi',
        'no_surat_kontrol',
        'no_rek_medis',
        'nama_pasien',
        'jenis_kelamin',
        'umur',
        'tanggal_pemeriksaan',
        'diagnosa',
    ];
}
