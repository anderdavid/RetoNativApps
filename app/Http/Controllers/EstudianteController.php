<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EstudianteController extends Controller
{

    /*touch /prueba_nativeapps/RetoNativApps/resources/views/estudiantes/estudiantesView.blade.php
        touch /prueba_nativeapps/RetoNativApps/resources/views/estudiantes/estudiantesCreate.blade.php
        touch /prueba_nativeapps/RetoNativApps/resources/views/estudiantes/estudiantesViewId.blade.php
        touch /prueba_nativeapps/RetoNativApps/resources/views/estudiantes/estudiantesUpdate.blade.php*/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/estudiantes/estudiantesView');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/estudiantes/estudiantesCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return redirect('/estudiantes/estudiantesView');
        return new Response("store");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('/estudiantes/estudiantesViewId', ['id' =>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         return view('/estudiantes/estudiantesUpdate', ['id' =>$id]);
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
        return new Response("update ".$id);
        //return redirect('/estudiantes/estudiantesView');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return new Response("destroy ".$id);
    }
}
