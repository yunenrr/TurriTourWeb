<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeActivities extends Model
{
	public $timestamps = false;
    protected $table = 'typeactivities'; //Tabla a la que se relaciona
    protected $fillable = ['name'];
    protected $guarded = 'idtypeactivities';
}//Fin de la clase