@extends('layout')

@section('content')

<style>
	
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
	
	h1, .tournois_titre{
		color: white;
		margin: auto;
		text-align: center;
		margin-top: 30px;
		background-color: rgba(0, 0, 0, 0.85);
		width: 400px;
		padding: 10px;
	}
	
	@media (max-width: 800px) {
		
		h1, .tournois_titre{
			color: white;
			text-align: center;
			background-color: transparent;
			width: auto;
			margin: auto;
			margin-top: 30px;
		}
		
	}
	
</style>

	<h1 class="tournois_titre">Liste des Tounois achevés</h1>
	
	@if(!empty($tournois))
		<table class="table_class">
			<tr>
				<th>Tournois</th>
				<th>Date</th>
				<th>Vainqueur</th>
			</tr>
			@foreach($tournois as $tournoi)
			<tr>
				<td>{{ $tournoi->nom }}</td>
				<td>{{ $tournoi->date }}</td>
				<td class="tableBgOrange">-</td>
			<tr>
			@endforeach
		</table>
	@else
		<p>Il n'y a aucun tournoi achevé pour le moment !</p>
	@endif
	
@endsection