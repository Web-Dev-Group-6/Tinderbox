@extends('templates.auth.default')

@section('body')
<div class="headline container-fluid">
    <div class="row">
        <h1>LOGIN</h1>
        <div class="underline"><img src="{{ asset('img/tinderbox_single_line.svg') }}"></div>
    </div>
</div>

<div id="form-main">
    <div id="form-div">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

            @if (count($errors))
                @foreach($errors->all() as $error)
                    <p style="color: red">{{ $error }}</p>
                @endforeach
            @endif

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" name="email" placeholder="E-mail">
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" class="validate[required,custom[password]] feedback-input" name="password" placeholder="Password">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary" id="button-blue">Login</button>
                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
            </div>
        </form>

        <div class="signup">
            <button id="signup" onclick="window.location.href='{{ url('register') }}'">SIGN UP</button>
        </div>
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
@endsection