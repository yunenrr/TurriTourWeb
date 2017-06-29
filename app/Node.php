<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
	public $timestamps = false;
    protected $table = 'nodes'; //Tabla a la que se relaciona
    protected $fillable = ['latitude','longitude','idcategories', 'idtypeactivity','value','name','information','slogan','pathlogo','pathvideoimage','urlfacebook','urlweb', 'class'];
    protected $guarded = 'idnodes';
}//Fin de la clase