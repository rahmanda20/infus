@extends('admin.master')

@section('content')
<!-- <style>
    .notification-popup {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #ff0000; /* Sesuaikan dengan warna latar belakang yang diinginkan */
        color: #ffffff; /* Sesuaikan dengan warna teks yang diinginkan */
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        z-index: 9999;
    }
</style> -->



<div class="card-body">
    <div class="table-responsive" style="margin-top: -20px; background-color: white">
        <br>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>BERAT</th>
                    <th>WAKTU</th>
                    <th>NO ALAT</th>
                    <th>NAMA PASIEN</th>
                    <th>NO. REK. MEDIS</th>
                    <th>NOMOR RUANGAN</th>
                    <th>NAMA PENYAKIT</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($latestData as $dataaja)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ substr($dataaja->berat, 0, 3) }} Gram</td>
                    <td>{{ $dataaja->created_at }}</td>
                    <td>{{ $dataaja->no_alat }}</td>
                    @php
            $pasienData = App\Models\pasien::where('no_alat', $dataaja->no_alat)->first();
        @endphp
        <td>{{ $pasienData->nama_pasien ?? '' }}</td>
        <td>{{ $pasienData->no_rek_medis ?? '' }}</td>
        <td>{{ $pasienData->no_ruangan ?? '' }}</td>
        <td>{{ $pasienData->nama_penyakit ?? '' }}</td>
        <td>
    <div class="d-flex justify-content-center">
        <div class="mr-2">
            <a href="#" class="btn btn-primary" data-toggle="modal"
                data-target="#editModal{{ $dataaja->id }}">EDIT</a>
        </div>
        <div>
            <form method="POST" action="{{ route('data.destroy', $dataaja->mac) }}" style="display: inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"
                    onclick="return confirm('Are you sure you want to delete this data?')">Hapus</button>
            </form>
        </div>
    </div>
</td>

                    @if ($dataaja->berat < 100.00)
                    <div class="notification-popup" style="color:red;">
                        Infus segera habis di ruangan {{ $dataaja->nomor_ruangan }} pasien {{ $dataaja->nama_pasien }}
                    </div>
                    <audio id="notification-sound">
                        <source src="{{ asset('assets/images/infus.mp3') }}" type="audio/mpeg">
                    </audio>
                    <script>
                        var audio = document.getElementById('notification-sound');
                        audio.volume = 1; // Set volume to maximum
                        audio.currentTime = 0; // Set audio time to the beginning
                        audio.play();
                    </script>
                    @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@foreach ($latestData as $dataaja)

<!-- Edit Modal -->
<div class="modal fade" id="editModal{{ $dataaja->id }}" tabindex="-1" role="dialog"
    aria-labelledby="editModalLabel{{ $dataaja->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $dataaja->id }}">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('data.update', $dataaja->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="editBerat{{ $dataaja->id }}">Berat</label>
                        <input type="text" class="form-control" id="editBerat{{ $dataaja->id }}" name="berat"
                            value="{{ $dataaja->berat }}">
                    </div>
                    <div class="form-group">
                        <label for="editBeban{{ $dataaja->id }}">Beban</label>
                        <input type="text" class="form-control" id="editBeban{{ $dataaja->id }}" name="beban"
                            value="{{ $dataaja->beban }}">
                    </div>
                    <div class="form-group">
                        <label for="editNoAlat{{ $dataaja->id }}">No Alat</label>
                        <input type="text" class="form-control" id="editNoAlat{{ $dataaja->id }}" name="no_alat"
                            value="{{ $dataaja->no_alat }}">
                    </div>
                    <div class="form-group">
                        <label for="patientName{{ $dataaja->id }}">Nama Pasien</label>
                        <input type="text" class="form-control" id="patientName{{ $dataaja->id }}" name="nama_pasien"
                            placeholder="Masukkan Nama Pasien">
                    </div>
                    <div class="form-group">
                        <label for="roomNumber{{ $dataaja->id }}">Nomor Ruangan</label>
                        <input type="text" class="form-control" id="roomNumber{{ $dataaja->id }}"
                            name="nomor_ruangan" placeholder="Masukkan Nomor Ruangan">
                    </div>
                    <div class="form-group">
                        <label for="illnessType{{ $dataaja->id }}">Nama Penyakit</label>
                        <input type="text" class="form-control" id="illnessType{{ $dataaja->id }}"
                            name="nama_penyakit" placeholder="Masukkan Nama Penyakit">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection