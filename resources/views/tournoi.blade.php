@extends('layout')

@section('content')

<style>

	.button_tournoi{
		height: 45px;
		line-height: 40px;
		width:  150px;
		transition: .25s;
		border: solid white 1px;
		background-color: whitesmoke;
		margin-left: 2px;
		margin-right: 2px;
	}
	
		.button_tournoi:hover{
			border: solid #18171B 1px; 
			animation: button_tournoi_anim 0.1s forwards;
			transform: scale(0.95,0.95);
		}
	
		@keyframes button_tournoi_anim{
			0%{background: linear-gradient(45deg, orange, yellow);}
			100%{background: linear-gradient(45deg, orange, yellow);}
		}

	.button_tournoi_div_1{
		margin-top: 35vh;
		text-align: center;
	}
	
	.button_tournoi_div_2{
		margin-top: 4px;
		text-align: center;
	}

</style>

<div class="container" id="tournoi">
	<div class="button_tournoi_div_1">
		<button class="button_tournoi" onclick="window.location='{{ url('tournoicreate') }}'">Créer un tournoi</button><!--
		--><button class="button_tournoi" onclick="window.location='{{ url('tournoijoin') }}'">Rejoindre un tournoi</button>
	</div>
	<div class="button_tournoi_div_2">
		<button class="button_tournoi" onclick="window.location='{{ url('tournoisee') }}'">Voir les résultats</button>
	</div>
</div>
	
@endsection