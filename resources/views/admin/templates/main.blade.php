<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default') | Panel de Administracion</title>
	<link rel="stylesheet" href="{{asset ('bootstrap/css/bootstrap.css') }}">
</head>
<body>
	@include('flash::message')
	@include('admin.templates.partials.errors')
	@include('admin.templates.partials.nav')
	@yield('content', '')

	<script src="{{asset('js/jquery-3.1.1.js')}}">
		
	</script>
	<script src="{{asset('bootstrap/js/bootstrap.js')}}">
		
	</script>
</body>
</html>