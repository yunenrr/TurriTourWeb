<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use View;
use Mail;


class SendEmailController extends Controller
{
  
    /**************************************************** CRUD ************************************************/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
       $data = array(
        'name' =>$request->name, 
        'email' =>$request->email , 
        'msg' =>$request->msg, 
        );

       Mail::send('administrator.mail', $data, function ($message){
        
        $message->subject('consulta turritour');
        $message->to('turritour@gmail.com');

        });
       return View::make('/support');
    }

    
}//Fin de la clase