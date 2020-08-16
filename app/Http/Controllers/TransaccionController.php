<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaccion;
class TransaccionController extends Controller
{
    public function venta(Request $request)
    {
        if(!$request->ajax()) return redirect('/');
        $transaccion = new Transaccion();
        $transaccion->PrecioTotal = $request->PrecioTotal;
        $transaccion->IdTipoTransaccion = 1;
        $transaccion->IdCliente =1;
        $transaccion->save();
    }

    public function compra(Request $request)
    {
        if(!$request->ajax()) return redirect('/');
        $transaccion = new Transaccion();
        $transaccion->PrecioTotal = $request->PrecioTotal;
        $transaccion->IdTipoTransaccion = 2;
        $transaccion->IdCliente =1;
        $transaccion->save();
    }

    public function ultimo(Request $request){
        $ultima= Transaccion::all();
        return $ultima->last();
    }
}
