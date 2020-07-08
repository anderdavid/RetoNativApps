
@extends('layout.app')

@section('sidebar')
    @parent

   
@endsection

@section('content')

	@section('content')
	<script type="text/javascript">

		var idcurso="";

		function eliminar(id){
			idcurso =id;
		}

		function borrar(){

			location.href = "/cursos/destroy/"+idcurso;
		}

	</script>
	<h1>Ver cursos</h1>
	<table class="table  table-striped table-responsive-md mt-3">
		@if($numCursos===0)
			<div class="alert alert-danger alert-dismissible mt-3">
			 	<button type="button" class="close" data-dismiss="alert">&times;</button>
			 	<strong>No hay cursos</strong> 
			</div>
		@else
			<thead class="thead-dark">

				<tr>
					<th>id</th>
					<th>Nombre</th>
					<th>horario</th>
					<th>Fecha Inicio</th>
					<th>Fecha Fin</th>
					<th>Numero de estudiantes</th>
					<th>Acciones</th>
				</tr>
			</thead>

			<tbody>
			@foreach ($cursos as $curso)
			<tr>
				<td>{{$curso->id}}</td>
				<td>{{$curso->nombre}}</td>
				<td>{{$curso->horario}}</td>
				<td>{{$curso->fecha_inicio}}</td>
				<td>{{$curso->fecha_fin}}</td>
				<td>{{$curso->numero_estudiantes}}</td>

				<td id="action">
						<div class="row">
							<div class="col-md-2">
								<a href="/cursos/show/{{$curso->id}}" class="btn btn-success">
									Ver
								</a>
							</div>

							<div class="col-md-2">
								<a  href="/cursos/edit/{{$curso->id}}" class="btn btn-primary">
									Editar
								</a>

							</div>

							<div class="col-md-2">
								<button onclick="eliminar({{$curso->id}})" data-toggle="modal" data-target="#modalErase" class="btn btn-danger" style="color:#fff">
									Eliminar
								</button>
							</div>
						</div>

				</td>	
			</tr>

			@endforeach
		</tbody>
		@endif
			
	</table>
	{!!$cursos->render()!!}	
	<div class="modal" id="modalErase">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header bg-danger ">
					<h4 class="modal-title text-light">Advertencia!</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					¿Está seguro de eliminar este curso?
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
	
@endsection