<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Identificador de Proyecto');
            $table->string('nombre', 191)->unique()->comment('Nombre de Proyecto');
            $table->string('descripcion')->nullable()->default(null)->comment('Descripción de Proyecto');
            $table->string('imagen')->comment('Imagen de Proyecto');
            $table->boolean('estado')->comment('Estado de Proyecto');
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
        Schema::dropIfExists('proyectos');
    }
}
