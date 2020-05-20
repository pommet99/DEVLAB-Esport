@extends('layout')

@section('content')

<div class="container" id="connexion"> <!--onmouseover="y()" onmouseout="x()"-->

	<h1>Connexion</h1>

	<form action="" method="POST">
	{{ csrf_field()  }}
		@if($errors->has('Email'))
			<p style="color:red;">{{ $errors->first('email') }}</p>
		@endif
		<p><label>Email</label></p><p><input type="email" name="email" value="{{ old('email') }}"></p>
		
		@if($errors->has('password'))
			<p style="color:red;">{{ $errors->first('password') }}</p>
		@endif
		<p><p><label>Mot de passe</label></p><p><input type="password" name="password"></p>
		
		<p><input type="submit" value="Connexion"></p>
	</form>

</div>

<script>
/*	
let color = ['red','pink','yellow','orange','cyan','blue','lime','magenta','purple'];
	
	function y(){
		let a = color[Math.floor(Math.random() * color.length)];
		document.getElementById('connexion').style.border = "solid 10px " + a;
		setInterval(function(){
		a = color[Math.floor(Math.random() * color.length)];
		document.getElementById('connexion').style.border = "solid 50px " + a;
		document.getElementById('header').style.transition = '0s';
		document.getElementById('header').style.backgroundColor = a;
		document.getElementById('footer').style.transition = '0s';
		document.getElementById('footer').style.backgroundColor = a;}, 1);
	}
	
	function x(){
		document.getElementById('connexion').style.border = "solid 3px white";
	}
*/
</script>
	
@endsection