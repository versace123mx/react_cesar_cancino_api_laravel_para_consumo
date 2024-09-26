<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClasificadosCategorias;
use App\ClasificadosAvisos;
class ClasificadosAvisosPorCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $porpagina=8;
        $categoria= ClasificadosCategorias::where(['slug'=>$id])->firstOrFail();
        $datos=ClasificadosAvisos::where(['clasificados_categoria_id'=>$categoria->id])->orderBy('id', 'desc')->paginate($porpagina);
        $array=array();
        if($datos->total()==0)
        { 
            return response()->json( array('total'=>0,'por_pagina'=>sizeof($array), 'links'=>0,'datos'=>$array));
        }else
        {
            
            foreach($datos as $dato)
            {
                
                $array[]=array(
                    "id"=>$dato->id,
                    "nombre"=>$dato->nombre,
                    "slug"=>$dato->slug,
                    "descripcion"=>$dato->descripcion,
                    "fecha"=>$dato->fecha,
                    "foto"=>$dato->foto,
                    "clasificados_categoria_id"=>$dato->foto,
                    "clasificados_categoria_nombre"=>$dato->clasificados_categoria->nombre,
                    "clasificados_categoria_slug"=>$dato->clasificados_categoria->slug
                );
            
            }
            $links=$datos->total()/$porpagina;
            return response()->json( array('total'=>$datos->total(),'por_pagina'=>sizeof($array), 'links'=>number_format($links, 0 , '', ''), 'datos'=>$array));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
