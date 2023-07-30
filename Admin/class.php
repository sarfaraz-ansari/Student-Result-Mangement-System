<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Class</title>
  <link rel="stylesheet" href="../style.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
  <div class="Container">
  <?php
    include('adminnav.php');
    ?>
    <section class="main">
      <h1>Class</h1>
      <div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-green" data-bs-toggle="modal" data-bs-target="#classaddmodel" onclick="loadselect();">
          Add Class
        </button>
        <div class="show-message mt-2 pt-1">

        </div>

        <!-- Modal -->
        <div class="modal fade" id="classaddmodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Class</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              <div class="row">
                  <div class="col-md-12">
                    <div class="error-message">

                    </div>
                  </div>
                  <div class="col-md-6">
                  <label for="className">Class Name :</label>
                    <input type="text" name="className" id="className" placeholder="Class Name" required class="form-control className">
                  </div>
                  <div class="col-md-6">
                    <label for="classCode">Class Code :</label>
                    <input type="text" name="classCode" id="classCode" required placeholder="Like: BTECHCSE3"
                      class="form-control classCode">
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
              </div>
            
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-green classadd">Add</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <section class="student">
        <div class="student-list">
          <h1>Class List</h1>
          <table class="table">
            <thead>
              <tr>
                <th>Sr. No.</th>
                <th>Class Name</th>
                <th>Class Code</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody class="classdata">
            </tbody>
          </table>
        </div>
      </section>

    </section>
  </div>



 <script>
  $(document).ready(function () {
      getclass();


      $(document).on("click",".deletebtn", function () {
        var class_id = $(this).closest('tr').find('.id').text();
        // alert(student_id);

        $.ajax({
          type: "POST",
          url: "Ajax/addclassajax.php",
          data: {
            'checkingdel': true,
            'classid': class_id,
          },
          success: function (response) {
            $('.show-message').append('\
            <div class="alert alert-success alert-dismissible fade show" role="alert">\
              <strong>Updated!</strong> '+response+'.\
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
            </div>\ ');
            getclass();
          }
           
        });
       

      });

  $('.classadd').click(function () { 
          
          var className = $('.className').val();
          var classCode = $('.classCode').val();
          var Year = $('.Year').val();
          var Course = $('.Course').val();
          var Branch = $('.Branch').val();

          if(className!='' & classCode!='' & Year!='' & Course!='' & Branch!=''){
            $.ajax({
            type: "POST",
            url: "Ajax/addclassajax.php",
            data: {
              'checkclass':true,
              'className': className ,
              'classCode': classCode ,
              'Year': Year ,
              'Course': Course ,
              'Branch': Branch ,
            },
            success: function (response) {
              // console.log(response);
              $('#classaddmodel').modal('hide');
              $('.show-message').append('\
            <div class="alert alert-success alert-dismissible fade show" role="alert">\
              <strong>Added!</strong> Successfully.\
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
            </div>\ ');
              $('.classdata').html("");
              $('.className').val("");
              $('.classCode').val("");
              $('.Year').val("");
              $('.Course').val("");
              $('.Branch').val("");
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

        function getclass() {
      $.ajax({
        url: "Ajax/getclassajax.php",
        type: "post",
        success: function (data) {
          $(".classdata").html(data);
        }
      });
    }
      });
 
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