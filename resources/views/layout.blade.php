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
			#buttonNav4:hover{
				border-color: crimson;
				border-bottom-color: #3a3a3a;
				background-color: #3a3a3a;
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
			border: solid white 3px;
			background-color: rgba(180, 180, 180, 1);
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
<<<<<<< Updated upstream
			background-color: rgba(180, 180, 180, 1);
=======
			background-color: lightgrey;
>>>>>>> Stashed changes
			display:inline-block;
			text-align:center;
			margin: 5px;
		}

		#connexion{
		  text-align: center;
<<<<<<< Updated upstream
		  color:black;
		  background-color:rgba(180, 180, 180, 1);
=======
		  background-color:black;
		  color:white;
>>>>>>> Stashed changes
		  width:25%;
		  margin-top:12%;
		  margin-left:37%;
		  padding:10px;
		  opacity: 0.9;
		  border-radius: 20px;
		}

		#inscription{
		  text-align: center;
<<<<<<< Updated upstream
		  color:black;
		  background-color:rgba(180, 180, 180, 1);
=======
		  background-color:black;
		  color:white;
>>>>>>> Stashed changes
		  width:25%;
		  margin-top:12%;
		  margin-left:37%;
		  padding:10px;
		  opacity: 0.9;
		  border-radius: 20px;
		}

<<<<<<< Updated upstream
=======
		.Compte{
			background-color:black;
			width:30%;
			height:330px;
			margin-top:200px;
			margin-left:35%;
			border-radius:20px;
			padding:10px;
			text-align: center;
			color:white;
			opacity: 0.9;
			font-family: Arial, Helvetica, sans-serif;
		}

		h3{
			color:orange;
		}

		h1{
			font-family:Bangers;
		}


		.button{
			background-color: white;
			text-decoration: none;
			color: black;
			border-radius:100px;
			padding:8px;
		}

		.button:hover{
			transform: scale(0.9,0.9);
			display: inline-block; 
		}

		label{
			color:orange;
		}



/*RESPONSIVE*/

@media (max-width: 576px) {
	html, body {
				display: none;
			}
}



>>>>>>> Stashed changes
	</style>
	</head>
	<header id="header">
		<div class="headerLeft">
			<button class="buttonNav" id="buttonNav1" onmouseover="newBorder1()" onmouseout="endNewBorder()" onclick="window.location='{{ url('compte') }}'">Mon compte</button>
			<button class="buttonNav" id="buttonNav2" onmouseover="newBorder2()" onmouseout="endNewBorder()" onclick="window.location='{{ url('tournoi') }}'">Tournoi</button>
		</div>
		<div class="headerRight">
			<button class="buttonNav" id="buttonNav3" onmouseover="newBorder3()" onmouseout="endNewBorder()" onclick="window.location='{{ url('connexion') }}'">Connexion</button>
			<button class="buttonNav" id="buttonNav4" onmouseover="newBorder4()" onmouseout="endNewBorder()" onclick="window.location='{{ url('inscription') }}'">Inscription</button>
		</div>
	</header>
	<body>

		@yield('content')
		
	</body>
	<footer id="footer">
	</footer>
	
<script>

function newBorder1(){
<<<<<<< Updated upstream
  document.getElementById("header").style.borderColor = "orange"
  document.getElementById("footer").style.borderColor = "orange"
=======
  getHeader.borderColor = "lime";
  getFooter.borderColor = "lime";
>>>>>>> Stashed changes
}

function newBorder2(){
  document.getElementById("header").style.borderColor = "cyan"
  document.getElementById("footer").style.borderColor = "cyan"
}

<<<<<<< Updated upstream
function newBorder3(){
  document.getElementById("header").style.borderColor = "lime"
  document.getElementById("footer").style.borderColor = "lime"
}

=======
>>>>>>> Stashed changes
function newBorder4(){
  document.getElementById("header").style.borderColor = "crimson"
  document.getElementById("footer").style.borderColor = "crimson"
}

function endNewBorder(){
  document.getElementById("header").style.borderColor = "black"
  document.getElementById("footer").style.borderColor = "black"
}

</script>

</html>