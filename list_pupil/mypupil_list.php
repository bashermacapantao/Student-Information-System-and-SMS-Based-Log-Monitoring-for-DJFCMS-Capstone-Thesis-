<?php
include('../security.php');
include('header_pupil.php');
include('../database/connectdb.php');
// include('./adviser/includes/navbar.php');
?>
   <title>Pupil List</title>
</head>

<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark ">
  <!-- Brand -->
  <a class="btn btn-default btn-lg" onclick="openSlideMenu()" href="javascript:void (0)"><span class="navbar-toggler-icon"></span></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  

  <!-- Navbar links -->
  <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
    <ul class="navbar-nav  justify-content-end" >
      <li class="nav-item">
        <a class="nav-link" href="../adviser/adviserprof.php"><span class="glyphicon glyphicon-log-out"> <?php echo $_SESSION['username']; ?> </span>  </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal"> logout </a>
      </li>
    </ul>
  </div>
  <!-- <div class="collapse navbar-collapse" id="myNavbar">
                        
                        <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="fas fa-user-shield"> <?php echo $_SESSION['username']; ?> </span> 
                        </a></li>
                            <li><a href="#" type="button" id="logoutBtn" ><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
                        </ul>
                    </div> -->
</nav>
<div id="side-menu" class="side-nav">
                  <a href="#" class="btn-close" onclick="closeSlideMenu()">&times</a>
                  <a href="../adviser/adviserprof.php">Home</a>
                  <a href="mypupil_list.php">Pupil List</a>
                  <a href="../list_attendance/myattendance_list.php">Attendance</a>
                  <!-- <a href="#"data-toggle="modal" data-target="#qrcodeModal"><b>QRcode Attendance</b></a> -->
                  <div class="dropdown">
                    <a href="#" class="dropdown-toggle" type="button" data-toggle="dropdown">QR code
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdownmenu">
                      <li class="dropdown-header">Attendance</li>
                      <li><a href="../QRcode/Login_QRcode.php">LOG - IN</a></li>
                      <li><a href="../QRcode/Logout_QRcode.php">LOG - OUT</a></li>
                    </ul>
                </div>
                  <!-- <a href="attendancelist.php" id="example">Print Report</a>  -->

               
              </div>

<style>
     .dropdownmenu{
    background-color:#343a40   !important ;
    /* border-color: black !important; */
    /* color: black !important; */
   
}
  .nav-justified>li>a {
     margin-top: 12px;
    text-align: center;
  }
  a {
    /* color: #dfd3d3; */
    color: #221f1f;
    text-decoration: none;
    font-size: 18px;
  }
  .nav>li>a {
    position: relative;
    display: block;
    padding: 10px 15px;
    text-decoration: none;
}

.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: middle;
    font-size: 18px;
    border-top: 1px solid #ddd;
}
.btn-default {
  color: #fff;
    border-color: #343a40;
}
.btn-basher {
  color: #343a40;
    background-color: #ffffff;
    border-color: #343a40;
}
</style>
 


      
                <!-- ############################ -->
                <style>
/* .modal-ulo, #h4, .close {
    background-color: #c3db3c;
    color:white !important;
    text-align: center;
    font-size: 30px;
}
#header prof_name{
    padding-bottom: 12px;
}
.modal-footer {
    background-color: #f9f9f9;
}*/
.main-color-bg{
    background-color:#343a40 !important ;
    /* border-color: #c0392b !important; */
    color: #ffffff !important;
    text-align: center;
} 
                   </style>
                     
                <!-- ############################ -->
    <div class="modal" id="logoutModal" role="dialog">
    <!-- <div class="modal " id="logoutModal"> -->
                <div class="modal-dialog modal-sm">
                  <!-- Modal content-->

                  <div class="modal-content">
                    <div class="main-color-bg" style="padding:35px 25px;">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4><span class="glyphicon glyphicon-lock"></span> Ready to Leave?</h4>
                    </div>
                    <div class="modal-body" style="padding:40px 50px;"> Select "Logout" below if you are ready to end your current session.
                      <form action="../logout.php" method="POST">
                          <button type="submit" class="btn btn-secondary btn-block" name="logoutBtn"><span class="glyphicon glyphicon-log-out"></span> Logout</button>
                      </form>
                    </div>
                   
                  </div>
                </div>
              </div> 



              <div class="modal" id="qrcodeModal">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 style="color: black;"class="modal-title">QRcode Attendance</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <br>
        <a href="../QRcode/Login_QRcode.php" type="button" class="btn btn-warning btn-block" ><span class="glyphicon glyphicon-log-in"> </span> Login QRcode</a>
        <br>
        <a href="../QRcode/Logout_QRcode.php" type="button" class="btn btn-warning btn-block" ><span class="glyphicon glyphicon-log-out"></span> Logout QRcode</a>
        </div>
        <hr>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>



<!-- ################################ -->
<style>
    .breadcrumb {
    margin-top: 5px;
    background: #343a40 !important;
    color: #9a9da0 !important;
}
</style>

<div class="container">

<div class="container"> 
        <!-- <ol class="breadcrumb">
            <h1 class="glyphicon glyphicon-record active"> My Pupil List</h1>
         </ol>   -->

        <div class="row">
            <div class="col-md-12 mt-5">
                <!-- <h2 class="text-center"> <b> Pupil List</b></h2> -->
            
                <!-- <hr> -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01"><?= $_SESSION['user_log']['grade_level']; ?> </label>
                            </div>
                            <select class="custom-select" id="">
                                <option value="<?= $_SESSION['user_log']['section']; ?>"><?= $_SESSION['user_log']['section']; ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">School Year</label>
                            </div>
                            <select class="custom-select" id="select_year">
                                <option value="">Choose...</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div>
                    <button id="filter" class="btn btn-sm btn-default">Filter</button> 
                    <!--  <button id="reset_section" class="btn btn-sm btn-outline-info">Reset section</button> -->
                    <!-- <button id="reset_year" class="btn btn-sm btn-outline-info">Reset year</button> -->
                    <button id="reset" class="btn btn-sm btn-basher">Reset</button>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-3 mb-3">
                        <div class="table-responsive">
                            <table class="table-bordered table table-hover" id="record_table">
                    <thead  class="thead-dark">
                                    <tr>
                                    <!-- <th>#</th> -->
                                 <th>Picture</th>
                                 <th>LRN #.</th>
                                 <th>Pupil Name</th>
                                 <!-- <th>Gender</th>
                                 <th>Guardian</th>
                                 <th>Relation</th>
                                 <th>Guardian #</th> -->
                                 <th>Grade & Section</th>
                                 <!-- <th>Adviser Name</th>s -->
                                 <th>School Year</th>
                                 <!-- <th>QR Code</th>
                                 <th>UPDATE STATUS</th> -->
                                 <th>DETAILS </th>
                                    </tr>
                                </thead>
                         <tbody>  
                


                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <div class="modal" id="addpupilModal" role="dialog" >
      <div class="modal-dialog modal-lg">
        
          <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <h4 style="color: black;"><span class="glyphicon glyphicon-user" ></span> Pupils Information</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
             
            </div>

        
      
          <div class="modal-body" style="padding:40px 50px;">
          <form action="../code.php" method="POST" id="formUpdate" enctype="multipart/form-data">
            <!-- <form action="code.php" method="POST" enctype="multipart/form-data"> -->
                

                  <div class="form-group">
                      <div class="row">
                  <div class="col-sm-6">
                  <label ><span class="glyphicon glyphicon-tag"></span> LRN</label>
                  <input disabled type="number" class="form-control input-lg" id="user_id" name="user_id"placeholder="Enter Pupil LRN #:" required>
              </div>

            <?php
   
        $admission = "SELECT * FROM schoolyear ORDER BY year ASC";
        $schyear_run = mysqli_query($connection,$admission);
        
        if(mysqli_num_rows($schyear_run)>0)
        {
          ?>
    
          <div class="col-sm-6">
                <label ><span class="glyphicon glyphicon-briefcase"></span> School Year</label>
                <select disabled name="schoolyear_id" id="school_year" class="form-control input-lg" required>
                    <option value="schoolyear_id">-- Admission Year -- </option>
                    <?php
                       foreach($schyear_run as $row)
                       {
                    ?>
                    <option value="<?php  echo $row['schoolyear_id']; ?>">
                    <?php echo $row['year']; ?>
                   
                    </option>
                    <?php
                       }
                    ?>
                </select>  
                <br>
          </div>
          </div>
          
          <?php
        }
        else{
          echo "no data available";
        }
    ?>

              
          </div>
              <div class="form-group">
                  <label ><span class="glyphicon glyphicon-user" style="color:black;"></span> Pupil Name</label>
                  <input disabled type="text" class="form-control input-lg" name="pupil_name" id = "pupil_name" placeholder="Enter Sur Name, Given Name, Middle Name" required>
              </div>
              <?php
    
        $gradlevel = "SELECT * FROM gradsec  ORDER BY `gradsec`.`grade_level` ASC";
        $gradeandsection_run = mysqli_query($connection,$gradlevel);
        
        if(mysqli_num_rows($gradeandsection_run)>0)
        {
          ?>
          <div class="form-group">
                <label ><span class="glyphicon glyphicon-briefcase"></span> Grade & Section</label>
                <select  disabled name="gradsec_id" id="gradesec" class="form-control input-lg" required>
                    <option value="gradsec_id">-- Grade & Section -- </option>
                    <?php
                       foreach($gradeandsection_run as $row)
                       {
                    ?>
                    <option value="<?php  echo $row['gradsec_id']; ?>">
                    <?php echo $row['grade_level']." - ".$row['section']; ?>
                   
                   
                    </option>
                    <?php
                       }
                    ?>
                </select>  
          </div>
          
          <?php
        }
        else{
          echo "no data available";
        }
    ?>

                  <div class="form-group">
                    <label ><span class="glyphicon glyphicon-tint"></span> Pupil Gender  </label>
                      <select disabled name="pupil_gender" id="pupil_gender" class="form-control input-lg">
                        <option value="">-Select Gender-</option>
                        <option value="Male"> Male</option>
                        <option value="Female"> Female</option>
                      </select>
                     
                  </div>
                  <div class="form-group">
                    <label ><span class="glyphicon glyphicon-tint"></span> Status  </label>
                      <select disabled id="status" name="status" class="form-control input-lg">
                        <option disabled selected>-Status-</option>
                        <option value="Accelerate"> Accelerate</option>
                        <option value="Repeat"> Repeat </option>
                        <option value="Drop"> Drop </option>
                      </select>
                      <br>
                  </div>

                  <div class="form-group">
                  <label><h3><span class="glyphicon glyphicon-hand-right"></span> Parent Information </h3</label>
                  </div>
                <div class="form-group">
                  <label><span class="glyphicon glyphicon-user"></span> Guardian</label>
                  <input disabled type="text" class="form-control input-lg" id="guardian" name="guardian"placeholder="Enter Guardian Full Name" required>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label ><span class="glyphicon glyphicon-eye-heart"></span> Relationship</label>
                            <input disabled type="text" id ="relationship" class="form-control input-lg" name="relationship" placeholder="Relationship with Pupil" required>
                        </div>
                    </div>
                
                    <div class="col-sm-6">
                        <div class="form-group"> 
                                <label ><span class="glyphicon glyphicon-phone"></span> Guardian Number</label>
                                <input id="guardiannum" disabled type="text" class="form-control input-lg" name="guardian_number" placeholder="ex: (+63)-99xxxxxxxx" required>
                        </div>
                    </div>
                </div>
               
               
                <div class="form-group">
                  <label ><span class="glyphicon glyphicon-home"></span> Address</label>
                  <input id="address" disabled type="text" class="form-control input-lg" name="address" placeholder="Enter Address" required>
                </div>
                 
              
            </div>
            </form>
            <div class="modal-footer">
              <button type="button" id ="updatestat" name="addpupilBtn" class="btn btn-secondary"><span class="glyphicon glyphicon-save-file"></span> UPDATE STATUS </button>
              <button type="submit" style="display: none" id="savestat" name="savestat" class="btn btn-secondary" form="formUpdate"><span class="glyphicon glyphicon-save-file"></span> SAVE CHANGES </button>
              <button type="button" class="btn btn-light pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> CANCEL </button>
              
            </div>

          </div>
          
      </div>
  </div> 


              <script src="dependecies/jquery/jquery-3.5.0.min.js"
        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="dependecies/popper/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="dependecies/bootstrap/js/4.4.1/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="dependecies/datatables/datatables.min.js"></script>

    <!-- Moment Js -->
    <script src="dependecies/momentJS/moment.min.js"></script>


 <script>
        function openSlideMenu(){
         document.getElementById("side-menu").style.display = "block";
         document.getElementById("side-menu").style.width='250px';
    }
    function closeSlideMenu(){
        document.getElementById("side-menu").style.display = "none";
        document.getElementById("side-menu").style.width='0';
    }
        $(document).ready(function(){
             $(".nav-tabs a").click(function(){
             $(this).tab('show');
           });
        });

 // Fetch Standard

 function fetch_section() {
        $.ajax({
            url: "fetch_section.php",
            type: "post",
            dataType: "json",
            success: function(data) {
                var sectionBody = "";
                for (var key in data) {
                    sectionBody += `<option value="${data[key]['section']}">${data[key]['section']}</option>`;
                }
                $("#select_section").append(sectionBody);
            }
        });
    }
    fetch_section();

    // Fetch Result

    function fetch_year() {
        $.ajax({
            url: "fetch_year.php",
            type: "post",
            dataType: "json",
            success: function(data) {
                var yearBody = "";
                for (var key in data) {
                    yearBody += `<option value="${data[key]['year']}">${data[key]['year']}</option>`;
                }
                $("#select_year").append(yearBody);
            }
        });
    }
    fetch_year();

    // Fetch Records

    function fetch(section, year) {
        $.ajax({
            url: "records.php",
            type: "post",
            data: {
                section: section,
                year: year
            },
            dataType: "json",
            success: function(data) {
                var i = 1;
                $('#record_table').DataTable({
                    "data": data,
                    "responsive": false,
                    "columns": [
                        // {
                        //     "data": "enroll_id",
                        //     "render": function(data, type, row, meta) {
                        //         return i++;
                        //     }
                        // },
                        {
                            "data": "pupil_images",
                            "render": function(data, type, row, meta) {
                                //return moment(row.template);
                                return '<img src="../pupil_images/'+data+'" "width="60px;" height="60px;" alt = "Image" />';
                            }
                        },
                        {
                            "data": "user_id"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.user_id}th`;
                            // }
                        },
                        { "data": null,
                            "render": function( data, type, row ) {
                                return row.pupil_given_name + " " + row.pupil_middle_name + " "+ row.pupil_surname;
                            }
                         },
                        // {
                        //     "data": "pupil_gender"
                        // },
                        // {
                        //     "data": "guardian"
                        // },
                        // {
                        //     "data": "relationship"
                        // },
                        // {
                        //     "data": "guardian_number"
                        // },
                        // {
                        //     "data": "grade_level"
                        //     // "render": function(data, type, row, meta) {
                        //     //     return `${row.standard}th Standard`;
                        //     // }
                        // },
                        // {
                        //     "data": "section"
                        //     // "render": function(data, type, row, meta) {
                        //     //     return `${row.percentage}%`;
                        //     // }
                        // },
                        { "data": null,
                            "render": function( data, type, row ) {
                                return row.grade_level + " - " + row.section;
                            }
                         },
                        {
                            "data": "year"
                            // "render": function(data, type, row, meta) {
                            //     return moment(row.created_at).format('DD-MM-YYYY');
                            // }
                        },
                        // {
                        //     "data": "template",
                        //     "render": function(data, type, row, meta) {
                        //         //return moment(row.template);
                        //         return '<img src="../gbrqrcode/'+data+'" />';
                        //     }
                        // },
                        {
                            "data": "pupil_id",
                            "render": function(data, type, row, meta) {
                                //return moment(row.template);
                                return '<button type="button" class="btn btn-secondary details" onClick ="details('+data+')" >DETAILS</button>';
                            }
                        }
                    ]
                });
            }
        });
    }
    fetch(); 




    //MODAL 

    
   function details(id){
     
            $.ajax({
                url: "../code.php",
                type: "post",
                data: {pupil_id: id},
                dataType: "json",
                success: function(data) {
                    var gradelevel = data['grade_level']+" - "+data['section'];
                    var pupilname = data['pupil_given_name'] +" "+data['pupil_middle_name']+" "+data['pupil_surname'];
                    $('#user_id').val(data['user_id']);
                    $('#school_year option:contains(' + data['year'] + ')').prop({selected: true});
                    $('#pupil_name').val(pupilname);

                    $('#gradesec option:contains(' + gradelevel + ')').prop({selected: true});
                    $('#pupil_gender option:contains(' + data['pupil_gender'] + ')').prop({selected: true});
                    
                    if(data['status'] != ''){
                        $('#status option:contains(' + data['status'] + ')').prop({selected: true});
                    }
                    
                    $('#guardian').val(data['guardian']);
                    $('#guardiannum').val(data['guardian_number']);
                    $('#address').val(data['address']);
                    $('#relationship').val(data['relationship']);
                    $('#savestat').val(data['pupil_id']);
                   

                    $("#addpupilModal").modal('show');   
                }
            });
}

   $(document).on('click', '#updatestat', function(e){
    document.getElementById("updatestat").style.display="none";
    document.getElementById("savestat").style.display="block";
    
    $('#school_year').prop('disabled', false);
    $('#gradesec').prop('disabled', false);
    $('#status').prop('disabled', false);
    
  
   // document.getElementById("savestat").style.display="none";

   });

   $(document).on('hidden.bs.modal', '#addpupilModal', function() {
        document.getElementById("updatestat").style.display="block";
        document.getElementById("savestat").style.display="none";
    })
   

    // Filter

    $(document).on("click", "#filter", function(e) {
        e.preventDefault();

        var section = $("#select_section").val();
        var year = $("#select_year").val();

        if (section !== "" && year !== "") {
            $('#record_table').DataTable().destroy();
            fetch(section, year);
        } else if (section !== "" && year == "") {
            $('#record_table').DataTable().destroy();
            fetch(section, '');
        } else if (section == "" && year !== "") {
            $('#record_table').DataTable().destroy();
            fetch('', year);
        } else {
            $('#record_table').DataTable().destroy();
            fetch();
        }
    });

    // Reset Standard

    $(document).on("click", "#reset_section", function(e) {
        e.preventDefault();

        $("#select_section").html(`<option value="">Choose...</option>`);

        var year = $("#select_year").val();

        if (year == "") {
            $('#record_table').DataTable().destroy();
            fetch();
            fetch_section();
        } else {
            $('#record_table').DataTable().destroy();
            fetch('', year);
            fetch_section();
        }
    });

    // Reset Result

    $(document).on("click", "#reset_year", function(e) {
        e.preventDefault();

        $("#select_year").html(`<option value="">Choose...</option>`);

        var section = $("#select_section").val();

        if (section == "") {
            $('#record_table').DataTable().destroy();
            fetch();
            fetch_year();
        } else {
            $('#record_table').DataTable().destroy();
            fetch(section, '');
            fetch_year();
        }
    });

    // Reset

    $(document).on("click", "#reset", function(e) {
        e.preventDefault();

        $("#select_section").html(`<option value="">Choose...</option>`);
        $("#select_year").html(`<option value="">Choose...</option>`);

        $('#record_table').DataTable().destroy();
        fetch();
        fetch_section();
        fetch_year();
    });
        </script>
</body>

</html>