@extends('layout')

@section('content')

<style>

	.div_globale_tournoiunique{
		display: table;
		margin: auto;
		margin-top: 50px;
		width: 70%;
		height: 70vh;
		border: solid transparent 2px;
		background-color: rgba(0, 0, 0, 0.85);
		text-align:center;
		font-family: Arial;
		color: white;
		transition: 0.75s;
	}
	
	.div_globale_tournoiunique_left{
		display: table-cell;
		width: 50%;
		height: 100%;
		text-align: center;
		vertical-align: middle;
		//border: solid white 1px;
		border-right: solid white 1px;
	}
	
	.div_globale_tournoiunique_right{
		display: table-cell;
		width: 50%;
		height: 100%;
		text-align: center;
		vertical-align: middle;
		//border: solid white 1px;
	}
	
	.orange{
		color:orange;
	}
	
	.button_start{
		width: 120px;
		height: 40px;
		background-color : white;
		border: 0;
		transition: .25s;
	}
	
	.button_start:hover{
		transform: scale(1.1,1.1);
		background: linear-gradient(45deg, blue, magenta);
		color: white;
	}
	
	/*RESPONSIVE*/

	@media (max-width: 800px) {
		
		.div_globale_tournoiunique{
			display: table;
			width:  90%;
			height: 420px;
			background-color: black;
			margin: auto;
			margin-top: 17vh;
			color: white;
		}
			
		.div_globale_tournoiunique_left{
			display: table-cell;
			width: 240px;
			height: 350px;
			text-align: center;
			vertical-align: middle;
			border-right: solid white 1px;
		}
		
		.div_globale_tournoiunique_right{
			width: 240px;
			height: 350px;
			text-align: center;
			vertical-align: middle;
			overflow: auto;
		}
		
	}

</style>

<div class="div_globale_tournoiunique" id="tournoiuniquedivid">
	
	<div class="div_globale_tournoiunique_left">
		<h2>{{ $tournoi->nom }}</h2><br>
		<p>Admin  : <span class="orange">{{ $tournoi->admin }}</span></p>
		<p>Début  : <span class="orange">{{ $tournoi->date }}</span></p>
		<div>
			<p>Cartes selectionnées :</p>
			<p><span class="orange"> - - - - - </span></p>
			<p><span class="orange"> - - - - - </span></p>
			<p><span class="orange"> - - - - - </span></p>
			<p><span class="orange"> - - - - - </span></p>
			<p><span class="orange"> - - - - - </span></p>
		</div>
		<button class="button_start">Démarrer</button>
	</div>
	
	<div class="div_globale_tournoiunique_right">
		<h2>Liste des participants :</h2>
			@foreach($tournoi->utilisateurs as $utilisateur)
				<p><span class="orange">{{ $utilisateur->pseudo }}</span></p>
			@endforeach
	</div>

</div>

<script>
	
let color = ['red','yellow','orange','cyan','blue','lime','magenta'];
let oldcolor = undefined;
let oldcolorCheck = undefined;
	
	setInterval(function(){
		
	let randomColor = color[Math.floor(Math.random() * color.length)];
	oldcolor = randomColor;
		while (oldcolor === oldcolorCheck){
			randomColor = color[Math.floor(Math.random() * color.length)];
			oldcolor = randomColor;
		}
	document.getElementById('tournoiuniquedivid').style.borderColor = randomColor;
	document.getElementById('header').style.transition = '.75s';
	document.getElementById('header').style.borderColor = randomColor;
	document.getElementById('header2').style.transition = '.75s';
	document.getElementById('header2').style.borderColor = randomColor;
	document.getElementById('footer').style.transition = '.75s';
	document.getElementById('footer').style.borderColor = randomColor;
	oldcolorCheck = oldcolor;
	}, 2000);
	
</script>

@endsection