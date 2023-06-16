<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('preguntas',function (Blueprint $table)
        {
         $table->id();
         $table->boolean('respondida')->default(false);
         $table->string('email')->nullable(false);
         $table->string('nombre')->nullable(false);
         $table->string('pregunta')->nullable(false);
        });
    }

    public function down():void
    {
        Schema::dropIfExists('preguntas');
    }
};
