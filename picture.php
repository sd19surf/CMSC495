<?php

  $page_title = "Upload";  # changes some of <title> in header.php to 'Upload'
  include("includes/header.php");

?>

<main>
<h1> Upload avatar for map display </h1>
 <form action="includes/upload.php" method="post" enctype="multipart/form-data">
	  Select image to upload:
  	<input type="file" name="fileToUpload" id="fileToUpload">
  	<input type="submit" value="Upload Image" name="submit">
  </form>
</main>

<?php include("includes/footer.php"); ?>
