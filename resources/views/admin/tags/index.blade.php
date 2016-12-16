@extends('admin.templates.main')

@section('title','Tags')

@section('content')
	<a href="{{route('admin.tags.create')}}"" class="btn btn-success">Crear tag</a>
	{!! Form::open(['route'=>'admin.tags.index','method'=>'GET','class'=>'navbar-form pull-right']) !!}
		<div class="input-group">
			
			{!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Buscar...','aria-describedby'=>'search']) !!}
			<span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search"></span></span>
		</div>
	{!! Form::close()!!}
	<br>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			@foreach($tags as $tag)
				<tr>
					<td>{{$tag->id}}</td>
					<td>{{$tag->name}}</td>
					<td>
						<a href="{{route('admin.tags.edit',$tag->id)}}" class="btn btn-info"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
						<a href="{{route('admin.tags.destroy',$tag->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $tags->render() !!}
@endsection