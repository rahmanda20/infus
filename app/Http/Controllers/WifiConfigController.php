<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wifi;

class WifiConfigController extends Controller
{
    public function index()
    {
        return view('admin.pengaturan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ssid' => 'required',
            'password' => 'required',
        ]);

        // Menyimpan SSID dan password ke database atau file
        // Untuk sederhananya, kita anggap menyimpannya dalam file JSON.
        $data = [
            'ssid' => $request->input('ssid'),
            'password' => $request->input('password'),
        ];
        file_put_contents('wifi_config.json', json_encode($data));
        // Wifi::create($data);

        return redirect('/pengaturan')->with('success', 'Konfigurasi WiFi berhasil disimpan!');
    }
}
