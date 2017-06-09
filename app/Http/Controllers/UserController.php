<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
// Validación de formularios.
use Validator;

// Hash de contraseñas.
use Hash;

// Redireccionamientos.
use Redirect;

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
         $rules=array(
            'email'=>'required|unique:users', 
            'password'=>'required', // Username es único en la tabla users
            'name'=>'required',
            'firstlastname'=>'required',
            'secondlastname'=>'required',
            'profilphoto'=>'required',
            'idroles'=>'required'

            );
     // Llamamos a Validator pasándole las reglas de validación.
        $validator=Validator::make($request->all(),$rules);

        // Si falla la validación redireccionamos de nuevo al formulario
        // enviando la variable Input (que contendrá todos los Input recibidos)
        // y la variable errors que contendrá los mensajes de error de validator.
        if ($validator->fails())
        {
            return Redirect::to('/user')
            ->withInput()
            ->withErrors($validator->messages());
        }
        // Si la validación es OK, estamos listos para almacenar en la base de datos los datos.
        User::create(array(
            'email'=>$request->input('email'), 
            'password'=>$request->input('password'), // Username es único en la tabla users
            'name'=>$request->input('name'),
            'firstlastname'=>$request->input('firstlastname'),
            'secondlastname'=>$request->input('secondlastname'), 
            'profilphoto'=>'http://turritour.000webhostapp.com/img/profile/'.$request->input('profilphoto'), 
            'idroles'=>$request->input('idroles')
            ));
        $ruta = "http://turritour.000webhostapp.com/img/profile/" .basename($_FILES['user']['profilphoto']);
        if(move_uploaded_file($_FILES['fotoUp']['tmp_name'], $ruta))
        chmod ("http://turritour.000webhostapp.com/img/profile/".basename( $_FILES['user']['profilphoto']), 0644);

        // Redireccionamos a user
        return Redirect::to('/user');
    }

}
