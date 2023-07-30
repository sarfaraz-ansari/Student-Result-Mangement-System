<?php 
$connection = mysqli_connect('localhost:3307','root','','result_management');

if(isset($_POST['checkstudent'])){
    $Name = $_POST["Name"];
    $Rollno = $_POST["Rollno"];
    $Year = $_POST["Year"];
    $Course = $_POST["Course"];
    $Branch = $_POST["Branch"];
    $Password = $_POST["Password"];
    $query = "insert into student_data (Name,Rollno,Year,Course,Branch,Password) VALUES ('$Name','$Rollno','$Year','$Course','$Branch','$Password') ";
    $query_run = mysqli_query($connection,$query);

}
// edit student modal
if(isset($_POST['checkingedit']))
{
    $Rollno = $_POST['studentid'];
    $result_array = [];

    $query = "SELECT * from student_data where Rollno='$Rollno' ";
    $query_run = mysqli_query($connection, $query);
    if(mysqli_num_rows($query_run) > 0)
    {
        foreach($query_run as $row)
        {
            array_push($result_array, $row);
        }
        header('Content-type: application/json');
        echo json_encode($result_array);
    }
    else
    {
        echo $return = "No Record Found.!";
    }
}

// update btn

if(isset($_POST['checkUpdate'])){
    $Name = $_POST["Name"];
    $Rollno = $_POST["Rollno"];
    $Year = $_POST["Year"];
    $Course = $_POST["Course"];
    $Branch = $_POST["Branch"];
    $Password = $_POST["Password"];
    $query = "UPDATE result_management.student_data SET Name='$Name',Rollno='$Rollno',Year='$Year',Course='$Course',Branch='$Branch',Password='$Password' where Rollno='$Rollno'";
    $query_run = mysqli_query($connection,$query);

    if($query_run){
        echo $return = "Successfully Updated";
    }
    else{
        echo $return = "Error";
    }

}
//  delet btn
if(isset($_POST['checkingdel']))
{
    $id = $_POST['studentid'];

    $query = "DELETE FROM student_data WHERE Rollno='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo "Successfully deleted";
    }
    else
    {
        echo "Something went wrong";
    }
}


?>