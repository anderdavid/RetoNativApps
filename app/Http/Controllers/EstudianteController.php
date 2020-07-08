<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class EstudianteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = DB::table('estudiantes')
            ->select('estudiantes.*')
            ->orderBy('id', 'ASC')
            ->paginate(5);

        $numEstudiantes = $estudiantes->count();
       
        return view('/estudiantes/estudiantesView',compact('estudiantes'), 
            ['numEstudiantes'=>$numEstudiantes]);
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arrayEdad =$this->generateArrayEdad();
       
        return view('/estudiantes/estudiantesCreate',['edad' =>$arrayEdad]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estudiante =new \App\Estudiante;
        $estudiante->nombre =$request->nombre;
        $estudiante->apellido=$request->apellido;
        $estudiante->edad=$request->edad;
        $estudiante->email=$request->email;
        $estudiante->save();

        return redirect('/estudiantes/show');
        
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

        return view('/estudiantes/estudiantesViewId', ['estudiante' =>$estudiante]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {    
        $estudiante =\App\Estudiante::where('id',$id)->first();
        $arraySelected =$this->generateArraySelected($estudiante->edad);
        
        return view('/estudiantes/estudiantesUpdate', ['edad' =>$arraySelected,'estudiante'=>$estudiante]);
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

        return redirect('/estudiantes/show/'.$id);
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

    public function generateArrayEdad(){
        $edad =array();
        for($i=6;$i<=75;$i++){
            $edad[$i] =$i;
        }
        return $edad;
    }

    function generateArraySelected($selected){
        $edadSelected =array();
        for($i=6;$i<=75;$i++){
            if($i==$selected){
                  $edadSelected[$i] ="selected";
            }else{
                $edadSelected[$i] ="";
            }
        }
        return $edadSelected;
    }
}
