<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>CTR Tool</title>

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

		<!-- Styles -->
		<style>
			html, body {
				font-family: 'Nunito', sans-serif;
				margin: 0;
				background-image: url("<?php echo asset('storage/ctr_background.jpg'); ?>");
				background-size: cover;
			}
			header {
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
				border-color: orange;
				border-bottom-color: #3a3a3a;
				background-color: #3a3a3a;
			}
			#buttonNav2:hover{
				border-color: cyan;
				border-bottom-color: #3a3a3a;
				background-color: #3a3a3a;
			}
			#buttonNav3:hover{
				border-color: lime;
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
			
		.tournoi_create_div{
			margin: auto;
			margin-top:100px;
			border: solid black 3px;
			background-color: lightgrey;
			height: 500px;
			width: 70%;
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
			border: solid white 1px;
			height: 100px;
			line-height: 100px;
		}
		.all_salon_display{
			width: 30%;
			height: 300px;
			border: solid white 1px;
			background-color: 
			display:inline-block;
			text-align:center;
			margin: 5px;
		}

		#connexion{
		  text-align: center;
		  color:black;
		  background-color:lightgrey;
		  width:25%;
		  border: solid white 1px;
		  margin-top:12%;
		  margin-left:37%;
		  padding:10px;
		}

		#inscription{
		  text-align: center;
		  color:black;
		  background-color:lightgrey;
		  width:25%;
		  border: solid white 1px;
		  margin-top:12%;
		  margin-left:37%;
		  padding:10px;
		}

		.Compte{
			background-color:lightgrey;
			width:30%;
			height:330px;
			margin-top:200px;
			margin-left:35%;
			border-radius:20px;
			padding:10px;
			text-align: center;
		}

		.button{
			background-color: black;
			text-decoration: none;
			font-family: 'Times New Roman', Times, serif;
			color: white;
			border-radius:100px;
			padding:8px;
		}


/*RESPONSIVE*/
 
         



	</style>
	</head>
	<header id="header">
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
	<body>

		@yield('content')
		
	</body>
	<footer id="footer">
	</footer>
	
<script>

let getHeader = document.getElementById("header").style;
let getFooter = document.getElementById("footer").style;

function newBorder1(){
  getHeader.borderColor = "orange";
  getFooter.borderColor = "orange";
}

function newBorder2(){
  getHeader.borderColor = "cyan"
  getFooter.borderColor = "cyan"
}

function newBorder3(){
  getHeader.borderColor = "lime"
  getFooter.borderColor = "lime"
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