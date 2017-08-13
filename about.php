<?php

  $page_title = "About";  # changes some of <title> in header.php to 'About'
  include("includes/header.php");

?>

<main>
  <div class="container">

    <!-- Heading info -->
    <div class="row">
      <div class="col-md-12">
        <h1>GeoChat <small>An interactive chat experience</small></h1>
      </div>
    </div>
    <br>

    <!-- First Content Area -->
    <div class="row">
      <div class="col-md-7">
        <a href="#">
          <img class="img-responsive" src="./images/MapSnap.png" alt="">
        </a>
        <p class="text-center">A view of an opened message on the Map</p>
      </div>
      <div class="col-md-5">
        <h3 style="margin-top: 0">Application Features</h3>
        <ul class="list-group">
          <li class="list-group-item list-group-item-warning">
            Post Messages to a Public Leaflet Map
          </li>
          <li class="list-group-item list-group-item-warning">
            Upload a Unique User Avatar
          </li>
          <li class="list-group-item list-group-item-warning">
            Real Time Interactivity
          </li>
        </ul>
      </div>
    </div>
    <br><br>
  </div>
</main>

<?php include("includes/footer.php"); ?>
