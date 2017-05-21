<?php

namespace App\Http\Controllers;

use App\RouteNode;
use Illuminate\Http\Request;

class RouteNodeController extends Controller
{
    /**************************************************** API ************************************************/
    /**
    * Método que retorna un JSON con la información de un nodo en específico.
    */
    public function apiGetNodeByRoute(Request $request)
    {
        $idRoute = $request->input("idroute");
        return RouteNode::where('idroutes',$idRoute)->get();
    }//Fin del método

    /**************************************************** CRUD ************************************************/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RouteNode  $routeNode
     * @return \Illuminate\Http\Response
     */
    public function show(RouteNode $routeNode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RouteNode  $routeNode
     * @return \Illuminate\Http\Response
     */
    public function edit(RouteNode $routeNode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RouteNode  $routeNode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RouteNode $routeNode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RouteNode  $routeNode
     * @return \Illuminate\Http\Response
     */
    public function destroy(RouteNode $routeNode)
    {
        //
    }
}//Fin de la clase