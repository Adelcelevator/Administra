<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('contenido/contenido');
});
//RUTAS GET
Route::get('/Factura','FacturaController@index');
//RUTAS POST
Route::post('/Factura/guardar','FacturaController@store');
//RUTAS PUT
Route::put('/Factura/borrar','FacturaController@borrar');
Route::put('/Factura/cambios','FacturaController@actualizar');