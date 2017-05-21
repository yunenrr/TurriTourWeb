<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RouteNode extends Model
{
    protected $table = 'routenodes'; //Tabla a la que se relaciona
    protected $fillable = ['idroutes','idnodes'];
}//Fin de la clase