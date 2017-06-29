<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    protected $table = 'categories'; //Tabla a la que se relaciona
    protected $fillable = ['name','pathimage'];
    protected $guarded = 'idcategories';
}//Fin de la clase