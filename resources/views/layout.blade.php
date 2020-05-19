<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>CTR Tool</title>

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
		<!-- Bootstrap only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

		<!-- Styles -->
		<style>

			html, body {
				font-family: Arial, Helvetica, sans-serif;
				margin: 0;
				background-image: url("<?php echo asset('storage/ctr_background.jpg'); ?>");
				background-size: cover;
				font-size: 14px;
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
				border-top-left-radius: 10px;
				border-top-right-radius: 10px;
				outline: 0;
				margin-top:7px;
				font-size: 14px;
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
		
			footer {
				margin-top:180px;
				position: absolute;
				width: 100%;
				height: 5%;
				background-color: black;
				line-height: 5%;
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
			opacity: 0.9;
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
			margin-left: 35%;
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
			width: 20%;
			height: 225px;
			background-color: black;
			display:inline-block;
			text-align:center;
			margin: 5px;
			opacity: 0.9;
			border-radius:20px;
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

		.Compte{
			background-color:black;
			width:30%;
			height:320px;
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

@media (min-width: 420px) {
.navbar {
	display: none;
}

}

@media (max-width: 420px) {
#header {
    display: none;
	}

html, body {
	font-family: Arial, Helvetica, sans-serif;
	background-image:none;
	background-color: cornflowerblue;
	font-size: 14px;
   }

.navbar{
    width:100%;
	height:50px;
	background-color: black;
}

.dropbtn {
  background-color: #18171B;
  color: white;
  border: none;
  cursor: pointer;
  height: 40px;
  width: 60px;
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
}

.dropdown-content a {
  color: white;
  text-decoration: none;
  display: block;
  padding:5px;
  text-align: center;
  height: 30px;
  width: 70px;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: orange;
}

#connexion{
	width:70%;
	margin-top:25%;
	margin-left:15%;
	}

#inscription{
	width:70%;
	margin-top:25%;
	margin-left:15%;
	}

.Compte{
	width:70%;
	height:340px;
	margin-top:30%;
	margin-left:15%;
	border-radius:20px;
    }

.tournoi_create_div{
	height: 100%;
	width: 70%;
	background-color: black;
	text-align: center;
	}

.tournoi_create_div_left{
	width:250px;
	height:400px;
	background-color: black;
	border-radius: 20px;
	padding:15px;
	float:none;
	}

.tournoi_create_div_right{
	width:20px;
	height:500px;
	background-color: black;
	border-radius: 20px;
	padding:15px;
	margin-left: 30px;
	float:none;
	margin-bottom:100px;
	}

.choix_des_cartes_div_titre{
   width:220px;
   margin:0;
   margin-left:-25px;
}

.all_salon_display{
    width: 50%;
    height: 230px;
    margin: 5px;
    opacity: 0.9;
    border-radius:20px;
}


}


	</style>
	</head>
	<header id="header">
		<div class="headerLeft">
			<button class="buttonNav" id="buttonNav1" onmouseover="newBorder1()" onmouseout="endNewBorder()" onclick="window.location='{{ url('compte') }}'">Compte</button>
			<button class="buttonNav" id="buttonNav2" onmouseover="newBorder2()" onmouseout="endNewBorder()" onclick="window.location='{{ url('tournoi') }}'">Tournoi</button>
		</div>
		<div class="headerRight">
			<button class="buttonNav" id="buttonNav3" onmouseover="newBorder3()" onmouseout="endNewBorder()" onclick="window.location='{{ url('connexion') }}'">Connexion</button>
			<button class="buttonNav" id="buttonNav4" onmouseover="newBorder4()" onmouseout="endNewBorder()" onclick="window.location='{{ url('inscription') }}'">Inscription</button>
		</div>
	</header>

	<div class="navbar">
	<div class="dropdown">
		<button class="dropbtn">Menu</button>
		<div class="dropdown-content">
			<a href="inscription">S'inscricre</a>
			<a href="compte">Compte</a>
			<a href="tournoi">Tournoi</a>
		</div>
	  </div>
	</div>
	<body>

		@yield('content')
		
	</body>

	<footer id="footer">
	</footer>

	
<script>

function newBorder1(){
  document.getElementById("header").style.borderColor = "lime"
  document.getElementById("footer").style.borderColor = "lime"
}

function newBorder2(){
  document.getElementById("header").style.borderColor = "cyan"
  document.getElementById("footer").style.borderColor = "cyan"
}

function newBorder3(){
  document.getElementById("header").style.borderColor = "orange"
  document.getElementById("footer").style.borderColor = "orange"
}

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