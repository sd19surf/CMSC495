<?php

  $page_title = "Register";  # changes some of <title> in header.php to 'Register'
  include("includes/header.php");

?>

<main>
  <br><br>
  <h1>New User Registration</h1>
  <br><br>

  <div class="container">
    <div class="col-md-8 col-md-offset-2">

      <!-- New User Registration Form -->
      <form action="includes/register.php" method="post">
        <div class="form-group">
          <label for="firstname">First Name</label>
          <input
            type="text"
            class="form-control"
            id="firstname"
            placeholder="Enter First Name"
            name="firstname">
        </div>
        <div class="form-group">
          <label for="lastname">Last Name</label>
          <input
            type="text"
            class="form-control"
            id="lastname"
            placeholder="Enter Last Name"
            name="lastname">
        </div>
        <div class="form-group">
          <label for="email">Email address</label>
          <input
            type="email"
            class="form-control"
            id="email"
            placeholder="Enter email"
            name="email">
          <small id="emailHelp" class="form-text text-muted">
            We'll never share your email with anyone else.
          </small>
        </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input
            type="text"
            class="form-control"
            id="username"
            placeholder="Choose your username"
            name="username">
        </div>
        <div class="form-group">
          <label for="password1">Password</label>
          <input
            type="password"
            class="form-control"
            id="password1"
            placeholder="Password"
            name="password1">
        </div>
        <div class="form-group">
          <label for="password2">Confirm Password</label>
          <input
            type="password"
            class="form-control"
            id="password2"
            placeholder="Confirm Password"
            name="password2">
        </div>
        <button type="submit" class="btn btn-warning">Submit</button>
      </form>

    </div>
  </div>

</main>

<?php include("includes/footer.php"); ?>
