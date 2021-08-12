<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->char('sede_creacion',3);
            $table->char('cod_tipo_documento',2);
            $table->integer('numero_documento');
            $table->smallInteger('cod_tipo_persona');
            $table->string('nombres',40);
            $table->string('primer_apellido',30);
            $table->string('segundo_apellido',30);
            $table->string('razon_social',100);
            $table->string('contacto',50);
            $table->smallInteger('genero');
            $table->char('pais',3);
            $table->char('departamento',2);
            $table->char('municipio',3);
            $table->string('barrio',40);
            $table->string('direccion',40);
            $table->date('fecha_nacimiento');
            $table->string('email');
            $table->string('celular',20);
            $table->string('telefono',20);
            $table->smallInteger('acepto_politicas');
            $table->smallInteger('estado')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
