<?php 
$connection = mysqli_connect('localhost:3307','root','','result_management');


if(isset($_POST['checkgetsub'])){
    $Rollno = $_POST["Rollno"];
    $class_code = $_POST["class_code"];
    $query = "SELECT * from stud_subject where class_code='$class_code'";
    $query_run = mysqli_query($connection,$query);

    while($row = mysqli_fetch_array($query_run))
        {
            ?>
        <label> <?php echo $row['sub_name']; ?> </label>
        <input type="text"  name="Marks[]" value="" class="form-control m-1 Marks" required="" placeholder="Enter marks" autocomplete="off">
  
        <?php 
         }

}
?>