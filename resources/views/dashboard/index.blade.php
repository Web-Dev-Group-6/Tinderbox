@extends('templates.dashboard.default')

@section('body')
<div class="col-xs-8 nopadding headline">
				<h1>Tinderbox Volunteer</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-offset-1 col-xs-11 nopadding">
				<img class="underline" src="{{ asset('img/tinderbox_single_line.svg') }}">
			</div>
		</div>
	</div>

<a href="{{ route('dashboard.information') }}"><button class="menu-button" id="button-information">Information</button></a>
<a href="{{ route('dashboard.schedule') }}"><button class="menu-button" id="button-schedule">Schedule</button></a>
<a href="{{ route('dashboard.qr') }}"><button class="menu-button" id="button-qrcode">QR code</button></a>
<a href="{{ route('dashboard.map') }}"><button class="menu-button" id="button-map">Map</button></a>
<a href="{{ route('dashboard.security') }}"><button class="menu-button" id="button-security">Security</button></a>
<div class="newsfeed container">
	<h1>News</h1>
	<div class="news">
		<img src="{{ asset('img/concert.jpg') }}">
		<div class="gradient-background">
			<h4>
				Festival schedule ready
			</h4>
			<p>Schedule is ready on Tinderbox.dk and volunteers can now see their schedule in...</p>
		</div>
	</div>
</div>
<!--Footer-->

<footer>
	<div class="footer">
		<div class="social-media">
			<span>Follow us</span>
			<div class="social-media-icons">
				<i class="fa fa-facebook-official" aria-hidden="true"></i>
				<i class="fa fa-instagram" aria-hidden="true"></i>
				<i class="fa fa-twitter" aria-hidden="true"></i>
				<i class="fa fa-spotify" aria-hidden="true"></i>
			</div>
		</div>

		<div class="tuborg">
			<img src="{{ asset('img/tuborg.svg') }}">
		</div>
	</div>
</footer>
@stop