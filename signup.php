<?php
    include "./classes/signup-contr.classes.php";
  
    
?>

<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="static/css/signup.css" />
  </head>
  <body>
    <div class="container">
      <div class="title">Registration</div>
      <form action="includes/signup.inc.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">User Name</span>
            <input
              type="text"
              name="uid"
              placeholder="Enter your username"
              required
            />
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input
              type="text"
              name="email"
              placeholder="Enter your email"
              required
            />
          </div>

          <div class="input-box">
            <span class="details">Password</span>
            <input
              type="text"
              name="pwd"
              placeholder="Enter your password"
              required
            />
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input
              type="text"
              name="pwdrepeat"
              placeholder="Confirm your password"
              required
            />
          </div>
        </div>

        <div class="button">
          <input type="submit" class="b" value="Register" />
        </div>
      </form>
    </div>
  </body>
</html>
