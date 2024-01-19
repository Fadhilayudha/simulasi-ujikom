<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_registers', function (Blueprint $table) {
            $table->id();
            $table->integer('school_id')->nullable();
            $table->string('nisn');
            $table->string('nama');
            $table->enum('jenis_kelamin', ['Perempuan','Laki-Laki']);
            $table->string('email');
            $table->string('no_hp');
            $table->string('no_hp_ayah')->nullable();
            $table->string('no_hp_ibu')->nullable();
            $table->string('referensi');
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
        Schema::dropIfExists('student_registers');
    }
}
