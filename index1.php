<?php
 	$page_title = "Login";  # changes some of <title> in header.php to 'Login'
	include "includes/header.php"
?>

<main>

<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
 // let the user access the main page

} elseif(!empty($_POST['username']) && !empty($_POST['password']))
{
	$username = $conn->real_escape_string($_POST['username']);
	$password = md5($conn->real_escape_string($_POST['password'])); //funny my password isn't MD5 in the db ha ha ha

	$checklogin = $conn->query("SELECT * FROM user WHERE Username = '".$username."' AND Password = '".$password."'");


	if(mysqli_num_rows($checklogin) == 1){
	   $row = mysqli_fetch_array($checklogin);
	   $email = $row['Email'];
	   $icon = $row['Icon'];
	   $userid = $row['UserId'];

		// set session variable
	  $_SESSION['Username'] = $username;
	  $_SESSION['EmailAddress'] = $email;
	  $_SESSION['Icon'] = $icon;
	  $_SESSION['UserId'] = $userid;
	  $_SESSION['LoggedIn'] = 1;

	  echo "<h1>Success</h1>";
	  echo "<p>We are now redirecting you to the member area.</p>";
	  echo "<meta http-equiv='refresh' content='=2;index1.php' />";
	} else {
	  echo "<h1>Error</h1>";
	  echo "<p>Sorry, your account could not be found. Please <a href=\"index.php\">click here to try again</a>.</p>";
	}

   } else {
	?>

<div class="container">

	<!-- Add GeoChat Logo -->
  <div class="row" style="margin-top: 75px">
    <div class="col-md-6 col-md-offset-3">
      <img src="./images/GeoChatLogo.png" class ="img-responsive" alt="GeoChat's logo">
    </div>
  </div>

	<br><br>
	<!-- Login Title Text -->
	<div class="row">
		<div class="col-md-6 col-md-offset-3 text-center">
			<h1>Member Login</h1>
			<br>
			<p>Thanks for visiting! Please either login below, or
				<a href="./newuser.php">click here to register</a>.
			</p>
		</div>
	</div>

	<!-- Login Form -->
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<form method="post" action="index1.php" name="loginform" id="loginform">
				<br>
				<div class="form-group">
					<label for="username">Username</label>
					<input
            type="text"
            class="form-control"
            id="username"
            placeholder="Enter your username here"
            name="username" />
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input
            type="password"
            class="form-control"
            id="password"
            placeholder="Enter your password here"
            name="password" />
				</div>
				<input type="submit" class="btn btn-success btn-lg" name="login" id="login" value="Login"/>
			</form>
		</div>
	</div>
</div>

</main>
<?php
	include('includes/footer.php');
}
?>


</body>
</html>
