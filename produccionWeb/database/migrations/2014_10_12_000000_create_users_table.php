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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique()->nullable(false);
            $table->string('password')->nullable(false);
            $table->string('name')->nullable(false);
            $table->string('direccion')->nullable(true);
            $table->string('telefono')->nullable(true);
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('tipo_usuario')->default(false);
            //un usuario puede ter mas de una revision
            //TODO VER SI ESTA TABLA TIENE QUE TENER CONEXION ACA CON REVISIONES. LA PUNTUACION DEBERIA EXTRAERSE DE LA REVISION
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
