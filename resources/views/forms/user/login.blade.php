@extends('layout.user')
@section('content')
	<section class="forms">
		{!! Form::open(['method'=>'POST','url'=>'/authenticate']) !!}
			<h2>Inicio de sesión</h2>
			<input type="email" name="email" value="" placeholder="Correo electrónico">
			{!! $errors->first('email','<p class="error">:message</p>') !!}
			<input type="password" name="password" value="" placeholder="Password">
			<input type="submit" name="" value="Ingresar">
		{!! Form::close() !!}
	</section>
@endsection