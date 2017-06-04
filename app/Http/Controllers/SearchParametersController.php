<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Node;
use App\Http\Controllers\Controller;

class SearchParametersController extends Controller
{
    public function searchRoutes(Request $request)
    {
    	$temp = Node::all();
    	return view('map-route')->with('nodes',$temp);
    }
}
