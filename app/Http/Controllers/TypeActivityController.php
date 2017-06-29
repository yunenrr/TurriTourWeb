<?php

namespace App\Http\Controllers;

use App\TypeActivities;
use Illuminate\Http\Request;
use View;

class TypeActivityController extends Controller
{
    /************************************************* API *********************************************/
    /**
    * Método que retorna un JSON con el nombre de todas las actividades de la base de datos
    */
    public function apiGetAllActivities()
    {
        return TypeActivities::all();
    }//Fin del método

    /************************************************ CRUD*******************************************/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
        return View::make('administrator.typeActivities');
    }//Fin del método

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
         // Si la validación es OK, estamos listos para almacenar en la base de datos los datos.
        typeActivities::create(array(
            'name'=>$request->name,             
            ));  
        // Redireccionamos a user
      }

    /**
     * Display the specified resource.
     *
     * @param  \App\TypeActivities  $typeActivities
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\TypeActivities  $typeActivities
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {
        $activities=TypeActivities::all();
        return $activities;
    }
    /**
    * Método que retorna un JSON con la información de un nodo en específico.
    */
    public function getActivityById(Request $request)
    {
        $id = $request->input("id");
        return typeActivities::where('idtypeactivities',$id);
    }//Fin del método

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypeActivities  $typeActivities
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypeActivities  $typeActivities
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
   
        $activities =TypeActivities::where('idtypeactivities',$request->idtypeactivities);

        $activities->update(array(
            'name'=>$request->name,             
            ));          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypeActivities  $typeActivities
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {  
        $id = $request->id;
        $activities =typeActivities::where('idtypeactivities',$id);
        $activities->delete();
       
    }
}//Fin de la clase