<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up()
    {
        Schema::create('proveedors', function (Blueprint $table) {
            $table->id();
            
            $table->integer('nit'); 
            $table->enum('estado', [1, 2])->default(1);
            
            $table->unsignedBigInteger('persona_id');
            $table->unsignedBigInteger('empresa_id');

            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade'); 

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('proveedors');
    }
};
