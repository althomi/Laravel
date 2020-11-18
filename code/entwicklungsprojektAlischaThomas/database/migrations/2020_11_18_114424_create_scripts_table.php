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
            $table->id();
            $table->integer('Szenennr')->default(1);
            $table->integer('Einstellungsnr')->default(1);
            $table->text('Bildbeschreibung')->nullable();
            $table->string('Kameraeinstellung')->default('keine');
            $table->text('Ort')->nullable();
            $table->text('Ton')->nullable();
            $table->text('Effekt')->nullable();
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
