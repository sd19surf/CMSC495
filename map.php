<?php

  $page_title = "Map";  # changes some of <title> in header.php to 'Map'
  include("includes/header.php");


if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
 // let the user access the main page
?>
<main>
  <br><br>
  <div class="container">
    <div class="row">
      <div class="col-md-7" id="map">
        <!-- Map Area Here -->
<script>
	var mymap = L.map('map').setView([34.56, 45.46], 13); // change to reflect users current location

	L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
	    maxZoom: 18,
	    id: 'mapbox.streets'
	}).addTo(mymap);

	//function addNewPoint(){
	//	L.marker([mapLat, mapLon]).addTo(map);
	//}

</script>
      </div>
      <div class="col-md-4 col-md-offset-1">

        <!-- textArea here -->
        <form class="" action="" method="">
          <div class="form-group">
            <label for="message-area">Enter a message below:</label>
            <textarea class="form-control" rows="8" id="message-area"></textarea>
          </div>
          <input type="submit" name="button" class="btn btn-primary btn-lg"></button>
        </form>


      </div>
    </div>

  </div>
</main>

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
