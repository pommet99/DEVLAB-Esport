@extends('layout')

@section('content')

<style>

	.cartes_div{
		display: table;
		width:  600px;
		height: 500px;
		background-color: black;
		margin: auto;
		margin-top: 100px;
		color: white;
	}
	
	.cartes_ajout_div{
		display: table-cell;
		width: 50%;
		height: 100%;
		text-align: center;
		vertical-align: middle;
		border: solid white 1px;
		border-right: 0px;
	}
	
	.cartes_liste_div_2{
		display: table-cell;
		width: 50%;
		height: 100%;
		border: solid white 1px;
		text-align: center;
		vertical-align: middle;
	}
	
	.delete_button{
		margin: auto;
		color: white;
		width: 120px;
		height: 35px;
		background-color: crimson;
		border: solid crimson 1px;
		line-height: 35px;
		transition: .25s;
	}
	
	.delete_button:hover{
		transform: scale(0.9,0.9);
		background-color: white;
		color: crimson;
	}
	
	/*RESPONSIVE*/

	@media (max-width: 800px) {
		
		.cartes_div{
			display: table;
			width:  90%;
			height: 300px;
			background-color: black;
			margin: auto;
			margin-top: 20vh;
			color: white;
		}
			
		.cartes_ajout_div{
			display: table-cell;
			width: 240px;
			height: 300px;
			text-align: center;
			vertical-align: middle;
			border: solid white 1px;
			border-right: 0px;
		}
		
		.cartes_liste_div{
			width: 240px;
			height: 300px;
			border: solid white 1px;
			text-align: center;
			vertical-align: middle;
			overflow: auto;
		}
		
	}
	
</style>

<div class="cartes_div">

	<div class="cartes_ajout_div">
	
		<h2>Modifier une carte</h2>
	
		<form action="" method="POST">
		{{ csrf_field()  }}
			@if($errors->has('Nom'))
				<p style="color:red;">{{ $errors->first('nom') }}</p>
			@endif
			<p><label>Nom</label></p><p><input type="text" name="nom"></p>
			<p><input type="submit" value="Modifier Carte"></p>
		</form>
		<button class="delete_button" onclick="window.location='{{ action('CartesController@destroy', ['id' => $carte->id]) }}'">Supprimer</button>
	</div>
	
	<div class="cartes_liste_div_2">
		<div>
			<p>{{ $carte->nom }}</p>
		</div>
	</div>
	
</div>

@endsection