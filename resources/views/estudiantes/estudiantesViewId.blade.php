@extends('layout.app')

@section('sidebar')
    @parent

   
@endsection

@section('content')
	<script type="text/javascript">

		var idEstudiante="";

		function editar(id){
			location.href ='/estudiantes/edit/'+id;
		}
		function eliminar(id){
			idEstudiante =id;
		}
		function borrar(){
			location.href = "/estudiantes/destroy/"+idEstudiante;
		}

		function verCursos(id){
			location.href="/funciones/estudianteCurso/"+id;
		}
	</script>
	<div class="container">
		<h1 class="text-secondary">Ver estudiante </h1><br>
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="card">
					<div class="card-header bg-secondary text-white">
						estudiante
					</div>
					<div class="card-body">
						<p><strong>Id: </strong>{{$estudiante->id}}</p>
						<p><strong>Nombre: </strong>{{$estudiante->nombre}}</p>
						<p><strong>Apellido: </strong>{{$estudiante->apellido}}</p>
						<p><strong>Edad: </strong>{{$estudiante->edad}}</p>
						<p><strong>Email: </strong>{{$estudiante->email}}</p>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-6">
					
					<button class="btn btn-primary" onclick="editar({{$estudiante->id}})">Editar</button>
					<button class="btn btn-success" onclick="verCursos({{$estudiante->id}})">Ver Cursos</button>
					<button class="btn btn-danger"  onclick="eliminar({{$estudiante->id}})" data-toggle="modal" data-target="#modalErase">Eliminar</button>
				</div>
				<div class="col-md-6"></div>
			</div>
		</div>
	</div>

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
	
@endsection