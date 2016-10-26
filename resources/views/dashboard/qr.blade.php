@extends('templates.dashboard.default')

@section('body')
<div class="col-xs-8 nopadding headline">
				<h1>QR Codes</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-offset-1 col-xs-11 nopadding">
				<img class="underline" src="{{ asset('img/tinderbox_single_line.svg') }}">
			</div>
		</div>
	</div>


	<div class="container">
		<center>
			<h3>Check-In:</h3>
			<img src="images/qr-codes.png" class="qr-code">
		</center>
	</div>
@stop