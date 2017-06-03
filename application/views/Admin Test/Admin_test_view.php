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
    <link rel="stylesheet" href="http://localhost/techienishant/assets/css/Onine%20test/Online_test_view_question.css">
    <!-- Latest compiled and minified JavaScript -->
   <script src="<?= base_url();?>assetes/js/bootstrap.min.js"></script>
   <!-- Js file Include-->

   <script type="<?= base_url();?>assetes/js/Self_test/class_test_home.js" ></script>
</head>
<body>
<?php $this->load->view('header.php') ?>
<div id="clockdiv">
  <div>
    <span class="hours"></span>
    <div class="smalltext">Hours</div>
  </div>
  <div>
    <span class="minutes"></span>
    <div class="smalltext">Minutes</div>
  </div>
  <div>
    <span class="seconds"></span>
    <div class="smalltext">Seconds</div>
  </div>
</div>
<div class="Test_Question_view">
    <?php
    if (empty($admin_test_data))
     {?>
     <div class="alert alert-info">
        <strong>Info!</strong>Soory, There are no data present.
    </div><?php
   header( "refresh:0;url=".base_url().'index.php/Admin_test_controller');
    }
    else
    {?>
       <form id="results_form" action="<?= base_url();?>index.php/Admin_test_controller/Admin_result" method="post" >
<div class="question_container">
  <div class="question_degine">
   <span id="heading_of_the_page"><h4>PLEASE SELECT ANY ONE OPATIN FROM FOUR.</h4></span>
   <?php foreach ($admin_test as $key ) {
    
   } ?> 

    <?php $i=0;
  foreach ($admin_test_data as $class) 
  {
    $i++;
    ?>            
  <h4> <?php echo $i ?>. <?php echo $class->quesations ; ?></h4>
  <input type="hidden" name="string"  value="<?php echo $i;?>">
  <h5>

    <div class="ans">
    <label for="usr" >A:</label><input type="radio" name="<?php echo "$i";?>" value="A"> <?php echo  $class->A;?><br/>
     <label for="usr">B:</label><input type="radio" name="<?php echo "$i";?>" value="B"> <?php echo  $class->B;?><br/>
    <label for="usr">C:</label><input type="radio"  name="<?php echo "$i";?>"value="C"> <?php echo  $class->C;?><br/>
    <label for="usr">D:</label><input type="radio" name="<?php echo "$i";?>" value="D"> <?php echo  $class->D;?><br/>
    
    
    </h5>

<hr>

  <?php
   }

  ?>

 
<button type="submit" class="btn btn-success">Submit Test</button>
</div>  
</div>
</div>

   
</form>
   <?php  }
    ?>
    <?php  $getTimeStamp =  $key->Ending_time; 
    $date = new \DateTime($getTimeStamp);
  $hourString = $date->format('H');
  $minuteString = $date->format('i');
  $Secondstring = $date->format('s'); 
  $timeGiven =  $hourString *  60 * 60 + $minuteString * 60 + $Secondstring;
    ?>

<?php include 'footer.php'; ?>
</body>
</html>
 
<script type="text/javascript">
  function home_page_alert() {
    alert("curetlly not working")
  }

</script>

<style type="text/css">


#clockdiv{
  font-family: sans-serif;
  color: #fff;
  display: inline-block;
  font-weight: 100;
  text-align: center;
position: fixed;
   margin-left: 1091px;
    margin-top: 27px;
  }

#clockdiv > div{
  padding: 10px;
  border-radius: 3px;
  background: #18bae4;;
  display: inline-block;
}

#clockdiv div > span{
  padding: 15px;
  border-radius: 3px;
  background: #00816A;
  display: inline-block;
}

.smalltext{
  padding-top: 5px;
  font-size: 16px;
}

</style>

<script type="text/javascript">
  function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime,total) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');


  function updateClock() {
    var t = getTimeRemaining(endtime);


    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
     var date = new Date()
  var h = date.getHours();
  var m = date.getMinutes();
  var s = date.getSeconds();
 var now = h *  60 * 60 + m * 60 + s;
    if (now==total) {
      clearInterval(timeinterval);
      alert1();
    }
  }
  var total = total;

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
  
}
function Timer() {
  var date = new Date()
  var h = date.getHours();
  var m = date.getMinutes();
  var s = date.getSeconds();
  var total = '<?php echo $timeGiven ; ?>'
  var now = h *  60 * 60 + m * 60 + s
  var remainig = total - now;
 var timeGiven= remainig;
var deadline = new Date(Date.parse(new Date()) + timeGiven * 1000);
initializeClock('clockdiv', deadline,total);


}
 


 function alert1() {
document.getElementById("results_form").submit();
 }
</script>
<body onload="Timer()"></body>