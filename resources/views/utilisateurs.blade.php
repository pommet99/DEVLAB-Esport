@extends('layout')

@section('content')

<div style="color:white;text-align: center;">
	<h1>Les utilisateurs</h1>
	
	<ul style="list-style: none;">
		@foreach($utilisateurs as $utilisateur)
			<li>{{ $utilisateur->pseudo }}</li>
		@endforeach
	</ul>
</div>
	
@endsection