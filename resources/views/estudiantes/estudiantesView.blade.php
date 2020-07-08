@extends('layout.app')

@section('sidebar')
    @parent

   
@endsection

@section('content')
	<script type="text/javascript">

		var idPuesto="";

		function eliminar(id){
			idPuesto =id;
		}

		function borrar(){

			location.href = "/estudiantes/destroy/"+idPuesto;
		}

	</script>
	<h1>Ver Estudiantes</h1>
	<table class="table  table-striped table-responsive-md mt-3">
		@if($numEstudiantes===0)
			<div class="alert alert-danger alert-dismissible mt-3">
			 	<button type="button" class="close" data-dismiss="alert">&times;</button>
			 	<strong>No hay Puestos</strong> 
			</div>
		@else
			<thead class="thead-dark">
				<tr>
					<th>id</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Edad</th>
					<th>Email</th>
					<th>Acciones</th>
				</tr>
			</thead>

			<tbody>
			@foreach ($estudiantes as $estudiante)
			<tr>
				<td>{{$estudiante->id}}</td>
				<td>{{$estudiante->nombre}}</td>
				<td>{{$estudiante->apellido}}</td>
				<td>{{$estudiante->edad}}</td>
				<td>{{$estudiante->email}}</td>
				<td id="action">
						<div class="row">
							<div class="col-md-2">
								<a href="/estudiantes/show/{{$estudiante->id}}" class="btn btn-success">
									Ver
								</a>
							</div>

							<div class="col-md-2">
								<a  href="/estudiantes/edit/{{$estudiante->id}}" class="btn btn-primary">
									Editar
								</a>

							</div>

							<div class="col-md-2">
								<a onclick="eliminar({{$estudiante->id}})" data-toggle="modal" data-target="#modalErase" class="btn btn-danger" style="color:#fff">
									Eliminar
								</a>
							</div>
						</div>

				</td>	
			</tr>

			@endforeach
		</tbody>
		@endif
			
	</table>
	{!!$estudiantes->render()!!}
	<div class="modal" id="modalErase">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header bg-danger ">
					<h4 class="modal-title text-light">Advertencia!</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					¿Está seguro de eliminar este Estudiante?
				</div>
				<div class="modal-footer">
					<div class="row" style="margin-right: 10px">
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<button onClick="borrar()" class="btn btn-primary">Aceptar</button>
						</div>
						<div class="col-md-4">
							<button class="btn btn-danger" data-dismiss="modal">Cerrar</button>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
    
	<!-- <button type="button" class="btn btn-primary">Primary</button> -->
	
@endsection