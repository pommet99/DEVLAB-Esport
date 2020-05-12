@extends('layout')

@section('content')

<div class="container" id="tournoi">
	<button style="margin-top:220px; margin-left:18.5%;" class="button_tournoi" onclick="window.location='{{ url('tournoicreate') }}'">Créer un tournoi</button>
	<button class="button_tournoi" onclick="window.location='{{ url('tournoijoin') }}'">Rejoindre un tournoi</button>
</div>
	
@endsection