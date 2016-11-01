@extends('templates.auth.default')

@section('body')

<div class="headline container-fluid">
		<h1>My Profile</h1>
		<div class="underline"><img src="{{ asset('img/tinderbox_single_line.svg') }}"></div>
	</div>
	<div class="register-input container">
	    <form class="form-horizontal" role="form" method="POST" action="{{ url('/profile') }}">
	    {{ csrf_field() }}
			<div id="profile-info-1">
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
					<button type="button" class="next" id="profile-next">Next</button>
				</div>
			</div>

			<div id="profile-info-2">
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
					<button type="button" class="back" id="profile-prev">Back</button>
					<button type="submit" class="next">Finish</button>
				</div>
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

<script src="{{ asset('js/profile.js') }}"></script>
@stop