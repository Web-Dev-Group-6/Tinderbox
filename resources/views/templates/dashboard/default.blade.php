<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<title>@yield('title', trans('titles.default'))</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
</head>
<body class="{{ str_replace('.', ' ', Route::currentRouteName()) }} @yield('body-class', '')">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<header>
	<div class="container-fluid">
		<a href="{{ route('dashboard.index') }}"><div id="logo" class="col-xs-2"><img src="{{ asset('img/tinderbox_logowhite_small.svg') }}" alt="logo"></div></a>
		<a href="{{ route('dashboard.profile') }}"><div id="user" class="glyphicon glyphicon-user"></div></a>
	</div>
</header>

	<div class="headline container-fluid">
		<div class="row">
			<div class="col-xs-4 nopadding">
				<div class="dropdown">
			  		<button onclick="toggleDropdown()" class="dropbtn"><i class="fa fa-bars" aria-hidden="true"></i></button>
			  		<div id="myDropdown" class="dropdown-content">
			    		<a href="{{ route('dashboard.schedule') }}">SCHEDULE</a>
			    		<a href="{{ route('dashboard.messages') }}">MESSAGES</a>
			    		<a href="{{ route('dashboard.qr') }}">QR CODES</a>
			    		<a href="{{ route('dashboard.information') }}">INFO</a>
			    		<a href="{{ route('dashboard.map') }}">FESTIVAL MAP</a>
			    		<a href="{{ route('dashboard.security') }}" class="call">CALL SECURITY</a>
			  		</div>
				</div>
				<button onclick="window.location.href='{{ URL::previous() }}'" class="backbutton">Back</button>
			</div>

	@section('body')
	@show
	@section('scripts')
	@show

</body>
</html>