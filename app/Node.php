<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    protected $table = 'nodes'; //Tabla a la que se relaciona
    protected $fillable = ['latitude','longitude','idcategories','name','information','slogan','pathlogo','pathvideoimage','urlfacebook','urlweb'];
    protected $guarded = 'idnodes';
}//Fin de la clase