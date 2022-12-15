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
        Schema::create('Kematian', function (Blueprint $table) {
            $table->id('id');
            $table->String('nama');
            $table->String('nik');
            $table->String('jk');
            $table->String('tempat_tgl_lahir');
            $table->String('agama');
            $table->String('hari');
            $table->String('tgl');
            $table->String('bertempat');
            $table->String('penyebab');
            $table->String('nama_pelapor');
            $table->String('nik_pelapor');
            $table->String('tempat_tgl_lahir_pelapor');
            $table->String('pekerjaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
