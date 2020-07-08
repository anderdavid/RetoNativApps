<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function asignarCursos()
    {
        return view('/funciones/asignarCursos');
    }

    public function top3()
    {
        return view('/funciones/asignarCursos');
    }

   
}
