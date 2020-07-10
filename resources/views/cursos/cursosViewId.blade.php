@extends('layout.app')

@section('sidebar')
    @parent

   
@endsection

@section('content')

	<script type="text/javascript">

		var idCurso="";

		function editar(id){
			location.href ='/cursos/edit/'+id;
		}
		function eliminar(id){
			idCurso =id;
		}
		function borrar(){
			location.href = "/cursos/destroy/"+idCurso;
		}
	</script>

	<h1 class="text-secondary">Ver Curso </h1><br>
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card">
				<div class="card-header bg-secondary text-white">
					Curso
				</div>
				<div class="card-body">
					<p><strong>Id: </strong>{{$curso->id}}</p>
					<p><strong>Nombre: </strong>{{$curso->nombre}}</p>
					<p><strong>Horario: </strong>{{$curso->horario}}</p>
					<p><strong>Fecha de Inicio: </strong>{{$curso->fecha_inicio}}</p>
					<p><strong>Fecha de Finalizacion: </strong>{{$curso->fecha_fin}}</p>
					<p><strong>Numero de estudiantes: </strong>{{$curso->numero_estudiantes}}</p>
				</div>
			</div>
		</div>
	</div>		
	<br>
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-6">
				
				<button class="btn btn-primary" onclick="editar({{$curso->id}})">Editar</button>
				<button class="btn btn-danger"  onclick="eliminar({{$curso->id}})" data-toggle="modal" data-target="#modalErase">Eliminar</button>
			</div>
			<div class="col-md-6"></div>
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
					¿Está seguro de eliminar este Curso?
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