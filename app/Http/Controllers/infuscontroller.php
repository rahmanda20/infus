<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infus;

class InfusController extends Controller
{
    public function index()
    {
        $latestData = Infus::whereIn('created_at', function ($query) {
            $query->selectRaw('MAX(created_at)')
                ->from('station1')
                ->groupBy('no_alat');
        })->get();

        return view('admin.tabel', compact('latestData'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'berat' => 'required',
            'beban' => 'required',
            'no_alat' => 'required',
            'nama_pasien' => 'required',
            'nomor_ruangan' => 'required',
            'nama_penyakit' => 'required',
        ]);

        $infus = Infus::findOrFail($id);
        $infus->berat = $request->input('berat');
        $infus->beban = $request->input('beban');
        $infus->no_alat = $request->input('no_alat');
        $infus->nama_pasien = $request->input('nama_pasien');
        $infus->nomor_ruangan = $request->input('nomor_ruangan');
        $infus->nama_penyakit = $request->input('nama_penyakit');
        $infus->save();

        // Mengembalikan response JSON jika permintaan dari AJAX
        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Data berhasil diperbarui.']);
        }

        return redirect('/tabel')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($mac)
    {
         // Find all records with the same 'mac' value
    $infusList = Infus::where('mac', $mac)->get();
    
    // Delete all the found records
    foreach ($infusList as $infus) {
        $infus->delete();
    }

        // Mengembalikan response JSON jika permintaan dari AJAX
        if (request()->ajax()) {
            return response()->json(['success' => true, 'message' => 'Data berhasil dihapus.']);
        }

        return redirect('/tabel')->with('success', 'Data berhasil dihapus.');
    }

    public function refresh()
    {
        $latestData = Infus::whereIn('created_at', function ($query) {
            $query->selectRaw('MAX(created_at)')
                ->from('station1')
                ->groupBy('no_alat');
        })->get();

        return view('admin.refresh', compact('latestData'));
    }
    public function page()
    {
        return view('landingpage');
    }
    public function login()
    {
        return view('admin.login');
    }
}
