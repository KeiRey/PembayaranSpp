<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spp')->insert([
            'tahun' => '2019',
            'nominal' => '100000',
        ]);
        DB::table('spp')->insert([
            'tahun' => '2020',
            'nominal' => '200000',
        ]);
        DB::table('spp')->insert([
            'tahun' => '2021',
            'nominal' => '300000',
        ]);
    }
}
