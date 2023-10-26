<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();

            $table->string('username')->unique();
            $table->string('password')->unique();
            $table->integer('RUT')->unique();
            $table->char('digVer');
            $table->string('Nombre');
            $table->string('primerApellido');
            $table->string('segundoApellido')->nullable();
            $table->string('correo')->unique();
            $table->enum('tipoUsuario',['profesor','alumno']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};
