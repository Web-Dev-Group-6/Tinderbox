<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<title>@yield('title', trans('titles.default'))</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
</head>
<body class="{{ str_replace('.', ' ', Route::currentRouteName()) }} @yield('body-class', '')">
	Header here!<br>

	@section('body')
	@show
	@section('scripts')
	@show

</body>
</html>
