	<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	?><!DOCTYPE html>
	<html lang="en">
	<head>
			 <meta charset="utf-8">
		<title>Welcome to Admin Portal</title>
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>assetes/css/style.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assetes/css/style.css">
<link rel="stylesheet" href="<?=base_url();?>assetes/css/bootstrap-theme.css">
<link rel="stylesheet" href="<?=base_url();?>assetes/css/bootstrap-theme.css.map">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="<?=base_url();?>assetes/css/bootstrap.css">
<link rel="stylesheet" href="vassites/css/bootstrap.css.map">
<link rel="stylesheet" href="<?=base_url();?>assetes/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="http://localhost/quiz/assetes/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="http://localhost/quiz/assetes/bootstrap.min.jquerys"></script>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="<?= base_url();?>assetes/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="<?= base_url();?>assetes/css/bootstrap-theme.min.css">
		<!-- css file included for css-->
		<link rel="stylesheet" href="<?= base_url();?>assetes/css/Admin/Admin.css">
		<!-- Latest compiled and minified JavaScript -->
	 <script src="<?= base_url();?>assetes/js/bootstrap.min.js"></script>
	 <!-- Js file Include-->
	 <script type="<?= base_url();?>assetes/js/Self_test/class_test_home.js" ></script>
	</head>
	<body style="background-color: #f9f9f9;">
	 <?php  include 'header.php';?>
		<div class="Admin">
		<h2>WELCOMR TO ADMIN!</h2>
			<div class="row">
				<div class="col-xs-2">
					<div class="navbar_new">
					 <div class="collapse navbar-collapse navbar-ex1-collapse">
								<ul class="nav navbar-nav side-nav">
									<li id="imga">
								 <p><img class="img-circle" src="<?= base_url();?>assetes/Image/Sunil_new.jpg" align="middle"> Mujalde</p>
										</li>
										<li class="active"><a  role="tab" data-toggle="tab" href="#Main_admin">MAIN ADMIN</a></li>
										<li><a role="tab" data-toggle="tab" href="#Study_cantains">STUDY CANTAINS</a></li>
										<li><a role="tab" data-toggle="tab" href="#Self_study">SELF TEST</a></li>
										<li><a role="tab" data-toggle="tab" href="#Admin_test">ADMIN TEST</a></li>
									</ul>
							</div>
					</div>
				</div>
				<div class="col-xs-10">
					<div class="tab-content">
						<div id="Main_admin" class="tab-pane fade in active">
							<div> 
								 <?php  $class_count=0;
									foreach ($classes as $class){}
									foreach ($topics as $topic){}
									foreach ($questions as $question){}
									foreach ($subjects as $subject){}
									foreach ($massage_get as $mass ) {}
									foreach ($admin_data as $admin ) {} ?>

								 <div class="totals">
									 <div class="row">
										 <div class="col-xs-6">
													<div class="Total_first_part">
													<h5>OVERALL DETAILS</h5>
													<hr>
											 <div class="row">
									 
													 <div class="col-xs-3" id="totals_col">
												<p>Classes <br>
												<span id="massage"> <?php if(empty($class->class_id)){ echo "0";}else{ echo $class->class_id; } ?></span></p>
											</div>
											<div class="col-xs-3" id="totals_col">
												<p> Subjects<br>
												<span id="massage">  <?php if(empty($subject->subject_id)){ echo "0";}else{ echo $subject->subject_id; } ?></span></p>
											</div>
											<div class="col-xs-3" id="totals_col">
												<p> Topics <br>
												<span id="massage">	 <?php if(empty($topic->topic_id)){ echo "0";}else{ echo $topic->topic_id; }?></span></p>
											</div>
											<div class="col-xs-3" >
												<p> Questions <br>
												 <span id="massage">
													<?php if(empty($question->question_id)){ echo "0";}else{ echo$question->question_id; } ?></span>
												</p>
											</div>
										 
											</div>
											<br>
									 <p>All database details.</p>  
										</div> 
											
										 </div>
										 <div class="col-xs-6">
													<div class="Total_second_part">
													<?php 
							$i=0;
							$activated=0;
							$diactived=0;
							foreach ($admin_data as $data) 
							{ $i++;
							if ($data->activated==1) 
							{
							$activated++;
							}
							else
							{
							$diactived++;
							}
							}?>
													<h5>OVERALL DETAILS</h5>
													<hr>
											 <div class="row">
											 <div class="col-xs-3" id="totals_col">
												<p> Massages <br> <span id="massage">
												<?php if(empty($mass->massage_id)){ echo "0";}else{ echo $mass->massage_id; } ?></span></p>
											 </div>
											<div class="col-xs-3" id="totals_col">
												<p> Students <br> <span id="massage">
												<?php if(empty($admin->id)){ echo "0";}else{ echo $admin->id; } ?></span></p>
											</div>
											
											<div class="col-xs-3" id="totals_col">
												<p> Uesrs <br>
												<span id="massage">	 <?php if(empty($topic->topic_id)){ echo "0";}else{echo $i;}?></span></p>
											</div>
											<div class="col-xs-3" >
												<p> Active users <br>
												 <span id="massage">
													<?php if(empty($question->question_id)){ echo "0";}else{ echo $activated ; } ?></span>
												</p>
											</div>
										 
											</div>
											<br>
									 <p>All database details.</p>  
										</div> 
										 </div>
										
									 </div>
										
									</div>
								</div>
								<hr>
							</div>
							<div id="Self_study" class="tab-pane fade">
								 <div class="row"> 
			<div class="col-md-4">
				<form>
						<div class="form-group">
							<label id="sell">Select Class:</label>
							<select  id="class_id" class="form-control" onchange="select_subject()">	
								<option>Select Class</option>
									<?php foreach ($classes as $class) {?>
										<option value="<?php echo "$class->class_id";?>"><?php echo "$class->class_name";?></option><?php }?>
							</select>
						</div>
					</form>
						<div class="form-group">
							<label id="sell">Select Subject:</label>
							<select  id="subject_id" class="form-control"  onchange="select_topic()">
								<option>Select subject</option>
							</select>
						</div>
						<div class="form-group">
						 <label id="sell">Select Topic:</label>
							<form id="results_form"  action="<?=base_url();?>index.php/Admin_controller/Insert_que_ans" method="POST">
							
								<select  id="topic_id"  class="form-control"  name="neo" onchange="this.form.submit()">
									<option>Select Topic</option>
								</select>
							</form>
						</div>
						<p><b>When you selects all catgaries then it will Automatically submit and you can see your test page. For insert question and Answers</b></p>
				</div>
				<div class="col-md-4">
				<div id="loading_topic">
					<h4>IF YOU WANT INSERT CLASS</h4>
				 <form action="<?=base_url();?>index.php/Insert_controller/Insert_class"   onsubmit="return alerwt()" method="POST">
							<input type="text" name="class" class="form-control" placeholder=" Insert the class"><br/>
								<button type="submit" class="btn btn-success" onclick="this.disabled=true;this.value='Sending, please wait...';this.form.submit();">Submit</button>
						</form>
				</div>
			</div>
			<div class="col-md-4">
			 <h5><b>Immportant</b></h5>
				<ol>
					<li><b>Note:-</b>If you want to insert class,Insert in the text box and cilck on submit.and again select <b>SELF TEST</b>. then you will see your class.</p></li>
					<li><b>Note:-</b>If you want to insert Subject, Select class and Insert in the text box and cilck on submit.and again select <b>SELF TEST</b>. then you will see your subject.</p></li>
					<li><b>Note:-</b>If you want to insert Topic, Select class, Subject and Insert in the text box and cilck on submit.and again select <b>SELF TEST</b>. then you will see your topic.</p></li>
					<li><b>Note:-</b>When you insert Question and Answers check the radio button  where <b>Answer </b> is currect</p></li>
				</ol>
			</div>
		</div>


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
					 
					 xmlhttp.open("GET", "<?= base_url();?>index.php/Admin_controller/search_subject" + queryString, true);
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
					 xmlhttp.open("GET", "<?= base_url();?>index.php/Admin_controller/select_topics" + queryString, true);
					 xmlhttp.send(null); 
				
			}
			</script>
			<script type="text/javascript">
					 $(document).ready(function(){
									 $("#subject_id").on("change",function(){
								 $("#loading_topic").load("<?=base_url();?>index.php/Admin_controller/load_topic");
									 });
									 });
			</script>
			<script type="text/javascript">
					 $(document).ready(function(){
									 $("#class_id").on("change",function(){
								 $("#loading_topic").load("<?=base_url();?>index.php/Admin_controller/Insert_subjects");
									 });
									 });
			</script>

	</div>
<div id="Study_cantains" class="tab-pane fade">
<h3><b>For Study Contains</b></h3>
			<p>This is for Insert study contains like explain ans heading and images.<br/>
			Many operations that can apply on this . DELETE ,UPDATE, INSERT</p>
	<!--<div id="subject_id1">
		
	<table>
	 <tr>
		<?php foreach ($classes as $key) {
		$class_name ="<h5>". $key->class_name."</h5>";
		$class_id = $key->class_id;?> 
		<th style="float: left;"><samp  onclick="Select_subject1('<?php echo $class_id?>')"><p><img src="http://www.aimclasses.esy.es/assetes/Image/Subjects.png"> <?php echo $class_name ; ?> </p></samp><?php } ?></th>
	</tr>

</table>
				
				
						<hr>
	</div>


		<script>
			function Select_subject1(class_id)
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
					document.getElementById("subject_id1").innerHTML=xmlhttp.responseText;
					}
				}
				 var queryString = "?class_id=" + class_id ;
					 xmlhttp.open("GET", "<?= base_url();?>index.php/Admin_controller/fetch_subject_from_db1"+ queryString, true);
					 xmlhttp.send(null); 
			}
	</script>
	<script>
			function Select_topics1(subject_id)
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
					document.getElementById("subject_id1").innerHTML=xmlhttp.responseText;
					}
				}
				 var queryString = "?subject_id=" + subject_id ;
					 
					 xmlhttp.open("GET", "<?= base_url();?>index.php/Admin_controller/fetch_topics_from_db1"+ queryString, true);
					 xmlhttp.send(null); 
			 
			 }
	</script>-->
</div>
							 
								 <div id="Admin_test" class="tab-pane fade">
										 <div class="Admin_test">
										 <div class="row">
												<div class="col-xs-6">
												 <?php   foreach ($Get_all_data as $key2 ) 
											{
												
												}
												foreach ($admin_test_details as $key) 
											 {?>  <?php  } ?>	
												 <div class="Admin_col_total">	
												 <h5>Total Details of Admin test</h5>
												 <hr>
											<div class="row">
										
														<div class="col-xs-3" id="totals_col">
												<p>Classes<br>
												<span> <?php if(empty($key->class_name)){ echo "0";}else{ echo $key->class_name; } ?></span></p>
											</div>
											<div class="col-xs-3" id="totals_col">
												<p> Subjects<br>
												<span >  <?php if(empty($key->subjec_name)){ echo "0";}else{ echo $key->subjec_name; } ?></span></p>
											</div>
											<div class="col-xs-3" id="totals_col">
												<p> Topics <br>
												<span >	 <?php if(empty($key->topic_name)){ echo "0";}else{ echo $key->topic_name; }?></span></p>
											</div>
												<div class="col-xs-3" >
												<p> Questions<br>
												 <span >
												<?php if(empty($key2->question_id)){ echo "0";}else{ echo $key2->question_id; } ?></span></p>
											 </div>
			

											</div>
										
									 </div> 
										
									 <div class="transfer">
											<!--<h5>Data transfertion</h5>  
												<hr>
													<div class="row" id="transfer"> 

											 <div class="col-xs-6">
												 <div class="admin_test_to_self">
												 <p>Admin test to self test</p>
													<button class="btn btn-primary"><a href="<?= base_url();?>index.php/Admin_controller_new/admin_to_self"> Transfer</a></button>
												 </div>
											 </div>
											 <div class="col-xs-6">
												<div class="self_test_to_class_test">
												<p>Self test to Admin test</p>
															<button class="btn btn-primary"><a href="<?= base_url();?>index.php/Admin_controller_new/Transfer_self_to_admin">Transfer</a></button>
												</div>
											 </div>
											
										 </div>-->
											</div>
										
										
										 

										
												</div>
												<div class="col-xs-6">
												 <form action="<?=base_url();?>index.php/insert_controller/insert_admin_data" onsubmit="return alerwt()" method="POST">
													<input type="text" name="class" placeholder="Class" value=" <?php if(empty($key->class_name)){ echo "0";}else{ echo $key->class_name; } ?>"><br>
												 <input type="text" name="Subject" placeholder="Subject" value="<?php if(empty($key->subjec_name)){ echo "0";}else{ echo $key->subjec_name; } ?>"><br>
												 <input type="text" name="Topics" placeholder="Topic" value=" <?php if(empty($key->topic_name)){ echo "0";}else{ echo $key->topic_name; }?>"><br>
												 <input type="text" name="time" value="<?php if(empty($key->Time)){ echo "0";}else{ echo $key->Time; } ?>" placeholder="Time (Example :- 2, 2.5 )Numerical"><br>
												 <input type="submit" value="Insert MCQ Questions">
											</form>
												</div>
												</div>
									 

											 
										 </div>
									</div>
						</div> 
					</div>
				</div>
				</tr>
				</table>
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>	    
		
<?php include 'footer.php'; ?>
</body>
</html>


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
		

			</script>