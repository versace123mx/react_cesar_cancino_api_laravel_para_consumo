<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasificadosAvisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clasificados_avisos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('slug')->unique();
            $table->string('foto');
            $table->text('descripcion');
            $table->unsignedBigInteger('clasificados_categoria_id');
            $table->foreign('clasificados_categoria_id')->references('id')->on('clasificados_categoria')->onDelete('cascade');
            $table->date('fecha')->useCurrent(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clasificados_avisos');
    }
}
