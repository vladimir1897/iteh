<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesme extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesme', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Naziv');
            $table->string('Lokacija');
            $table->double('Cena');
            $table->string('Slika');
            $table->integer('ZanrID');
            $table->string('Autor');

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
        Schema::dropIfExists('pesme');
    }
}
