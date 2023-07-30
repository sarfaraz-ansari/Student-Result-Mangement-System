<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <link rel="stylesheet" href="style.css?v=?php echo time();?>" />
</head>
<body>
    <div>
        <nav id="navbar">
            <input type="checkbox" id="check" />
            <label for="check" class="checkbtn" id="icon">
            <i class="fa-solid fa-bars"></i>
            </label>
      
            <div class="logo">Student<span>Portal</span></div>
              <ul id="menu">
                <li><a href="index.php">
                  <i class="fa fa-home" aria-hidden="true"></i>
                  Home</a></li>
                <li><a href="login.php">
                  <i class="fa fa-sign-in" aria-hidden="true"></i>
                  Login</a></li>
                <li><a href="signup.php">
                  <i class="fa fa-user-plus" aria-hidden="true"></i>
                  Register</a></li>
                <li><a href="Admin/adminlogin.php">
                <!-- Admin/adminlogin.php -->
                  <i class="fa fa-user-circle" aria-hidden="true"></i>
                  Admin</a></li>
                <li><a href="index.php#footer">
                  <i class="fa fa-address-book" aria-hidden="true"></i>
                  Contact</a></li>
              </ul>
          </nav>
    </div>
</body>
</html>