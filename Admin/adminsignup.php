<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Signup</title>
   <!-- Font Awesome Cdn Link -->   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   <link rel="stylesheet" href="../style.css" />
</head>
<body>
<div>
  <div class="wrapper">
    <h1>Welcome!</h1>
    <form action="adminsignupdb.php" method="post" autocomplete="off">
      <input type="name" name="Name" id="Name" placeholder="Name">
      <input type="Email" name="Email" id="Email"  required placeholder="Email">
      <input type="password"  name="Password" id="password" placeholder="Password" required>
      <div class="showpass-container">
      <input type="checkbox" onclick="myFunction()" id="showpass">
      <span class="showpass">Show Password</span>
      </div>
      <button type="submit" name="loginbtn">Sign up</button>
    </form>
    <div class="not-member">
    Already registered? <a href="adminlogin.php">Login</a>
    </div>
  </div>
  <div class="home">
    <a href="../index.php">Return</a>
  </div>
</div>
<script src="../index.js"></script>
</body>
</html>
