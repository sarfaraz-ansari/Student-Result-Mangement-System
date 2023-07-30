<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Signup</title>
   <!-- Font Awesome Cdn Link -->   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   
</head>
<body>
<div>
<?php
    include('Navbar/navbar.php');
    ?>
  <div class="wrapper">
    <h1>Register Yourself!</h1>
    <form action="signupdb.php" method="post" autocomplete="off" name="signup">
    <input type="text" name="Name" id="Name" placeholder="Enter Name" required>
      <input type="Rollno" name="Rollno" id="Rollno"  required placeholder="Enter Roll Number">
      <label for="Year">Year :</label>
      <select name="Year" id="Year" required>
      <option value="" selected="selected">Select year</option>
      </select>
      <label for="Course">Course :</label>
      <select name="Course" id="Course" required>
          <option value="" selected="selected">Please select year first</option>
      </select>
      <label for="Branch">Branch :</label>
      <select name="Branch" id="Branch" required>
          <option value="" selected="selected">Please select course first</option>
      </select>
      <input type="password"  name="Password" id="password" placeholder="Password" required>
      <div class="showpass-container">
      <input type="checkbox" onclick="myFunction()" id="showpass">
      <span class="showpass">Show Password</span>
  </div>
      <button type="submit"  onclick = "return validate()">Submit</button>
    </form>
    <div class="not-member">
    Already registered? <a href="login.php">Login</a>
    </div>
  </div>
</div>
<script src="index.js"></script>
</body>
</html>
