@extends('layout')

@section('content')

<div style="color:white;text-align: center;">
	<h1>Les utilisateurs</h1>
	
	<ul style="list-style: none;">
		@foreach($users as $users)
			<li>{{ $users->pseudo }}</li>
		@endforeach
	</ul>
</div>
	
@endsection