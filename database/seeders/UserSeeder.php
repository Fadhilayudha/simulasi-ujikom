<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function () {
            $this->generateAdmin();
        });
    }

    /**
     * Store user data with role "admin" into storage.
     *
     * @return void
     */
    protected function generateAdmin()    //php artisan db:seed --class=DatabaseSeeder
    {
        $user = new User([
            // 'username' => env('ADMIN_USERNAME', 'admin'),
            // 'name' => env('ADMIN_FULLNAME', 'Administrator'),
            // 'email' => env('ADMIN_EMAIL', 'admin@admin.com'),
            // 'password' => env('ADMIN_PASSWORD', 'admin12345'),
            // 'role' => 'admin',

            'email' => 'admin@gmail.com',
            'nisn' => '1212121212',
            'jurusan' => 'Rekayasa Perangkat Lunak & Gim (PPLG)',
            'sekolah' => 'SMPN 1 Megamendung',
            'nama' => 'Admin',
            'password' => bcrypt('1234'),
            'jenis_kelamin' => 'Laki-laki',
            'role' => 'admin'
        ]);

        $user->save();
        $user->markEmailAsVerified();

        // $user->syncRoles(Role::ROLE_ADMIN);
    }
}
