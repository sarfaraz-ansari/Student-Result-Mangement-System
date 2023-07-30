<?php
$connection = mysqli_connect('localhost:3307','root','','result_management');

if(isset($_POST['checksubject'])){
    $subName = $_POST["subName"];
    $subCode = $_POST["subCode"];
    $classCode = $_POST["classCode"];
    $query = "INSERT into stud_subject (class_code,sub_name,sub_code) VALUES ('$classCode','$subName','$subCode') ";
    $query_run = mysqli_query($connection,$query);

}
// delet btn
if(isset($_POST['checkingsubdel']))
{
    $id = $_POST['subid'];
    $classid = $_POST['classid'];
    $query = "DELETE FROM stud_subject WHERE sub_code='$id' and class_code='$classid'";
    $query_run = mysqli_query($connection,$query);

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