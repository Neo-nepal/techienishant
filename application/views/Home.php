<!DOCTYPE html>
<html>
<head>
 <title>Super | Vision</title>
    <!-- css file included for css-->
    <link rel="stylesheet" href="<?= base_url();?>assetes/css/Home/welcome_message.css">

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
    <div class="about_class" >
     <div class="row">
       <div class="col-sm-8">
        <h4>About classes</h4>
        <hr>
       <p>You can manage every things using this , pandding work and upcomng work and events.this is the upper level of school level and college level.Extar knowledage for student. The small project AFS classes nearly we will develop this project with the more alternative features. we'll add test mange ment system, it wil help to school's and coating class's test result mangement section dividation. it will make your class easy.
        </p>
      </div>
      <div class="col-sm-4">
        <img src="<?= base_url();?>assetes/Image/student.jpg">
      </div>
     </div>
    </div>
  <div class="for_you">
  <h4 style="color:#18bae4">FOR YOU</h4>
  <hr>
   <div class="row">
    </div>
    <div class="row">
    <div class="col-sm-6" id="for_you_cloum">
     <a href="<?= base_url();?>index.php/Self_test"> <img src="<?= base_url();?>assetes/Image/self_test.jpg"></a>
      <h4>Pratice set</h4>
      <p>Test your self with the study and take test own.this is the upper level of school level and college level.Extar knowledage for student.
The small project AFS classes nearly we will develop this project with the more alternative features. we'll add test mange ment system, it wil help to school's and coating class's test result mangement section dividation. it will make your class easy.
 <a  href="<?= base_url();?>index.php/Self_test">Let's GO..</a></p>
     </div>
      <div class="col-sm-6" id="for_you_cloum">
       <a href="<?= base_url();?>index.php/Admin_test_controller"> <img src="<?= base_url();?>assetes/Image/test_site.png"></a>
      <h4> Admin Test</h4>
      <p>This test will taken by Teacher with time priod .this is the upper level of school level and college level.Extar knowledage for student.
The small project AFS classes nearly we will develop this project with the more alternative features. we'll add test mange ment system, it wil help to school's and coating class's test result mangement section dividation. it will make your class easy.
 <a  href="<?= base_url();?>index.php/Welcome/Admin_test_view">Let's GO..</a></p>
    </div>
    </div>
  </div>
</div>


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

