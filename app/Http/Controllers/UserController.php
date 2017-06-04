<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**************************************************** API ************************************************/
    /**
    * Método que retorna un JSON con la información de un usuario en específico.
    */
    public function apiGetUserByEmail(Request $request)
    {
        $userEmail = trim($request->input("userEmail"));
        return User::where("email",$userEmail)->get();
    }//Fin del método

}
