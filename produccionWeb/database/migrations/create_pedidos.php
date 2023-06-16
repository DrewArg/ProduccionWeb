<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up():void
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->enum('estado', ['en envio', 'entregado', 'cancelado', 'para_reembolso'])->nullable(false);
            $table->date('fecha_compra')->nullable(false);
            $table->date('fecha_entrega')->nullable(true);
            $table->integer('cantidad_productos')->nullable(false);
            $table->foreignId('id_producto')->nullable(false);
            $table->foreignId('id_usuario')->nullable(false);
        });
    }
        public function down():void
        {
            Schema::dropIfExists('pedidos');
        }
};
