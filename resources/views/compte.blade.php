@extends('layout')

@section('content')

<style>

	.Compte{
		background-color:black;
		width:30%;
		height:320px;
		margin-top:200px;
		margin-left:35%;
		border-radius:20px;
		padding:10px;
		text-align: center;
		color:white;
		opacity: 0.9;
		font-family: Arial, Helvetica, sans-serif;
	}
	
	.button{
		background-color: white;
		text-decoration: none;
		color: black;
		border-radius:100px;
		padding:8px;
		transition: .25s;
		border: solid white 1px;
		width: 110px;
		font-size: 13px;
	}

	.button:hover{
		transform: scale(1.05,1.05);
		display: inline-block;
		background: linear-gradient(45deg, blue, magenta);
		color: white;
	}
	
	/*RESPONSIVE*/

	@media (max-width: 800px) {
	
		.Compte{
			margin: auto;
			margin-top: 20vh;
			text-align: center;
			background-color:black;
			color:white;
			width:300px;
			padding:10px;
			opacity: 0.9;
			border-radius: 20px;
		}
	}

</style>

<div class="Compte">

	<h3>Données Personelles :</h3>
	
	<div class="perso">
		<b>Pseudo : {{ Auth::user()->pseudo }}</b> - 
		<b>Email : {{ Auth::user()->email }}</b><br><br>
		<button onclick="window.location='{{ url('compteedit/'.Auth::user()->id) }}'">Editer</button>
	</div>

	<div class="tournoi">
		<h3>Tournoi :</h3>
		@if(!empty($tournois))
			<b>Vous participez au : {{$tournois->nom}}
			<br>Date du tournoi : {{$tournois->date}}</b>
		@else
			<b>Vous ne participer à aucun tournoi</b>	
		@endif
	</div>
	<br>
	<div class="twitch">
		<h3>Voir sur twitch :</h3>
		<button onclick="location.href='https://www.twitch.tv/directory/game/Crash%20Team%20Racing%3A%20Nitro%20Fueled';" value="go twitch" class="button"><b>Cliquez-ici</b></button>
	</div>
</div> 

@endsection