<?php

namespace App\Http\Controllers;

use App\Topicos;
use Illuminate\Http\Request;

class TopicosController extends Controller
{
    public function index ()
    {
        //Listado de todos los topicos
        return Topicos::all ();
    }

    public function store (Request $request)
    {
        //Agregar un nuevo topico
        $topico = Topicos::create ( $request->all () );
        return response ()->json ( $topico , 201 );
    }

    public function show ($id)
    {
        //Mostrar topico seleccionado

        $topicos = Topicos::where('id',$id)->first();
        return $topicos;
    }


    public function update(Request $request, Topicos $topicos)
    {
        //Modificar datos de un topico existente
        $topicos->update ($request->all());
        return response()->json($topicos, 200);
    }

    public function destroy(Topicos $topicos)
    {
        //Eliminar un topico de la tabla
        $topicos->delete();
        return response ()->json (null, 204);
    }
}
