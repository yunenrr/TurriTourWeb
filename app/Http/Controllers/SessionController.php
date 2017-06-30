<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use View;

class SessionController extends Controller
{
	/**
	Función que nos permite iniciar sesión
	*/
    public function login(Request $request)
    {
    	$param = $request->all(); //Se recuperan todos los valores

    	//Obtenemos el usuario que corresponda al correo y contraseña ingresados
    	$user = User::where([['email', 'like', $param['user']],['password', 'like', $param['password']]])->get();

    	//Se valida que el usuario no esté vacío
    	if(!empty($user[0]))
    	{
    		session(['user' => $user[0]->email]);

    		//Se valida que el tipo de rol del usuario
    		if($user[0]->idroles == 1)
    		{
    			return redirect('administrator');
    		}//Fin del if
    		else
    		{
    			return redirect('home');
    		}//Fin del else
    	}//Fin del if
    	else
    	{
    		return redirect('session')->with('msj_error', 'Tus datos son incorrectos')->withInput();
    	}//Fin del else
    }//Fin de la función

    /**
    Función que elimina la sesión
    */
    public function logout(Request $request)
    {
    	$request->session()->forget('user');
    	return View::make('home');
    }//Fin de la función
}//Fin de la clase