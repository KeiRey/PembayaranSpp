<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'nisn' => '123456789',
            'nis' => '12345',
            'nama' => 'Keimal Reyyan',
            'kelas_id' => '1',
            'alamat' => 'jln doang jadian kaga',
            'no_telp' => '0219129912',
            'spp_id' => '1',
        ]);
        DB::table('siswa')->insert([
            'nisn' => '987654321',
            'nis' => '54321',
            'nama' => ' Reyyan Keimal',
            'kelas_id' => '1',
            'alamat' => 'jln doang jadian kaga',
            'no_telp' => '0123231',
            'spp_id' => '1',
        ]);
    }
}
