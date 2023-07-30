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
$Email =$_POST['Email'];
$Pass =$_POST['Password'];


$sql="SELECT * FROM result_management.admin_data WHERE Email = '$Email' ";

      $res=mysqli_query($connection,$sql);

      if (mysqli_num_rows($res) > 0) {
        
        $row = mysqli_fetch_assoc($res);
        if($Email==isset($row['Email']))
        {
            	echo "<script>
                alert ( 'Admin already registered!');
                </script>";

        }
    }
    else{
        $data = "INSERT INTO admin_data (Name,Email, Password) values ('$Name','$Email','$Pass')";

        mysqli_query($connection, $data);

        header("Location: signsuccess.php");
    }



?>