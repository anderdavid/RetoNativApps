@extends('layout.app')

@section('sidebar')
    @parent

   
@endsection

@section('content')

	<h1 class="text-secondary">Actualizar Curso</h1><br>
	<div class="row justify-content-center">
		<div class="col-md-10">
			<form method="POST" action="/cursos/update/{{$curso->id}}">
				{{ csrf_field() }}
				<div class="card">
					<div class="card-body">
						<div class="form-group">
							<label for="nombre">Nombre: </label>
							<input class="form-control" type="text" name="nombre_curso" placeholder="Ingrese nombre del curso " required="true" value="{{$curso->nombre}}">
						</div>
						<div class="form-group">
							<label for="sel1">Horario:</label>
						  	<select class="form-control" id="sel1" name="horario" value="{{$curso->horario}}">
						  		@foreach ($horarios as $horario)
							    	<option {{$horario[1]}}>{{$horario[0]}}</option>
							    @endforeach
							   		
							</select>
						</div>
						
						<div class="form-group">
							<label for="sel1">Fecha de Inicio:</label>
							<input id="datepicker" width="276" name="fecha_inicio"  
							value="{{$curso->fecha_inicio}}" />
						    <script>
						        $('#datepicker').datepicker({
						        	
						            uiLibrary: 'bootstrap4',
						            format: 'yyyy-mm-dd'
						            
						        });
						       
						    </script>	
						</div>

						<div class="form-group">
							<label for="sel1">Fecha de Finalizacion:</label>
							<input id="datepicker2" width="276" name="fecha_fin" 
							value="{{$curso->fecha_fin}}"/>
						    <script>
						        $('#datepicker2').datepicker({

						            uiLibrary: 'bootstrap4',
						            format: 'yyyy-mm-dd'

						        });
						    </script>	
						</div>
						<div class="form-group">
							<input class="btn btn-primary" type="submit" name="registrar" value="Registrar">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
    
	
	
@endsection