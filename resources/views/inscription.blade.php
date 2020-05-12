@extends('layout')

@section('content')

<div class="container" id="inscription">

	<h1>Inscription</h1>

	<form action="" method="POST">
	{{ csrf_field()  }}
		@if($errors->has('pseudo'))
			<p style="color:red;">{{ $errors->first('pseudo') }}</p>
		@endif
		<p><label>Pseudo</label></p><p><input type="text" name="pseudo" value="{{ old('pseudo') }}"></p>
		
		@if($errors->has('password'))
			<p style="color:red;">{{ $errors->first('password') }}</p>
		@endif
		<p><p><label>Mot de passe</label></p><p><input type="password" name="password"></p>
		
		@if($errors->has('password_confirmation'))
			<p style="color:red;">{{ $errors->first('password_confirmation') }}</p>
		@endif
		<p><p><label>Confirmation mot de passe</label></p><p><input type="password" name="password_confirmation"></p>
		
		<p><input type="submit" value="Inscription"></p>
	</form>
</div>
	
@endsection