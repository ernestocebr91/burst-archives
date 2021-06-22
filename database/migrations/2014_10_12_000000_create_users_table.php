<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // ID del usuario.
            $table->id();
            // Nombre de usuario.
            $table->string('nombreUsuario');
            // Email.
            $table->string('email');
            // Contraseña.
            $table->string('password');
            // Imagen de perfil.
            $table->string('imagenUsuario');
            // Administrador.
            $table->boolean('administrador')->default('0');
            // Momento en que se registra el usuario.
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
        Schema::dropIfExists('users');
    }
}
