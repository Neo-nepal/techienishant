<!DOCTYPE html>
<html>
<head>
	<title>Admin Test</title>
	 <!-- css file included for css-->
    <link rel="stylesheet" href="<?= base_url();?>assetes/css/Admin/Admin_ques_ans.css">
</head>
<body>
<?php  include 'header.php';?>
<div class="container">

   <div class="admin_controller_new">
   <h4>Insert Question And thier  four opation the cheack on radio button that is right.</h4>
   	  <div class="row">
<div class="col-md-2">
	
</div>
<div class="col-md-8">
 <div id="container">
     <form action="<?=base_url();?>index.php/Insert_controller/Admin_question_test" onsubmit="return alert_box()" method="POST">
	    <label for="usr">Question:</label>
		<textarea class="form-control" id="question" name="question" value="" ></textarea>
	    <label for="usr">A:</label>
	 	<input type="radio" name="ans" id="ans" value="A"> <input type="text" class="form-control" name="A" >
	 	<label for="usr">B:</label>
	 	<input type="radio" name="ans"  id="ans" value="B"><input type="text"  class="form-control" name="B" >
	 	<label for="usr">C:</label>
	 	<input type="radio"  name="ans"   id="ans" value="C"><input type="text"  class="form-control" name="C" >
	 	<label for="usr">D:</label>
	   <input type="radio" name="ans"  id="ans" value="D"><input type="text"  class="form-control"  name="D" ><br/>
	   <button type="submit" class="btn btn-success" onClick="return ValidateForm(this.form)" onclick="this.disabled=true;this.value='Sending, please wait...';this.form.submit();">Save </button>
	   <button type="reset" class="btn btn-warning" onClick="return ValidateForm(this.form)">Reset</button>
    
       </form>
	</div>	

	
</div>
<div class="col-md-2">
	
</div>
</div>
   </div>
	
</div>
<?php  include 'footer.php';?>
</body>
</html>