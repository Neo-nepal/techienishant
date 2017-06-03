
<!DOCTYPE html>
<html>
<head>
  <title>Result</title>
    <!-- css file included for css-->
  <link rel="stylesheet" href="<?= base_url();?>assets/css/Onine%20test/online_test_css_result.css">
</head>
<body>
  <?php $this->load->view('header.php'); ?>
   <?php $i=0; $notated = 0; 
                  $wrong = 0;  foreach ($Answer as $ans) {$i++;?>
                    <td>  <?php   $total_question= $i; ?> </td> 
                    <?php if (empty($_POST[$i])){?>
                    <td style="color:red;  text-align: left;"><?php  $notated++ ?></td>  
                    <?php }else{ $ans_check=$_POST[$i];?>
                    <td><?php $a= $ans->ANS;if ($ans_check==$a){?><?php $_SESSION['right']++;}else{?><?php   $_SESSION['wrong']++ ;}?></td>
                   <td><?php  $a= $ans->ANS;; ?></td><?php } ?>
                    </tr>
                      <?php  }?>
    <div class="container">
      <div class="result">
        <div class="result_details">
         <div class="Total_first_part">
          <div class="row">
            <div class="col-xs-3" id="totals_col">
              <p>Total  <br>
                        <span id="massage"> <?php if(empty($total_question)){ echo "0";}else{ echo $total_question; } ?></span></p>
                      </div>
                      <div class="col-xs-3" id="totals_col">
                        <p> Currect<br>
                        <span id="massage">  <?php if(empty( $_SESSION['right'])){ echo "0";}else{ echo $_SESSION['right']; } ?></span></p>
                      </div>
                      <div class="col-xs-3" id="totals_col">
                        <p> Wrong <br>
                        <span id="massage">  <?php if(empty($_SESSION['wrong'])){ echo "0";}else{ echo $total_question- $_SESSION['right']; }?></span></p>
                      </div>
                       <div class="col-xs-3" id="totals_col2">
                        <p> Number <br>
                        <span id="massage">  <?php echo  $pre= $_SESSION['right']*100/ $total_question; ?>% </span></p>
                      </div>
                    </div>
                    <hr>
                    <p>Best of luck</p>

         </div>
        </div>
      </div>
    </div>
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
<div id="ss" value= "11">11</div>

    <?php  } ?>
              
              <?php }?>
              <div class="Re_try_link"> <a href="<?= base_url();?>index.php/Self_test"><b> RE-TRY </b></a>
              </div>
  </div>
</div> 
<?php include 'footer.php'; ?>
</body>
</html>
<script type="text/javascript">
<p id="demo">Click the button to change the text in this paragraph.</p>

<button onclick="myFunction()">Try it</button>

<script>
function myFunction() {
    document.getElementById("demo").innerHTML = "Hello World";
}
</script>