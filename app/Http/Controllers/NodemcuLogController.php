<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NodemcuLog;

class NodemcuLogController extends Controller
{
    public function createLogData(Request $request)
    {
        // Validasi data yang diterima dari Arduino
        $validatedData = $request->validate([
            'berat' => 'required|numeric',
            'beban' => 'required|numeric',
            'mac' => 'required|string',
            'jumlah_infus' => 'required|numeric'
        ]);

        // Simpan data ke database
        $log = new NodemcuLog();
        $log->berat = $validatedData['berat'];
        $log->beban = $validatedData['beban'];
        $log->mac = $validatedData['mac'];
        $log->jumlah_infus = $validatedData['jumlah_infus'];
        $log->save();

        return response()->json(['message' => 'Data created successfully.']);
    }

    public function getLogData(Request $request)
    {
        // Ambil data dari database dan kirim sebagai JSON
        $logData = NodemcuLog::all();
        return response()->json($logData);
    }
}
