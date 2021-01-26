<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKasusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kasuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_country');
            $table->string('kode_country');
            $table->integer('jumlah_positif');
            $table->integer('jumlah_sembuh');
            $table->integer('jumlah_meninggal');
            $table->date('tgl_update');
            $table->foreign('id_country')->references('id')->on('countries')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kasuses');
    }
}
