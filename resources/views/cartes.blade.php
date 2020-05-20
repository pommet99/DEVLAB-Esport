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
	
	.cartes_liste_div{
		width: 100%;
		height: 500px;
		border: solid white 1px;
		text-align: center;
		vertical-align: middle;
		overflow: auto;
	}
	
	.table_class{
			margin: auto;
			width: 80%;
			text-align: center;
			background-color: #18171B;
			margin-top: 30px;
			font-family: Arial;
		}
	td{
		width : calc(80% / 6);
		height: 30px;
		background-color: white;
		color: black;
		border: solid white 1px;
		transition: 0.15s;
	}
	
	td:hover{
		transform: scale(1.1,1.1);
	}
	
	.tableBgOrange{
		background: linear-gradient(45deg, orange, yellow);
	}
	
	.a_carte{
		text-decoration: none;
		color: black;
	}
	
	.div_td{
		height:100%;
		width:100%;
		line-height: 200%;
		overflow: auto;
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
			width: 50%;
			height: 300px;
			text-align: center;
			vertical-align: middle;
			border: solid white 1px;
			border-right: 0px;
		}
		
		.cartes_liste_div{
			width: 100%;
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
	
		<h2>Ajouter une carte</h2>
	
		<form action="" method="POST">
		{{ csrf_field()  }}
			@if($errors->has('Nom'))
				<p style="color:red;">{{ $errors->first('nom') }}</p>
			@endif
			<p><label>Nom</label></p><p><input type="text" name="nom"></p>
			
			<p><input type="submit" value="Ajouter Carte"></p>
		</form>
	
	</div>
	
	<div class="cartes_liste_div">

		<h2>Liste des cartes</h2>
		
		@if(!empty($cartes))
			<table class="table_class">
				@foreach($cartes as $carte)
				<tr>
					<td id="redirectCarte" class="tableBgOrange"><a class="a_carte" href="{{ url('carteedit/'.$carte->id) }}"><div class="div_td">{{ $carte->nom }}</div></a></td>
				</tr>
				@endforeach
			</table>
		@else
			<p>Il n'y a aucune carte pour le moment !</p>
		@endif
	
	</div>
	
</div>

@endsection
