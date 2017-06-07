<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**************************************************** API ************************************************/
    
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    /**
    * Método que retorna un JSON con la información de un usuario en específico.
    */
    public function apiGetUserByEmail(Request $request)
    {
        $userEmail = trim($request->input("userEmail"));
        return User::where("email",$userEmail)->get();
    }//Fin del método
     public function apiGetAllUsers()
    {
        return User::all();
    }//Fin del método

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
            'name' => 'required',
            'firstlastname' => 'required',
            'secondlastname' => 'required',
            'profilphoto' => 'required',
            'idroles' => 'required',
        ]);

        Item::create($request->all());
       
    }

}
