<!DOCTYPE html>
<html>
<head>
 <title>Online | Test</title>
    <!-- css file included for css-->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/Main/home.css">

<body>
  <?php include('header.php');?>

  <div  class="Home_image">
   <div id="we_will_open">
      <h3>We Will Open</h3>
      <h2>THE WORLD</h2>
      <h4 style="color:white">of knowledge for you</h4>
      <br/>
      <a  href="<?= base_url();?>index.php/Readmore">READ MORE</a>
      <h3>Helping students fulfil the potential</h3>
      <h4>Offering success orientation for each student</h4>
   </div>
  </div>
  <div class="popup" >
  <span class="popuptext" id="myPopup"><?php
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
<?php echo form_close(); ?>
!</span>
</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
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
    margin-left: -180px;
    margin-top: -200px;
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
</head>
<body style="text-align:center">

<h2>Popup</h2>



<script>
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>

</body>
</html>
