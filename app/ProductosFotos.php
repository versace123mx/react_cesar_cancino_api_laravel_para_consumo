<?php

namespace App;
 
use Illuminate\Database\Eloquent\Model;
use App\Productos;
class ProductosFotos extends Model
{ 
    protected $guarded =[];
    public $timestamps = false;
    protected $table = 'productos_fotos';
    public function productos()
    {
        return $this->belongsTo(Productos::class);
    }
}
