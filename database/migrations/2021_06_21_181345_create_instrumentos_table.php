<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstrumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instrumentos', function (Blueprint $table) {
            // ID del instrumento.
            $table->id();
            // Nombre del instrumento.
            $table->string('nombre');
            // Número de serie.
            $table->string('numeroSerie');
            // Año de fabricación.
            $table->string('anioFabricacion');
            // Descripción.
            $table->longText('descripcion');
            // Imagen principal.
            $table->string('imagenPrincipal');
            // Imagen(1).
            $table->string('imagenUno');
            // Imagen(2).
            $table->string('imagenDos');
            // Imagen(3).
            $table->string('imagenTres');
            // Imagen(4).
            $table->string('imagenCuatro');
            // Imagen(5).
            $table->string('imagenCinco');
            // Imagen(6).
            $table->string('imagenSeis');
            // Nombre del dueño.
            $table->string('nombreOwner');
            // Imagen del dueño.
            $table->string('imagenOwner');
            // Componente.
            $table->string('componente');
            // Imagen del componente.
            $table->string('imagenComponente');
            // Vídeo.
            $table->string('video');
            // Descripción del vídeo.
            $table->longText('descripcionVideo');
            // Título del disco.
            $table->string('tituloDisco');
            // Imagen del disco.
            $table->string('imagenDisco');
            // Momento en que se postea el instrumento.
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
        Schema::dropIfExists('instrumentos');
    }
}
