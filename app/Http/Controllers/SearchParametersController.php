<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Node;
use App\SearchParameters
use App\Http\Controllers\Controller;

class SearchParametersController extends Controller
{
	public function getSearchParametersByEmail(Request $request)
    {
    	$userEmail = trim($request->input("userEmail"));
        return SearchParameters::where("user_email",$userEmail)->get();
    }

    public function searchRoutes(Request $request)
    {
    	$temp = Node::all();
    	return view('map-route')->with('nodes',$temp);
    }
}
