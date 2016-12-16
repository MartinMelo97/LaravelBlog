<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$article->title}}</title>
	<link rel="stylesheet" href="{{asset('css/prueba.css') }}">
</head>
	<body>
		HOLA BEBE<br>

		<h1>{{ $article->title }}</h1>
		<br>
		<hr>
		<h3>{{$article->content}}<h3>
		<br>
		<h5> Publicado por: {{$article->user->name}}</h5>
		<br>
		<h5> Categoria: {{$article->category->name}}</h5>
		<br>

		@foreach($article->tags as $tag)
			{{ $tag->name}}
		@endforeach
	</body>
</html>