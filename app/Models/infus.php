<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infus extends Model
{
    use HasFactory;

    protected $table = 'station1';

    protected $fillable = [
        'berat',
        'beban',
        'created_at',
        'no_alat',
        'nama_pasien',
        'nomor_ruangan',
        'nama_penyakit',
    ];
    
}
