<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/flick/jquery-ui.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.jqueryscript.net/demo/jQuery-International-Telephone-Input-With-Flags-Dial-Codes/build/css/intlTelInput.css">
  <link rel="stylesheet" href="https://www.jqueryscript.net/demo/Stylish-jQuery-Select-Box-Plugin-with-Smooth-Drop-Down-Effects-FancySelect/fancySelect.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

<script src="https://trentrichardson.com/examples/timepicker/jquery-ui-timepicker-addon.js"></script>
<script src="https://trentrichardson.com/examples/timepicker/i18n/jquery-ui-timepicker-addon-i18n.min.js"></script>
<script src="https://trentrichardson.com/examples/timepicker/jquery-ui-sliderAccess.js"></script>
<script src="https://www.jqueryscript.net/demo/jQuery-International-Telephone-Input-With-Flags-Dial-Codes/build/js/intlTelInput.js"></script>
<script src="https://www.jqueryscript.net/demo/Stylish-jQuery-Select-Box-Plugin-with-Smooth-Drop-Down-Effects-FancySelect/fancySelect.js"></script>
</head>
<body>

<div class="container">
 <div class="form-main-wrap"> 
  <div class="form-align-center">
  <form class="form-horizontal"  role="form">
   
	<div class="form-group">
      <div class="col-sm-12">
        <input type="text" class="form-control input-lg" id="Fname" placeholder="Your Name" name="name">
      </div>
    </div>
	
	<div class="form-group" style="width: 50%;float: left;">
		<div class="col-sm-12 phoneinput">
				<div class="input-group phone-input">
					<!--<span class="input-group-btn">
						<button type="button" class="btn btn-default dropdown-toggle form-control input-lg" data-toggle="dropdown" aria-expanded="false"><span class="type-text">+44</span> <span class="caret"></span></button>
						<ul class="dropdown-menu" role="menu">
							<li><a class="changeType" href="javascript:;" data-type-value="phone">+91</a></li>
							<li><a class="changeType" href="javascript:;" data-type-value="fax">+92</a></li>
							<li><a class="changeType" href="javascript:;" data-type-value="mobile">+93</a></li>
							<li><a class="changeType" href="javascript:;" data-type-value="mobile">+93</a></li>
							<li><a class="changeType" href="javascript:;" data-type-value="mobile">+44</a></li>
							<li><a class="changeType" href="javascript:;" data-type-value="fax">+92</a></li>
							<li><a class="changeType" href="javascript:;" data-type-value="mobile">+93</a></li>
							<li><a class="changeType" href="javascript:;" data-type-value="mobile">+93</a></li>
						</ul>
					</span>
					<input type="hidden" name="phone[1][type]" class="form-control input-lg" value="" />
					<input type="tel" id="phone" name="phone[1][number]" class="form-control input-lg" placeholder="+1 (999) 999 9999" />-->
					<input type="tel" id="phone" placeholder=""  id="telephone">
					
				</div>
				
			
		</div>
	</div>
	
	<div class="form-group" style="width: 50%;float: left;margin-left: 45px;">
      <div class="col-sm-12">
        <input type="email" class="form-control input-lg" id="Lname" placeholder="Last Name" name="email">
      </div>
    </div>
	<div class="form-group">
      <div class="col-sm-12">
        <input type="text" class="form-control input-lg" id="datetime" placeholder="datetime" name="datetime">
      </div>
    </div>
	<div class="form-group">
      <div class="col-sm-12">
        <input type="email" class="form-control input-lg" id="email" placeholder="Email Address" name="email">
      </div>
    </div>
    <div class="form-group">
		<div class="col-sm-12"> 
			<label>Choose your Services</label>
			<select name="service" class="form-control input-lg service">
				<option value="Hosting/Cloud Solutions">Hosting/Cloud Solutions</option>
				<option value="Artificial Intelligence">Artificial Intelligence</option>
				<option value="Machine Learning Development">Machine Learning Development</option>
				<option value="Virtual/Augmented Reality and Development">Virtual/Augmented Reality and Development</option>
				<option value="Design &amp; Branding">Design &amp; Branding</option>
				<option value="IoT">IoT</option>
				<option value="Chat Bot Development">Chat Bot Development</option>
				<option value="Internet Security">Internet Security</option>
				<option value="Mobile App Development">Mobile App Development</option>
				<option value="Website Development">Website Development</option>
				<option value="Digital Marketing Services">Digital Marketing Services</option>
				<option value="Big Data">Big Data</option>
				<option value="ICO Blockchain Development">ICO Blockchain Development</option>
				<option value="Game Development">Game Development</option>
				<option value="Virtual Assistance">Virtual Assistance</option>
				<option value="Wearable Tech">Wearable Tech</option>
				<option value="Robotic Automation">Robotic Automation</option>
				<option value="Animation">Animation</option>
				<option value="3D Modelling">3D Modelling</option>
				<option value="IT Support">IT Support</option>
				<option value="Accounting Services">Accounting Services</option>
				<option value="Email Marketing">Email Marketing</option>
				<option value="Content Writing">Content Writing</option>
				<option value="Legal Services">Legal Services</option>
				<option value="Business Intelligence">Business Intelligence</option>
				<option value="Consulting">Consulting</option>
			</select>
		</div>
    </div>

    <!--<div class="form-group">
      <div class="col-sm-12"> 
        <label>Birthday</label>
        <p>To sign up, you must be 18 or older.Other people won't see your birthday.</p>
            <input type="text" name="birthday"  value="" id="input-group"/>
      </div>
   </div>-->


    <div class="form-group">        
      <div class=" col-sm-12">
        <div class="checkbox">
          <label><input type="checkbox" name="privacy"> I Agree to my contact details being stored and used by Mango consulting to contact me. Read more in Our Privacy Policy</label>
        </div>
      </div>
    </div>
	<div class="form-group">        
      <div class=" col-sm-12">
        <div class="checkbox">
          <label><input type="checkbox" name="updates"> I'd like to receive Mango Consulting Weekly updates directly to my inbox.</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-12">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>
</div>
</div>


<script type="text/javascript">
  $(document).ready(function () {
	  $('#datetime').datetimepicker();
		$("#phone").intlTelInput(); 
		$('.service').fancySelect()
  });
  
  
</script>


</body>
</html>
