<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class CursoController extends Controller
{
   
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $cursos = DB::table('cursos')
                    ->select('cursos.*')
                    ->orderBy('id', 'ASC')
                    ->paginate(5);
        
        $numCursos = $cursos->count();
        
        return view('/cursos/cursosView',compact('cursos'), 
            ['numCursos'=>$numCursos]);
        //return view('/cursos/cursosView');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $horarios = [
            "7am -9am",
            "9am -11am",
            "11am -1pm",
            "2pm -4pm",
            "4pm -6pm"
        ];

        return view('/cursos/cursosCreate', ['horarios' =>$horarios]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curso =new \App\Curso; 
        $curso->nombre =$request->nombre_curso;
        $curso->horario=$request->horario;
        $curso->fecha_inicio=$request->fecha_inicio;
        $curso->fecha_fin=$request->fecha_fin;
        $curso->save();

        return redirect('/cursos/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estudiante =\App\Estudiante::where('id',$id)->first();
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
        $estudiante =\App\Estudiante::where('id',$id)->first();
        $estudiante->nombre =$request->nombre;
        $estudiante->apellido=$request->apellido;
        $estudiante->edad=$request->edad;
        $estudiante->email=$request->email;
        $estudiante->save();
        //return redirect('/cursos');
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
        \App\Estudiante::where('id',$id)->delete();
        //return redirect('/cursos');
         return new Response("destroy ".$id);
    }
}
