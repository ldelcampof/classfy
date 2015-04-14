@extends('layout.user')
@section('content')
	<section class="forms">
		{!! Form::open(['method'=>'POST','url'=>'/insert']) !!}
			<h2>Registro de usuario</h2>
			<input type="text" name="name" value="" placeholder="Nombre">
			{!! $errors->first('name','<p class="error">:message</p>') !!}
			<input type="email" name="email" value="" placeholder="Correo electrónico">
			{!! $errors->first('email','<p class="error">:message</p>') !!}
			<input type="submit" name="" value="Registrar">
		{!! Form::close() !!}
	</section>
@endsection