<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClasificadosAvisosComentariosToCorreoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clasificados_avisos_comentarios', function (Blueprint $table) {
            $table->string('correo')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clasificados_avisos_comentarios', function (Blueprint $table) {
            $table->dropColumn('correo');
        });
    }
}
