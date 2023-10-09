@extends('admin.master')

@section('content')
<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-6 col-lg-6 col-md-6" style="padding:0">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12" style="margin:0">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Tambah Rekap Medis</h1>
                            </div>
    <form action="/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="no_registrasi" class="form-label">NO.REGISTRASI</label>
            <input type="text" class="form-control form-control-user" id="no_registrasi" name="no_registrasi" required>
        </div>
        <div class="mb-3">
            <label for="no_surat_kontrol" class="form-label">NO.SURAT KONTROL</label>
            <input type="text" class="form-control form-control-user" id="no_surat_kontrol" name="no_surat_kontrol" required>
        </div>
        <div class="mb-3">
            <label for="no_rek_medis" class="form-label">NO.REK.MEDIS</label>
            <input type="text" class="form-control form-control-user" id="no_rek_medis" name="no_rek_medis" required>
        </div>
        <div class="mb-3">
            <label for="nama_pasien" class="form-label">NAMA PASIEN</label>
            <input type="text" class="form-control form-control-user" id="nama_pasien" name="nama_pasien" required>
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">JENIS KELAMIN</label>
            <input type="text" class="form-control form-control-user" id="jenis_kelamin" name="jenis_kelamin" required>
        </div>
        <div class="mb-3">
            <label for="umur" class="form-label">UMUR</label>
            <input type="text" class="form-control form-control-user" id="umur" name="umur" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_pemeriksaan" class="form-label">TANGGAL PEMERIKSAAN</label>
            <input type="text" class="form-control form-control-user" id="tanggal_pemeriksaan" name="tanggal_pemeriksaan" required>
        </div>
        <div class="mb-3">
            <label for="diagnosa" class="form-label">DIAGNOSA</label>
            <input type="text" class="form-control form-control-user" id="diagnosa" name="diagnosa" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
