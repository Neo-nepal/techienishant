<!DOCTYPE html>
<html>
<head>
	<title>Transfer</title>
	  <link rel="stylesheet" href="<?= base_url();?>assetes/css/Admin/Transfer_admin_to_self.css">
	  <link rel="stylesheet" href="<?=base_url();?>assites/css/bootstrap.min.css">
<script src="<?=base_url();?>assetes/js/jQuery_min.js"></script>
<script src="<?=base_url();?>assetes/js/bootstrap.min.js"></script>
		<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?= base_url();?>assetes/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="<?= base_url();?>assetes/css/bootstrap-theme.min.css">
    <!-- css file included for css-->
    <link rel="stylesheet" href="<?= base_url();?>assetes/css/Admin/Admin.css">
    <!-- Latest compiled and minified JavaScript -->
   <script src="<?= base_url();?>assetes/js/bootstrap.min.js"></script>
   <!-- Js file Include-->
</head>
<body>
 <?php  include 'header.php';?>
 <div class="container">
   <div class="Transfer_admin_to_self">
     <div class="row">
       
       <div class="col-xs-4">
       	 <form>
		        <div class="form-group">
					    <select  id="class_id" class="form-control" onchange="select_subject()">	
			          <option>Select Class</option>
			            <?php foreach ($classes as $class) {?>
		                <option value="<?php echo "$class->class_id";?>"><?php echo "$class->class_name";?></option><?php }?>
					    </select>
				    </div>
			    </form>
			    <div class="form-group">
	   		    	<select  id="subject_id" class="form-control"  onchange="select_topic()">
	   		      	<option>Select subject</option>
		          </select>
	          </div>
	         <div class="form-group">
	            <form id="results_form"  action="<?=base_url();?>index.php/Admin_controller_new/Transfer_admin_to_self" method="POST">
	            
	              <select  id="topic_id"  class="form-control"  name="neo" onchange="this.form.submit()">
	   			        <option>Select Topic</option>
	              </select>
              </form>
            </div>
            <p><b>When you selects all catgaries then it will Automatically submit and you can see your test page. For insert question and Answers</b></p>
       </div>
       <div class="col-xs-4">
       		<div id="loading_topic">
					<h4>IF YOU WANT INSERT CLASS</h4>
				 <form action="<?=base_url();?>index.php/Insert_controller/Insert_class_admin"   onsubmit="return alerwt()" method="POST">
	            <input type="text" name="class" class="form-control" placeholder=" Insert the class"><br/>
	              <button type="submit" class="btn btn-success" onclick="this.disabled=true;this.value='Sending, please wait...';this.form.submit();">Submit</button>
	          </form>
        </div>
       </div>
       <div class="col-xs-4">
       <div class="tatos">
       		<h4>Transfer Questions</h4>
       		<p>please select class ,subjects and topics where you want to transfer questions and answers.</p>
       		<p><b>Note:-1</b> If there are no any class ,subject and topic insert in text box and submit it.then again select class topic and subject and you will find the all topic and subject , class you want.</p>
       </div>
       </div>
     	
     </div>
   	
   </div>
</div>
			

<?php include 'footer.php'; ?>
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
	         
	         xmlhttp.open("GET", "<?= base_url();?>index.php/test_controller/search_subject" + queryString, true);
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
	         xmlhttp.open("GET", "<?= base_url();?>index.php/test_controller/select_topics" + queryString, true);
	         xmlhttp.send(null); 
			  
			}
			</script>
			<script type="text/javascript">
				   $(document).ready(function(){
                   $("#subject_id").on("change",function(){
                 $("#loading_topic").load("<?=base_url();?>index.php/Admin_controller_new/load_topic_admin");
                   });
                   });
			</script>
      <script type="text/javascript">
				   $(document).ready(function(){
                   $("#class_id").on("change",function(){
                 $("#loading_topic").load("<?=base_url();?>index.php/Admin_controller_new/Insert_subjects_admin");
                   });
                   });
			</script>


			<script type="text/javascript">
				$(function(){
    $('[data-toggle="tooltip"]').tooltip();
    $(".side-nav .collapse").on("hide.bs.collapse", function() {                   
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
    });
    $('.side-nav .collapse').on("show.bs.collapse", function() {                        
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");        
    });
})    
    
