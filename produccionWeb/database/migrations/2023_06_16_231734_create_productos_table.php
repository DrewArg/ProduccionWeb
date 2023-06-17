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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo',50)->nullable(false);
            $table->text('sinopsis')->nullable(false);
            $table->integer('stock')->default(0);
            $table->float('precio')->nullable(false);
            $table->string('autor',50)->nullable(false);
            $table->string('genero',50)->nullable(false);
            $table->string('editorial',50)->nullable(false);
            $table->enum('tipo_producto',['fisico','audio_libro'])->nullable(false);
            $table->string('imagen')->nullable(true);
            $table->float('puntuacion')->default(0.0);
            $table->string('lenguaje',50)->nullable(false);
            $table->boolean('es_activo')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
