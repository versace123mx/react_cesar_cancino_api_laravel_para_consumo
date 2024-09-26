<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenesMercadoPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes_mercado_pagos', function (Blueprint $table) {
            $table->id();
            $table->string('collection_id');
            $table->string('collection_status');
            $table->string('payment_id');
            $table->string('status');
            $table->string('payment_type');
            $table->string('merchant_order_id');
            $table->string('preference_id');
            $table->string('site_id');
            $table->string('processing_mode');
            $table->string('merchant_account_id');
            $table->unsignedBigInteger('estado')->default(0);
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
        Schema::dropIfExists('ordenes_mercado_pagos');
    }
}
