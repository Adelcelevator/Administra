<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'Factura';
    protected $primaryKey = 'idFactura';
    protected $fillable = ['subtotal','total','iva','estado'];
    
    public function Transacciones()
    {
        return $this->hasMany('App\DetalleFactura');
    }
}