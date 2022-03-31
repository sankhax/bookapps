<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class penulisSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('penulis')->insert([
        	'id_penulis' => 1,
        	'nama_penulis' => 'jun maeda',
        	'kota_asal' => 'japan',
        ]);
		DB::table('penulis')->insert([
        	'id_penulis' => 2,
        	'nama_penulis' => 'buya hamka',
        	'kota_asal' => 'agam',
        ]);
    }
}
