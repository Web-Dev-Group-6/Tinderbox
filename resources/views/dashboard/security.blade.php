@extends('templates.dashboard.default')

@section('body')
<div class="col-xs-8 nopadding headline">
				<h1>Call Security</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-offset-1 col-xs-11 nopadding">
				<img class="underline" src="{{ asset('img/tinderbox_single_line.svg') }}">
			</div>
		</div>
	</div>

<!--<div class="fa-chain-broken ">
	<h3>Press the picture below to call security</h3>
</div>-->

<center><h2>Press the picture below to call security</h2></center>
<center><img onclick="emergencyAlert()" src="images/security-icon-small.svg"/> </center>
@stop