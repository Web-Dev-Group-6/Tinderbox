@extends('templates.dashboard.default')

@section('body')

<div class="headline container-fluid">
		<h1>Registration</h1>
		<div class="underline"><img src="{{ asset('img/tinderbox_single_line.svg') }}"></div>
	</div>
	<div class="register-text container">
		<h3>You are about to register as a volunteer for</h3>
		<img src="{{ asset('img/tinderbox_date.svg') }}">
	</div>
	<div class="register-input container">
		<form>
			<input type="email" name="email" placeholder="Email">
			<input type="password" name="password" placeholder="Password">
			<div class="submit"><a href="{{ route('dashboard.registration1') }}">Register</a></div>
		</form>
	</div>
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