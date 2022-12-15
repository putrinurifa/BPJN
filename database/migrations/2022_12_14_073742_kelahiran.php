<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Kelahiran', function (Blueprint $table) {
            $table->id('id_kelahiran');
            $table->String('nama_anak');
            $table->String('tgl_lhr');
            $table->String('jk');
            $table->String('alamat');
            $table->String('nama_ayah');
            $table->String('nama_ibu');
            $table->String('anakke');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Kelahiran');
    }
};
