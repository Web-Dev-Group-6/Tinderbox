@extends('templates.dashboard.default')

@section('body')

<div class="headline container-fluid">
		<h1>Registration</h1>
		<div class="underline"><img src="{{ asset('img/tinderbox_single_line.svg') }}"></div>
	</div>
	<div class="register-input container">
		<form>
			<input type="text" name="firstname" placeholder="First Name">
			<input type="text" name="lastname" placeholder="Last Name">
			<select name="gender" placeholder="Gender">
				<option value="gender" label>Gender</option>
				<option value="female">Female</option>
				<option value="male">Male</option>
			</select>
			<input type="date" name="dateofbirth" placeholder="Date of Birth">
			<select name="nationality">
				<option value="nationality" label>Nationality</option>
				<option value="Danish">Danish</option>
				<option value="German">German</option>
				<option value="norwegian">Norwegian</option>
			</select>
		<div class="upload-image">
			<img src="{{ asset('img/picture.svg') }}">
			<p>Upload image</p>
		</div>
		<div class="pagebuttons">
			<div class="next"><a href="<?php echo $url = route('dashboard.registration2'); ?>">Next</a></div>
		</div>
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