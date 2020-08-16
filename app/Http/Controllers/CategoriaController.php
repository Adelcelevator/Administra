<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{

    public function index(Request $request)
    {
        $categorias = Categoria::all();
        return $categorias;
    }
    
    public function buscado(Request $request)
    {
        echo $request->nombreCat;
        $resul = Categoria::where('NombreCategoria',$request->nombreCat)->get();
        return $resul;
    }



    public function store(Request $request)
    {
        if(!$request->ajax()) return redirect('/');
        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->save();
    }




    public function update(Request $request)
    {
        //if(!$request->ajax()) return redirect('/');
        $categoria = Categoria::findOrFail($request->id);
        $categoria->nombre = $request->nombre;
        $categoria->save();
    }
}
