    <!-- Latest compiled and minified JavaScript -->
   <script src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
       <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap-theme.min.css">
    <!--End of Included file-->
    <!--Include presonal file of css-->
    <link rel="stylesheet" href="<?= base_url();?>assets/css/Home/header.css">
    <!-- END-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
<div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
    <i class="fa fa-bars"></i>
    </button>
    <a class="navbar-brand page-scroll" href="index.html">
 ONLINE TEST </a>
  </div>
  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
    <ul class="nav navbar-nav">
      <li>
      <a href="<?php echo base_url();?>">Home</a>
      </li>
      <li>
     <?php  if (!isset($_SESSION['username'])) {?>   <li onclick="myFunction()"> <a href="#" >Online Test</a></li> <?php }else{?> <li> <a href="<?= base_url();?>index.php/Admin_test_controller"> Online Test</a></li>  <?php }?>
      </li>
      <li>
      <?php  if (!isset($_SESSION['username'])) {?>   <li onclick="myFunction()"> <a href="#" >Quiz</a></li> <?php }else{?> <li> <a href="<?= base_url();?>index.php/Online_test_controller"> Quiz</a></li>  <?php }?>
      </li>
      <li>
     <?php  if (!isset($_SESSION['username'])) {?> <li onclick="myFunction()"> <a >LogIn</a></li> <?php }else{?> <li> <a href="#"><span class="dropdown">
<span onclick="newabc()" class="dropbtn"><?php echo $_SESSION['username']; ?><samp class="caret"></samp></span>
  <div id="myDropdown" class="dropdown-content">
    <a href="#home">Profile</a>
    <a href="#about">About Test</a>
    <a href="<?= base_url();?>index.php/auth/logout/">LogOut</a>
  </div>

</span></a></li>  <?php }?>
      </li>
    </ul>
  </div>
  <!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>
</nav>  
<script type="text/javascript">
  function Alert_function() {
 alert("Sorry currently this function is not working ");
}
  
</script>
<!DOCTYPE html>
<html>
<head>
<style>


.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}
</style>


<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function newabc() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<script type="text/javascript">
        
        $(window).scroll(function() {
    if ($(".navbar").offset().top >0) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});


      </script>
      <style type="text/css">
        /* Aries v1.0 - by WowThemes.net */
body {
  width:100%;
  height:100%;
  font-family:Open Sans,"Helvetica Neue",Helvetica,Arial,sans-serif;
  color:#18bae4;
  background-color:#f9f9f9;
   font-weight:300;
}
html {
  width:100%;
  height:100%;
}
h1,h2,h3,h4,h5,h6 {
  margin:0 0 35px;
  text-transform:uppercase;
  font-family:Montserrat,"Helvetica Neue",Helvetica,Arial,sans-serif;
  font-weight:700;
  letter-spacing:1px;
}
p {
  margin:0 0 25px;
  font-size:18px;
  line-height:1.5;
}
@media(min-width:768px) {
  p {
    margin:0 0 35px;
    font-size:20px;
    line-height:1.6;
  }
}
a {
  color:inherit;
  -webkit-transition:all .2s ease-in-out;
  -moz-transition:all .2s ease-in-out;
  transition:all .2s ease-in-out;
}
a:hover,a:focus {
  text-decoration:none;
  color:inherit;
}
.light {
  font-weight:400;
}
.navbar-custom {
  margin-bottom:0;
  border-bottom:1px solid rgba(255,255,255,.3);
  text-transform:uppercase;
  font-family:Montserrat,"Helvetica Neue",Helvetica,Arial,sans-serif;
  background-color:white;
}
.navbar-custom .navbar-brand {
  font-size:20px;
  text-transform:none;
  letter-spacing:1px;
}
.navbar-custom .navbar-brand:focus {
  outline:0;
}
.navbar-custom .navbar-brand .navbar-toggle {
  padding:4px 6px;
  font-size:16px;
  color:#fff;
}
.navbar-custom .navbar-brand .navbar-toggle:focus,.navbar-custom .navbar-brand .navbar-toggle:active {
  outline:0;
}
.navbar-custom a {
}
.navbar-custom .nav li a {
  -webkit-transition:background .3s ease-in-out;
  -moz-transition:background .3s ease-in-out;
  transition:background .3s ease-in-out;
}
.navbar-custom .nav li a:hover {
  outline:0;
  color:#1ba39c;
  background-color:transparent;
}
.navbar-custom .nav li a:focus,.navbar-custom .nav li a:active {
  outline:0;
  background-color:transparent;
}
.navbar-custom .nav li.active {
  outline:0;
}
.navbar-custom .nav li.active a {
  color:#1ba39c;
}
.navbar-custom .nav li.active a:hover {
  color:#1ba39c;
}
@media(min-width:768px) {
  .navbar-custom {
    padding:20px 0;
    border-bottom:0;
    font-size:13px;
    background:0 0;
    -webkit-transition:background .5s ease-in-out,padding .5s ease-in-out;
    -moz-transition:background .5s ease-in-out,padding .5s ease-in-out;
    transition:background .5s ease-in-out,padding .5s ease-in-out;
  }
     .navbar-custom.top-nav-collapse {
     padding:0;
    border-bottom:1px solid rgba(255,255,255,.3);
    color:#333;
      background:#fff;
  }
  .navbar-custom.top-nav-collapse a {
    color:;
    display:inline-block;
  }
}

      </style>
    <!-- Latest compiled and minified JavaScript -->
   <script src="<?= base_url();?>assetes/js/bootstrap.min.js"></script>
       <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?= base_url();?>assetes/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="<?= base_url();?>assetes/css/bootstrap-theme.min.css">
    <!--End of Included file-->
    <!--Include presonal file of css-->
    <link rel="stylesheet" href="<?= base_url();?>assetes/css/Home/header.css">
    <!-- END-->

  <script src="<?= base_url();?>assetes/js/jQuery_min.js"></script>
  <script src="<?= base_url();?>assetes/js/bootstrap.min.js"></script>
      <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <a class="navbar-brand" href="<?= base_url();?>"><img alt="Brand" src="<?= base_url();?>assetes/Image/logo.png" style="width:40px;height:30px;"></a>
    </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li> <a href="<?= base_url();?>">Home</a></li>
            <li> <a href="<?= base_url();?>index.php/About_us" >About us </a></li>
            <li> <a href="<?= base_url();?>index.php/Contact_us">Contact Us</a></li> 
            <li> <a href="#" id="success-alert" onclick="return Alert_function()">Login</a></li> 
          </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>  
<script type="text/javascript">
  function Alert_function() {
 alert("Sorry currently this function is not working ");
}
  
</script>