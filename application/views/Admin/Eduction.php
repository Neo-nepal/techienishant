<!DOCTYPE html>
<html>
<head>
  <title>Eduction</title>
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assetes/css/Eduction/Eduction.css">
 <?php  include 'header.php';?>
<body>
<div class="container">
  <div class="eduction">
    <div class="About_study_contains">
      <h4>WELCOME TO STUDY</h4>
      <p>I believed in studying just because I knew education was a privilege. It was the discipline of study.Let’s face it, studying is not what you want to be doing right now. You want to be playing video games, reading up on your celebrity gossip, hanging out with your friends or watching movies. Even cleaning your room would trump preparing for your exams right about now!</p>
    </div>

    <div id="subject_id">
    <h4><span id="back_button"><a href="<?=base_url();?>index.php/Eduction/fetch_class_from_db"> <img src="<?=base_url();?>assetes/Image/back.svg"> </a></span> Select Class</h4></span>
    <hr>
      <?php foreach ($class as $key) {
      $class_name ="<h5>". $key->class_name."</h5>";
      $class_id = $key->class_id;
      echo ' <a href="javascript:void(0)"><span id="folder" onclick="Select_subject('.$class_id.')"><img src="<?=base_url();?>assites/image/floder.png"  height="100px">'.$class_name.'</span></a>'; }?>
    </div>
  </div>
</div>

<?php  include 'footer.php';?>
</body>
</html>
    <script>
      function Select_subject(class_id)
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
         var queryString = "?class_id=" + class_id ;
           xmlhttp.open("GET", "<?= base_url();?>index.php/Eduction/fetch_subject_from_db"+ queryString, true);
           xmlhttp.send(null); 
      }
  </script>
  <script>
      function Select_topics(subject_id)
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
         var queryString = "?subject_id=" + subject_id ;
           
           xmlhttp.open("GET", "<?= base_url();?>index.php/Eduction/fetch_topics_from_db_admin"+ queryString, true);
           xmlhttp.send(null); 
       
       }
  </script>
  
   
        <script>
      function Select_class()
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
    
           
          xmlhttp.open("GET", "<?= base_url();?>index.php/Eduction/fetch_class_from_db", true);
           xmlhttp.send(null); 
      }
  </script>
