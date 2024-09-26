<?php

namespace App;
 
use Illuminate\Database\Eloquent\Model;
use App\ClasificadosAvisos;
class ClaificadosAvisosComentarios extends Model
{ 
    protected $guarded =[];
    public $timestamps = false;
    protected $table = 'clasificados_avisos_comentarios';
    
    public function clasificados_avisos()
    {
        return $this->belongsTo(ClasificadosAvisos::class);
    }
}
