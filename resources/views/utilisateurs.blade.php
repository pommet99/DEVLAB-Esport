@extends('layout')

@section('content')

<style>

	.user_titre{
		color: white;
		text-align: center;
		background-color: #18171B;
		width: 400px;
		margin: auto;
		margin-top: 30px;
	}
	
	.table_class{
			margin: auto;
			width: 80%;
			text-align: center;
			background-color: #18171B;
			box-shadow: 4px 4px 4px #18171B;
			margin-top: 30px;
			font-family: Arial;
		}
	th{
		width : calc(80% / 6);
		height: 50px;
		background-color: #18171B;
		color: white;
	}
	td{
		width : calc(80% / 6);
		height: 50px;
		background-color: white;
	}
	
	.tableBgOrange{
		background: linear-gradient(45deg, orange, yellow);
	}
	
		/*RESPONSIVE*/

	@media (max-width: 800px) {
		
		.user_titre{
			color: white;
			text-align: center;
			background-color: transparent;
			width: auto;
			margin: auto;
			margin-top: 30px;
		}
		
	}
</style>

<h1 class="user_titre">Liste des utilisateurs</h1>

@if (!empty($utilisateurs))
	<table class="table_class">
		<tr>
			<th>Email</th>
			<th>Pseudo</th>
		<tr>
		@foreach($utilisateurs as $utilisateur)
		<tr>
			<td class="tableBgOrange">{{ $utilisateur->email }}</td>
			<td>{{ $utilisateur->pseudo }}</td>
		<tr>
		@endforeach
	</table>
@else
	<p>Il n'y a aucun utilisateur pour le moment !</p>
@endif
	
@endsection