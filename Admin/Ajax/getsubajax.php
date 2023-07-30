<?php
$connection = mysqli_connect('localhost:3307','root','','result_management');
// if ($connection){
//     echo "Connection is stablished....";
// }
// else{
//     echo "Connection failed..";
// }

$query = "SELECT * from stud_subject ";
$result = mysqli_query($connection,$query);
$ctr=1;
if(mysqli_num_rows($result) > 0){
    
    while($fresult = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $ctr ?></td>
            <td ><?php echo $fresult['sub_name']?></td>
            <td class="id"><?php echo $fresult['sub_code'] ?></td>
            <td id="classid"><?php echo $fresult['class_code']?></td>
            <td><a href="#" class="deletebtn">Delete</a></td>
            
        </tr>
        <?php $ctr++; ?>
          <?php
    }
    
}

?>