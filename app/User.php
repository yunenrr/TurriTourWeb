<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{   public $timestamps = false;
    protected $table = 'users'; //Tabla a la que se relaciona
    protected $fillable = ['email','password','name','firstlastname','secondlastname','profilphoto','idroles'];
    protected $guarded = 'email';
}
