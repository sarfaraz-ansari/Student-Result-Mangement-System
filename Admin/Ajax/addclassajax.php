<?php
$connection = mysqli_connect('localhost:3307','root','','result_management');

if(isset($_POST['checkclass'])){
    $className = $_POST["className"];
    $classCode = $_POST["classCode"];
    $Year = $_POST["Year"];
    $Course = $_POST["Course"];
    $Branch = $_POST["Branch"];
    $query = "INSERT into stud_class (class_name,class_code,Year,Course,Branch) VALUES ('$className','$classCode','$Year','$Course','$Branch') ";
    $query_run = mysqli_query($connection,$query);

}
// delet btn
if(isset($_POST['checkingdel']))
{
    $id = $_POST['classid'];

    $query = "DELETE FROM stud_class WHERE class_code='$id' ";
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