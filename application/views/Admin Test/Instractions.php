<!DOCTYPE html>
<html>
<head>
	<title>Instractions</title>
	  <link rel="stylesheet" href="<?= base_url();?>assetes/css/Admin_test/Instractions.css">
</head>
<body>
<?php $this->load->view('header.php') ?>
<div class="container">
  <div class="Instractions">
    <div class="Instractions1">
    	 <?php foreach ( $admin_test_details as $key ) {
    
   } ?> 
     <h4>Please read every Instractions care fully.</h4>
     <ul>
     	<li> Your given Time is : -<?php if(!empty($key->Time)) {echo $key->Time; echo " Hours";} else echo "Not given";?></li>
     	<li> Your Class name is : -<?php if(!empty($key->class_name)) {echo $key->class_name;} else echo "Not given";?></li>
     	<li> Your Subject  name is : -<?php if(!empty($key->subjec_name)) {echo $key->subjec_name;} else echo "Not given";?></li>
     	<li> Your Topic name  is : -<?php if(!empty($key->topic_name)) {echo $key->topic_name; echo " Hours";} else echo "Not given";?></li>
     <li>Make sure your intenet connection before Test</li>
     <li><b>Step 1.</b> Do Not Use the "Back" Button on Your Browser During the Test once you have begun taking the quiz. Instead, use the scroll bar to move back to check earlier questions.
     Don't close the window of the test for any reason.</li>
     <li><b>Step 2. </b> Review All of Your Answers Before Submitting the Quiz. Make sure you have not accidentally changed your response to a question or made a typographic mistake.</li>
     <li><b>Step 3. </b> When you are satisfied with the result make sure you finish by clicking the SUBMIT button at the bottom of the screen. Click the Submit Button ONLY ONCE!</li>
     </ul>
<button type="button" class="btn btn-primary"> <a href="<?= base_url();?>index.php/Admin_test_controller/Admin_test_view"> Strat test </a></button>
    </div>
  
  </div>
	
</div>
<?php include 'footer.php'; ?>
</body>
</html>