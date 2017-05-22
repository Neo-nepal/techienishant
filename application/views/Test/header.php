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