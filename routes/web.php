<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('contenido/contenido');
});
//RUTAS GET
Route::get('/categoria','CategoriaController@index');
Route::get('/categoria/buscado','CategoriaController@buscado');
Route::get('/libro','LibroController@index');
Route::get('/transaccion/ultimo','TransaccionController@ultimo');
//RUTAS POST
Route::post('/categoria/guardar','CategoriaController@store');
Route::post('/libro/guardar','LibroController@store');
Route::post('/transaccion/venta','TransaccionController@venta');
Route::post('/transaccion/compra','TransaccionController@compra');
Route::post('/deta/nuevo','DetalleTransaccionController@nuevoDetalle');
//RUTAS PUT
Route::put('/categoria/actual','CategoriaController@update');
Route::put('/libro/borrar','LibroController@borrar');
Route::put('/libro/cambios','LibroController@actualizar');