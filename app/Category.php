<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    public $table = 'categories'; //Tabla a la que se relaciona
    public $fillable = ['name','pathimage'];
    public $guarded = 'idcategories';
}//Fin de la clase