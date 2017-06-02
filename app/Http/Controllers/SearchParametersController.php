<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchParametersController extends Controller
{
    public function searchRoutes(Request $request)
    {
    	return view('routes-found');
    }
}
