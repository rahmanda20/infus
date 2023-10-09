@extends('admin.master')
@section('content')
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

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
                                <h1 class="h4 text-gray-900 mb-4">Tambah Pasien</h1>
                            </div>
                            <form action="/tambahpasien" method="POST">
                                @csrf
                                
                                <label for="nama_pasien">NAMA PASIEN</label>
                                <input type="text" name="nama_pasien" id="nama_pasien"  class="form-control form-control-user" required>
                                <br>
                                <label for="no_rek_medis">NO REKA MEDIS</label>
                                <input type="text" name="no_rek_medis" id="no_rek_medis"  class="form-control form-control-user" required>
                                <br>
                                <label for="no_ruangan">NO RUANGAN</label>
                                <input type="text" name="no_ruangan" id="no_ruangan"  class="form-control form-control-user" required>
                                <br>
                                <label for="nama_penyakit">NAMA PENYAKIT</label>
                                <input type="text" name="nama_penyakit" id="nama_penyakit"  class="form-control form-control-user" required>
                                <br>
                                <label for="no_alat">NOMOR ALAT</label>
                                <input type="text" name="no_alat" id="no_alat"  class="form-control form-control-user" required>
                                <br>
                                <button type="submit" class="form-control btn-primary form-control-user">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>

    
</form>

@endsection
