<?php

namespace App\Http\Controllers;

use App\TypeActivities;
use Illuminate\Http\Request;

class TypeActivityController extends Controller
{
    /**************************************************** API ************************************************/
    /**
    * Método que retorna un JSON con el nombre de todas las actividades de la base de datos
    */
    public function apiGetAllActivities()
    {
        return TypeActivities::all();
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TypeActivities  $typeActivities
     * @return \Illuminate\Http\Response
     */
    public function show(TypeActivities $typeActivities)
    {
        //
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
