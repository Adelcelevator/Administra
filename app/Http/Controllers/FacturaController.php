<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factura;

class SocioController extends Controller
{
    public function index(Request $request)
    {
        if(!$request->ajax()) return redirect('/');
        $Factura = Factura::all();
        return $Factura;
    }



    public function store(Request $request)
    {
        if(!$request->ajax()) return redirect('/');
        $Factura = new Factura();
        $Factura->subtotal = $request->subtotal;
        $Factura->total = $request->total;
        $Factura->iva = $request->iva;
        $Factura->estado= $request->estado;
        $Factura->save();
    }

    public function borrar(Request $request)
    {
        //if(!$request->ajax()) return redirect('/');
        $Factura = Factura::findOrFail($request->id);
        $Factura->estado = 'p';
        $Factura->save();
    }


    public function actualizar(Request $request)
    {
        if(!$request->ajax()) return redirect('/');
        $Factura->subtotal = $request->subtotal;
        $Factura->total = $request->total;
        $Factura->iva = $request->iva;
        $Factura->estado= $request->estado;
        $Factura->save();
        return $Factura;
    }
    
}
