@extends('templates.dashboard.default')

@section('body')

<div class="headline container-fluid">
		<h1>Registration</h1>
		<div class="underline"><img src="{{ asset('img/tinderbox_single_line.svg') }}"></div>
	</div>
	
	<div class="register-input container">
		<form>
			<input type="number" name="phonenumber" placeholder="Phonenumber">
			<input type="text" name="address" placeholder="Address">
			<select name="country" placeholder="Country">
				<option value="Denmark" label>Denmark</option>
				<option value="germany">Germany</option>
				<option value="Norway">Norway</option>
			</select>
			<input type="number" name="zipcode" placeholder="Zip code">
			<input type="text" name="city" placeholder="City">
			
			<select name="danish">
				<option value="danish" label>Speak and understand Danish</option>
				<option value="Yes">Yes</option>
				<option value="No">No</option>
			</select>
			<select name="workingperiod">
				<option value="Denmark" label>Preferred working period</option>
				<option value="before">Before Festival</option>
				<option value="during">During Festival</option>
				<option value="after">After Festival</option>
			</select>
			<select name="worktasks">
				<option value="tasks" label>Preferred work tasks</option>
				<option value="fences">Building Fences</option>
				<option value="bartender">Bartender</option>
				<option value="it-work">IT Work</option>
			</select>
			<input type="text" name="workpartner" placeholder="I like to work with (name)">

		<div class="pagebuttons">
			<div class="back"><a href="<?php echo $url = route('dashboard.registration1'); ?>">Back</a></div>
			<div class="next"><a href="<?php echo $url = route('dashboard.index'); ?>">Finish</a></div>
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