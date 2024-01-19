<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferensiDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referensi_details', function (Blueprint $table) {
            $table->id();
            $table->integer('student_register_id');
            $table->string('nama_pegawai_wikrama')->nullable();
            $table->string('nama_siswa')->nullable();
            $table->string('rayon')->nullable();
            $table->string('nama_alumni')->nullable();
            $table->string('tahun_lulus_alumni')->nullable();
            $table->string('nama_guru_smp')->nullable();
            $table->string('nama_smp')->nullable();
            $table->string('referensi_no_seleksi')->nullable();
            $table->string('referensi_nama_siswa')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('referensi_details');
    }
}
