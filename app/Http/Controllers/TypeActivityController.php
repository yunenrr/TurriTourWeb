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
        $activities = TypeActivities::all();
        return View::make('administrator.typeActivities')->with('activities', $activities);
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
            'name'=>$request->input('name'),             
            ));        
       
        // Redireccionamos a user
        return TypeActivities::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TypeActivities  $typeActivities
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return TypeActivities::all();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypeActivities  $typeActivities
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeActivities $typeActivities)
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
    public function update(Request $request, TypeActivities $typeActivities)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypeActivities  $typeActivities
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeActivities $typeActivities)
    {
        //
    }
}
