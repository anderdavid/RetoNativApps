<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table="estudiantes";
	
    public function cursos(){
    	
    	return $this->belongsToMany("App\Curso");
    }
}
