@extends('layout')

@section('content')

<style>

	.Compte{
		background-color:black;
		width:30%;
		height:300px;
		margin-top:200px;
		margin-left:35%;
		border-radius:20px;
		padding:10px;
		text-align: center;
		color:white;
		opacity: 0.9;
		font-family: Arial, Helvetica, sans-serif;
	}
	
	.button{
		background-color: white;
		text-decoration: none;
		color: black;
		border-radius:100px;
		padding:8px;
		transition: .25s;
		border: solid white 1px;
		width: 110px;
		font-size: 13px;
	}

	.button:hover{
		transform: scale(1.05,1.05);
		display: inline-block;
		background: linear-gradient(45deg, blue, magenta);
		color: white;
	}
	
	@media (max-width: 800px) {
	
		.Compte{
			margin: auto;
			margin-top: 20vh;
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

<div class="Compte">

	<h3>Modifier le pseudo :</h3>
	
	<form action="" method="POST">
	
	<b>Pseudo actuel : {{ Auth::user()->pseudo }}</b>
	
	{{ csrf_field()  }}
		@if($errors->has('pseudo'))
			<p style="color:red;">{{ $errors->first('pseudo') }}</p>
		@endif
		<br><br><br><p><label>Nouveau pseudo</label></p><p><input type="text" name="pseudo" value="{{ old('pseudo') }}"></p>
		
		<p><input type="submit" value="Modifier"></p>
	</form>

</div> 

@endsection