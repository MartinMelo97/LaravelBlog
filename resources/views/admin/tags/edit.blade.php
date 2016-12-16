@extends('admin.templates.main')

@section('title','Editar Tag')

@section('content')
	
	{!! Form::open(['route'=>['admin.tags.update',$tag->id],'method'=>'PUT']) !!}
	{{ csrf_field() }}
		<div class="form-group">
			{!! Form::label('name','Nombre del tag') !!}
			{!! Form::text('name',$tag->name,['class'=>'form-control','required','placeholder'=>'Creativo vato']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Actualizar tag',['class'=>'btn btn-primary','required']) !!}
		</div>
	{!! Form::close() !!}

@endsection