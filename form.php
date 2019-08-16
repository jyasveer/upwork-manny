<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/flick/jquery-ui.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.jqueryscript.net/demo/jQuery-International-Telephone-Input-With-Flags-Dial-Codes/build/css/intlTelInput.css">
  <link rel="stylesheet" href="./prism.css">
  <!-- <link rel="stylesheet" href="./intlTelInput.min.css"> -->
  <link rel="stylesheet" href="https://www.jqueryscript.net/demo/Stylish-jQuery-Select-Box-Plugin-with-Smooth-Drop-Down-Effects-FancySelect/fancySelect.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./style.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://trentrichardson.com/examples/timepicker/jquery-ui-timepicker-addon.js"></script>
  <script src="https://trentrichardson.com/examples/timepicker/i18n/jquery-ui-timepicker-addon-i18n.min.js"></script>
  <script src="https://trentrichardson.com/examples/timepicker/jquery-ui-sliderAccess.js"></script>
  <script src="./prism.js"></script>
  <script src="https://www.jqueryscript.net/demo/jQuery-International-Telephone-Input-With-Flags-Dial-Codes/build/js/intlTelInput.js"></script>
  
  <!-- <script src="./intlTelInput.min.js"></script> -->
  <script src="https://www.jqueryscript.net/demo/Stylish-jQuery-Select-Box-Plugin-with-Smooth-Drop-Down-Effects-FancySelect/fancySelect.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
  <script src="./form.js"></script>
</head>
<body>

<div class="container">
  <div class="form-main-wrap"> 
    <div class="form-align-center">
      <form name="myForm" id="myForm" class="form-horizontal" onsubmit="return validateForm()" style="padding: 15px;">
        <div class="form-group">        
          <div class="col-sm-12 error-msg-box">
              <div id="name-error" style="display:none;">X Please enter name</div>
              <div id="name-error-valid" style="display:none;">X Name should only be alphanumeric</div>
              <div id="name-error-length" style="display:none;">X Name should be atleast 10 characters</div>
              <div id="email-error" style="display:none;">X Please enter email</div>
              <div id="email-error-valid" style="display:none;">X Email should be a valid one</div>
              <div id="datetime-error" style="display:none;">X Please select date & time</div>
              <div id="phone-error" style="display:none;">X Please enter phone</div>
              <div id="phone-valid" style="display:none;">X Please enter phone</div>
              <div id="service-error" style="display:none;">X Please select service</div>
              <div id="privacy-error" style="display:none;">X Please select privacy</div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text" class="form-control input-lg" id="name" aria-describedby="inputSuccess2Status" placeholder="Name">
            <span id="icon-name-error" class="glyphicon glyphicon-warning-sign form-control-feedback icon-name-error" style="display:none;" aria-hidden="true"></span>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text" class="form-control input-lg" id="email" aria-describedby="inputSuccess2Status" placeholder="E-mail">
            <span id="icon-email-error" class="glyphicon glyphicon-warning-sign form-control-feedback icon-name-error" style="display:none;" aria-hidden="true"></span>
          </div>
        </div>  
        <div class="form-group">
          <div class="col-sm-6">
            <input type="text" class="form-control input-lg" id="datetime" placeholder="Date Time" name="datetime">
          </div>
          <div class="col-sm-6 phoneinput">
            <div class="input-group phone-input">
              <input type="tel" id="phone" placeholder="" name="phone">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12"> 
            <label>Choose your Services</label>
            <select name="service" id="service" class="form-control input-lg service">
              <option value="">Service</option>
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
        <div class="form-group">        
          <div class=" col-sm-12">
            <div class="custom-checkbox">
              <input id="privacy" type="checkbox" name="privacy">
              <label for="privacy"> <span></span>I Agree to my contact details being stored and used by Mango consulting to contact me. Read more in Our Privacy Policy</label>
            </div>
          </div>
        </div>
        <div class="form-group">        
          <div class=" col-sm-12">
            <div class="custom-checkbox">
              <input id="updates" type="checkbox" name="updates">
              <label for="updates"> <span></span>I'd like to receive Mango Consulting Weekly updates directly to my inbox.</label>
            </div>
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-6 submit_div">
              <input type="submit" id="submit-btn" class="submit-btn" value="Submit">
          </div>
        </div>
      </form>
      <div class="right-side-img">
        <img src="index.jfif" height="600px" width="400px" />
      </div>
    </div>
  </div>
</div>

</body>
</html>
