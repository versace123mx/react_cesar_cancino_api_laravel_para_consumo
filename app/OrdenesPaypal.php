<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenesPaypal extends Model
{
    protected $guarded =[];
    public $timestamps = false;
    protected $table = 'ordenes_paypals';
}
