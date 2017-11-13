@extends('master')

@section('content')
	Recepti:<br>
	@foreach($recipes as $recipe)
	{{ $recipe->id }}
	{{ $recipe->name }}<br>
	@endforeach
	
	<br>Sastojci:<br>
	@foreach($ingredients as $ingredient)
	{{ $ingredient->id }}
	{{ $ingredient->name }}<br>
	@endforeach
@endsection