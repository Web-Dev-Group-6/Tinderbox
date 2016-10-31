@extends('templates.dashboard.default')

@section('body')
<div class="col-xs-8 nopadding headline">
        <h1>My Profile</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-offset-1 col-xs-11 nopadding">
        <img class="underline" src="{{ asset('img/tinderbox_single_line.svg') }}">
      </div>
    </div>
	</div>


<div class="container">
<center>
<img src="{{ asset('img/udklip.png') }}" style="align-content: center;"></img>

<form class="form">
  <div id="form-main">
    <div id="form-div">
    
      <fieldset>
        <legend>Personal information:</legend>
    
          <p>Whats your gender?<br><br>
          <input type="radio" name="gender" value="male" checked> Male <input type="radio" name="gender" value="female"> Female<br>
          </p>


            <input type="text" name="firstname" value="First name" id="profile-form"><br>
            <br>
            <input type="text" name="lastname" value="Last name" id="profile-form"><br>
            <br>

          	<input type="date" name="birthdate" value="Birthdate" id="profile-form"><br>
          	<br>
            <input type="text" name="occupation" value="Occupation" id="profile-form"><br>
            <br>
            <input type="text" name="adress" value="Adress" id="profile-form"><br>
            <br>
            <input type="text" name="email" value="Email" id="profile-form"><br>
            <br>
            <input type="tel" name="mobile" value="+45 00 00 00 00" id="profile-form"><br>
            <br>
            </form>

            <form>
            <p>Do you speak danish?<br><br>
            <input type="radio" name="yes" value="yes" checked> Yes
        	 <input type="radio" name="no" value="no"> No<br>
        	 <br></p></form>

            
            <p>Have you red the Terms and Conditions? <br><br>
            <input type="radio" name="yes" value="yes" checked> Yes
            <input type="radio" name="no" value="no"> No<br>
            <br>
            </p></form>

            <select name="state" class="form-control selectpicker" >
              <option value="info" >Want to work with</option>
              <option>Allan</option>
              <option>Amanda</option>
              <option >Ariana</option>
              <option >Artelia</option>
              <option >Carl</option>
              <option >Carol</option>
              <option >Caroline</option>
              <option >Dorthe</option>
              <option >Daniel</option>
            </select>
            <br>

            <select name="state" class="form-control selectpicker" >
              <option value="info" >And</option>
              <option>Want to work with</option>
              <option>Allan</option>
              <option>Amanda</option>
              <option >Ariana</option>
              <option >Artelia</option>
              <option >Carl</option>
              <option >Carol</option>
              <option >Caroline</option>
              <option >Dorthe</option>
              <option >Daniel</option>
            </select>
         
        <br>
            <input type="submit" value="Submit" id="button-blue">

            <br><br><br><br><br>
          </fieldset>

        </form>

        </center>


         </div>
        </div>
        </div>
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
@stop