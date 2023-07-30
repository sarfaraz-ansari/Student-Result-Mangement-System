<?php
session_start();
$connection = mysqli_connect('localhost:3307','root');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin</title>
  <link rel="stylesheet" href="../style.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
</head>
<body>
  <div class="Container">
   
  <?php
    include('adminnav.php');
    ?>

    <section class="main">
      <div class="main-top">
        <h1>Dashboard</h1>
       <u> <i style="color:black;font-size:larger;font-style:normal;font-weight:bold">Hi,<?php echo $_SESSION['admin_name']?></i></u>
      </div>
      <div class="users">
        <div class="card">
          <h4>Classes</h4>
            <h4></h4>
        </div>
        <!-- <div class="card">
          <h4>Department</h4>
        </div> -->
        <div class="card">
          <h4>Subject</h4>

        </div>
        <div class="card">
          <h4>Total Students</h4>

        </div>
      </div>

      <section class="student">
        <div class="student-list">
          <h1>Student List</h1>
          <table class="table">
            <thead>
              <tr>
              <th>Roll No.</th>
            <th>Name</th>
            <th>Year</th>
            <th>Course</th>
            <th>Branch</th>
            <th>Action</th>
              </tr>
            </thead>
            <tbody class="studentdata">
            </tbody>
          </table>
        </div>
      </section>
    </section>
  </div>

</body>
</html>


<script>
  $(document).ready(function () {
      getstudentdata();
  });

  function getstudentdata() {
      $.ajax({
        url: "Ajax/studentinsertajax.php",
        type: "post",
        success: function (data) {
          $(".studentdata").html(data);
        }
      });
    }
</script>