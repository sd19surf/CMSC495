<!DOCTYPE html>
<html>
  <!-- This <head> will be used on every page that includes this header file -->
  <head>
    <meta charset="utf-8">
    <title>GeoChat - <?php echo $page_title; ?></title>

    <!-- Using CDN for now - can include local files later or scrap bootstrap altogether -->
    <script src="./scripts/leaflet.js"></script>
    <script src="./scripts/jquery-3.2.1.min.js"></script>
    <script src="./scripts/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./styles/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/leaflet.css">
    <link rel="stylesheet" href="./styles/stylesheet.css">

   <!--- Include session.php to keep the database connection open for all --->

	<?php include "session.php"; ?>

  </head>

  <!-- Open the body section - to be closed in the footer.php include -->
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand - GeoChat with logo -->
        <div class="navbar-header">
          <a class="navbar-brand" href="./index.php">GeoChat</a>
        </div>

        <!-- Links to the navbar, 'floated' left -->
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="./map.php">Map</a></li>
            <li><a href="./about.php">About</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
	     <?php if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])){
			$displayName = $_SESSION['Username'];
			$displayImage = $_SESSION['Icon'];
		   } else {
			$displayName = "[USER]";
			$displayImage = "images/blank_profile.gif";
		   }
	      ?>

            <p class="navbar-text"><img src="<?=$displayImage?>" width="25px" height="30px">Signed in as <?=$displayName?></p>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Profile <span class="caret"></span>
              </a>
	    <?php if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])){?>
              <ul class="dropdown-menu">
                <li><a href="#">View my Messages</a></li>
                <li><a href="picture.php">Upload Avatar</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="includes/logout.php">Logout</a></li>
              </ul>
	    <?php } else { ?>
		<ul class="dropdown-menu">
		  <li><a href="index.php">Login</a></li>
		</ul>
	     <?php } ?>
            </li>
            <li><a href="./newuser.php">Register</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
