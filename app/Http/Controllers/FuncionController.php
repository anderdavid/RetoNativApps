<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class FuncionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function asignarCursos()
    {
        $cursos = \App\Curso::all();
        $estudiantes = \App\Estudiante::all();



        return view('/funciones/asignarCursos', ['cursos' =>$cursos,'estudiantes'=>$estudiantes]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* return new Response("store");*/
        $estudiante =\App\Estudiante::where('id',$request->estudiante)->first();
        $curso =\App\Curso::where('id',$request->curso)->first();

        $asignados = DB::table('curso_estudiante')
                        ->select('curso_estudiante.*')
                        ->where('estudiante_id','=',$request->estudiante)
                        ->where('curso_id','=',$request->curso)
                        ->get();

        $count =$asignados->count();

        if($count==0){
           $curso->estudiantes()->attach($estudiante); 
        }

        return redirect('/funciones/estudianteCurso/'.$estudiante->id);
      
   }

   public function estudianteCurso($id){

     $estudiante =\App\Estudiante::find($id);

     $cursos =$estudiante->cursos;
   
     return view('/funciones/estudianteCurso', 
        ['estudiante' =>$estudiante->nombre, 'cursos'=>$cursos]);
   }

   public function top3(){

    $top3 =DB::table('curso_estudiante')
            ->join('cursos','cursos.id','=','curso_estudiante.curso_id')
            ->selectRaw('COUNT(*) as inscritos,curso_estudiante.*,cursos.nombre')
             ->whereBetween('curso_estudiante.created_at',
                array(
                    DB::raw('DATE_SUB(NOW(),INTERVAL 3 MONTH)'),
                    DB::raw(' NOw()')
                )
            )
            ->groupBy('curso_estudiante.curso_id')
            ->orderBy('inscritos', 'desc')
            ->limit(3)
            ->get();




    return view('/funciones/top3', ['top3'=>$top3]);
    
    }
}
