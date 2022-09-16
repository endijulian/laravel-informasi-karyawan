<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;


class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
        'nik' => '105552',
        'name' => 'admin',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('12345678'),
        'role_user' => 1,
        'status' => 1
      ]);
      User::create([
        'nik' => '105578',
        'name' => 'karyawan',
        'email' => 'karyawan@gmail.com',
        'password' => bcrypt('12345678'),
        'role_user' => 2,
        'status' => 1
      ]);
      User::create([
        'nik' => '137552',
        'name' => 'leader',
        'email' => 'leader@gmail.com',
        'password' => bcrypt('12345678'),
        'role_user' => 3,
        'status' => 1
      ]);
     
      
    }
}
