<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NodemcuLog extends Model
{
    protected $table = 'station1';
    protected $fillable = ['berat', 'beban', 'no_alat', 'mac', 'jumlah_infus'];

    public function createLogData()
    {
        return DB::table($this->table)->insert([
            'berat' => $this->berat,
            'beban' => $this->beban,
            'no_alat' => $this->no_alat,
            'mac' => $this->mac,
            'jumlah_infus' => $this->jumlah_infus,
        ]);
    }

    public function getItemByMacAddress($mac)
    {
        return DB::table($this->table)->where('mac', $mac)->first();
    }

    public function getHighestNoAlat()
    {
        return DB::table($this->table)->max('no_alat');
    }
}


