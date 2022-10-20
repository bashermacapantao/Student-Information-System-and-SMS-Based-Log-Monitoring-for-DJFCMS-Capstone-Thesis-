<?php
include('../security.php');
// include('../includes/navbar.php')
include('header_pupil.php');
include('../database/connectdb.php');
?>
    <title>Admin | Pupil List</title>
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
        <a class="nav-link" href="#"><span class="glyphicon glyphicon-log-out"> <?php echo $_SESSION['username']; ?> </span>  </a>
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
                  <a href="../administrator.php" class="active">HOME</a> 
                  <a href="../list_adviser/adviser_list.php">Adviser List</a>
                  <a href="../list_pupil/pupil_list.php">Pupil List</a>
                  <a href="../list_attendance/attendance_list.php"> Attendance</a>
                  <!-- <a href="#"data-toggle="modal" data-target="#qrcodeModal"><b>QRcode Attendance</b></a> -->
                  <div class="dropdown">
                    <a href="#" class="dropdown-toggle" type="button" data-toggle="dropdown">QR code
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdownmenu">
                      <li class="dropdown-header">Attendance</li>
                      <li><a href="../QRcode/Login_QRcode.php">LOG - IN</a></li>
                      <li><a href="../QRcode/Logout_QRcode.php">LOG - OUT</a></li>
                      <!-- <li><a href="#">JavaScript</a></li>
                      <li class="divider"></li>
                      <li class="dropdown-header">Dropdown header 2</li>
                      <li><a href="#">About Us</a></li> -->
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
modal-ulo, #h4, .close {
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
}
.main-color-bg{
    background-color:#343a40 !important ;
    /* border-color: #c0392b !important; */
    color: #ffffff !important;
    text-align: center;
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
          <!-- ############################ -->
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
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
     

  
    <div class="container"> 
        <!-- <ol class="breadcrumb">
            <h1 class="glyphicon glyphicon-list-alt active"> Pupil List <br></h1>
            
         </ol>   -->
     
        
     <ul class="nav nav-tabs nav-justified" role="tablist">
        <!-- <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Home</a></li> -->
       
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#gradeI">Grade - I</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#gradeII">Grade - II</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#gradeIII">Grade - III</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#gradeIV">Grade - IV</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#gradeV">Grade - V</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#gradeVI">Grade - VI</a></li>
      </ul> 


  

  <div class="tab-content">
    <!-- <div id="home" class="container tab-pane active">
      <h2> <b>Grade & Section List</b></h2>
    <div class="container">  
          
                 </div>

    </div> -->
    <!-- ########################################### -->
   
<?php
include ('gradeone.php');
include ('gradetwo.php');
include ('gradethree.php');
include ('gradefour.php');
include ('gradefive.php');
include ('gradesix.php');
   ?>

<div class="modal" id="details_Modal" role="dialog" >
      <div class="modal-dialog modal-lg">
        
          <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <h4 style="color: black;"><span class="glyphicon glyphicon-user" ></span> Pupils Information</h4>
              <button type="button" class="close" data-dismiss="modal" style="color: red;" >&times;</button>
             
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
                  <label ><span class="glyphicon glyphicon-user"></span> Pupil Name</label>
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
              <button type="button" id ="update_status" name="addpupilBtn" class="btn btn-secondary"><span class="glyphicon glyphicon-save-file"></span> UPDATE STATUS </button>
              <button type="submit" style="display: none" id="save_status" name="save_status" class="btn btn-secondary" form="formUpdate"><span class="glyphicon glyphicon-save-file"></span> SAVE CHANGES </button>
              <button type="button" class="btn btn-light pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> CANCEL </button>
              
            </div>

          </div>
          
      </div>
  </div> 

   







<!-- <script src="https://code.jquery.com/jquery-3.5.0.min.js"
        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/r-2.2.3/datatables.min.js"></script> -->

    <!-- Moment Js -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script> -->
    
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
<!-- 
    <script src="../dependecies/datables/jquery.js"></script>
        <script src="../dependecies/datables/jquery.dataTables.min.js"></script>
        <script src="../dependecies/datables/dataTables.buttons.min.js"></script>
        <script src="./dependecies/datables/jszip.min.js"></script>
        <script src="./dependecies/datables/pdfmake.min.js"></script>
        <script src="../dependecies/datables/vfs_fonts.js"></script>
        <script src="./dependecies/datables/buttons.html5.min.js"></script>
        <script src="../dependecies/datables/buttons.print.min.js"></script> -->

    <script>
        function openSlideMenu(){
         document.getElementById("side-menu").style.display = "block";
         document.getElementById("side-menu").style.width='250px';
    }
    function closeSlideMenu(){
        document.getElementById("side-menu").style.display = "none";
        document.getElementById("side-menu").style.width='0';
    }
        // $(document).ready(function(){
        //      $(".nav-tabs a").click(function(){
        //      $(this).tab('show');
        //    });
        // });

       //MODAL 

 
//         $(document).ready(function() {
//     $('#record_gradeone').DataTable( {
//         dom: 'Bfrtip',
//         buttons: [
//             'copy', 'csv', 'excel', 'pdf', 'print'
//         ]
//     } );
// } );
    // Fetch Standard

 
    // ##########################################################################################

// Grade One           Grade One               Grade One

    // Fetch Section
    function fetchgradeone_section() {
        $.ajax({
            url: "fetchgradeone_section.php",
            type: "post",
            dataType: "json",
            success: function(data) {
                var sectionBody = "";
                for (var key in data) {
                    sectionBody += `<option value="${data[key]['section']}">${data[key]['section']}</option>`;
                }
                $("#select_gradeonesection").append(sectionBody);
            }
        });
    }
    fetchgradeone_section();

    // Fetch year

    function fetchgradeone_year() {
        $.ajax({
            url: "fetchgradeone_year.php",
            type: "post",
            dataType: "json",
            success: function(data) {
                var yearBody = "";
                for (var key in data) {
                    yearBody += `<option value="${data[key]['year']}">${data[key]['year']}</option>`;
                }
                $("#select_gradeoneyear").append(yearBody);
            }
        });
    }
    fetchgradeone_year();

    // Fetch Records

    function fetchgradeone(section, year) {
        $.ajax({
            url: "recordsgradeone.php",
            type: "post",
            data: {
                section: section,
                year: year
            },
            dataType: "json",
            success: function(data) {
                var i = 1;
                var name ='a';
                $('#record_gradeone').DataTable({
                    "data": data,
                    "responsive": true,
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
                        { "data": null,
                            "render": function( data, type, row ) {
                                return row.grade_level + " " + row.section;
                            }
                         },
                        {
                             "data": null,
                            "render": function( data, type, row ) {
                                return row.adviser_given_name + " " + row.adviser_middle_name + " "+ row.adviser_surname;
                            }
                        },
                        {
                            "data": "year"
                            // "render": function(data, type, row, meta) {
                            //     return moment(row.created_at).format('DD-MM-YYYY');
                            // }
                        },
                        {
                            "data": "template",
                            "render": function(data, type, row, meta) {
                                //return moment(row.template);
                                return '<img src="../gbrqrcode/'+data+'"  "width="60px;" height="60px;" alt = "Image"/>';
                            }
                        },
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
    fetchgradeone();

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
             $('#save_status').val(data['pupil_id']);
            

             $("#details_Modal").modal('show');   
         }
     });
}

$(document).on('click', '#update_status', function(e){
document.getElementById("update_status").style.display="none";
document.getElementById("save_status").style.display="block";

$('#school_year').prop('disabled', false);
$('#gradesec').prop('disabled', false);
$('#status').prop('disabled', false);


// document.getElementById("savestat").style.display="none";

});

$(document).on('hidden.bs.modal', '#details_Modal', function() {
 document.getElementById("update_status").style.display="block";
 document.getElementById("save_status").style.display="none";
});

    // Filter

    $(document).on("click", "#gradeonefilter", function(e) {
        e.preventDefault();

        var section = $("#select_gradeonesection").val();
        var year = $("#select_gradeoneyear").val();

        if (section !== "" && year !== "") {
            $('#record_gradeone').DataTable().destroy();
            fetchgradeone(section, year);
        } else if (section !== "" && year == "") {
            $('#record_gradeone').DataTable().destroy();
            fetchgradeone(section, '');
        } else if (section == "" && year !== "") {
            $('#record_gradeone').DataTable().destroy();
            fetchgradeone('', year);
        } else {
            $('#record_gradeone').DataTable().destroy();
            fetchgradeone();
        }
    });

    // Reset Section

    $(document).on("click", "#reset_gradeonesection", function(e) {
        e.preventDefault();

        $("#select_gradeonesection").html(`<option value="">Choose...</option>`);

        var year = $("#select_gradeoneyear").val();

        if (year == "") {
            $('#record_gradeone').DataTable().destroy();
            fetchgradeone();
            fetchgradeone_section();
        } else {
            $('#record_gradeone').DataTable().destroy();
            fetchgradeone('', year);
            fetchgradeone_section();
        }
    });

    // Reset Year

    $(document).on("click", "#reset_gradeoneyear", function(e) {
        e.preventDefault();

        $("#select_gradeoneyear").html(`<option value="">Choose...</option>`);

        var section = $("#select_gradeonesection").val();

        if (section == "") {
            $('#record_gradeone').DataTable().destroy();
            fetchgradeone();
            fetchgradeone_year();
        } else {
            $('#record_gradeone').DataTable().destroy();
            fetchgradeone(section, '');
            fetchgradeone_year();
        }
    });

    // Reset

    $(document).on("click", "#gradeonereset", function(e) {
        e.preventDefault();

        $("#select_gradeonesection").html(`<option value="">Choose...</option>`);
        $("#select_gradeoneyear").html(`<option value="">Choose...</option>`);

        $('#record_gradeone').DataTable().destroy();
        fetchgradeone();
        fetchgradeone_section();
        fetchgradeone_year();
    });


   // ##########################################################################################

// Grade Two           Grade Two               Two

    // Fetch Section
    function fetchgradetwo_section() {
        $.ajax({
            url: "fetchgradetwo_section.php",
            type: "post",
            dataType: "json",
            success: function(data) {
                var sectionBody = "";
                for (var key in data) {
                    sectionBody += `<option value="${data[key]['section']}">${data[key]['section']}</option>`;
                }
                $("#select_gradetwosection").append(sectionBody);
            }
        });
    }
    fetchgradetwo_section();

    // Fetch year

    function fetchgradetwo_year() {
        $.ajax({
            url: "fetchgradetwo_year.php",
            type: "post",
            dataType: "json",
            success: function(data) {
                var yearBody = "";
                for (var key in data) {
                    yearBody += `<option value="${data[key]['year']}">${data[key]['year']}</option>`;
                }
                $("#select_gradetwoyear").append(yearBody);
            }
        });
    }
    fetchgradetwo_year();

    // Fetch Records

    function fetchgradetwo(section, year) {
        $.ajax({
            url: "recordsgradetwo.php",
            type: "post",
            data: {
                section: section,
                year: year
            },
            dataType: "json",
            success: function(data) {
                var i = 1;
                $('#record_gradetwo').DataTable({
                    "data": data,
                    "responsive": true,
                    "columns": [
                        
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
                        {
                             "data": null,
                            "render": function( data, type, row ) {
                                return row.grade_level + " - " + row.section;
                            }
                        },
                        {
                             "data": null,
                            "render": function( data, type, row ) {
                                return row.adviser_given_name + " " + row.adviser_middle_name + " "+ row.adviser_surname;
                            }
                        },
                        {
                            "data": "year"
                            // "render": function(data, type, row, meta) {
                            //     return moment(row.created_at).format('DD-MM-YYYY');
                            // }
                        },
                        {
                            "data": "template",
                            "render": function(data, type, row, meta) {
                                //return moment(row.template);
                                return '<img src="../gbrqrcode/'+data+'"  "width="60px;" height="60px;" alt = "Image"/>';
                            }
                            
                        },
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
    fetchgradetwo();
    // fetchgradetwo_filter();

    // Filter

    $(document).on("click", "#gradetwofilter", function(e) {
        e.preventDefault();

        var section = $("#select_gradetwosection").val();
        var year = $("#select_gradetwoyear").val();

        if (section !== "" && year !== "") {
            $('#record_gradetwo').DataTable().destroy();
            fetchgradetwo(section, year);
        } else if (section !== "" && year == "") {
            $('#record_gradetwo').DataTable().destroy();
            fetchgradetwo(section, '');
        } else if (section == "" && year !== "") {
            $('#record_gradetwo').DataTable().destroy();
            fetchgradetwo('', year);
        } else {
            $('#record_gradetwo').DataTable().destroy();
            fetchgradetwo();
        }
    });

    // Reset Section

    $(document).on("click", "#reset_gradetwosection", function(e) {
        e.preventDefault();

        $("#select_gradetwosection").html(`<option value="">Choose...</option>`);

        var year = $("#select_gradetwoyear").val();

        if (year == "") {
            $('#record_gradetwo').DataTable().destroy();
            fetchgradetwo();
            fetchgradetwo_section();
        } else {
            $('#record_gradetwo').DataTable().destroy();
            fetchgradetwo('', year);
            fetchgradetwo_section();
        }
    });

    // Reset Year

    $(document).on("click", "#reset_gradetwoyear", function(e) {
        e.preventDefault();

        $("#select_gradetwoyear").html(`<option value="">Choose...</option>`);

        var section = $("#select_gradetwosection").val();

        if (section == "") {
            $('#record_gradetwo').DataTable().destroy();
            fetchgradetwo();
            fetchgradetwo_year();
        } else {
            $('#record_gradetwo').DataTable().destroy();
            fetchgradetwo(section, '');
            fetchgradetwo_year();
        }
    });

    // Reset

    $(document).on("click", "#gradetworeset", function(e) {
        e.preventDefault();

        $("#select_gradetwosection").html(`<option value="">Choose...</option>`);
        $("#select_gradetwoyear").html(`<option value="">Choose...</option>`);

        $('#record_gradetwo').DataTable().destroy();
        fetchgradetwo();
        fetchgradetwo_section();
        fetchgradetwo_year();
    });



// ##########################################################################################

// Gradeethree           Gradeethree               Gradeethree

    // Fetch Section
    function fetchgradethree_section() {
        $.ajax({
            url: "fetchgradethree_section.php",
            type: "post",
            dataType: "json",
            success: function(data) {
                var sectionBody = "";
                for (var key in data) {
                    sectionBody += `<option value="${data[key]['section']}">${data[key]['section']}</option>`;
                }
                $("#select_gradethreesection").append(sectionBody);
            }
        });
    }
    fetchgradethree_section();

    // Fetch year

    function fetchgradethree_year() {
        $.ajax({
            url: "fetchgradethree_year.php",
            type: "post",
            dataType: "json",
            success: function(data) {
                var yearBody = "";
                for (var key in data) {
                    yearBody += `<option value="${data[key]['year']}">${data[key]['year']}</option>`;
                }
                $("#select_gradethreeyear").append(yearBody);
            }
        });
    }
    fetchgradethree_year();

    // Fetch Records

    function fetchgradethree(section, year) {
        $.ajax({
            url: "recordsgradethree.php",
            type: "post",
            data: {
                section: section,
                year: year
            },
            dataType: "json",
            success: function(data) {
                var i = 1;
                $('#record_gradethree').DataTable({
                    "data": data,
                    "responsive": true,
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
                        { "data": null,
                            "render": function( data, type, row ) {
                                return row.grade_level + " " + row.section;
                            }
                         },
                        {
                             "data": null,
                            "render": function( data, type, row ) {
                                return row.adviser_given_name + " " + row.adviser_middle_name + " "+ row.adviser_surname;
                            }
                        },
                        {
                            "data": "year"
                            // "render": function(data, type, row, meta) {
                            //     return moment(row.created_at).format('DD-MM-YYYY');
                            // }
                        },
                        {
                            "data": "template",
                            "render": function(data, type, row, meta) {
                                //return moment(row.template);
                                return '<img src="../gbrqrcode/'+data+'"  "width="60px;" height="60px;" alt = "Image"/>';
                            }
                            
                        },
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
    fetchgradethree();

    // Filter

    $(document).on("click", "#gradethreefilter", function(e) {
        e.preventDefault();

        var section = $("#select_gradethreesection").val();
        var year = $("#select_gradethreeyear").val();

        if (section !== "" && year !== "") {
            $('#record_gradethree').DataTable().destroy();
            fetchgradethree(section, year);
        } else if (section !== "" && year == "") {
            $('#record_gradethree').DataTable().destroy();
            fetchgradethree(section, '');
        } else if (section == "" && year !== "") {
            $('#record_gradethree').DataTable().destroy();
            fetchgradethree('', year);
        } else {
            $('#record_gradethree').DataTable().destroy();
            fetchgradethree();
        }
    });

    // Reset Section

    $(document).on("click", "#reset_gradethreesection", function(e) {
        e.preventDefault();

        $("#select_gradethreesection").html(`<option value="">Choose...</option>`);

        var year = $("#select_gradethreeyear").val();

        if (year == "") {
            $('#record_gradethree').DataTable().destroy();
            fetchgradethree();
            fetchgradethree_section();
        } else {
            $('#record_gradethree').DataTable().destroy();
            fetchgradethree('', year);
            fetchgradethree_section();
        }
    });

    // Reset Year

    $(document).on("click", "#reset_gradethreeyear", function(e) {
        e.preventDefault();

        $("#select_gradethreeyear").html(`<option value="">Choose...</option>`);

        var section = $("#select_gradethreesection").val();

        if (section == "") {
            $('#record_gradethree').DataTable().destroy();
            fetchgradethree();
            fetchgradethree_year();
        } else {
            $('#record_gradethree').DataTable().destroy();
            fetchgradethree(section, '');
            fetchgradethree_year();
        }
    });

    // Reset

    $(document).on("click", "#gradethreereset", function(e) {
        e.preventDefault();

        $("#select_gradethreesection").html(`<option value="">Choose...</option>`);
        $("#select_gradethreeyear").html(`<option value="">Choose...</option>`);

        $('#record_gradethree').DataTable().destroy();
        fetchgradethree();
        fetchgradethree_section();
        fetchgradethree_year();
    });

// ##########################################################################################

// Gradeefour           Gradeefour               Gradeefour

    // Fetch Section
    function fetchgradefour_section() {
        $.ajax({
            url: "fetchgradefour_section.php",
            type: "post",
            dataType: "json",
            success: function(data) {
                var sectionBody = "";
                for (var key in data) {
                    sectionBody += `<option value="${data[key]['section']}">${data[key]['section']}</option>`;
                }
                $("#select_gradefoursection").append(sectionBody);
            }
        });
    }
    fetchgradefour_section();

    // Fetch year

    function fetchgradefour_year() {
        $.ajax({
            url: "fetchgradefour_year.php",
            type: "post",
            dataType: "json",
            success: function(data) {
                var yearBody = "";
                for (var key in data) {
                    yearBody += `<option value="${data[key]['year']}">${data[key]['year']}</option>`;
                }
                $("#select_gradefouryear").append(yearBody);
            }
        });
    }
    fetchgradefour_year();

    // Fetch Records

    function fetchgradefour(section, year) {
        $.ajax({
            url: "recordsgradefour.php",
            type: "post",
            data: {
                section: section,
                year: year
            },
            dataType: "json",
            success: function(data) {
                var i = 1;
                $('#record_gradefour').DataTable({
                    "data": data,
                    "responsive": true,
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
                        { "data": null,
                            "render": function( data, type, row ) {
                                return row.grade_level + " " + row.section;
                            }
                         },
                        {
                             "data": null,
                            "render": function( data, type, row ) {
                                return row.adviser_given_name + " " + row.adviser_middle_name + " "+ row.adviser_surname;
                            }
                        },
                        {
                            "data": "year"
                            // "render": function(data, type, row, meta) {
                            //     return moment(row.created_at).format('DD-MM-YYYY');
                            // }
                        },
                        {
                            "data": "template",
                            "render": function(data, type, row, meta) {
                                //return moment(row.template);
                                return '<img src="../gbrqrcode/'+data+'"  "width="60px;" height="60px;" alt = "Image"/>';
                            }
                        },
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
    fetchgradefour();

    // Filter

    $(document).on("click", "#gradefourfilter", function(e) {
        e.preventDefault();

        var section = $("#select_gradefoursection").val();
        var year = $("#select_gradefouryear").val();

        if (section !== "" && year !== "") {
            $('#record_gradefour').DataTable().destroy();
            fetchgradefour(section, year);
        } else if (section !== "" && year == "") {
            $('#record_gradefour').DataTable().destroy();
            fetchgradefour(section, '');
        } else if (section == "" && year !== "") {
            $('#record_gradefour').DataTable().destroy();
            fetchgradefour('', year);
        } else {
            $('#record_gradefour').DataTable().destroy();
            fetchgradefour();
        }
    });

    // Reset Section

    $(document).on("click", "#reset_gradefoursection", function(e) {
        e.preventDefault();

        $("#select_gradefoursection").html(`<option value="">Choose...</option>`);

        var year = $("#select_gradefouryear").val();

        if (year == "") {
            $('#record_gradefour').DataTable().destroy();
            fetchgradefour();
            fetchgradefour_section();
        } else {
            $('#record_gradefour').DataTable().destroy();
            fetchgradefour('', year);
            fetchgradefour_section();
        }
    });

    // Reset Year

    $(document).on("click", "#reset_gradefouryear", function(e) {
        e.preventDefault();

        $("#select_gradefouryear").html(`<option value="">Choose...</option>`);

        var section = $("#select_gradefoursection").val();

        if (section == "") {
            $('#record_gradefour').DataTable().destroy();
            fetchgradefour();
            fetchgradefour_year();
        } else {
            $('#record_gradefour').DataTable().destroy();
            fetchgradefour(section, '');
            fetchgradefour_year();
        }
    });

    // Reset

    $(document).on("click", "#gradefourreset", function(e) {
        e.preventDefault();

        $("#select_gradefoursection").html(`<option value="">Choose...</option>`);
        $("#select_gradefouryear").html(`<option value="">Choose...</option>`);

        $('#record_gradefour').DataTable().destroy();
        fetchgradefour();
        fetchgradefour_section();
        fetchgradefour_year();
    });


// ##########################################################################################

// Gradeefive           Gradeefive               Gradeefive

    // Fetch Section
    function fetchgradefive_section() {
        $.ajax({
            url: "fetchgradefive_section.php",
            type: "post",
            dataType: "json",
            success: function(data) {
                var sectionBody = "";
                for (var key in data) {
                    sectionBody += `<option value="${data[key]['section']}">${data[key]['section']}</option>`;
                }
                $("#select_gradefivesection").append(sectionBody);
            }
        });
    }
    fetchgradefive_section();

    // Fetch year

    function fetchgradefive_year() {
        $.ajax({
            url: "fetchgradefive_year.php",
            type: "post",
            dataType: "json",
            success: function(data) {
                var yearBody = "";
                for (var key in data) {
                    yearBody += `<option value="${data[key]['year']}">${data[key]['year']}</option>`;
                }
                $("#select_gradefiveyear").append(yearBody);
            }
        });
    }
    fetchgradefive_year();

    // Fetch Records

    function fetchgradefive(section, year) {
        $.ajax({
            url: "recordsgradefive.php",
            type: "post",
            data: {
                section: section,
                year: year
            },
            dataType: "json",
            success: function(data) {
                var i = 1;
                $('#record_gradefive').DataTable({
                    "data": data,
                    "responsive": true,
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
                                return '<img src="../pupil_images/'+data+'" "width="60px;" height="60px;" alt = "Image"/>';
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
                        { "data": null,
                            "render": function( data, type, row ) {
                                return row.grade_level + " " + row.section;
                            }
                         },
                        {
                             "data": null,
                            "render": function( data, type, row ) {
                                return row.adviser_given_name + " " + row.adviser_middle_name + " "+ row.adviser_surname;
                            }
                        },
                        {
                            "data": "year"
                            // "render": function(data, type, row, meta) {
                            //     return moment(row.created_at).format('DD-MM-YYYY');
                            // }
                        },
                        {
                            "data": "template",
                            "render": function(data, type, row, meta) {
                                //return moment(row.template);
                                return '<img src="../gbrqrcode/'+data+'"  "width="60px;" height="60px;" alt = "Image"/>';
                            }
                        },
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
    fetchgradefive();

    // Filter

    $(document).on("click", "#gradefivefilter", function(e) {
        e.preventDefault();

        var section = $("#select_gradefivesection").val();
        var year = $("#select_gradefiveyear").val();

        if (section !== "" && year !== "") {
            $('#record_gradefive').DataTable().destroy();
            fetchgradefive(section, year);
        } else if (section !== "" && year == "") {
            $('#record_gradefive').DataTable().destroy();
            fetchgradefive(section, '');
        } else if (section == "" && year !== "") {
            $('#record_gradefive').DataTable().destroy();
            fetchgradefive('', year);
        } else {
            $('#record_gradefive').DataTable().destroy();
            fetchgradefive();
        }
    });

    // Reset Section

    $(document).on("click", "#reset_gradefivesection", function(e) {
        e.preventDefault();

        $("#select_gradefivesection").html(`<option value="">Choose...</option>`);

        var year = $("#select_gradefiveyear").val();

        if (year == "") {
            $('#record_gradefive').DataTable().destroy();
            fetchgradefive();
            fetchgradefive_section();
        } else {
            $('#record_gradefive').DataTable().destroy();
            fetchgradefive('', year);
            fetchgradefive_section();
        }
    });

    // Reset Year

    $(document).on("click", "#reset_gradefiveyear", function(e) {
        e.preventDefault();

        $("#select_gradefiveyear").html(`<option value="">Choose...</option>`);

        var section = $("#select_gradefivesection").val();

        if (section == "") {
            $('#record_gradefive').DataTable().destroy();
            fetchgradefive();
            fetchgradefive_year();
        } else {
            $('#record_gradefive').DataTable().destroy();
            fetchgradefive(section, '');
            fetchgradefive_year();
        }
    });

    // Reset

    $(document).on("click", "#gradefivereset", function(e) {
        e.preventDefault();

        $("#select_gradefivesection").html(`<option value="">Choose...</option>`);
        $("#select_gradefiveyear").html(`<option value="">Choose...</option>`);

        $('#record_gradefive').DataTable().destroy();
        fetchgradefive();
        fetchgradefive_section();
        fetchgradefive_year();
    });



// ##########################################################################################

// Gradeesix           Gradeesix               Gradeesix

    // Fetch Section
    function fetchgradesix_section() {
        $.ajax({
            url: "fetchgradesix_section.php",
            type: "post",
            dataType: "json",
            success: function(data) {
                var sectionBody = "";
                for (var key in data) {
                    sectionBody += `<option value="${data[key]['section']}">${data[key]['section']}</option>`;
                }
                $("#select_gradesixsection").append(sectionBody);
            }
        });
    }
    fetchgradesix_section();

    // Fetch year

    function fetchgradesix_year() {
        $.ajax({
            url: "fetchgradesix_year.php",
            type: "post",
            dataType: "json",
            success: function(data) {
                var yearBody = "";
                for (var key in data) {
                    yearBody += `<option value="${data[key]['year']}">${data[key]['year']}</option>`;
                }
                $("#select_gradesixyear").append(yearBody);
            }
        });
    }
    fetchgradesix_year();

    // Fetch Records

    function fetchgradesix(section, year) {
        $.ajax({
            url: "recordsgradesix.php",
            type: "post",
            data: {
                section: section,
                year: year
            },
            dataType: "json",
            success: function(data) {
                var i = 1;
                $('#record_gradesix').DataTable({
                    "data": data,
                    "responsive": true,
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
                        { "data": null,
                            "render": function( data, type, row ) {
                                return row.grade_level + " " + row.section;
                            }
                         },
                        {
                             "data": null,
                            "render": function( data, type, row ) {
                                return row.adviser_given_name + " " + row.adviser_middle_name + " "+ row.adviser_surname;
                            }
                        },
                        {
                            "data": "year"
                            // "render": function(data, type, row, meta) {
                            //     return moment(row.created_at).format('DD-MM-YYYY');
                            // }
                        },
                        {
                            "data": "template", 
                             "render": function(data, type, row, meta) {
                                //return moment(row.template);
                                return '<img src="../gbrqrcode/'+data+'"  "width="60px;" height="60px;" alt = "Image"/>';
                            }
                            
                        },
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
    fetchgradesix();

    // Filter

    $(document).on("click", "#gradesixfilter", function(e) {
        e.preventDefault();

        var section = $("#select_gradesixsection").val();
        var year = $("#select_gradesixyear").val();

        if (section !== "" && year !== "") {
            $('#record_gradesix').DataTable().destroy();
            fetchgradesix(section, year);
        } else if (section !== "" && year == "") {
            $('#record_gradesix').DataTable().destroy();
            fetchgradesix(section, '');
        } else if (section == "" && year !== "") {
            $('#record_gradesix').DataTable().destroy();
            fetchgradesix('', year);
        } else {
            $('#record_gradesix').DataTable().destroy();
            fetchgradesix();
        }
    });

    // Reset Section

    $(document).on("click", "#reset_gradesixsection", function(e) {
        e.preventDefault();

        $("#select_gradesixsection").html(`<option value="">Choose...</option>`);

        var year = $("#select_gradesixyear").val();

        if (year == "") {
            $('#record_gradesix').DataTable().destroy();
            fetchgradesix();
            fetchgradesix_section();
        } else {
            $('#record_gradesix').DataTable().destroy();
            fetchgradesix('', year);
            fetchgradesix_section();
        }
    });

    // Reset Year

    $(document).on("click", "#reset_gradesixyear", function(e) {
        e.preventDefault();

        $("#select_gradesixyear").html(`<option value="">Choose...</option>`);

        var section = $("#select_gradesixsection").val();

        if (section == "") {
            $('#record_gradesix').DataTable().destroy();
            fetchgradesix();
            fetchgradesix_year();
        } else {
            $('#record_gradesix').DataTable().destroy();
            fetchgradesix(section, '');
            fetchgradesix_year();
        }
    });

    // Reset

    $(document).on("click", "#gradesixreset", function(e) {
        e.preventDefault();

        $("#select_gradesixsection").html(`<option value="">Choose...</option>`);
        $("#select_gradesixyear").html(`<option value="">Choose...</option>`);

        $('#record_gradesix').DataTable().destroy();
        fetchgradesix();
        fetchgradesix_section();
        fetchgradesix_year();
    });
 




    </script>
</body>

</html>