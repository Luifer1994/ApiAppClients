<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Barrios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barrios', function(Blueprint $table){
            $table->string('id')->unique();
            $table->foreignId('id_pais')->constrained('paises');
            $table->foreignId('id_departamento')->constrained('departamentos');
            $table->foreignId('id_ciudades')->constrained('ciudades');
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barrios');
    }
}
