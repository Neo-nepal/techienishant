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
<div class="container">
  <div class="for_you">
  <h4>We Have 65 Years Experience In This Passion</h4>
  <hr>
   <div class="row">
    </div>
    <div class="row">
    <div class="col-sm-4" id="for_you_cloum">
     <a href="<?= base_url();?>index.php/Online_test_controller"> <img src="<?= base_url();?>assets/Image/self_test.jpg"></a>
      <h4>Pratice set</h4>
   
     </div>
      <div class="col-sm-4" id="for_you_cloum">
       <a href="<?= base_url();?>index.php/Admin_test_controller"> <img src="<?= base_url();?>assets/Image/test_site.jpg"></a>
      <h4> Admin Test</h4>

    </div>
	 <div class="col-sm-4" id="for_you_cloum">
       <a href="<?= base_url();?>index.php/Admin_test_controller"> <img src="<?= base_url();?>assets/Image/bell.png"></a>
      <h4> Notification</h4>

    </div>
    </div>
  </div>
</div>
<hr>


<div class="container">
  <div class="contact_form">
 
 <div class="row">
  <div class="col-sm-2">
   
  </div>
  <div class="col-sm-8">
  <h3>Contact form</h3>
  <form onsubmit="return Validation_for_blank()" action="<?=base_url();?>index.php/Welcome/massage" method="GET">
     <input type="text" onclick="" id="name" name="name" placeholder="NAME">
     <input type="text" id="phone" name="phone_number" placeholder="PHONE">
     <input type="text" id="email" name="email" placeholder="EMAIL">
      <input type="hidden" name="home" value="1">
     <textarea rows="4" name="massage" id="textareat" cols="37" placeholder="MESSAGE">

 </textarea>
    <input type="submit" value="Submit">
  </form>
 </div>
 <div class="col-sm-2">
  
 </div>
 
</div>

</div>
</div>

<?php echo $_SESSION['username'] = $username; ?>
<?php echo $email?>
 <?php include('footer.php');?>
 
</body>
</html>
<script type="text/javascript">
 
function Alert_function() {
 alert("Sorry currently this function is not working ");
}
function Validation_for_blank() {
 var name =document.getElementById('name').value;
 if (name=="") 
 {
   alert("Please Enter the NAME");
 }

var phone =document.getElementById('phone').value;
 if (phone=="") 
 {
   alert("Please Enter the phone");
 }
 var email =document.getElementById('email').value;
 if (email=="") 
 {
   alert("Please Enter the Email");
 }

var textareat =document.getElementById('textareat').value;
 if (textareat=="") 
 {
   alert("Please Enter the Desicripation");
 }

}
</script>

<!-- end -->