@extends('layout')

@section('content')

<div class="container" id="connexion">	

	<h1>Connexion</h1>

	<form action="" method="POST">
	{{ csrf_field()  }}
		@if($errors->has('pseudo'))
			<p style="color:red;">{{ $errors->first('name') }}</p>
		@endif
		<p><label>Pseudo</label></p><p><input type="text" name="name" value="{{ old('name') }}"></p>
		
		@if($errors->has('password'))
			<p style="color:red;">{{ $errors->first('password') }}</p>
		@endif
		<p><p><label>Mot de passe</label></p><p><input type="password" name="password"></p>
		
		<p><input type="submit" value="Connexion"></p>
	</form>

</div>
	
@endsection