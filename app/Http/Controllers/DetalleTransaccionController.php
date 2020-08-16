<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetalleTransaccion;

class DetalleTransaccionController extends Controller
{
    public function nuevoDetalle(Request $request){
        if(!$request->ajax()) return redirect('/');
        $detra = new DetalleTransaccion();
        $detra->IdTransaccion  = $request->IdTransaccion;
        $detra->CantidadLibro  = $request->CantidadLibro;
        $detra->PrecioLibro = $request->PrecioLibro;
        $detra->Libro_IdLibro=$request->Libro_IdLibro;
        $detra->IdCaja = 1;
        $detra->save();
    }
}
