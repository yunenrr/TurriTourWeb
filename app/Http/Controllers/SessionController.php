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
            session(['user' => $user[0]->name]);
    		session(['email' => $user[0]->email]);
            session(['profilphoto' => $user[0]->profilphoto]);

    		//Se valida que el tipo de rol del usuario
    		if($user[0]->idroles == 1)
    		{
    			return redirect('administrator');
    		}//Fin del if
    		else
    		{
    			return View::make('home');
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
        $request->session()->forget('email');
    	$request->session()->forget('profilphoto');
    	return View::make('home');
    }//Fin de la función

    /**
    Función que permite registrar usuarios
    */
    public function signin(Request $request)
    {
        $param = $request->all(); //Se recuperan todos los valores

        //Buscamos si el correo ya ha sido ingresado
        $user = User::where('email',$param['email'])->get();

        //Se valida que el usuario no esté vacío
        if(!empty($user[0]))
        {
            return redirect('session')->with('msjEmailExist', 'El correo ingresado ya está registrado')->withInput();
        }//Fin del if
        else
        {
            User::create($param);
            return redirect('session')->with('successRegister', 'Se registró correctamente');
        }//Fin del else
    }//Fin de la función
}//Fin de la clase