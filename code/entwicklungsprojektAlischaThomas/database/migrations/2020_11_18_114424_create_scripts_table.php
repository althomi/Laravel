<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScriptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scripts', function (Blueprint $table) {
            $table->id('id');
            $table->integer('Szenennr')->default(1);
            $table->integer('Einstellungsnr')->default(1);
            $table->string('Bildbeschreibung')->default('keine');
            $table->string('Kamera')->default('keiner');
            $table->string('Ort')->default('keiner');
            $table->string('Ton')->default('keiner');
            $table->string('Effekt')->default('keiner');
            $table ->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scripts');
    }
}
