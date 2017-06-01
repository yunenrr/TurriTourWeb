<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ParametrosBusquedaController extends Controller
{
    public function buscarRutas(Request $request)
    {
    	return view('map-route');
    }
}
