<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infus;
use App\Models\Data;
use App\Models\pasien;


class dashboardcontroller extends Controller
{
    

public function index()
{
    $datas = Data::all();

    return view('admin.rekap', compact('datas'));
}



public function dashboard(Request $request)
{
    $daerah = $request->get('no_alat');

    $data = pasien::select('nama_penyakit', \DB::raw('count(nama_pasien) as total_pasien'))
        ->groupBy('nama_penyakit')
        ->where('nama_penyakit', 'like', '%'.$daerah.'%')
        ->get();
        

    $no_alat = [];
   
    $nama_pasien = [];

    foreach ($data as $row) {
        $no_alat[] = $row->nama_penyakit;
        $nama_pasien[] = $row->total_pasien;
    }

    return view('admin.dashboard', compact('no_alat',  'nama_pasien'));
}


public function rekap()
{
    return view('admin.rekap');
}

public function create()
{
    return view('admin.create');
}

public function pengaturan()
{
    return view('admin.pengaturan');
}

public function store(Request $request)
{
    $data = new Data;
    $data->no_registrasi = $request->no_registrasi;
    $data->no_surat_kontrol = $request->no_surat_kontrol;
    $data->no_rek_medis = $request->no_rek_medis;
    $data->nama_pasien = $request->nama_pasien;
    $data->jenis_kelamin = $request->jenis_kelamin;
    $data->umur = $request->umur;
    $data->tanggal_pemeriksaan = $request->tanggal_pemeriksaan;
    $data->diagnosa = $request->diagnosa;
    $data->save();

    return redirect('/dashboard')->with('success', 'Data has been added successfully');
}

public function pasien()
{
    return view('admin.pasien');
}

public function tambahpasien(Request $request)
{
    $data = new Pasien(); // Create a new instance of the Pasien model

    $data->no_rek_medis = $request->input('no_rek_medis');
    $data->nama_pasien = $request->input('nama_pasien');
    $data->no_ruangan = $request->input('no_ruangan');
    $data->nama_penyakit = $request->input('nama_penyakit');
    $data->no_alat = $request->input('no_alat');

    
    $data->save();

    return redirect('/dashboard')->with('success', 'Data has been added successfully');
}


}

