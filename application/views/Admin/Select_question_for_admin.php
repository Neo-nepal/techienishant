<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Queston view</title>
		<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?= base_url();?>assetes/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="<?= base_url();?>assetes/css/bootstrap-theme.min.css">
    <!-- css file included for css-->
    <link rel="stylesheet" href="<?= base_url();?>assetes/css/Self_test/test_question_view.css">
    <!-- Latest compiled and minified JavaScript -->
   <script src="<?= base_url();?>assetes/js/bootstrap.min.js"></script>
   <!-- Js file Include-->
   <script type="<?= base_url();?>assetes/js/Self_test/class_test_home.js" ></script>
</head>
<body>
<?php include 'header.php'; ?>
<div class="Test_Question_view">
		<?php
   	if (empty($quesations))
   	 {?>
   	 <div class="alert alert-info">
        <strong>Info!</strong>Soory, There are no data present.
    </div><?php
   header( "refresh:2;url=class_test");
   	}
   	else
   	{?>
   		 <form id="results_form" action="<?=base_url();?>index.php/Admin_controller_new/checkbox" method="post" >
<div class="question_container">
	<div class="question_degine">
	 <span id="heading_of_the_page"><h4>PLEASE SELECT ANY ONE OPATIN FROM FOUR.</h4></span>

   	<?php $i=0;
	foreach ($quesations as $class) 
	{
    $i++;
    ?>            
	<h4><input type="checkbox" name="checkbox<?php echo $i?>" value="1"> <?php echo $i ?>. <?php echo $class->quesations ; ?></h4>
	<input type="hidden" name="question_id<?php echo $i?>"  value="<?php echo $class->question_id;?>">
  
  <h5>

  	<div class="ans">
	 	<label for="usr" >A:</label> <?php echo  $class->A;?><br/>
	   <label for="usr">B:</label> <?php echo  $class->B;?><br/>
	 	<label for="usr">C:</label> <?php echo  $class->C;?><br/>
	 	<label for="usr">D:</label><?php echo  $class->D;?><br/>
	  
	 	
	 	</h5>

<hr>

	<?php
   }

 	?>
<input type="text" name="string"  value="<?php echo $i;?>">
 
<button type="submit" class="btn btn-success">Submit Test</button>
</div>	
</div>
</div>

   
</form>
   <?php	}
   	?>

<?php include 'footer.php'; ?>
</body>
</html>
 