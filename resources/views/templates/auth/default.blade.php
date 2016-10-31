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
<header>
    <div class="container-fluid">
        <a href="{{ route('dashboard.index') }}"><div id="logo" class="col-xs-2"><img src="{{ asset('img/tinderbox_logowhite_small.svg') }}" alt="logo"></div></a>
    </div>
</header>

    <div class="headline container-fluid">
        <div class="row">

    @section('body')
    @show
    @section('scripts')
    @show

        </div>
    </div>

</body>
</html>