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
<body id="Next_pager">
<?php include 'header.php'; ?>
<div class="Test_Question_view" >
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
   		 <form id="results_form" action="<?=base_url();?>index.php/result_controller/result" method="post" >
<div class="question_container">
	<div class="question_degine" >
	 <span id="heading_of_the_page"><h4>PLEASE SELECT ANY ONE OPATIN FROM FOUR.</h4></span>

   	<?php $i=0;
	foreach ($quesations as $class) 
	{
    $i++;
    ?>            
	<h4> <?php echo $_SESSION['pager']= $i ?>. <?php echo $class->quesations ; ?></h4>
	<input type="hidden" name="string"  value="<?php echo $i;?>">
  <h5>

  	<div class="ans" >
	 	<label for="usr">A:</label><input type="radio" id="a16" name="<?php echo "$i";?>" value="A"> <?php echo  $class->A;?><br/>
	   <label for="usr">B:</label><input type="radio" name="<?php echo "$i";?>" value="B"> <?php echo  $class->B;?><br/>
	 	<label for="usr">C:</label><input type="radio"  name="<?php echo "$i";?>" value="C"> <?php echo  $class->C;?><br/>
	 	<label for="usr">D:</label><input type="radio" name="<?php echo "$i";?>" value="D"> <?php echo  $class->D;?><br/>
	  
	 	
	 	</h5>

<hr>

	<?php
   }

 	?>
 <div class="Next_pager">
  <nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
      <a href="javascript:void(0)" onclick="pager(0)" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php $pager = 0;
    foreach ($quesations_all as $key )
     {  $pager ++; } 
   
   for ($i=1; $i <  $pager/5 ; $i++) 
    { ?>
    <li><a href="javascript:void(0)" onclick="pager('<?php echo $i*5; ?>')"><?php echo $i; ?></a></li>
  <?php }?>

    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
    
  </div>

 
<button type="submit" class="btn btn-success">Submit Test</button>
</div>	
</div>
</div>
<div id="asdsa">
  
</div>
   
</form>
   <?php	}
   	?>

<?php include 'footer.php'; ?>
</body>
</html>
 
 <script type="text/javascript">
    // Select Subject  
  function pager(wheref)
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
          document.getElementById("Next_pager").innerHTML=xmlhttp.responseText;
          }
        }
       
           
           xmlhttp.open("GET", "<?=base_url();?>index.php/Self_test/quesation_view2/5/"+ wheref);
           xmlhttp.send(null); 
      }
      </script>
      <script type="text/javascript">
    // Select Subject  
  function pager2()
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
          document.getElementById("Next_pager").innerHTML=xmlhttp.responseText;
          }
        }
       
           
           xmlhttp.open("GET", "<?=base_url();?>index.php/Self_test/quesation_view2/1/1");
           xmlhttp.send(null); 
      }
      </script>
      
