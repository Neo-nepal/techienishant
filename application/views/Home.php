<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>ARIES - Free Bootstrap Theme by WowThemes.net</title>
<!-- Bootstrap Core CSS -->
<link href="http://localhost/techienishant/assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="http://localhost/techienishant/assets/css/theme.css" rel="stylesheet">
<link href="http://localhost/techienishant/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="http://localhost/techienishant/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
  <?php include('header.php');?>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation -->

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
);
?>
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
!</span>
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
<script src="http://localhost/techienishant/assets/js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="http://localhost/techienishant/assets/js/bootstrap.min.js"></script>
<!-- Plugin JavaScript -->
<script src="http://localhost/techienishant/assets/js/jquery.easing.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="http://localhost/techienishant/assets/js/theme.js"></script>


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
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    margin-left: 80px;
    margin-top: -160px;
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
