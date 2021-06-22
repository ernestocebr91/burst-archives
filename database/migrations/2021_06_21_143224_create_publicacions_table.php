<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacions', function (Blueprint $table) {
            // ID de la publicación.
            $table->id();
            // Título de la publicación.
            $table->string('titulo');
            // Contenido de la publicación.
            $table->longText('contenido');
            // Imagen de la publicación.
            $table->string('imagenPublicacion');
            // Momento en que se postea la publicación.
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
        Schema::dropIfExists('publicacions');
    }
}
