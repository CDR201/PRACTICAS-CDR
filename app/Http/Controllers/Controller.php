<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;


class Controller extends BaseController
{
    public function Principal()
	{
		return view ('principal');
    }
    public function Layout ()
	{
		return view ('app');
    }
    public function getmaestro ()
    {
      $maestros = array (
        'nombre' =>'PEDRO',
        'apellido'=>'GD',
        'edad'=>24,
      );
      return response()->json($maestros);

    }
}



