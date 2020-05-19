@extends('layout')

@section('content')

<div style="color:white;text-align: center;margin-top:12%;" class="tournoijoin">

	<!--foreach-->
	@if(!empty($tournois))
		@foreach($tournois as $tournoi)
			<div class="all_salon_display">
				<h3 style="margin-top:10px;"><span style="color:orange;">{{ $tournoi->nom }}</span></h3>
				<p>Admin: <span style="color:orange;">-<span></p>
				<p>Nombre d'incrits : <span style="color:orange;">-<span> / 8</p>
				<p>Date : <span style="color:orange;">{{ $tournoi->date }}<span></p>
				<p><button class="button_salon" style="margin-top: 30px;">Rejoindre</button></p>
			</div>
		@endforeach
	@else
		<p>Il n'y a aucun tournoi pour le moment !</p>
	@endif
</div>
	
@endsection