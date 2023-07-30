<?php
session_start();
$connection = mysqli_connect('localhost:3307','root');
if ($connection){
    echo "Connection is stablished....";
}
else{
    echo "Connection failed..";
}
if (!empty($_POST)) {
    $Email = $_POST['Email'];
    $Pass = $_POST['Password'];
    $sql = "SELECT * FROM result_management.admin_data WHERE Email = '$Email'";
    $result = mysqli_query($connection, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $resultpass = $row['Password'];
        $_SESSION['admin_name'] = $row['Name'];
        if ($Pass == $resultpass) {
            header("location:admin.php");
        } else {
            echo "<script>
                alert('Login unsuccesfull');
                </script>";
            header("location:adminlogin.php");
        }
    }
}
?>