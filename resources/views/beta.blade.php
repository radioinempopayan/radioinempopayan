@extends('base')

@section('seccion')

	<h1>las cosas que raramente se me ocurren</h1>
	
	@foreach($trabajo as $item)
		<a href="#">{{$item}}</a><br>
	@endforeach
@endsection