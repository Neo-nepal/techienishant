    <!-- Latest compiled and minified JavaScript -->
   <script src="<?= base_url();?>assetes/js/bootstrap.min.js"></script>
       <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?= base_url();?>assetes/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="<?= base_url();?>assetes/css/bootstrap-theme.min.css">
    <!--End of Included file-->
    <!--Include presonal file of css-->
    <link rel="stylesheet" href="<?= base_url();?>assetes/css/Home/header.css">

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?= base_url();?>index.php/admin_controller"><img alt="Brand" src="<?= base_url();?>assetes/Image/logo.png" style="width:40px;height:30px;"></a>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li> <a href="#"onclick="return Alert_function()">Admin </a></li> 
          </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav> 
  <script type="text/javascript">
  function Alert_function() {
 alert("Sorry currently this function is not working ");
}
  </script>