<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empresas extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idEmpresa', 'codigo', 'nombre_entidad', 'mision', 'pais','direccion','email','nombre_encargado'
    ];

}
