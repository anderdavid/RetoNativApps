@extends('layout.app')

@section('sidebar')
    @parent

   
@endsection

@section('content')
	<!-- {{json_encode($top3)}} -->

	 
	<h1 class="text-primary">Top 3</h1>
	<p>Cursos con mas estudiantes inscritos en los ultimos tres meses</p>
	
	<ul class="list-group">
		@foreach ($top3 as $top)
			 <li class="list-group-item list-group-item-success">
			 	<strong>{{$top->nombre}}:    </strong>con {{$top->inscritos}} estudiantes inscritos en los ultimos tres meses
			 </li>
		@endforeach
	 
	</ul>
	
@endsection