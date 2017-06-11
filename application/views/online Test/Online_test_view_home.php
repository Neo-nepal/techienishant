
	<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	?><!DOCTYPE html>
	<html lang="en">
	<head>
       <meta charset="utf-8">
		<title>Welcome to Class Test</title>
		<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?= base_url();?>assetes/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="<?= base_url();?>assetes/css/bootstrap-theme.min.css">
    <!-- css file included for css-->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/Onine%20test/Online_test_home.css">
    <!-- Latest compiled and minified JavaScript -->
   <script src="<?= base_url();?>assetes/js/bootstrap.min.js"></script>
   <!-- Js file Include-->
   <script type="<?= base_url();?>assetes/js/Self_test/class_test_home.js" ></script>
	</head>
	<body>
   <?php $this->load->view('header.php'); ?>
    <div class="class_home_container">  
	<div class="container">
	<br/>
	<h3 class="head_of_select_catagaries"> <h3>PLEASE SELECT CATGARIES FOR TEST </h3>
	<p>This is for self test you can choose every catgaries for test then you can start thes then automatically result will be 
	gengreted.Then we will see our result and check the answer..</p>
	<!-- This class retrive from the data base   onchange submit it-->
		<div class="row">
			<div class="col-sm-4"></div>
			  <div class="col-sm-4">
			   	<form>
	        <div class="form-group">
		         <label id="sell">Select Subject:</label>
				    <select  id="subject_id" class="form-control"  onchange="select_topic()">	
		        <option>Select Subject</option>
		        <?php foreach ($search_subject as $subjects) {?>
	           <option value="<?php echo "$subjects->subject_id";?>"><?php echo "$subjects->suject_name";?></option><?php }?>
				    </select>
			    </div>
			    </form>
			  </div>
			  <div class="col-sm-4">
			  </div>
	  </div>
	  <!-- select the topics -->
	  <div class="row">
			<div class="col-sm-4"></div>
			  <div class="col-sm-4">
			    <div class="form-group">
	          <label id="sell">Select Topic:</label>
	            <form id="results_form"  action="<?=base_url();?>index.php/Online_test_controller/quesation_view/5/0" method="post">
	              <select  id="topic_id"  class="form-control"  name="neo" onchange="this.form.submit()">
	   			        <option>Select Topic</option>
	              </select>
              </form>
          </div>
				</div>
			<div class="col-sm-4"></div>
		</div>
		<p><b>When you selects all catgaries then it will Automatically submit and 
	you can see your test page.</b></p>
	</div>
</div>
   <?php $this->load->view('footer.php'); ?>
</body>
</html>
	
	<script type="text/javascript">
		// Select Subject  
	function select_subject()
		   {
			  var xmlhttp;
			  if (window.XMLHttpRequest)
	  		  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  		   xmlhttp=new XMLHttpRequest();
	 		  }
			  else
	  		  {// code for IE6, IE5
	  		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	 	 	  }
			  xmlhttp.onreadystatechange=function()
	  		  {
	  		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	    	  {
	    	  document.getElementById("subject_id").innerHTML=xmlhttp.responseText;
	    	  }
			  }
			 var class_id = document.getElementById('class_id').value;

	         var queryString = "?class_id=" + class_id ;
	         
	         xmlhttp.open("GET", "<?= base_url();?>index.php/Online_test_controller/search_subject" + queryString, true);
	         xmlhttp.send(null); 
		 	}
// Select topic
	function select_topic()
		   {
			  var xmlhttp;
			  if (window.XMLHttpRequest)
	  		  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  		   xmlhttp=new XMLHttpRequest();
	 		  }
			  else
	  		  {// code for IE6, IE5
	  		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	 	 	  }
			  xmlhttp.onreadystatechange=function()
	  		  {
	  		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	    	  {
	    	  document.getElementById("topic_id").innerHTML=xmlhttp.responseText;
	    	  }
			  }

			  var subject_id = document.getElementById('subject_id').value;
	         var queryString = "?subject_id=" + subject_id ;
	         xmlhttp.open("GET", "<?= base_url();?>index.php/Online_test_controller/select_topics" + queryString, true);
	         xmlhttp.send(null); 
			  
			}</script>
			