@extends('layout.app')

@section('sidebar')
    @parent

   
@endsection

@section('content')
	
	<h1 class="text-secondary"> Actualizar estudiante</h1><br>
	<div class="row justify-content-center">
		<div class="col-md-10">
			<form method="POST" action="/estudiantes/update/{{$estudiante->id}}">
				{{ csrf_field() }}
				<div class="card">
					<div class="card-body">
						<div class="form-group">
							<label for="nombre">Nombre: </label>
							<input class="form-control" type="text" name="nombre" placeholder="Ingrese nombre de estudiante " required="true" value="{{$estudiante->nombre}}">
						</div>
						<div class="form-group">
							<label for="apellido">Apellido:</label>
							<input class="form-control" type="text" name="apellido" placeholder="Ingrese apellido de estudiante" required="true" value="{{$estudiante->apellido}}">
						</div>
						<div class="form-group">
						  <label for="sel1">Edad:</label>
						  <select class="form-control" id="sel1" name="edad" value="{{$estudiante->edad}}">
						    @foreach ($edad as $mEdad =>$value)
						    	<option {{$value}}>{{$mEdad}}</option>
						    @endforeach
						  </select>
						</div>
						<div class="form-group">
							<label for="email">Email:</label>
							<input class="form-control" type="email" name="email" placeholder="Ingrese Email" required="true" value="{{$estudiante->email}}">
						</div>
						<div class="form-group">
							<input class="btn btn-primary" type="submit" name="registrar" value="Actualizar">
						</div>
						
					</div>
				</div>
			</form>
		</div>
	</div>
	
	
@endsection