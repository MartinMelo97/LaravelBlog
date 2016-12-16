@extends('admin.templates.main')

@section('title','Editar Categoria')

@section('content')

	<a href="{{route('admin.categories.create')}}" class="btn btn-primary">Crear categoria</a>
	{!! Form::open(['route' => ['admin.categories.update',$category->id], 'method'=>'PUT']) !!}
		{{ csrf_field() }}

		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name', $category->name, ['class'=>'form-control','placeholder'=>'Nombre de la categoria','required'])!!}
		</div>
		<div class="form-group">
			{!! Form::submit('Actualizar categoria',['class'=>'btn btn-primary'])!!}
		</div>
	{!! Form::close() !!}
@endsection