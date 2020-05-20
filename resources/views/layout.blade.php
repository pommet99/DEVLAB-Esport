<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>CTR Tool</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">

	<!-- Styles -->
	<style>
		html, body {
			font-family: Arial, Helvetica, sans-serif;
			margin: 0;
			background-image: url("<?php echo asset('storage/ctr_background.jpg'); ?>");
			background-size: cover;
			font-size: 16px;
		}
		.header {
			width: 100%;
			height: 48px;
			background-color: black;
			line-height: 48px;
			border-bottom: solid black 2px;
			transition: .5s;
		}
		.headerLeft{
			float: left;
			text-align: center;
			margin-left: 20px;
		}
		.headerRight{
			float: right;
			text-align: center;
			margin-right: 40px;
		}
		.user_connecte{
			display: inline-block;
			color: orange;
			width:  100px;
			text-align: center;
		}
		.buttonNav{
			height: 40px;
			border: solid transparent 2px;
			line-height: 40px;
			width:  100px;
			transition: .25s;
			background-color: transparent;
			color: white;
			margin-top: 10px;
			border-top-left-radius: 10px;
			border-top-right-radius: 10px;
			outline: 0;
		}
		#buttonNav1:hover{
			border-color: lime;
			border-bottom-color: #3a3a3a;
			background-color: #3a3a3a;
		}
		#buttonNav2:hover{
			border-color: cyan;
			border-bottom-color: #3a3a3a;
			background-color: #3a3a3a;
		}
		#buttonNav3:hover{
			border-color: orange;
			border-bottom-color: #3a3a3a;
			background-color: #3a3a3a;
		}
		#buttonNav4:hover{
			border-color: crimson;
			border-bottom-color: #3a3a3a;
			background-color: #3a3a3a;
		}
		html .button_deconnexion{
			height: 40px;
			border: solid transparent 2px;
			line-height: 40px;
			width:  100px;
			transition: .25s;
			background-color: transparent;
			color: white;
			margin-top: 10px;
			border-top-left-radius: 10px;
			border-top-right-radius: 10px;
			outline: 0;
		}
		.button_deconnexion:hover{
			background-color: crimson;
		}

		footer {
			margin-top:180px;
			position: absolute;
			width: 100%;
			height: 48px;
			background-color: black;
			line-height: 48px;
			border-top: solid black 2px;
			transition: .5s;
			bottom: 0;
		}
			
		.button_tournoi{
			height: 45px;
			line-height: 40px;
			width:  150px;
			transition: .25s;
			border: solid white 1px;
			background-color: whitesmoke;
		}
		@keyframes button_nav_anim{
			0%{background: linear-gradient(45deg, orange, yellow);}
			100%{background: linear-gradient(45deg, orange, yellow);}
		}
		.button_tournoi:hover{
			border: solid #18171B 1px; 
			animation: button_nav_anim 0.1s forwards;
			transform: scale(0.95,0.95);
		}
			
		.tournoi_create_div{
			margin: auto;
			margin-top:100px;
			background-color: black;
			height: 500px;
			width: 70%;
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
		.choix_des_cartes_div_titre{
			margin: auto;
			margin-top: 10px;
			height: 60px;
			width: calc(100% - 20px);
		}
		.choix_des_cartes_div{
			margin: auto;
			height: 387px;
			margin-top: 10px;
			width: calc(100% - 20px);
			text-align: center;
			overflow: auto;
		}
		.carte{
			display: inline-block;
			margin: 4px;
			width: 30%;
			color: white;
			border: solid white 1px;
			height: 100px;
			line-height: 100px;
		}
		
		.all_salon_display{
			width: 30%;
			height: 300px;
			border: solid white 1px;
			background-color: black;
			display:inline-block;
			text-align:center;
			margin: 5px;
		}
		#connexion{
		  text-align: center;
		  background-color:black;
		  color:white;
		  width:25%;
		  margin-top:12%;
		  margin-left:37%;
		  padding:10px;
		  opacity: 0.9;
		  border-radius: 20px;
		}

		#inscription{
			text-align: center;
			background-color:black;
			color:white;
			width:25%;
			margin-top:12%;
			margin-left:37%;
			padding:10px;
			opacity: 0.9;
			border-radius: 20px;
		}
		
		h3{
			color:orange;
		}
		h1{
			font-family:Bangers;
		}
		
		label{
			color:orange;
		}
		
		.navbar{
			display: none;
		}
		
		/*RESPONSIVE*/

		@media (max-width: 800px) {
			
			html, body {
				font-family: Arial, Helvetica, sans-serif;
				background-image:none;
				background-color:  #3a3a3a;
				font-size: 14px;
			}
			
			.navbar{
				display: block;
			}
			
			.header {
				display: none;
			}
			
			.navbar{
				width:100%;
				height:50px;
				background-color: black;
				line-height: 50px;
				border-bottom: solid black 2px;
			}
			.dropbtn {
				background-color: #18171B;
				color: white;
				border: none;
				cursor: pointer;
				height: 40px;
				width: 60px;
				margin-left: 20px;
				transition: .25s;
			}
			.dropdown {
				position: relative;
				display: inline-block;
			}
			.dropdown-content {
				display: none;
				position: absolute;
				background-color: black;
				width: 80px;
				z-index: 1;
				margin-left: 10px;
				border: solid orange 1px;
			}
			.dropdown-content a {
				color: white;
				text-decoration: none;
				display: block;
				padding:5px;
				text-align: center;
				height: 30px;
				width: 70px;
				line-height: 30px;
				transition: .25s;
			}
			
			.dropdown-content a:hover {
				color: orange;
				transform: scale(1.2,1.2);
			}
			
			.dropdown:hover .dropdown-content {
				display: block;
			}
			.dropdown:hover .dropbtn {
				background-color: orange;
				color: black;
			}	
			html .button_deconnexion{
				height: 40px;
				width:  100px;
				transition: .25s;
				border-radius: 0;
				line-height: 0;
				color: white;
				background-color: crimson;
				border: solid crimson 1px;
			}
			.button_deconnexion:hover{
				background-color: white;
				color: crimson;
				border-color: crimson;
			}
			
			#connexion{
				margin: auto;
				margin-top: 25vh;
				text-align: center;
				background-color:black;
				color:white;
				width:300px;
				padding:10px;
				opacity: 0.9;
				border-radius: 20px;
			}
			
			#inscription{
				margin: auto;
				margin-top: 15vh;
				text-align: center;
				background-color:black;
				color:white;
				width:300px;
				padding:10px;
				opacity: 0.9;
				border-radius: 20px;
			}

		}

	</style>

	</head>
	
	<header class="header" id="header">
		<div class="headerLeft">
			<button class="buttonNav" id="buttonNav1" onmouseover="newBorder1()" onmouseout="endNewBorder()" onclick="window.location='{{ url('compte') }}'">Mon compte</button>
			<button class="buttonNav" id="buttonNav2" onmouseover="newBorder2()" onmouseout="endNewBorder()" onclick="window.location='{{ url('tournoi') }}'">Tournoi</button>
		</div>
		<div class="headerRight">
			@if(Auth::check()) 
				<div class="user_connecte"><b>{{ Auth::user()->pseudo }}</b></div>
				<button class="button_deconnexion" onmouseover="newBorder4()" onmouseout="endNewBorder()" onclick="window.location='{{ url('deconnexion') }}'">Déconnexion</button>
			@else
				<button class="buttonNav" id="buttonNav3" onmouseover="newBorder3()" onmouseout="endNewBorder()" onclick="window.location='{{ url('connexion') }}'">Connexion</button>
				<button class="buttonNav" id="buttonNav4" onmouseover="newBorder4()" onmouseout="endNewBorder()" onclick="window.location='{{ url('inscription') }}'">Inscription</button>
			@endif
		</div>
	</header>
	
	<div class="navbar" id="header2">
		<div class="dropdown">
			<button class="dropbtn">Menu</button>
			<div class="dropdown-content">
				@if(Auth::check()) 
				@else
					<a href="inscription">S'inscricre</a>
					<a href="connexion">Connexion</a>
				@endif
				<a href="compte">Compte</a>
				<a href="tournoi">Tournoi</a>
			</div>
		</div>
		@if(Auth::check()) 
			<div class="user_connecte"><b>{{ Auth::user()->pseudo }}</b></div>
			<button class="button_deconnexion" onclick="window.location='{{ url('deconnexion') }}'">Déconnexion</button>
		@endif
	</div>
	
	<body>

		@yield('content')
		
	</body>
	<footer id="footer">
	</footer>
	
<script>

let getHeader = document.getElementById("header").style;
let getFooter = document.getElementById("footer").style;

function newBorder1(){
  getHeader.borderColor = "lime";
  getFooter.borderColor = "lime";
}

function newBorder2(){
  getHeader.borderColor = "cyan"
  getFooter.borderColor = "cyan"
}

function newBorder3(){
  getHeader.borderColor = "orange"
  getFooter.borderColor = "orange"
}

function newBorder4(){
  getHeader.borderColor = "crimson"
  getFooter.borderColor = "crimson"
}

function endNewBorder(){
  getHeader.borderColor = "black"
  getFooter.borderColor = "black"
}

</script>

</html>