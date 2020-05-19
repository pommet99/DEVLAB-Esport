@extends('layout')

@section('content')

<style>
	
	.table_class{
			margin: auto;
			width: 80%;
			text-align: center;
			background-color: #18171B;
			box-shadow: 4px 4px 4px gray;
			margin-top: 100px;
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
	
	.tournois_titre{
		color: white;
		text-align: center;
		background-color: #18171B;
		width: 400px;
		margin: auto;
		margin-top: 30px;
	}
	
</style>

	
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