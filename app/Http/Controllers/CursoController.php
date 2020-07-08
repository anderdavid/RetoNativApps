<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CursoController extends Controller
{
    /*touch /prueba_nativeapps/RetoNativApps/resources/views/cursos/cursosView.blade.php
    touch /prueba_nativeapps/RetoNativApps/resources/views/cursos/cursosCreate.blade.php
    touch /prueba_nativeapps/RetoNativApps/resources/views/cursos/cursosViewId.blade.php
    touch /prueba_nativeapps/RetoNativApps/resources/views/cursos/cursosUpdate.blade.php*/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('/cursos/cursosView');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/cursos/cursosCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return redirect('/peliculas');
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
        return view('/cursos/cursosViewId', ['id' =>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('/cursos/cursosUpdate', ['id' =>$id]);
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
        //return redirect('/peliculas');
        return new Response("update ".$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //return redirect('/peliculas');
         return new Response("destroy ".$id);
    }
}
