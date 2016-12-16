@extends('admin.templates.main')

@section('title','Crear Tag')

@section('content')
	<a href="{{route('admin.tags.create')}}"></a>
	{!! Form::open(['route'=>'admin.tags.store','method'=>'POST']) !!}
	{!! csrf_field() !!}
		<div class="form-group">
			{!! Form::label('name','Nombre del tag') !!}
			{!! Form::text('name',null,['class'=>'form-control','required','placeholder'=>'Creativo vato']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar tag',['class'=>'btn btn-primary','required']) !!}
		</div>
	{!! Form::close() !!}

@endsection