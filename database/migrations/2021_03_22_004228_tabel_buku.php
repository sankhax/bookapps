<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->increments('id_buku');
			$table->text('judul_buku');
            $table->string('tahun');
            $table->text('genre');
			$table->integer('id_penulis')->length(10)->unsigned();
			$table->foreign('id_penulis')->references('id_penulis')->on('penulis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku');
    }
}
