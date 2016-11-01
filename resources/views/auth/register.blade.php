@extends('templates.auth.default')

@section('body')
<div class="headline container-fluid">
    <h1>Registration</h1>
    <div class="underline"><img src="{{ asset('img/tinderbox_single_line.svg') }}"></div>
</div>
<div class="register-text container">
    <h3>You are about to register as a volunteer for</h3>
    <img src="{{ asset('img/tinderbox_date.svg') }}">
</div>

<div class="register-input container" id="registration1">
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}

        @if (count($errors))
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        @endif

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input id="email" type="email" class="form-control" name="email" placeholder="E-mail">
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input id="password" type="password" class="form-control" name="password" placeholder="Password">
        </div>

        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn fa-user"></i> Register
            </button>
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
@endsection
