<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\materias;
use App\Http\Requests\materiascdr as materiascdrRequests;


class CDR extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $Materias;
    public function __construct (materias $Materias){
        $this->Materias = $Materias;
    
    }
    public function index()
    {
        $Materias = materias::all();
        return response()->json(['materias'=>$Materias]);
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
    public function store(materiascdrRequests $request)
    {
    $Materias = $this->Materias->create($request->all());
    return $Materias;
    return response()->json(new materiascdrRequests($Materia), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $Materias = materias::find($id);
      return $Materias;
    }

    /**
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
