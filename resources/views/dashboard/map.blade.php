@extends('templates.dashboard.default')

@section('body')
<div class="col-xs-8 nopadding headline">
				<h1>Map</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-offset-1 col-xs-11 nopadding">
				<img class="underline" src="{{ asset('img/tinderbox_single_line.svg') }}">
			</div>
		</div>
	</div>

<center><h2>Picture of the map</h2></center>
<div class="map">
	<center> <img src="{ asset('images/map.PNG') }}" width="100%" height="100%" max-width="400" max-height="400"> </center>
</div>
@stop