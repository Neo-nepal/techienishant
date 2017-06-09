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
     <?php  if (!isset($_SESSION['username'])) {?> <li onclick="myFunction()"> <a >LogIn</a></li> <?php }else{?> <li> <a href="<?= base_url();?>index.php/auth/logout/"><span class="dropdown"> logout
  <span class="caret"></span>
  <ul class="dropdown-menu">
    <li><a href="#">HTML</a></li>
    <li><a href="#">CSS</a></li>
    <li><a href="#">JavaScript</a></li>
  </ul>
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