<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert([
            'kelas' => '10',
            'kompetensi_keahlian' => 'Jaringan',
        ]);
        DB::table('kelas')->insert([
            'kelas' => '10',
            'kompetensi_keahlian' => 'RPL',
        ]);DB::table('kelas')->insert([
            'kelas' => '10',
            'kompetensi_keahlian' => 'Desain',
        ]);
        DB::table('kelas')->insert([
            'kelas' => '11',
            'kompetensi_keahlian' => 'RPL',
        ]);DB::table('kelas')->insert([
            'kelas' => '11',
            'kompetensi_keahlian' => 'Jaringan',
        ]);DB::table('kelas')->insert([
            'kelas' => '11',
            'kompetensi_keahlian' => 'Desain',
        ]);
        DB::table('kelas')->insert([
            'kelas' => '12',
            'kompetensi_keahlian' => 'RPL',
        ]);DB::table('kelas')->insert([
            'kelas' => '12',
            'kompetensi_keahlian' => 'Jaringan',
        ]);DB::table('kelas')->insert([
            'kelas' => '12',
            'kompetensi_keahlian' => 'Desain',
        ]);
    }
}
