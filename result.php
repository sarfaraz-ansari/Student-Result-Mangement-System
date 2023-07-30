<?php 
session_start();
$connection = mysqli_connect('localhost:3307','root','','result_management');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Result</title>
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <link rel="stylesheet" href="style.css?v=?php echo time();?>" />
</head>

<body id="home">
<div class="Container">
  <?php
    include('Navbar/navbar.php');
    ?>
    

    <section class="mainresult" style="margin-left:12%;margin-right:10%;margin-top:5%">
    <section class="student" style="width: 100%;">
    <h1 style="text-align:center">Result</h1>
    <div style="color: black">
    <div style="width:45%;float:left;padding: 1%;">
    <b> Name: </b><?php echo  $_SESSION['stud_name']; ?> <br>
   <b> Roll no: </b><?php echo  $_SESSION['stud_id']; ?> <br>
    <b>Year: </b><?php echo $_SESSION['stud_yr']; ?> <br>
    
    </div>
    <div style="width: 45%;float:right; padding: 1%;">
    <b>Course:</b> <?php  echo $_SESSION['stud_co']; ?> <br>
    <b>Branch:</b> <?php echo $_SESSION['stud_br']; ?> <br>
    </div>
   
    <?php $rollno= $_SESSION['stud_id']; ?>
    </div>
        <div class="student-list">
          <table class="table">
            <thead>
              <tr>
                <th>Sr. No.</th>
                <th>Subject</th>
                <th>Marks</th>
              </tr>
            </thead>
            <tbody class="subject_data">
          <?php
            $query = "SELECT * from stud_result where Rollno='$rollno'";
            $result = mysqli_query($connection,$query);
            $ctr=1;
            $totalsum = 0;
            if(mysqli_num_rows($result) > 0){
    
            while($fresult = mysqli_fetch_array($result)){
              ?>
            <tr>
                <td><?php echo $ctr ?></td>
                <td ><?php echo $fresult['sub_code']?></td>
                <td ><?php echo $total= $fresult['marks'] ?></td>
                
            </tr>
              <?php 
              $ctr++;
              $totalsum += $total;
              ?>
              <?php
              }
              ?>
              <tr>
                <th scope="row" colspan="2">Total Marks</th>
                <td><b><?php echo $totalsum; ?></b></td>
              </tr>
            <?php

    
}
?>
            </tbody>
          </table>
        </div>
      </section>
    </section>
</div>

</body>
<script src="index.js"></script>
</html>