@extends('layout')

@section('content')

<div class="container" id="connexion">	

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
	
@endsection