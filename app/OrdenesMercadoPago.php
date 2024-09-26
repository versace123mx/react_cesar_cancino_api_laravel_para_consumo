<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenesMercadoPago extends Model
{
    protected $guarded =[];
    public $timestamps = false;
    protected $table = 'ordenes_mercado_pagos';
}
