@extends('layout.app')

@section('sidebar')
    @parent

   
@endsection

@section('content')

<h1 class="text-secondary">Ver Cursos Inscritos </h1><br>
<p class="text-primary">Nombre estudiante: {{$estudiante}}</p>
<div class="row justify-content-center">
	<div class="col-md-10">
		<div class="card">
			<div class="card-header bg-secondary text-white">
				Cursos Inscritos
			</div>
			<div class="card-body">
				@foreach ($cursos as $curso)
					<p><strong>{{$curso->nombre}}</strong></p>
				@endforeach
			</div>
		</div>
	</div>
</div>		



@endsection