<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use View;
class CategoryController extends Controller
{
    /**************************************************** API ************************************************/
    /**
    * Método que retorna un JSON con el nombre de todas las categorías de la base de datos
    */
    public function apiGetAllCategory()
    {
        return Category::all();
    }//Fin del método
    /**************************************************** CRUD ************************************************/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
        return View::make('administrator.categoryPlaces');
    }
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {
        $category = Category::all();
        return $category;
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
       Category::create(array(
            'name'=>$request->name,             
            'pathimage'=>$request->pathimage,             
            ));  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $categories =find($request->id);
        $categories->name=$request->name;
        $categories->pathimage=$request->pathimage;
        $categories->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $activities =Category::where('idcategories',$id);
        $activities->delete();
    }
}//Fin de la clase