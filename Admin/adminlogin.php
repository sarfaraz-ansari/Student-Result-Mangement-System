<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>login</title>
   <!-- Font Awesome Cdn Link -->   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   <link rel="stylesheet" href="../style.css" />
</head>
<body>
<div >

  <div class="wrapper">
    <h1>Welcome Back!</h1>
    <form action="adminlogindb.php" method="post" autocomplete="off">
      <input type="Email" name="Email" id="Email"  required placeholder="Email">
      <input type="password"  name="Password" id="Password" placeholder="Password" required>
      <div class="showpass-container">
      <input type="checkbox" onclick="myFunction()" id="showpass">
      <span class="showpass">Show Password</span>
      </div>
      <p class="recover">
        <a href="#">Forgot Password?</a>
      </p>
      <button type="submit" name="loginbtn">Sign in</button>
    </form>
    <div class="not-member">
      New user? <a href="adminsignup.php">Register Now</a>
    </div>
   
  </div>
  <div class="home">
    <a href="../index.php">Return</a>
  </div>
</div>

<script src="../index.js"></script>
</body>
</html>
