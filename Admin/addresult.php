<?php
$connection = mysqli_connect('localhost:3307','root','','result_management');

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Exam</title>
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
      <h1>Declare Result</h1>
      <section class="student">
      <div class="student-list">
        <div class="resultgrid">
        <form method="POST">
          <div class="select">
            <label for="Class">Class</label>
              <select name="Class" id="Class" required class="form-control Class" onChange="getStudent(this.value);">
                <option value="" selected="selected">Select Class</option>
                <?php 
                    $query ="SELECT * FROM stud_class";
                    $result = mysqli_query($connection, $query);
                    if (mysqli_num_rows($result) > 0) {
                      while($option = mysqli_fetch_array($result)) {
                    ?>
                        <option value="<?php echo $option['class_code']; ?> "><?php echo $option['class_name']; ?> </option>
                        
                        <?php
                      }
                    }
                    ?>
              </select>
        </div>
        <div class="select" >
            <label for="Name">Student Name </label>
              <select name="Name" id="Name" required class="form-control Name" onChange="getsubject(this.value);">
              </select>
        </div>
        <div class="select" >
            <label for="Subject">Subjects </label>
            <div  class="subject">

            </div>
        </div>
        <div class="form-group p-5 me-5">
          <div class="row-sm-offset-2 row-sm-10 float-end">
            <button type="submit" name="submit" id="submit" class="btn btn-green addresult">Upload Result</button>
          </div>
        </div>
        </form>
        </div>
      </div>
      </section>
    </section>
  </div>
</body>
</html>

<script>
  function getStudent(val) {
    $.ajax({
          type: "POST",
          url: "Ajax/resultgetstud.php",
          data: {
            'checkgetstudent': true,
            'class_code': val,
          },
          success: function(data){
        $(".Name").html(data);
        
    }
    });
  }
  function getsubject(val) {
    $.ajax({
          type: "POST",
          url: "Ajax/resultgetsub.php",
          data: {
            'checkgetsub': true,
            'Rollno': $(".Name").val(),
            'class_code': $(".Class").val(),
          },
          success: function(data){
          $('.subject').html("");
          $(".subject").html(data);

        
    }
    });
  }


</script>
<?php


if (isset($_POST['submit'])) {
  $marks = array();
  $sub_code = array();
  $class = $_POST['Class'];
  $studentid = $_POST['Name'];
  $marks = $_POST['Marks'];
  $query = "SELECT * FROM stud_subject where class_code='$class'";
  $result = mysqli_query($connection, $query);

  $sql = "SELECT * from stud_result where Rollno='$studentid'";
  $res = mysqli_query($connection, $sql);

  if (mysqli_num_rows($res) > 0) {
    echo '<elert>
    ALready Declared.
    </alert>';

  } else {
    while ($row = mysqli_fetch_assoc($result)) {
      array_push($sub_code, $row['sub_name']);
    }

    for ($i = 0; $i < count((array) $marks); $i++) {
      $mark = $marks[$i];
      $sub_id = $sub_code[$i];
      $sql = "INSERT INTO  stud_result (Rollno,sub_code,marks) VALUES('$studentid','$sub_id','$mark')";
      $query_run = mysqli_query($connection, $sql);

    }
    header('location:admin.php');
    exit();
  }
}
      


?>