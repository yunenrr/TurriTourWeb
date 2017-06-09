<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\StartPoints;

class StartPointsController extends Controller
{
    /**
    * Método que retorna un JSON con los puntos de inicio de la base de datos de la base de datos
    */
    public function apiGetAllStartPoints()
    {
        return StartPoints::all();
    }//Fin del método
}
