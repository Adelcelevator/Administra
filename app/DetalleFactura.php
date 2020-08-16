<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleFactura extends Model
{
    protected $table = 'DetalleFactura';
    protected $fillable = ['IdFactura','Descripcion','precioTotal'];
    
    public function Transaccion()
    {
        return $this->belongsTo('App\Factura', 'foreign_key', 'IdFactura');
    } 
}
