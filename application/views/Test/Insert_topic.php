<div class="result">
  
 <?php $notated = 0; 
  $wrong = 0; ?>
     <div class="row">
        
        <div class="col-md-10">
            <div class="graphic">
              <div class="row">
                <div class="col-md-4">
                  <table width="100%">
                    <tr>
                      <td>Sr. No</td>
                      <td>Result</td>
                       <td>Currect </td>
                    </tr>
                       <tr>
                    <?php $i=0; foreach ($Answer as $ans) 
                      {$i++;?>
                    <td>  <?php echo  $total_question= $i; ?> </td>   

                    <?php    if (empty($_POST[$i]))
                         {?>
                       <td style="color:red;  text-align: left;"><?php echo "------"; $notated++ ?></td>  
                       <?php }
                        else
                        {
                            $ans_check=$_POST[$i];?>
                   
                    
                      <td>
                       <?php $a= $ans->ANS;if ($ans_check==$a)
                       {?>
                      <ul class="featureList">
                      <li class="tick"></li>
                       </ul>  
                <?php $_SESSION['right']++;
                        }
                       else
                        {?>

                   <ul class="featureList">
                   <li class="cross"></li>
                  </ul>  

                     <?php   $wrong++ ;}?>
                      </td>
                       <td><?php echo $a= $ans->ANS;; ?></td>
                       <?php
                       } ?>
                    </tr>
                      <?php  }
                     
                   ?>
                  </table>
                   <hr>
                   Total <?php echo $_SESSION['right']?>/<?php echo $total_question;?><br/>
                   Prentage <?php echo  $pre= $_SESSION['right']*100/ $total_question; ?>%    
                </div>
                <div class="col-md-4">
                                        
                                         <style>
                          .circle-chart {
                            width: 100%;
                            position: relative;
                            display: inline-block;
                            margin-right: 12em;
                            text-align: center;
                          

                            
                          }
                          .circle-chart__text {
                            position: absolute;
                            width: 100%;
                            height: 100%;
                            text-align: center;
                            left: 0;
                            top: 0;
                            margin-left: 12px;
                            line-height: 4;
                            font-family: sans-serif;
                          }
                        </style>
                        <div class="circle-chart circle-chart--with-track">
                          <?php   echo(round($pre));?>%

                        </div>
                        <div id="qunit"></div>
                        <div id="qunit-fixture"></div>
                        <script src="js/raphael-min.js"></script>
                        <script src="js/circle-chart.js"></script>
                        <script>
                        window.onload = function () {
                          var el, c1;
                          el = document.querySelector('.circle-chart--with-track');
                          c1 = new CircleChart(el, { trackColour: 'rgba(255, 0, 0, 0.66)', fill: '#106c37' });
                          if (window.MutationObserver) {
                            var config = { attributes: false, childList: true, characterData: false };
                            var observer = new MutationObserver(function(mutations) {
                                console.log(c1.inner.innerText);
                                c1.changeValue(parseFloat(c.inner.innerHTML));  
                            });
                            observer.observe(c1.elem, config);
                          }
                        }
                        </script>
                        </div>
                        <div class="col-md-4">
                          <div class="right_of_result">
                          <div id="sing1"><h4><b>Right : <?php echo $_SESSION['right']?></b></h4></div>
                          <div id="sing2"><h4><b> Wrong :<?php echo $wrong ?></b></h4></div>
                          <div id="sing3"><h4><b>Not Attent : <?php echo $notated ?> </b></h4></div>
                           <div id="sing4"><h4><b>Toatl Marks :<?php echo $total_question;?></b></h4></div>
                          </div>
                        </div>

              </div>
            </div>
          </div>
        </div>
  </div>
  <div class="container">
  
</div>
<div class="question_and_ans_massage">
  <h3><b>Please match the Answer with the Question and check out your mistack</b></h3>
</div>

  <?php $i=0;
  foreach ($Answer as $class) 
  {
    $i++;
    ?>  
    <div class="question_and_ans">
     <div class="row"> 
        <div class="col-md-10">
          <h4> <?php echo $i ?>. <?php echo $class->quesations ; ?></h4>
  <input type="hidden" name="string"  value="<?php echo $i;?>">
  <h5>

    <div class="ans">
    <label for="usr">A :</label> <?php echo  $class->A;?><br/>
     <label for="usr">B :</label> <?php echo  $class->B;?><br/>
    <label for="usr">C :</label> <?php echo  $class->C;?><br/>
    <label for="usr">D :</label> <?php echo  $class->D;?><br/>
    
    
    </h5>

<hr>
        </div>
         <div class="col-md-2">
           <div class="ANS">
              <h3> <?php echo $class->ANS ; ?><ul class="featureList">
                      <li class="tick"></li>
                       </ul>  </h3>
           </div>
         
        </div>
       
     </div>          
  
</div>
  <?php
   }

  ?>
  <div class="Re_try_link">
    <a href="<?= base_url();?>index.php/Test_controller/class_test"><b> RE-TRY </b></a>
  </div>
