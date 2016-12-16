@extends('admin.templates.main')

@section('title','Crear Categoria')

@section('content')

	{!! Form::open(['route' => 'admin.categories.store', 'method'=>'POST']) !!}
		{{ csrf_field() }}

		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name', null , ['class'=>'form-control','placeholder'=>'Nombre de la categoria','required'])!!}
		</div>
		<div class="form-group">
			{!! Form::submit('Registrar categoria',['class'=>'btn btn-primary'])!!}
		</div>
	{!! Form::close() !!}
@endsection