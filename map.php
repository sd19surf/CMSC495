<?php

  $page_title = "Map";  # changes some of <title> in header.php to 'Map'
  include("includes/header.php");
  include("includes/retrieve.php");


if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
 // let the user access the main page
 //print $_SESSION['Messages']; // Built into a session variable for future add-ons if needed.
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

    <div id="testing">

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


	// could add options here for different maps but could be
	// mentioned as a future add-on

	L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
	    maxZoom: 18,
	    id: 'mapbox.streets'
	}).addTo(mymap);

	// put all the information to loop through in $_SESSION['Messages']
	// this is the place to add the markers to the map and link the photos.

  // Will need to check if this line is just switching JSON to string and back again needlessly...
  var userMessages = JSON.parse(<?php echo json_encode($_SESSION['Messages']);?>);

  userMessages.forEach(function(message) {
    // If there is a lat and lon, then add the marker and its message.
    if (message.lat != null && message.lon != null) {

	
      L.marker([message.lat, message.lon]).addTo(mymap)
        .bindPopup('<img src="'+message.Icon+'" width="30" height="25"><b> '+message.username+'</b><br> '+message.messages);
    }
  });

});
}

</script>
