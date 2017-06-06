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
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>s
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
     <a class="navbar-brand" href="<?= base_url();?>"><img alt="Brand" src="<?= base_url();?>assets/Image/logo.png" style="width:40px;height:30px;"></a>
    </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li> <a href="<?= base_url();?>">Home</a></li>
          <?php  if (!isset($_SESSION['username'])) {?>   <li onclick="myFunction()"> <a href="#" >Online Test</a></li> <?php }else{?> <li> <a href="<?= base_url();?>index.php/Admin_test_controller"> Online Test</a></li>  <?php }?>
             <?php  if (!isset($_SESSION['username'])) {?>   <li onclick="myFunction()"> <a href="#" >Quiz</a></li> <?php }else{?> <li> <a href="<?= base_url();?>index.php/Online_test_controller"> Quiz</a></li>  <?php }?>
            <li> <a href="<?= base_url();?>index.php/About_us" >About us </a></li>
            <?php  if (!isset($_SESSION['username'])) {?> <li onclick="myFunction()"> <a >LogIn</a></li> <?php }else{?> <li> <a href="<?= base_url();?>index.php/auth/logout/"><span class="dropdown"> logout
  <span class="caret"></span>
  <ul class="dropdown-menu">
    <li><a href="#">HTML</a></li>
    <li><a href="#">CSS</a></li>
    <li><a href="#">JavaScript</a></li>
  </ul>
</span></a></li>  <?php }?>
            
          </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>  
<script type="text/javascript">
  function Alert_function() {
 alert("Sorry currently this function is not working ");
}
  
</script>