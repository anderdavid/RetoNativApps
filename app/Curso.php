<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public function estudiantes(){
    	
    	return $this->belongsToMany("App\Estudiante")->withTimestamps();
    }
}
