<?php

  $page_title = "Map";  # changes some of <title> in header.php to 'Map'
  include("includes/header.php");


if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
 // let the user access the main page
?>
<p id="warning"></p>
<body>
<main> 
  <br><br>
  <div class="container">
    <div class="row">
      <div class="col-md-7" id="map">
        <!-- Map Area Here -->

      </div>
      <div class="col-md-4 col-md-offset-1">

        <!-- textArea here -->
        <form class="" action="includes/messages.php" method="post">
          <div class="form-group">
	    <input type="hidden" id="latDB" name="latDB" value="" />
	    <input type="hidden" id="lonDB" name="lonDB" value="" />
            <label for="message">Enter a message below:</label>
            <textarea class="form-control" rows="8" name="message" id="message"></textarea>
          </div>
          <input type="submit" name="button" class="btn btn-primary btn-lg"></button>
        </form>


      </div>
    </div>

  </div>
</main>
</body>
<?php 
} else {
?>
  <main>
	<h1> Not authorized to view this page, please login. </h1>
  </main>
<?php
}
?>
<?php include("includes/footer.php"); ?>
<script>
var latLng;

// geoCoordinates

    if (navigator.geolocation) { // variable scope
      navigator.geolocation.getCurrentPosition(function(position) {
      latLng = {
      lat: position.coords.latitude,
      lng: position.coords.longitude
    };

	//place the coordinates in the hidden input fields of the form

	document.getElementById('latDB').value = latLng.lat;
	document.getElementById('lonDB').value = latLng.lng;
	


 	var mymap = L.map('map').setView([latLng.lat,latLng.lng], 10); 



	L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
	    maxZoom: 18,
	    id: 'mapbox.streets'
	}).addTo(mymap);

	// use ajax to pull information from database make markers
	L.marker([33.91693830900244, -80.4132318869965]).addTo(mymap);
});
}
</script>