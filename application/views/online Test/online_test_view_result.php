
<!DOCTYPE html>
<html>
<head>
  <title>Result</title>
    <!-- css file included for css-->
  <link rel="stylesheet" href="<?= base_url();?>assets/css/Onine%20test/online_test_css_result.css">
</head>
<body>
  <?php $this->load->view('header.php'); ?>
<?php foreach ($result as $key) {
  echo $key->obtain_marks; echo "<br/>";
 echo $key->total_marks; echo "<br/>"; 
 echo $key->Wrong; echo "<br/>";
  echo $key->Date; echo "<br/>";
} ?>
<div class="container">
  <div class="question_and_ans">
     <?php $i=0; foreach ($Answer as $class) {$i++;
 $ans_check=$_POST[$i]; ?> 
     
    <?php if ($ans_check=="") {?>
     <h4> <?php echo $i ?>. <?php echo $class->quesations ; ?></h4>
    <h5 style="color: red"> Not attemt</h5> 
      <input type="hidden" name="string"  value="<?php echo $i;?>">
            <h5>
               <div class="ans">
                  <label for="usr">A :</label> <?php echo  $class->A; if ("A"== $class->ANS) {
                   ?> <span class="tick"></span>
                       <?php
                  } ?> <br/>

                     <label for="usr">B :</label> <?php echo  $class->B; if ("B"== $class->ANS) {
                   ?> <span class="tick"></span>
                       <?php
                  }  ?> <br/>
                    <label for="usr"> C:</label> <?php echo  $class->C; if ("C"== $class->ANS) {
                   ?><span class="tick"></span>
                       <?php
                  }?> <br/>
                   <label for="usr">D:</label> <?php echo  $class->D; if ("D" == $class->ANS) {
                   ?>
                      <span class="tick"></span>
                      
                       <?php
                  }?> <br/>
               </div>
              </h5>
              <hr>

  <?php  }
    else
    {?>

 <h4> <?php echo $i ?>. <?php echo $class->quesations ; ?></h4>
          <input type="hidden" name="string"  value="<?php echo $i;?>">
            <h5>
               <div class="ans">
                  <label for="usr">A :</label> <?php echo  $class->A; if ("A"== $class->ANS) {
                   ?> <span class="tick"></span>
                       <?php
                  }
                  elseif ("A"== $ans_check)
                   {?>
                    <span class="cross"></span>
                 <?php  } ?> <br/>
                     <label for="usr">B :</label> <?php echo  $class->B; if ("B"== $class->ANS) {
                   ?> <span class="tick"></span>
                       <?php
                  } elseif ("B"== $ans_check)
                   {?>
                    <span class="cross"></span> 
                 <?php  } ?> <br/>
                    <label for="usr"> C:</label> <?php echo  $class->C; if ("C"== $class->ANS) {
                   ?><span class="tick"></span>
                       <?php
                  }elseif ("C"== $ans_check)
                   {?>
                    <span class="cross"></span>
                 <?php  } ?> <br/>
                   <label for="usr">D:</label> <?php echo  $class->D; if ("D" == $class->ANS) {
                   ?>
                      <span class="tick"></span>
                      
                       <?php
                  } elseif ("D"== $ans_check)
                   {?>
                    <span class="cross"></span>
                 <?php  } ?> <br/>
               </div>
              </h5>
              <hr>


    <?php  } ?>
              
              <?php }?>
              <div class="Re_try_link"> <a href="<?= base_url();?>index.php/Self_test"><b> RE-TRY </b></a>
              </div>
  </div>
</div> 
<?php include 'footer.php'; ?>
</body>
</html>
