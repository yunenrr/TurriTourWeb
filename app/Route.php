<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $table = 'routes'; //Tabla a la que se relaciona
    protected $fillable = ['idtypeactivities','minutes','km','cost','information'];
    protected $guarded = 'idroutes';
}//Fin de la clase