@extends('templates.dashboard.default')

@section('body')
<div class="col-xs-8 nopadding headline">
        <h1>Your Schedule</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-offset-1 col-xs-11 nopadding">
        <img class="underline" src="{{ asset('img/tinderbox_single_line.svg') }}">
      </div>
    </div>
	</div>

<center>
<table>
  <tr>
    <th>Team</th>
    <th>Time</th>
    <th>Meeting place</th>
    <th>Shiftleaders</th>
  </tr>
  <tr>
    <td>Team BONUS</td>
    <td>28.juli 2016, 08.00</td>
    <td>voluntary sector</td>
    <td>Frida hansen</td>
  </tr>
  <tr>
    <td>Team BONUS down</td>
    <td>28.juli 2016, 20.00</td>
    <td>voluntary sector</td>
    <td>Mogens jepsen</td>
  </tr>
  <tr>
    <td>Team TB</td>
    <td>29.juli 2016, 08.00</td>
    <td>Entrance</td>
    <td>Bent bentsen</td>
  </tr>
  <tr>
    <td>Team TB BONUS</td>
    <td>28.juli 2016, 08.00</td>
    <td>voluntary sector</td>
    <td>Dorthe smith</td>
  </tr>
  <tr>
    <td>Team medicare/health</td>
    <td>28.juli 2016, 08.00</td>
    <td>Magicbox voluntter sec.</td>
    <td>Ernst webber</td>
  </tr>
  <tr>
    <td>Team supply</td>
    <td>28.juli 2016, 08.00</td>
    <td>Volunteers bar</td>
    <td>Torben T</td>
  </tr>
</table>


    <div id="form-div">
<input type="submit" value="I have seen and accept my shifts" id="button-blue">
</div>
</center>
<br><br><br><br>
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
        <img src="images/tuborg.svg">
      </div>
    </div>
  </footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/scripts.js"></script>
@stop