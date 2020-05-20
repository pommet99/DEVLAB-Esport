@extends('layout')

@section('content')

<style>

	@media (max-width: 800px) {
			
		.tournoi_create_div{
			margin: auto;
			margin-top:100px;
			background-color: black;
			height: 370px;
			width: 95%;
			border-radius:20px;
		}
		.tournoi_create_div_left{
			float: left;
			height: 480px;
			margin: 10px;
			width: calc(50% - 17.5px);
		}
		.tournoi_create_div_right{
			float: right;
			height: 480px;
			margin: 10px;
			margin-left: 0;
			width: calc(50% - 17.5px);
		}
		.tournoi_create_left{
			margin-top:50px;
			text-align: center;
		}
		
		.carte{
			display: inline-block;
			margin: 4px;
			width: 40%;
			color: white;
			border: solid white 1px;
			height: 100px;
			line-height: 100px;
		}
		
	}

</style>

<div class="container" id="tournoi_create">
	<div class="tournoi_create_div">
		<div class="tournoi_create_div_left">
			<div class="tournoi_create_left">
				<h3>Propriétés du Tournoi</h3>
				
				<form action="" method="POST">
				{{ csrf_field()  }}
					@if($errors->has('nom'))
						<p style="color:red;">{{ $errors->first('nom') }}</p>
					@endif
					<p><label>Nom</label></p><p><input type="text" name="nom" value="{{ old('nom') }}"></p>
					
					@if($errors->has('date'))
						<p style="color:red;">{{ $errors->first('date') }}</p>
					@endif
					<p><label>Date</label></p><p><input type="date" name="date" value="{{ old('date') }}"></p>
	
					@if($errors->has('password'))
						<p style="color:red;">{{ $errors->first('password') }}</p>
					@endif
					<div id="input_text">
						<p><label>Mot de passe</label></p><p><input type="password" name="password"></p>
					</div>
					
					<!--<div id="input_player">
						<p><label>Participants</label></p><p><input type="number"></p>
					</div>-->
					
					<input type="submit" value="Créer Le Tournoi">
				</form>
			</div>
		</div>
		
		<div class="tournoi_create_div_right">
			<div class="choix_des_cartes_div_titre">
				<h3 style="text-align: center;">Choix des cartes</h3>
			</div>
			<div class="choix_des_cartes_div">

				@if(!empty($cartes))
					@foreach($cartes as $carte)<div class="carte" onclick="carteSelection(this)"><span style="user-select: none;">{{ $carte->nom }}</span></div>@endforeach
				@else
					<p>Il n'y a aucune carte pour le moment !</p>
				@endif

			</div>
		</div>
	</div>
</div>

<script>

function carteSelection(selection){

	if (selection.style.borderColor === "lime"){
		selection.style.borderColor = "white";
	}

	else {
		selection.style.borderColor = "lime";
	}
}

/*
	function passe(){
		if(document.getElementById('selectId').selectedIndex == 0){
			document.getElementById('input_text').style.display = "none";
		}
		else if(document.getElementById('selectId').selectedIndex == 1){
			document.getElementById('input_text').style.display = "block";
		}
	}
	
	function perso(){
		if(document.getElementById('participants').selectedIndex == 3){
			document.getElementById('input_player').style.display = "block";
		}
		else{
			document.getElementById('input_player').style.display = "none";
		}
	}
*/
</script>
	
@endsection