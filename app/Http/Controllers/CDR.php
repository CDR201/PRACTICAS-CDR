<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*use App\materias;*/
use App\maestros;
/*use App\Http\Requests\materiascdr as materiascdrRequests;*/


class CDR extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $Maestros;
    /*protected $Materias;
    public function __construct (materias $Materias){
        $this->Materias = $Materias;
    
    }*/
    public function index()
    {
        $Maestros=maestros::edad()->get();
        return response()->json(['maestros'=>$Maestros]);

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
    /*public function store(materiascdrRequests $request)
    {
    $Materias = $this->Materias->create($request->all());
    return response()->json([$Materias]);
    /*return response()->json(new materiascdrRequests($Materias), 201);*/

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Maestros->maestros::where('edad','>', 30);
        return response()->json(['maestros'=>$Maestros]);
    }

    /*
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function update(materiascdrRequests $request, materias $Materias)

    {
     $Materias-> $this->Materias->update($request->all());
     return response()->json($Materias);   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function destroy(materias $Materias)
    {
    $Materias->delete();
    return response()->json('El registro ha sido eliminado');
    }*/
}