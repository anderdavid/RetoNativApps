@extends('layout.app')

@section('sidebar')
    @parent

   
@endsection

@section('content')



	<div class="container">

		<h1 class="text-secondary">Crear Estudiante</h1><br>
		<div class="row justify-content-center">
			<div class="col-md-10">
				<form method="POST" action="/estudiantes/store">
					{{ csrf_field() }}
					<div class="card">
						<div class="card-body">
							<div class="form-group">
								<label for="nombre">Nombre: </label>
								<input class="form-control" type="text" name="nombre" placeholder="Ingrese nombre de estudiante " required="true">
							</div>
							<div class="form-group">
								<label for="apellido">Apellido:</label>
								<input class="form-control" type="text" name="apellido" placeholder="Ingrese apellido de estudiante" required="true">
							</div>
							<div class="form-group">
							  <label for="sel1">Select list:</label>
							  <select class="form-control" id="sel1" name="edad">
							    @foreach ($edad as $mEdad)
							    	<option value="{{$mEdad}}">{{$mEdad}}</option>
							    @endforeach
							  </select>
							</div>
							<div class="form-group">
								<label for="email">Email:</label>
								<input class="form-control" type="email" name="email" placeholder="Ingrese Email" required="true">
							</div>
							<div class="form-group">
								<input class="btn btn-primary" type="submit" name="registrar" value="Registrar">
							</div>
							
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
@endsection