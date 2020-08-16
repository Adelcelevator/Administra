<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonasAutorizadas extends Model
{
    protected $table = 'PersonasAutorizadas';
    protected $primaryKey = 'IdPersonaAutorizada';
    protected $fillable = ['Ci','Nombre','Apellido','Telefono','Direccion','IdSocio'];
    
    public function Transacciones()
    {
        return $this->belongsTo('App\Socio', 'foreign_key', 'IdSocio');
    }
}
