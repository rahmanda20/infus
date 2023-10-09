<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datas', function (Blueprint $table) {
            $table->id();
            $table->string('no_registrasi');
            $table->string('no_surat_kontrol');
            $table->string('no_rek_medis');
            $table->string('nama_pasien');
            $table->string('jenis_kelamin');
            $table->integer('umur');
            $table->date('tanggal_pemeriksaan');
            $table->string('diagnosa');
            $table->timestamps();
        });
    }

}
