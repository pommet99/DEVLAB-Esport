@extends('layout')

@section('content')

<style>
	
	.all_salon_display{
		width: 30%;
		height: 300px;
		border: solid white 1px;
		background-color: rgba(0, 0, 0, 0.85);
		display:inline-block;
		text-align:center;
		margin: 5px;
		font-family: Arial;
	}
	
	h1, .join_tournoi_titre{
		color: white;
		margin: auto;
		text-align: center;
		margin-top: 30px;
		background-color: rgba(0, 0, 0, 0.85);
		width: 400px;
		padding: 10px;
	}

	/*RESPONSIVE*/

	@media (max-width: 800px) {
		
		.all_salon_display{
			width: 45%;
			height: 230px;
		}
		
		h1, .join_tournoi_titre{
			color: white;
			margin: auto;
			text-align: center;
			margin-top: 30px;
			background-color: transparent;
			width: 400px;
			padding: 10px;
		}

	}
	
</style>

<div style="color:white;text-align: center;">

	<h1 class="join_tournoi_titre">Rejoindre un tournoi</h1>
	<!--foreach-->
	@if(!empty($tournois))
		@foreach($tournois as $tournoi)
			<div class="all_salon_display">
				<h3><span style="color:orange;">{{ $tournoi->nom }}</span></h3>
				<p>Admin: <span style="color:orange;">{{ $tournoi->admin }}<span></p>
				<p>Nombre d'incrits : <span style="color:orange;"><span> / 8</p>
				<p>Date : <span style="color:orange;">{{ $tournoi->date }}<span></p>
				<p><button class="button_salon" onclick="window.location='{{ url('tournoiunique/'.$tournoi->id) }}'" style="margin-top: 30px;">Rejoindre</button></p>
			</div>
		@endforeach
	@else
		<p>Il n'y a aucun tournoi pour le moment !</p>
	@endif
</div>
	
@endsection