<?php

  $page_title = "Map";  # changes some of <title> in header.php to 'Map'
  include("includes/header.php");

?>

<main>
  <br><br>
  <div class="container">
    <div class="row">
      <div class="col-md-7" id="map">
        <!-- Map Area Here -->
        <h1>map</h1>
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

<?php include("includes/footer.php"); ?>
