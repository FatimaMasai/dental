<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{ 
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();

            $table->string('nombre'); 
            $table->decimal('monto',8,2)->nullable();
            $table->enum('estado', [1, 2])->default(1);

            $table->unsignedBigInteger('categoria_servicios_id'); 
            $table->foreign('categoria_servicios_id')->references('id')->on('categoria_servicios')->onDelete('cascade'); 


            $table->timestamps();
        });
    }

     
    public function down()
    {
        Schema::dropIfExists('servicios');
    }
};
