@extends('layout')

@section('content')

<div class="container" id="salon_create">

	<div class="salon_create_div">
	
		<div class="salon_create_div_left">
			<div class="salon_create_left">
			<h3>Propriétés du Tournoi</h3>
			
			<form action="" method="POST">
				{{ csrf_field()  }}
				<p><label>Nom du Tournoi</label></p>
				<p><input type="text" name="name" value="{{ old('tournament_name') }}"></p>
				
				<p><label>Date du Tournoi</label></p>
				<p><input type="date" name="date" value="{{ old('date') }}"></p>
				
				<div id="input_text" style="display:none;">
					<p><label>Mot de passe</label></p>
					<p><input type="password" name="password"></p>
				</div>
				
				<div id="input_player" style="display:none;">
					<p><label>Participants</label></p>
					<p><input type="number"></p>
				</div>
				
				<input type="submit" value="Créer le salon">
			</form>
		</div>
		</div>
		
		<div class="tournoi_create_div_right">
			<div class="choix_des_cartes_div_titre">
				<h3>Choix des cartes</h3>
			</div>
			<div class="choix_des_cartes_div">
				<div class="carte">Carte 1</div>
				<div class="carte">Carte 2</div>
				<div class="carte">Carte 3</div>
				<div class="carte">Carte 4</div>
				<div class="carte">Carte 5</div>
				<div class="carte">Carte 6</div>
				<div class="carte">Carte 7</div>
				<div class="carte">Carte 8</div>
				<div class="carte">Carte 9</div>
				<div class="carte">Carte 10</div>
				<div class="carte">Carte 11</div>
				<div class="carte">Carte 12</div>
				<div class="carte">Carte 13</div>
				<div class="carte">Carte 14</div>
				<div class="carte">Carte 15</div>
			</div>
		</div>
		
	</div>
</div>

<script>

	function passe(){
		if(document.getElementById('selectId').selectedIndex == 0){
			document.getElementById('input_text').style.display = "none";
		}
		if(document.getElementById('selectId').selectedIndex == 1){
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

</script>
	
@endsection