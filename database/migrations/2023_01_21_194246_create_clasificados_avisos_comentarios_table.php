<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasificadosAvisosComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clasificados_avisos_comentarios', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('clasificados_avisos_id');
            $table->foreign('clasificados_avisos_id')->references('id')->on('clasificados_avisos')->onDelete('cascade'); 
            $table->string('nombre'); 
            $table->text('mensaje'); 
            $table->dateTime('fecha')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clasificados_avisos_comentarios');
    }
}
