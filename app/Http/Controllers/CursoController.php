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
        $curso =\App\Curso::where('id',$id)->first();

        return view('/cursos/cursosViewId', ['curso' =>$curso]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curso =\App\Curso::where('id',$id)->first();
        $horarios = $this->generateArrayCursoSelected($curso->horario);
        
        return view('/cursos/cursosUpdate', ['curso' =>$curso, 'horarios'=>$horarios, 'horario'=>$curso->horario]);
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
        $curso =\App\Curso::where('id',$id)->first();
        $curso->nombre =$request->nombre_curso;
        $curso->horario=$request->horario;
        $curso->fecha_inicio=$request->fecha_inicio;
        $curso->fecha_fin=$request->fecha_fin;
        $curso->save();

        return redirect('/cursos/show/'.$id);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        \App\Curso::where('id',$id)->delete();
        
        return redirect('/cursos/show');
         
    }

    function generateArrayCursoSelected($horarioSelect){
        $horarios =array(
            array("7am -9am",""),
            array("9am -11am",""),
            array("11am -1pm",""),
            array("2pm -4pm",""),
            array("4pm -6pm","")
        );

        for($i=0;$i<count($horarios);$i++){
            if($horarios[$i][0]==$horarioSelect){
                $horarios[$i][1]="selected";
            }else{
                $horarios[$i][1]="";
            }
        }


       return $horarios;
    }
}
