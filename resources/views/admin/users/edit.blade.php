@extends('admin.templates.main')

@section('title')
	Editar usuario
@endsection

@section('content')

	<a href="{{ route('admin.users.index')}}" class="btn btn-info">Ver usuarios</a>
	<br><br>
	{!! Form::open(['route' => array('admin.users.update', $user->id), 'method' => 'PUT']) !!}
		<div class="form-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name', $user->name, ['class'=>'form-control', 'required', 'placeholder'=>'Nombre Completo'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Correo Electrónico') !!}
			{!! Form::email('email',$user->email, ['class'=>'form-control', 'required', 'placeholder'=>'Correo Electrónico'])!!}
		</div>


		<div class="form-group">
			{!! Form::label('type', 'Tipo de Usuario') !!}
			{!! Form::select('type',[''=>'Seleccione un rol','member'=>'Miembro' , 'admin'=>'Administrador'],$user->type,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Actualizar',['class'=>'btn btn-primary', 'required', 'placeholder'=>'Nombre Completo'])!!}
		</div>
	{!! Form::close() !!}

@endsection