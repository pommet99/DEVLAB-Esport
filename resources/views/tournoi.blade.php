@extends('layout')

@section('content')

<div class="container" id="tournoi">
	<button style="margin-top:220px; margin-left:25%;" class="button_tournoi" onclick="window.location='{{ url('tournoicreate') }}'">Créer un tournoi</button>
	<button class="button_tournoi" onclick="window.location='{{ url('tournoijoin') }}'">Rejoindre un tournoi</button>
	<br>
	<button style="margin-top:10px; margin-left:44.5%;" class="button_tournoi" onclick="window.location='{{ url('tournoisee') }}'">Voir les résultats</button>
</div>
	
@endsection