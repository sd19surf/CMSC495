<?php

  $page_title = "Upload";  # changes some of <title> in header.php to 'Upload'
  include("includes/header.php");

?>

<main>
  <div class="container">
    <div class="row">
      <br><br>
      <h1 class="text-center"> Upload avatar for map display </h1>
      <br><br>
      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
        <form action="upload.php" method="post" enctype="multipart/form-data">

          <p>Select image to upload from your local files</p><br>
          <label class="btn btn-warning btn-lg btn-block" for="fileToUpload">
            <input type="file" name="fileToUpload" id="fileToUpload" style="display:none"
            onchange="$('#file-info').html(this.files[0].name)">Browse Images
          </label>
          <br>
          <input type="submit" class="btn btn-success btn-lg btn-block" value="Upload Avatar" name="submit">
          <br>
          <p>File Selected: <span class="label label-default label-md" id="file-info">None</span></p>
        </form>
      </div>
    </div>
  </div>
</main>

<?php include("includes/footer.php"); ?>
