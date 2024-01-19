<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * @see \App\Models\User
 */
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('email')->unique();
            $table->string('nama');
            $table->string('nisn');
            $table->string('password');
            $table->enum('jenis_kelamin', ['Perempuan','Laki-Laki']);
            $table->enum('role',['admin', 'student']);
            $table->string('jurusan');
            $table->string('sekolah');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
