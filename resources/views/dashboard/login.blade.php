@extends('templates.dashboard.default')

@section('body')
<div class="headline container-fluid">
		<div class="row">
			<h1>LOGIN</h1>
			<div class="underline"><img src="{{ asset('img/tinderbox_single_line.svg') }}"></div>
		</div>
	</div>

<div id="form-main">
  <div id="form-div">
    <form autocomplete="off" class="form" id="form1" action="{{ route('dashboard.index') }}">
      
      <p class="email">
        <input name="email" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="E-mail" id="email" />
      </p>
      
      <p class="password">
        <input name="password" type="password" class="validate[required,custom[password]] feedback-input" id="password" placeholder="Password" />
      </p>
      
      
      <div class="submit">
        <input type="submit" value="LOGIN" id="button-blue"/>
        <div class="ease"></div>
      </div>

    </form>

  <div class="signup">
    <button id="signup" onclick="window.location.href='{{ route('dashboard.registration') }}'">SIGN UP</button>
  </div>
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