<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    protected $table = 'Socio';
    protected $primaryKey = 'IdSocio';
    protected $fillable = ['Ci','TipoSocio'];
    
    public function PersonasAutorizadas()
    {
        return $this->hasMany('App\PersonasAutorizadas');
    }

    public function TipoSocio()
    {
        return $this->belongsTo('App\TipoSocio', 'foreign_key', 'TipoSocio');
    }

}
