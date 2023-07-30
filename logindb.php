<?php
session_start();
$connection = mysqli_connect('localhost:3307','root','','result_management');

if (!empty($_POST)) {
    $Rollno = $_POST['Rollno'];
    $Pass = $_POST['Password'];
    $sql = "SELECT * FROM result_management.student_data WHERE Rollno = '$Rollno'";
    $result = mysqli_query($connection, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $resultpass = $row['Password'];
        $_SESSION['stud_name'] = $row['Name'];
        $_SESSION['stud_id'] = $row['Rollno'];
        $_SESSION['stud_yr'] = $row['Year'];
        $_SESSION['stud_co'] = $row['Course'];
        $_SESSION['stud_br'] = $row['Branch'];


        if ($Pass == $resultpass) {
            header("location:result.php");
            // "<script>
            // alert('Login unsuccesfull');
            // </script>";

        } else {
            echo "<script>
                alert('Login unsuccesfull');
                </script>";
            header("location:login.php");
        }
    }
}
?>