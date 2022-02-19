<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nama_petugas' => 'Keimal',
            'name' => 'keimal',
            'email' => 'keimal@gmail.com',
            'password' => bcrypt('123'),
            'role' => 'admin',
        ]);
    }
}
