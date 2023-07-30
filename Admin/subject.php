<?php
$connection = mysqli_connect('localhost:3307','root','','result_management');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Subject</title>
  <link rel="stylesheet" href="../style.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
</head>
<body>
<div class="Container">
  <?php
    include('adminnav.php');
    ?>
    <section class="main">
      <h1>Subject</h1>
      <div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-green" data-bs-toggle="modal" data-bs-target="#addsubmodal">
          Add Subject
        </button>
        <div class="show-message mt-2 pt-1">

        </div>

        <!-- Modal -->
        <div class="modal fade" id="addsubmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Subject</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              <div class="row">
                  <div class="col-md-12">
                    <div class="error-message">

                    </div>
                  </div>
                  <div class="col-md-6">
                  <label for="classCode">Choose Class :</label>

                   <select name="classCode" id="Class" class="classCode">
                    <option value="">Select Class</option>
                    <?php 
                    $query ="SELECT * FROM stud_class";
                    $result = mysqli_query($connection, $query);
                    if (mysqli_num_rows($result) > 0) {
                      while($option = mysqli_fetch_array($result)) {
                    ?>
                        <option value="<?php echo $option['class_code']; ?> "><?php echo $option['class_name']; ?> </option>
                        
                        <?php
                      }
                    }
                    ?>
                   </select>
                  </div><br>
                  <div class="col-md-6">
                  <label for="subName">Subject Name :</label>
                    <input type="text" name="subName" id="subName" placeholder="Subject Name" required class="form-control subName">
                  </div>
                  <div class="col-md-6">
                    <label for="subCode">Subject Code :</label>
                    <input type="text" name="subCode" id="subCode" required placeholder="Subject Code" class="form-control subCode">
                  </div>
              </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-green addsubject">Add</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class="student">
        <div class="student-list">
          <h1>Subject List</h1>
          <table class="table">
            <thead>
              <tr>
                <th>Sr. No.</th>
                <th>Subject Name</th>
                <th>Subject Code</th>
                <th>Class Code</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody class="subjectdata">
            </tbody>
          </table>
        </div>
      </section>
    </section>
  </div>



  
  <script>


  $(document).ready(function () {
      getsubject();


      $(document).on("click",".deletebtn", function () {
        var sub_id = $(this).closest('tr').find('.id').text();
        var classCode= $(this).closest('tr').find('#classid').text();
        // alert(student_id);

        $.ajax({
          type: "POST",
          url: "Ajax/addsubajax.php",
          data: {
            'checkingsubdel': true,
            'subid': sub_id,
            'classid': classCode,
          },
          success: function (response) {
            $('.show-message').append('\
            <div class="alert alert-success alert-dismissible fade show" role="alert">\
              <strong>Updated!</strong> '+response+'.\
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
            </div>\ ');
            getsubject();
          }
           
        });
       

      });

  $('.addsubject').click(function () { 
          
          var subName = $('.subName').val();
          var subCode = $('.subCode').val();
          var classCode = $('.classCode').val();

          if(subName!='' & subCode!='' & classCode!=''){
            $.ajax({
            type: "POST",
            url: "Ajax/addsubajax.php",
            data: {
              'checksubject':true,
              'subName': subName ,
              'subCode': subCode ,
              'classCode': classCode ,
            },
            success: function (response) {
              // console.log(response);
              $('#addsubmodal').modal('hide');
              $('.show-message').append('\
            <div class="alert alert-success alert-dismissible fade show" role="alert">\
              <strong>Added!</strong> Successfully.\
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
            </div>\ ');
              $('.subjectdata').html("");
              $('.subName').val("");
              $('.subCode').val("");
              $('.classCode').val("");
              getclass();

            }
          });
          }
          else{
            $('.error-message').append('\
            <div class="alert alert-warning alert-dismissible fade show" role="alert">\
              <strong>Please!</strong> enter all fields!\
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
            </div>\ ');
          }
          
        });

        function getsubject() {
      $.ajax({
        url: "Ajax/getsubajax.php",
        type: "post",
        success: function (data) {
          $(".subjectdata").html(data);
        }
      });
    }
      });
 
 </script>
   
</body>
</html>