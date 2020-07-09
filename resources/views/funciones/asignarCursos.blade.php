@extends('layout.app')

@section('sidebar')
    @parent

   
@endsection

@section('content')

<h1>Asignar Curso</h1>
<form action="/funciones/store" method="POST" style="margin-bottom: 200px; margin-top: 60px;">
	{{ csrf_field() }}
	<div class="form-inline">
		<label for="curso" style="margin-left: 20px; margin-right: 10px">Curso:</label>
		<select class="form-control" id="sel1" name="curso">
			@foreach ($cursos as $curso)
			 	<option value="{{$curso->id}}">{{$curso->nombre}}</option>
			@endforeach
		</select>
		<label for="estudiante" style="margin-left: 60px; margin-right: 10px">Estudiante:</label>
		<select class="form-control" id="sel1" name="estudiante">
			@foreach ($estudiantes as $estudiante)
			 	<option value="{{$estudiante->id}}">{{$estudiante->nombre}}</option>
			@endforeach					   
		</select>
	</div>
	<div class="form-group" style="margin-top: 50px; margin-left: 40px;">
		<input class="btn btn-primary" type="submit" name="registrar" value="Asignar">
	</div>
	
</form>

    
	
	
@endsection