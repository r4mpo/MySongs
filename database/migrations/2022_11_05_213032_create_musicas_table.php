<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musicas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('faixa', 50);
            $table->string('artista', 30);
            $table->string('url')->nullable();
            $table->integer('avaliacao');
            $table->text('comentario')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('musicas');
    }
}
