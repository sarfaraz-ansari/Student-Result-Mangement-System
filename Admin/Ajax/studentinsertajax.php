<?php
$connection = mysqli_connect('localhost:3307','root','','result_management');
if ($connection){
    echo "Connection is stablished....";
}
else{
    echo "Connection failed..";
}

$query = "SELECT * from student_data ";
$result = mysqli_query($connection,$query);
if(mysqli_num_rows($result) > 0){
    while($fresult = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td class="id"><?php echo $fresult['Rollno']?></td>
            <td><?php echo $fresult['Name'] ?></td>
            <td><?php echo $fresult['Year'] ?></td>
            <td><?php echo $fresult['Course'] ?></td>
            <td><?php echo $fresult['Branch'] ?></td>
            <td>
              <a href="#" class="editbtn">Edit</a>
              <a href="#" class="deletebtn">Delete</a>
            </td>
          </tr>
          <?php
    }
}

?>