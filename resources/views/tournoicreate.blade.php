@extends('layout')

@section('content')

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
				<h3 style="margin-left:35%">Choix des cartes</h3>
			</div>
			<div class="choix_des_cartes_div">
				<div class="carte">Crash Cove</div>
				<div class="carte">Mystery Caves</div>
				<div class="carte">Sewer Speedway</div>
				<div class="carte">Roo's Tubes</div>
				<div class="carte">Slide Coliseum</div>
				<div class="carte">Turbo Track</div>
				<div class="carte">Coco Park</div>
				<div class="carte">Tiger Temple</div>
				<div class="carte">Papu's Pyramid</div>
				<div class="carte">Dingo Canyon</div>
				<div class="carte">Polar Pass</div>
				<div class="carte">Tiny Arena</div>
				<div class="carte">Dragon Mines</div>
				<div class="carte">Blizzard Bluff</div>
				<div class="carte">Hot Air Skyway</div>
				<div class="carte">Cortex Castle</div>
				<div class="carte">N. Gin Labs</div>
				<div class="carte">Oxide Station</div>

			</div>
		</div>
	</div>
</div>

<script>
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