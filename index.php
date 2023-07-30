<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Result Management System</title>
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <link rel="stylesheet" href="style.css?v=?php echo time();?>" />
</head>

<body id="home">
  <div>
   <?php
   include('Navbar/navbar.php');
   ?>
   

    <div class="slideshow-container">
      <!-- Full-width images with number and caption text -->
      <div class="mySlides">
        <div class="numbertext">1 / 3</div>
        <img src="images/girl.jpg" style="width: 100%" />
        <div class="text">Caption Text</div>
      </div>

      <div class="mySlides">
        <div class="numbertext">2 / 3</div>
        <img src="images/Darkpc.jpg" style="width: 100%" />
        <div class="text">Caption Two</div>
      </div>

      <div class="mySlides">
        <div class="numbertext">3 / 3</div>
        <img src="images/city.jpg" style="width: 100%" />
        <div class="text">Caption Three</div>
      </div>

      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br />

    <!-- The dots/circles -->
    <div style="text-align: center">
      <span id="dot" class="dot" onclick="currentSlide(1)"></span>
      <span id="dot" class="dot" onclick="currentSlide(2)"></span>
      <span id="dot" class="dot" onclick="currentSlide(3)"></span>
    </div>

    <section id="result">
      <h1>For Students</h1>
      <!-- <div class="student-link">
        <a href="signup.php">Register</a>
        <a href="login.php">Login</a>
      </div> -->
      <div class="service-container">
        <div class="service">
          <img src="images/pexels-a-m-1256890.jpg" alt="" />
          <h2>Library</h2>
          <p>
            Bad libraries build collections, good libraries build services,
            great libraries build communities.
          </p>
        </div>
        <div class="service">
          <img src="images/istockphoto-1249811016-170667a.jpg" alt="" />
          <h2>Sports</h2>
          <p>
            “It’s not whether you get knocked down; it’s whether you get up.”
            — Vince Lombardi
          </p>
        </div>
        <div class="service">
          <img src="images/pexels-pixabay-267507.jpg" alt="" />
          <h2>Labs</h2>
          <p>
            Even though we're miles apart, a computer screen connects our
            hearts.
          </p>
        </div>
      </div>

    </section>
    <section id="student">
      <h1>Courses we offer</h1>
      <div class="course-container">
        <div class="course">
          <h3>B.Tech</h3>
          <ul>
            <li>Bio-Technology</li>
            <li>Civil Engineering</li>
            <li>Computer Science and Engineering</li>
            <li>Electrical Engineering</li>
            <li>Electronics and Communication</li>
            <li>Information Technology</li>
            <li>Mechanical Engineering</li>
          </ul>
        </div>
        <div class="course">
          <h3>M.Tech</h3>
          <ul>
            <li>Computer Science</li>
            <li>Mechanical Engineering</li>
          </ul>
        </div>
        <div class="course">
          <h3>MBA</h3>
          <ul>
            <li>Finance</li>
            <li>Human Resource</li>
            <li>Information Technology</li>
            <li>International Business</li>
            <li>Marketing</li>
            <li>Operation & Research</li>
          </ul>
        </div>
        <div class="course">
          <h3>Polytechnic</h3>
          <ul>
            <li>Civil Engineering</li>
            <li>Electronics and Communication</li>
            <li>Mechanical Engineering</li>
          </ul>
        </div>
      </div>
    </section>
    <section id="footer">
      <div class="footer-container">
        <div class="bn-logo">
          <img src="Images/college-logo.png" alt="college-logo">
        </div>
        <div class="about">
          <h2>Important Link</h2>
          <a href="">Official Website</a>
          <a href="">Message</a>
        </div>
        <div class="contact">
          <h2>Contact Us</h2>
          <a href="tel:18008890522">+91 180088 90522</a>
          <a href="mailto:admission@bncet.ac.in">admission@bncet.ac.in</a>
          <p>NH -24, Sitapur Road, Bakshi Ka Talab , Lucknow, Uttar Pradesh 226201</p>
        </div>
      </div>
    </section>

  </div>
  <script src="index.js"></script>
</body>

</html>