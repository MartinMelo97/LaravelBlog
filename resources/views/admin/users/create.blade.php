@extends('admin.templates.main')

@section('title')
	Crear usuarios
@endsection

@section('content')

	

	<a href="{{ route('admin.users.index')}}" class="btn btn-info">Ver usuarios</a>
	<br><br>
	{!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}
		{{ csrf_field() }}
		<div class="form-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name',null, ['class'=>'form-control', 'required', 'placeholder'=>'Nombre Completo'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Correo Electrónico') !!}
			{!! Form::email('email',null, ['class'=>'form-control', 'required', 'placeholder'=>'Correo Electrónico'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('password', 'Contraseña') !!}
			{!! Form::password('password', ['class'=>'form-control', 'required', 'placeholder'=>'*********'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('type', 'Tipo de Usuario') !!}
			{!! Form::select('type',[''=>'Seleccione un rol','member'=>'Miembro' , 'admin'=>'Administrador'],null,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Registrarse',['class'=>'btn btn-primary', 'required', 'placeholder'=>'Nombre Completo'])!!}
		</div>
	{!! Form::close() !!}

@endsection