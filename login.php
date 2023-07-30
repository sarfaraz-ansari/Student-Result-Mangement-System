<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>login</title>
   <!-- Font Awesome Cdn Link -->   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   
</head>
<body>
<div>
<?php
    include('Navbar/navbar.php');
    ?>
  <div class="wrapper">
    <h1>Welcome!</h1>
    <form action="logindb.php" method="POST" autocomplete="off">
      <input type="Rollno" name="Rollno" id="Rollno"  required placeholder="Enter Roll Number">
      <input type="password"  name="Password" id="Password" placeholder="Password" required>
      <div class="showpass-container">
      <input type="checkbox" onclick="myFunction()" id="showpass">
      <span class="showpass">Show Password</span>
      </div>
      <p class="recover">
        <a href="#">Forgot Password?</a>
      </p>
      <button type="submit" name="loginbtn">Sign in </button>
    </form>
    <div class="not-member">
      New user? <a href="signup.php">Register Now</a>
    </div>
  </div>
</div>
<script src="index.js"></script>
</body>
</html>
