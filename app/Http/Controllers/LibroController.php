<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;

class LibroController extends Controller
{
    public function index(Request $request)
    {
        if(!$request->ajax()) return redirect('/');
        $libro = Libro::all();
        return $libro;
    }



    public function store(Request $request)
    {
        if(!$request->ajax()) return redirect('/');
        $libro = new Libro();
        $libro->ISBN = $request->ISBN;
        $libro->Titulo = $request->Titulo;
        $libro->Autor = $request->Autor;
        $libro->IdCategoria= $request->IdCategoria;
        $libro->Stock = $request->Stock;
        $libro->PrecioCompra = $request->PrecioCompra;
        $libro->PrecioVenta = $request->PrecioVenta;
        $libro->save();
    }

    public function borrar(Request $request)
    {
        //if(!$request->ajax()) return redirect('/');
        $libro = Libro::findOrFail($request->id);
        $libro->Stock = $libro->Stock-$libro->Stock;
        $libro->save();
    }


    public function actualizar(Request $request)
    {
        if(!$request->ajax()) return redirect('/');
        $libro = Libro::findOrFail($request->id);
        $libro->ISBN = $request->ISBN;
        $libro->IdCategoria= $request->IdCategoria;
        $libro->Stock = $request->Stock;
        $libro->PrecioCompra = $request->PrecioCompra;
        $libro->PrecioVenta = $request->PrecioVenta;
        $libro->save();
        return $libro;
    }
    
}
