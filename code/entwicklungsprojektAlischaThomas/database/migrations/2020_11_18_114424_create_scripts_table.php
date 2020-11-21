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
            $table->string('Bildbeschreibung')->nullable();
            $table->string('Kamera')->nullable();
            $table->string('Ort')->nullable();
            $table->string('Ton')->nullable();
            $table->string('Effekt')->nullable();
            $table ->timestamps();
            $table ->integer('user_id')->default(5000);

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
