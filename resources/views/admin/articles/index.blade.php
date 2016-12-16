@extends('admin.templates.main')

@section('title','Articulos')

@section('content')
	<a href="{{route('admin.articles.create')}}" class="btn btn-info">Crea un nuevo articulo</a>
	<br>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Titulo</th>
			<th>Categoria</th>
			<th>Autor</th> 
			<th>Acciones</th>
		</thead>
		<tbody>
			@foreach($articles as $article)
				<tr>
					<td>{{$article->id}}</td>
					<td>{{$article->title}}</td>
					<td>{{$article->category->name}}</td>
					<td>{{$article->user->name}}</td>
					<td>
						<a href="{{route('admin.articles.edit',$article->id)}}" class="btn btn-info"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
						<a href="{{route('admin.articles.destroy',$article->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection