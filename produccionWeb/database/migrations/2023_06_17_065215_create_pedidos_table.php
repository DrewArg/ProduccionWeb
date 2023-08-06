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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->enum('estado', ['en envio', 'entregado', 'cancelado', 'para_reembolso'])->nullable(false);
            $table->date('fecha_compra')->nullable(false);
            $table->date('fecha_entrega')->nullable(true);
            $table->integer('cantidad_productos')->nullable(false);
            //foreign key
            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id')->references('id')->on('productos');
            //foreign key
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('usuarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
