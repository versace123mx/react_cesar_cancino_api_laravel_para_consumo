<?php

namespace App;
 
use Illuminate\Database\Eloquent\Model;
use App\ClasificadosCategorias;
class ClasificadosAvisos extends Model
{ 
    protected $guarded =[];
    public $timestamps = false;
    protected $table = 'clasificados_avisos';
    
    public function clasificados_categoria()
    {
        return $this->belongsTo(ClasificadosCategorias::class);
    }
}
