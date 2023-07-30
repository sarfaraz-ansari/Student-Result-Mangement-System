<?php
$connection = mysqli_connect('localhost:3307','root');
if ($connection){
    echo "Connection is stablished....";
}
else{
    echo "Connection failed..";
}

mysqli_select_db($connection, 'result_management');

$Name =$_POST['Name'];
$Rollno =$_POST['Rollno'];
$Year =$_POST['Year'];
$Course =$_POST['Course'];
$Branch =$_POST['Branch'];
$Pass =$_POST['Password'];


$sql="SELECT * FROM result_management.student_data WHERE Rollno = '$Rollno' ";

      $res=mysqli_query($connection,$sql);

      if (mysqli_num_rows($res) > 0) {
        
        $row = mysqli_fetch_assoc($res);
        if($Rollno==isset($row['Rollno']))
        {
            	echo "<script>
                alert ( 'Student already registered!');
        
                </script>";
               


        }
    }
    else{
        $data = "INSERT INTO student_data (Name, Rollno, Year, Course, Branch, Password) values ('$Name','$Rollno','$Year','$Course','$Branch','$Pass')";

        mysqli_query($connection, $data);

        header("Location: login.php");
    }



?>