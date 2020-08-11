<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Master extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemohon', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('ktp')->unique();
            $table->string('kk')->unique();
            $table->string('npwp')->unique();
            $table->string('sppt');
            $table->string('no_c');
            $table->text('saksi');
            $table->string('no_telp');
            $table->string('url_ktp');
            $table->string('url_kk');
            $table->string('url_npwp');
            $table->timestamps();
        });

        Schema::create('permohonan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pemohon_id')->unsigned();
            $table->string('nama_dokumen');
            $table->date('tgl_permohonan');
            $table->integer('luas_sementara');
            $table->string('hak_milik');
            $table->string('url');
            $table->integer('luas_ukur');
            $table->date('tgl_ukur');
            $table->enum('status', ['0', '1', '2']);
            $table->timestamps();
            $table->foreign('pemohon_id')->references('id')->on('pemohon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemohon');
        Schema::dropIfExists('permohonan');
    }
}
