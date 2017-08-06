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
        <small style="padding-left: 50px">A view of an opened message on the Map</small>
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

    <!-- Second Content Area -->
    <div class="row">
      <div class="col-md-7">
        <a href="#">
          <img class="img-responsive" src="./images/MapSnap.png" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3 style="margin-top: 0">More Stuff (change this banner)</h3>
        <ul class="list-group">
          <li class="list-group-item list-group-item-warning">
            maximus, ut vulputate justo ornare. Ut porta
          </li>
          <li class="list-group-item list-group-item-warning">
            placerat massa dolor, non euismod arcu
          </li>
          <li class="list-group-item list-group-item-warning">
            ut ornare erat fermentum feugiat
          </li>
        </ul>
      </div>
    </div>

  </div>
</main>

<?php include("includes/footer.php"); ?>
