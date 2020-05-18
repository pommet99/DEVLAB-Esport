@extends('layout')

@section('content')

<<<<<<< Updated upstream
<div style="text-align: center;color: white;">	
	<h1>Votre compte</h1>
	<a>lien vers Twich</a>
	<a href="/deconnexion">Déconnexion</a>
<div>
	
=======
<div class="Compte">
		<h3>Données Personelles :</h3>
		<div class="perso">
		<b><a>Pseudo:</a> {{ Auth::user()->pseudo }}</b>
		<br><br>
		<b><a>Courielle:</a> {{ Auth::user()->email }}</b>
		<br>
	</div>
	<div class="tournoi">
		<h3>Tournoi :</h3>
		@if(!empty($utilisateurs->tournoi_id))
			<b> Vous participez au {{$tournois->nom}} le {{$tournois->date_tournoi}}</b>	
		@else
			<b> Vous ne participer pas à un tournoi </b>	
		@endif
	</div>
	<div class="twitch">
		<h3>Twitch</h3>
		<a href="https://www.twitch.tv/directory/game/Crash%20Team%20Racing%3A%20Nitro%20Fueled" class="button">Cliquez-ici</a>
	</div>
</div> 

>>>>>>> Stashed changes
@endsection