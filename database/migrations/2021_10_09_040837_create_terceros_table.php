<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTercerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terceros', function (Blueprint $table) {
            $table->id();
            $table->integer('identificacion');
            $table->string('tipo_doc');
            $table->integer('dv')->nullable();
            $table->string('nombre');
            $table->string('nombre2')->nullable();
            $table->string('apellido');
            $table->string('apellido2')->nullable();
            $table->string('razon_social')->nullable();
            $table->string('nombre_comercial')->nullable();
            $table->string('direccion')->nullable();
            $table->integer('telefono')->nullable();
            $table->integer('movil')->nullable();
            $table->string('email')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('grupo')->nullable();
            $table->string('zona')->nullable();
            $table->string('genero')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('nombre_corto')->nullable();
            $table->string('vendedor')->nullable();
            $table->string('tipo_nomina')->nullable();
            $table->string('rut')->nullable();
            $table->string('activo')->default("NO");

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
        Schema::dropIfExists('terceros');
    }
}
