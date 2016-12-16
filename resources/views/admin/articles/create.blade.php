@extends('admin.templates.main')

@section('title','Articulos')

@section('content')
	{!! Form::open(['route'=>'admin.articles.store','method'=>'POST','files'=> true]) !!}

			<div class="form-group">
				{!! Form::label('title','Titulo') !!}
				{!! Form::text('title',null,['class'=>'form-control','required','placeholder'=>'Titulo del articulo']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('category_id', 'Categoria') !!}
				{!! Form::select('category_id', $categories, null,  ['class'=>'form-control','required','placeholder'=>'Selecciona una categoria']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('content','Contenido') !!}
				{!! Form::textarea('content',null,['class'=>'form-control','required','placeholder'=>'Inspirate mi amor']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('tags','Tags') !!}
				{!! Form::select('tags[]', $tags, null, ['class'=>'form-control','multiple','required']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('image','Imagen') !!}
				{!! Form::file('image') !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Agregar articulo',['class'=>'btn btn-primary']) !!}
			</div>
	{!! Form::close() !!}
@endsection