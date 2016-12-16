@extends('admin.templates.main')

@section('title','Categorias')

@section('content')
	<a href="{{ route('admin.categories.create')}}" class="btn btn-info">Añadir categoria</a>
	<br><br>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			@foreach($categories as $category)
				<tr>
					<td>{{$category->id}}</td>
					<td>{{$category->name}}</td>
					<td>
						<a href="{{route('admin.categories.destroy',$category->id)}}" class="btn btn-info"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
						<a href="{{route('admin.categories.edit',$category->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	{!! $categories->render()!!}
@endsection