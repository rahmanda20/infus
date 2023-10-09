@extends('admin.master')

@section('content')
<div class="card-body">
    <div class="table-responsive" style="margin-top: -20px; background-color: white;width:90%">
        <br>
        <div class="mb-3">
        <a href="/create" class="btn btn-primary">Tambah</a>
            </div>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NO.REGISTRASI</th>
                    <th>NO.SURAT KONTROL</th>
                    <th>NO.REK.MEDIS</th>
                    <th>NAMA PASIEN</th>
                    <th>JENIS KELAMIN</th>
                    <th>UMUR</th>
                    <th>TANGGAL PEMERIKSAAN</th>
                    <th>DIAGNOSA</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datas as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->no_registrasi }}</td>
                    <td>{{ $data->no_surat_kontrol }}</td>
                    <td>{{ $data->no_rek_medis }}</td>
                    <td>{{ $data->nama_pasien }}</td>
                    <td>{{ $data->jenis_kelamin }}</td>
                    <td>{{ $data->umur }}</td>
                    <td>{{ $data->tanggal_pemeriksaan }}</td>
                    <td>{{ $data->diagnosa }}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
