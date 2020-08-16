<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoSocio extends Model
{
    protected $table = 'TipoSocio';
    protected $primaryKey = 'IdTipoSocio';
    protected $fillable = ['Descripcion','Cantidad','Estado'];
    
    public function Socios()
    {
        return $this->hasMany('App\Socios');
    }
}
