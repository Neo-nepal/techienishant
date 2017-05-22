<!DOCTYPE html>
<html>
<head>
	<title>Contacts</title>
	 <!-- css file included for css-->
    <link rel="stylesheet" href="<?= base_url();?>assetes/css/Home/Contacts.css">
</head>
<body>
  <?php include('header.php');?>
  <div class="container">
    <div class="Contacts">
     <div class="row">
     	<div class="col-sm-6">
		    <div>
		     	<h1><b>Contact us </b></h1>
		      <p>AIM for seva,<br/>
			    Nemawar, Pin 455339.<br/>
			    Telephone: +9993496181 <br/>
			    E-mail: nepalmujalde@gmail.com</p>
		    </div>
        <div>
          <h3><b>Nishant Sharma(Methematic,Science)  </b></h3>
          <p>AIM for seva,<br/>
          Nemawar, Pin 455339.<br/>
          Telephone: +9993496181 <br/>
          E-mail: nepalmujalde@gmail.com</p>
        </div>
         <div>
          <h3><b>Sanju(Chemastry)  </b></h3>
          <p>AIM for seva,<br/>
          Nemawar, Pin 455339.<br/>
          Telephone: +9993496181 <br/>
          E-mail: nepalmujalde@gmail.com</p>
        </div>
     	</div>
      <div class="col-sm-6">
        <h1><b>Find us</b></h1>
        <div id="map"></div>
          <script>
             function initMap() {
              var uluru = {lat: 22.503394, lng: 76.978164};
              var map = new google.maps.Map(document.getElementById('map'), {
               zoom: 8,
              center: uluru
            });
              var marker = new google.maps.Marker({
              position: uluru,
              map: map
              });
            }
        </script>
        <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzceOBRa91zpjbdWpVwT5UtnVpLZJyXgk&callback=initMap">
        </script>
      </div>
    </div>
    </div>
    </div>
  <?php include('footer.php');?>
</body>
</html>