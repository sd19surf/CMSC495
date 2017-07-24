


<?php include "includes/session.php" ?>
<?php include "includes/header.php" ?>
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
	
		// set session variable
	  $_SESSION['Username'] = $username;
	  $_SESSION['EmailAddress'] = $email;
	  $_SESSION['LoggedIn'] = 1;
	
	  echo "<h1>Success</h1>";
	  echo "<p>We are now redirecting you to the member area.</p>";
	  echo "<meta http-equiv='refresh' content='=2;index.php' />";
	} else {
	  echo "<h1>Error</h1>";
	  echo "<p>Sorry, your account could not be found. Please <a href=\"index.php\">click here to try again</a>.</p>";
	}

   } else {
	?>
      
	<h1>Member Login</h1>
	<p>Thanks for visiting! Please either login below, or <a href="includes/newuser.php">click here to register</a>.</p>
		<form method="post" action="index1.php" name="loginform" id="loginform">
		    <fieldset>
			<label for="username">Username:</label><input type="text" name="username" id="username" /><br />
			<label for="password">Password:</label><input type="password" name="password" id="password" /><br />
			<input type="submit" name="login" id="login" value="Login" />
		    </fieldset>
		</form>

<?php
}
?>

</div>
</body>
</html>