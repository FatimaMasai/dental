<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{ 
    public function up()
    {
        Schema::create('categoria_ventas', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->date('fecha');
            $table->enum('estado', [1, 2])->default(1);

            $table->timestamps();
        });
    }

 
    public function down()
    {
        Schema::dropIfExists('categoria_ventas');
    }
};
