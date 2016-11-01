@extends('templates.dashboard.default')

@section('body')
<div class="col-xs-8 nopadding headline">
    <h1>Messages</h1>
</div>
</div>
<div class="row">
    <div class="col-xs-offset-1 col-xs-11 nopadding">
        <img class="underline" src="{{ asset('img/tinderbox_single_line.svg') }}">
    </div>
</div>
</div>


<div class="container">
    <a href="#"><button id="group-button" class="message-button">Group Messages</button></a>
    <a href="#"><button id="personal-button" class="message-button">Personal Messages</button></a>
</div>

<footer>
    <div class="footer">
        <div class="social-media">
            <span headline>Follow us</span>
            <div class="social-media-icons">
                <i class="fa fa-facebook-official" aria-hidden="true"></i>
                <i class="fa fa-instagram" aria-hidden="true"></i>
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <i class="fa fa-spotify" aria-hidden="true"></i>
            </div>
        </div>
        <div class="tuborg">
            <img src="images/tuborg.svg">
        </div>
    </div>
</footer>
@stop