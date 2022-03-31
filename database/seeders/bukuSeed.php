<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bukuSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buku')->insert([
        	'id_buku' => 11,
        	'judul_buku' => 'The Day I Became a God',
        	'tahun' => '2020',
			'genre' => 'Drama',
			'id_penulis' => 1,
        ]);
		DB::table('buku')->insert([
        	'id_buku' => 22,
        	'judul_buku' => 'Clannad',
        	'tahun' => '2007',
			'genre' => 'Romance',
			'id_penulis' => 1,
        ]);
		DB::table('buku')->insert([
        	'id_buku' => 33,
        	'judul_buku' => 'Tenggelamnya Kapal Van Der Wijck',
        	'tahun' => '1987',
			'genre' => 'Romance',
			'id_penulis' => 2,
        ]);
		DB::table('buku')->insert([
        	'id_buku' => 44,
        	'judul_buku' => 'Tuan Direktur',
        	'tahun' => '1939',
			'genre' => 'Novel',
			'id_penulis' => 2,
        ]);
    }
}
