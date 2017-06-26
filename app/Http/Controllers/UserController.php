<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use View;

class UserController extends Controller
{
    /**************************************************** API ************************************************/
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return View::make('administrator.user')->with('users', $users);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

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
     
        // Si la validación es OK, estamos listos para almacenar en la base de datos los datos.
        User::create(array(
            'email'=>$request->input('email'), 
            'password'=>$request->input('password'), // Username es único en la tabla users
            'name'=>$request->input('name'),
            'firstlastname'=>$request->input('firstlastname'),
            'secondlastname'=>$request->input('secondlastname'), 
            'profilphoto'=>$request->input('profilphoto'), 
            'idroles'=>$request->input('idroles')
            ));
       
        // Redireccionamos a user
        return "Registro Exitoso";
    }

}
