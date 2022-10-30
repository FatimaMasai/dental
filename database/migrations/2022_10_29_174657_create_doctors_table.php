<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
  
            $table->enum('estado', [1, 2])->default(1);

            $table->unsignedBigInteger('persona_id'); 
            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade'); 

            $table->unsignedBigInteger('especialidads_id'); 
            $table->foreign('especialidads_id')->references('id')->on('especialidads')->onDelete('cascade'); 


            $table->timestamps();
        });
    }

 
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
};
