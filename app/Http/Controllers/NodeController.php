<?php

namespace App\Http\Controllers;

use App\Node;
use App\MyNode;
use App\MyLinkedList;
use Illuminate\Http\Request;
use View;
use Illuminate\Support\Facades\DB;


class NodeController extends Controller
{
    /**************************************************** API ************************************************/
    /**
    * Método que retorna un JSON con la información de un nodo en específico.
    */
    public function apiGetForMap(Request $request)
    {
        $id = $request->input("id");
        return Node::where('idnodes',$id)->get();
    }//Fin del método

    /**************************************************** CRUD ************************************************/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return View::make('administrator.place');
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {
       $nodes = Node::all();
        return $nodes;
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
       Node::create(array(
        'latitude'=>$request->latitude,             
        'longitude'=>$request->longitude,             
        'idcategories'=>$request->idcategories,             
        'idtypeactivity'=>107,             
        'value'=>$request->value,             
        'name'=>$request->name,             
        'information'=>$request->information,             
        'slogan'=>$request->slogan,             
        'pathlogo'=>$request->pathlogo,             
        'pathvideoimage'=>$request->pathvideoimage,             
        'urlfacebook'=>$request->urlfacebook,             
        'urlweb'=>$request->urlweb,             
        ));  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Node  $node
     * @return \Illuminate\Http\Response
     */
    public function show(Node $node)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Node  $node
     * @return \Illuminate\Http\Response
     */
    public function edit(Node $node)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Node  $node
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Node $node)
    {
        $nodes =Node::where('idnodes',$request->id);
        $nodes->update(array(
        'latitude'=>$request->latitude,             
        'longitude'=>$request->longitude,             
        'idcategories'=>$request->idcategories,             
        'idtypeactivity'=>107,             
        'value'=>$request->value,             
        'name'=>$request->name,             
        'information'=>$request->information,             
        'slogan'=>$request->slogan,             
        'pathlogo'=>$request->pathlogo,             
        'pathvideoimage'=>$request->pathvideoimage,             
        'urlfacebook'=>$request->urlfacebook,             
        'urlweb'=>$request->urlweb,             
        ));  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Node  $node
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $nodes =Node::where('idnodes',$id);
        $nodes->delete();
    }
}//Fin de la clase