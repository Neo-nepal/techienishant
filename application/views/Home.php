<!DOCTYPE html>
<html lang="en">
<head>
<title>ONLINE | TEST</title>
<!-- Bootstrap Core CSS -->
<link href="http://localhost/techienishant/assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link rel="stylesheet" type="text/css" href="http://localhost/techienishant/assets/css/Main/home.css">
<link href="http://localhost/techienishant/assets/css/theme.css" rel="stylesheet">
<link href="http://localhost/techienishant/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="http://localhost/techienishant/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<script src="http://localhost/techienishant/assets/js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="http://localhost/techienishant/assets/js/bootstrap.min.js"></script>
<!-- Plugin JavaScript -->
<script src="http://localhost/techienishant/assets/js/jquery.easing.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="http://localhost/techienishant/assets/js/theme.js"></script>
</head>

<body >
<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"><i class="fa fa-bars"></i></button>
        <a class="navbar-brand page-scroll" href="index.html">ONLINE TEST </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url();?>">Home</a> </li>
        <li> <?php  if (!isset($_SESSION['username'])) {?>   <li onclick="myFunction()"> <a href="#" >Online Test</a></li> <?php }else{?> <li> <a href="<?= base_url();?>index.php/Admin_test_controller"> Online Test</a></li>  <?php }?>
        </li>
        <li>
        <?php  if (!isset($_SESSION['username'])) {?>   <li onclick="myFunction()"> <a href="#" >Quiz</a></li> <?php }else{?> <li> <a href="<?= base_url();?>index.php/Online_test_controller"> Quiz</a></li>  <?php }?>
        </li>
        <li>
       <?php  if (!isset($_SESSION['username'])) {?> <li onclick="myFunction()"> <a >LogIn</a></li> <?php }else{?> <li> <a href="#"><span class="dropdown">
        <span onclick="newabc()" class="dropbtn"><?php echo $_SESSION['username']; ?><samp class="caret"></samp></span>
          <div id="myDropdown" class="dropdown-content">
            <a href="#home">Profile</a>
            <a href="#about">About Test</a>
            <a href="<?= base_url();?>index.php/auth/logout/">LogOut</a>
          </div>

        </span></a></li>  <?php }?>
        </li>
       </ul>
    </div>
  <!-- /.navbar-collapse -->
  </div>
 <!-- /.container -->
</nav>
<!-- Intro Header -->
<header class="intro">
<div class="intro-body">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="popup" >
          <span class="popuptext" id="myPopup">
          <?php if (!isset($_SESSION['username'])){
          $login = array(
          'name'  => 'login',
          'id'  => 'login',
          'value' => set_value('login'),
          'maxlength' => 80,
          'size'  => 30,
         );
         if ($login_by_username AND $login_by_email) {
          $login_label = 'Email or login';
          } else if ($login_by_username) {
          $login_label = 'Login';
          } else {
          $login_label = 'Email';
          }
          $password = array(
          'name'  => 'password',
          'id'  => 'password',
          'size'  => 30,
          'maxlength' => 80,
          );
           $remember = array(
          'name'  => 'remember',
          'id'  => 'remember',
          'value' => 1,
          'checked' => set_value('remember'),
          'style' => 'margin:0;padding:0',
          );
           $captcha = array(
          'name'  => 'captcha',
          'id'  => 'captcha',
          'maxlength' => 8,
          );?>
         <?php echo form_open($this->uri->uri_string()); ?>
         <table>
          <tr>
            <td><?php echo form_label($login_label, $login['id']); ?></td>
            <td><?php echo form_input($login); ?></td>
            <td style="color: red;"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?></td>
          </tr>
          <tr>
            <td><?php echo form_label('Password', $password['id']); ?></td>
            <td><?php echo form_password($password); ?></td>
            <td style="color: red;"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?></td>
          </tr>

          <?php if ($show_captcha) {
            if ($use_recaptcha) { ?>
          <tr>
            <td colspan="2">
              <div id="recaptcha_image"></div>
            </td>
            <td>
              <a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
              <div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
              <div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="recaptcha_only_if_image">Enter the words above</div>
              <div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
            </td>
            <td><input type="text" id="recaptcha_response_field" name="recaptcha_response_field" /></td>
            <td style="color: red;"><?php echo form_error('recaptcha_response_field'); ?></td>
            <?php echo $recaptcha_html; ?>
          </tr>
          <?php } else { ?>
          <tr>
            <td colspan="3">
              <p>Enter the code exactly as it appears:</p>
              <?php echo $captcha_html; ?>
            </td>
          </tr>
          <tr>
            <td><?php echo form_label('Confirmation Code', $captcha['id']); ?></td>
            <td><?php echo form_input($captcha); ?></td>
            <td style="color: red;"><?php echo form_error($captcha['name']); ?></td>
          </tr>
          <?php }
          } ?>

          <tr>
            <td colspan="3">
              <?php echo form_checkbox($remember); ?>
              <?php echo form_label('Remember me', $remember['id']); ?>
              <?php echo anchor('/auth/forgot_password/', 'Forgot password'); ?>
              <?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', 'Register'); ?>
            </td>
          </tr>
         </table>
          <?php echo form_submit('submit', 'Let me in'); ?>
          <?php echo form_close();  
         } 
         ?>
          </span>
        </div>
        <a href="#about" class="btn btn-circle page-scroll">
        <i class="fa fa-angle-double-down animated"></i>
        </a>
      </div>
    </div>
  </div>
</div>
</header>
<!-- About Section -->
<section id="about">
<div class="container content-section text-center">
  <div class="row">
    <h2>LIL' ABOUT ME</h2>
    <div class="col-lg-8 col-lg-offset-2">
      <p>
        Praesent ac dignissim diam. Aliquam lobortis elit et sapien eleifend, at sollicitudin metus elementum. Morbi imperdiet id ipsum at tristique. Nam suscipit tristique sem, <a href="#">quis</a> laoreet leo. Maecenas eget ante ipsum.
      </p>
      <p>
        <a href="#" class="btnghost"><i class="fa fa-download"></i> Curriculum Vitae</a>
      </p>
    </div>
  </div>
</div>
</section>

<!-- Contact Section -->

<section>
  

</section>
<!-- Footer -->
<footer>
<div class="container text-center">
  <p class="credits">
    Copyright &copy; Your Website 2015<br/>
    "Aries" Template by WowThemes.net
  </p>
</div>
</footer>
<!-- jQuery -->



<style>
/* Popup container - can be anything you want */
.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* The actual popup */
.popup .popuptext {
    visibility: hidden;
    width: 400px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    position: absolute;
    z-index: 1;
    bottom: 125%;
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
     margin-top: -200px;
         position: absolute;
   
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}

.popup button, input, select, textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    color: black;
    padding: 5px;
}
#myPopup{
 
    top: 0px;
    margin-left: 0px;

}
</style>






<script>
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>

</body>
</html>
<style>


.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}
</style>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function newabc() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>