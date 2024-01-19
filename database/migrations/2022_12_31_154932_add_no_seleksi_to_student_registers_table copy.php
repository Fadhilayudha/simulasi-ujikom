<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNoSeleksiToStudentRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('student_registers', function (Blueprint $table) {
            $table->string('password')->nullable();
            $table->string('no_seleksi')->nullable();
            $table->date('tanggal_daftar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student_registers', function (Blueprint $table) {
            //
        });
    }
}
