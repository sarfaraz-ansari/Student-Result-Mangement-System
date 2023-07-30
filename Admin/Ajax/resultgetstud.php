<?php 
$connection = mysqli_connect('localhost:3307','root','','result_management');

if(isset($_POST['checkgetstudent'])){
    $class_code = $_POST["class_code"];
    $query ="SELECT * FROM stud_class where class_code='$class_code'";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($option = mysqli_fetch_array($result)) {
            $Year = $option['Year'];
            $Course = $option['Course'];
            $Branch = $option['Branch'];

            $fquery = "SELECT * from student_data where Year='$Year' and Course='$Course' and Branch='$Branch'";
            $fresult = mysqli_query($connection, $fquery);
            ?><option value=""><?php echo 'Select Student'; ?> </option> <?php
            while ($foption = mysqli_fetch_array($fresult)) {

?>
        <option value="<?php echo $foption['Rollno']; ?> "><?php echo $foption['Name']; ?> </option>
        
        <?php
            }
        }
    }
    else{
        return;
    }
}




?>