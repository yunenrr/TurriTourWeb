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
        'latitude'=>$request->input('latitude'),             
        'longitude'=>$request->input('logitude'),             
        'idcategories'=>$request->input('idcategories'),             
        'idtypeactivity'=>$request->input('idtypeactivity'),             
        'value'=>$request->input('value'),             
        'name'=>$request->input('name'),             
        'information'=>$request->input('information'),             
        'slogan'=>$request->input('slogan'),             
        'pathlogo'=>$request->input('pathlogo'),             
        'pathvideoimage'=>$request->input('pathvideoimage'),             
        'urlfacebook'=>$request->input('urlfacebook'),             
        'urlweb'=>$request->input('urlweb'),             
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
        $nodes =find($request->id);
        $nodes->latitude=$request->latitude;
        $nodes->longitude=$request->longitude;
        $nodes->idcategories=$request->idcategories;
        $nodes->idtypeactivity=$request->idtypeactivity;
        $nodes->value=$request->value;
        $nodes->name=$request->name;
        $nodes->information=$request->information;
        $nodes->slogan=$request->slogan;
        $nodes->pathlogo=$request->pathlogo;
        $nodes->pathvideoimage=$request->pathvideoimage;
        $nodes->urlfacebook=$request->urlfacebook;
        $nodes->urlweb=$request->urlweb;
        $nodes->save();
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