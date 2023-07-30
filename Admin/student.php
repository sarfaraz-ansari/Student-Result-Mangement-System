<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Student</title>
  <link rel="stylesheet" href="../style.css" />
  <!-- Font Awesome Cdn Link -->
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

<body class="m-0">
  <div class="Container">
    <?php
    include('adminnav.php');
    ?>
    <section class="main">

      <h1>Student</h1>
      <div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-green" data-bs-toggle="modal" data-bs-target="#studentaddmodal" onclick="loadselect()">
          Add Student
        </button>

        <div class="show-message mt-2 pt-1">

        </div>

        <!-- Modal -->
        <div class="modal fade" id="studentaddmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD STUDENT</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="error-message">

                    </div>
                  </div>
                  <div class="col-md-6">
                  <label for="Year">Name :</label>
                    <input type="text" name="Name" id="Name" placeholder="Enter Name" required class="form-control Name">
                  </div>
                  <div class="col-md-6">
                    <label for="Year">Roll No. :</label>
                    <input type="Rollno" name="Rollno" id="Rollno" required placeholder="Enter Roll Number"
                      class="form-control Rollno">
                  </div>
                  <div class="col-md-6">
                    <label for="Year">Year :</label>
                    <select name="Year" id="Year" required class="form-control Year">
                      <option value="" selected="selected">Select year</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                  <label for="Course">Course :</label>
                  <select name="Course" id="Course" required class="form-control Course">
                      <option value="" selected="selected">Please select year first</option>
                  </select>
                  </div>
                  <div class="col-md-6">
                  <label for="Branch">Branch :</label>
                  <select name="Branch" id="Branch" required class="form-control Branch">
                     <option value="" selected="selected">Please select course first</option>
                  </select>
                  </div>
                  <div class="col-md-6">
                  <label for="Branch">Password :</label>
                  <input type="password"  name="Password" id="password" placeholder="Password" required class="form-control Password">
                  <div class="showpass-container">
                  <input type="checkbox" onclick="myFunction()" id="showpass">
                  <span class="showpass">Show Password</span>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-green studentadd" id="studentadd">Add</button>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- Edit modal -->
      <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
                <button type="button" class="btn-close" id="btn-close-update" data-bs-dismiss="modal" aria-label="Close"></button>
                
             </div>
              <div class="modal-body">
              <div class="row">
                  <div class="col-md-12">
                    <div class="error-message-update">

                    </div>
                  </div>
                  <div class="col-md-6">
                  <label for="name">Name :</label>
                    <input type="text" name="Name" id="editName" placeholder="Enter Name" required class="form-control Name">
                  </div>
                  <div class="col-md-6">
                    <label for="roll">Roll No. :</label>
                    <input type="Rollno" name="Rollno" id="editRollno" required placeholder="Enter Roll Number"
                      class="form-control Rollno">
                  </div>
                  <div class="col-md-6">
                    <label for="Year">Year :</label>
                    <input name="Year" id="editYear" required class="form-control Year">
                  </div>
                  <div class="col-md-6">
                  <label for="Course">Course :</label>
                  <input name="Course" id="editCourse" required class="form-control Course">
                  </div>
                  <div class="col-md-6">
                  <label for="Branch">Branch :</label>
                  <input name="Branch" id="editBranch" required class="form-control Branch">
                  </div>
                  <div class="col-md-6">
                  <label for="password">Password :</label>
                  <input type="text"  name="Password" id="editPassword" placeholder="Password" required class="form-control Password">
                  <!-- <div class="showpass-container">
                  <input type="checkbox" onclick="myFunction()" id="showpass">
                  <span class="showpass">Show Password</span>
                  </div> -->
                </div>
              </div>
                
             </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="button" name="update" class="btn btn-primary studentUpdate">Update</button>
              </div>
            </div>
         </div>
      </div>

    <section class="student">
      <div class="student-list">
      <h1>Student List</h1>
      <table class="table">
        <thead>
          <tr>
            <th>Roll No.</th>
            <th>Name</th>
            <th>Year</th>
            <th>Course</th>
            <th>Branch</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class="studentdata">
        </tbody>
      </table>
      </div>
      </section>
    </section>
  </div>





  <!-- Ajax coding -->
  <script>
    $(document).ready(function () {
      getstudentdata();


      $(document).on("click",".deletebtn", function () {
        var student_id = $(this).closest('tr').find('.id').text();
        // alert(student_id);

        $.ajax({
          type: "POST",
          url: "Ajax/addstudentajax.php",
          data: {
            'checkingdel': true,
            'studentid': student_id,
          },
          success: function (response) {
            $('.show-message').append('\
            <div class="alert alert-success alert-dismissible fade show" role="alert">\
              <strong>Updated!</strong> '+response+'.\
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
            </div>\ ');
            getstudentdata();
          }
           
        });
       

      });

      $('.studentUpdate').click(function () { 
          
          var Name = $('#editName').val();
          var Rollno = $('#editRollno').val();
          var Year = $('#editYear').val();
          var Course = $('#editCourse').val();
          var Branch = $('#editBranch').val();
          var Password = $('#editPassword').val();

          if(Name!='' & Rollno!='' & Year!='' & Course!='' & Branch!='' & Password!=''){
            $.ajax({
            type: "POST",
            url: "Ajax/addstudentajax.php",
            data: {
              'checkUpdate':true,
              'Name': Name ,
              'Rollno': Rollno ,
              'Year': Year ,
              'Course': Course ,
              'Branch': Branch ,
              'Password': Password ,
            },
            success: function (response) {
              // console.log(response);
              $('#editmodal').modal('hide');
              // $('.show-message').html(Name);
              $('.show-message').append('\
            <div class="alert alert-success alert-dismissible fade show" role="alert">\
              <strong>Updated!</strong> '+response+'.\
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
            </div>\ ');
             $('.studentdata').html("");
              getstudentdata();

            }
            
          });
          }
          else{
            $('.error-message-update').append('\
            <div class="alert alert-warning alert-dismissible fade show" role="alert">\
              <strong>Please!</strong> enter all fields!\
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
            </div>\ ');
          }
          
        });






      $(document).on("click",".editbtn", function () {
        var student_id = $(this).closest('tr').find('.id').text();
        // alert(student_id);

        $.ajax({
          type: "POST",
          url: "Ajax/addstudentajax.php",
          data: {
            'checkingedit': true,
            'studentid': student_id,
          },
          success: function (response) {
            // alert(response);
            $.each(response, function (key, studedit) { 
                            // console.log(studview['fname']);
                            $('#editName').val(studedit['Name']);
                            $('#editRollno').val(studedit['Rollno']);
                            $('#editYear').val(studedit['Year']);
                            $('#editCourse').val(studedit['Course']);
                            $('#editBranch').val(studedit['Branch']);
                            $('#editPassword').val(studedit['Password']);
            
                          });
                          $('#editmodal').modal('show');
          }
        });

      });

      $('.studentadd').click(function () { 
          
          var Name = $('.Name').val();
          var Rollno = $('.Rollno').val();
          var Year = $('.Year').val();
          var Course = $('.Course').val();
          var Branch = $('.Branch').val();
          var Password = $('.Password').val();

          if(Name!='' & Rollno!='' & Year!='' & Course!='' & Branch!='' & Password!=''){
            $.ajax({
            type: "POST",
            url: "Ajax/addstudentajax.php",
            data: {
              'checkstudent':true,
              'Name': Name ,
              'Rollno': Rollno ,
              'Year': Year ,
              'Course': Course ,
              'Branch': Branch ,
              'Password': Password ,
            },
            success: function (response) {
              // console.log(response);
              $('#studentaddmodal').modal('hide');
              $('.show-message').append('\
            <div class="alert alert-success alert-dismissible fade show" role="alert">\
              <strong>Added!</strong> Successfully.\
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
            </div>\ ');
              $('.studentdata').html("");
              getstudentdata();
              $('.Name').val("");
              $('.Rollno').val("");
              $('.Year').val("");
              $('.Course').val("");
              $('.Branch').val("");
              $('.Password').val("");

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
       
      
    });

    function getstudentdata() {
      $.ajax({
        url: "Ajax/studentinsertajax.php",
        type: "post",
        success: function (data) {
          $(".studentdata").html(data);
        }
      });
    }

  </script>
  <script>
     var courseObject = {
    "1": {
      "B.Tech": ["Bio-Tech","Civil","CSE","EE","EC", "IT", "ME"],
      "M.tech": ["CSE", "ME"],
      "MBA": ["Finance", "HR", "IT", "Int. Bus.", "marketing", "Oper. Res."],
      "Polytechnic": ["CE", "EC", "ME"]
    },
    "2": {
      "B.Tech": ["Bio-Tech","Civil","CSE","EE","EC", "IT", "ME"],
      "M.tech": ["CSE", "ME"],
      "MBA": ["Finance", "HR", "IT", "Int. Bus.", "marketing", "Oper. Res."],
      "Polytechnic": ["CE", "EC", "ME"]
    },
    "3": {
      "B.Tech": ["Bio-Tech","Civil","CSE","EE","EC", "IT", "ME"],
      "M.tech": ["CSE", "ME"],
      "MBA": ["Finance", "HR", "IT", "Int. Bus.", "marketing", "Oper. Res."],
      "Polytechnic": ["CE", "EC", "ME"]
    },
    "4": {
      "B.Tech": ["Bio-Tech","Civil","CSE","EE","EC", "IT", "ME"],
      "M.tech": ["CSE", "ME"],
      "MBA": ["Finance", "HR", "IT", "Int. Bus.", "marketing", "Oper. Res."],
      "Polytechnic": ["CE", "EC", "ME"]
    }
    
  }

     function loadselect(){
    var yearSel = document.getElementById("Year");
    var courseSel = document.getElementById("Course");
    var branchSel = document.getElementById("Branch");
    for (var x in courseObject) {
      yearSel.options[yearSel.options.length] = new Option(x, x);
    }
    yearSel.onchange = function() {
      branchSel.length = 1;
      courseSel.length = 1;
      for (var y in courseObject[this.value]) {
        courseSel.options[courseSel.options.length] = new Option(y, y);
      }
    }
    courseSel.onchange = function() {
    branchSel.length = 1;
    var z = courseObject[yearSel.value][this.value];
    for (var i = 0; i < z.length; i++) {
        branchSel.options[branchSel.options.length] = new Option(z[i], z[i]);
      }
    }
  }
  </script>
</body>

</html>