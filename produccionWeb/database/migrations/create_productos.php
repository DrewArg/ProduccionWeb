<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up():void
    {
        Schema::create('productos',function (Blueprint $table)
        {
           $table->id();
           $table->string('titulo')->nullable(false);
           $table->string('sinopsis')->nullable(false);
           $table->integer('stock')->default(0);
           $table->float('precio')->nullable(false);
           $table->string('autor')->nullable(false);
           $table->string('genero')->nullable(false);
           $table->string('editorial')->nullable(false);
           $table->enum('tipo_producto',['fisico','audio_libro'])->nullable(false);
           $table->string('imagen')->nullable(true);
           $table->float('puntuacion')->default(0.0);
        });
    }

    public function down():void
    {
        Schema::dropIfExists('productos');
    }

};
