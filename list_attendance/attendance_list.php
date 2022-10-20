<?php
include('../security.php');
include('header_attend.php');

?> 
<title >Admin | Attendance List</title>
    <!-- <title>
            <div class="row"  style="padding-top: 25px;padding-bottom: 30px;">
                <div class="col-sm-3"> <img  style="float: right" id="logo" src="../css_files/img/logo.png" s height="90" width="90"alt=""></div>
                <div class="col-sm-6 text-center">
                    <h4>
                        <div> Republic of the Philippines </div>  
                        <div><b>Department of Education</b></div> 
                        <div> Region X - Northern Mindanao </div>
                         Division of Iligan CIty
                   </h4>
                </div>
                <div class="col-sm-3"><img id = "deped" src="../css_files//img/deped.jpg"   height="90" width="90"  alt="" ></div>
                </div>
    </title> -->
    
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
    <div class="container"> 
        <!-- <ol class="breadcrumb">
            <h1 class="glyphicon glyphicon-list-alt active"> Attendance List <br></h1>
            
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


      
                <!-- ############################ -->
                <style>
.modal-ulo, .close {
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
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
     

  

  <div class="tab-content">
    <!-- <div id="home" class="container tab-pane active">
      <h2> <b>Grade & Section List</b></h2>
    <div class="container">  
          
                 </div>

    </div> -->
    <!-- ########################################### -->
   
<?php
include ('modal.php');
include ('gradeone.php');
include ('gradetwo.php');
include ('gradethree.php');
include ('gradefour.php');
include ('gradefive.php');
include ('gradesix.php');
   ?>







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

    <!-- <script src="./dependecies/datables/jquery.js"></script> -->
        <script src="../dependecies/datables/jquery.dataTables.min.js"></script>
        <script src="../dependecies/datables/dataTables.buttons.min.js"></script>
        <!-- <script src="./dependecies/datables/jszip.min.js"></script> -->
        <!-- <script src="./dependecies/datables/pdfmake.min.js"></script> -->
        <!-- <script src="./dependecies/datables/vfs_fonts.js"></script> -->
        <!-- <script src="./dependecies/datables/buttons.html5.min.js"></script> -->
        <script src="../dependecies/datables/buttons.print.min.js"></script>

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

//         $(document).ready(function() {
//     $('#record_gradeone').DataTable( {
//         dom: 'Bfrtip',
//         buttons: [
//             'copy', 'csv', 'excel', 'pdf', 'print'
//         ]
//     } );
// } );

   

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

    // function fetchgradeone(section, year) {
    //     $.ajax({
    //         url: "recordsgradeone.php",
    //         type: "post",
    //         data: {
    //             section: section,
    //             year: year
    //         },
    //         dataType: "json",
    //         success: function(data) {
    //             var i = 1;
    //             $('#record_gradeone').DataTable({
    //                 dom: 'Bfrtip',
    //                 buttons: [
    //                     'copy', 'csv', 'excel', 'pdf', 'print'
    //                 ],
    //                 "data": data,
    //                 "responsive": true,
    //                 "columns": [
    //                     {
    //                         "data": "pupil_name"
    //                     },
    //                     {
    //                         "data": "grade_level"
    //                         // "render": function(data, type, row, meta) {
    //                         //     return `${row.standard}th Standard`;
    //                         // }
    //                     },
    //                     {
    //                         "data": "section"
    //                         // "render": function(data, type, row, meta) {
    //                         //     return `${row.percentage}%`;
    //                         // }
    //                     },
    //                     {
    //                         "data": "TimeInAM"
    //                     },
    //                     {
    //                         "data": "TimeOutAM"
    //                     },
    //                     {
    //                         "data": "TimeInPM"
    //                     },
    //                     {
    //                         "data": "TimeOutPM"
    //                     },
                        
    //                     {
    //                         "data": "logdate",
    //                         "render": function(data, type, row, meta) {
    //                             return moment(row.logdate).format('MM-DD-YYYY');
    //                         }
    //                     },
    //                     {
    //                         "data": "year"
    //                         // "render": function(data, type, row, meta) {
    //                         //     return moment(row.created_at).format('DD-MM-YYYY');
    //                         // }
    //                     }
    //                 ]
    //             });
    //         }
    //     });
      
    // }
    


    function fetchgradeone(section, year,from, to) {
        $.ajax({
            url: "recordsgradeone.php",
            type: "post",
            data: {
                section: section,
                year: year,
                from: from,
                to: to
            },
            dataType: "json",
            success: function(data) {
                var i = 1;
                $('#record_gradeone').DataTable({
                    // dom: 'Bfrtip',
                    // buttons: [
                    //     'copy', 'csv', 'excel', 'pdf', 'print'
                    // ],
                    "data": data,
                    "responsive": true,
                    "columns": [
                        { "data": null,
                            "render": function( data, type, row ) {
                                return row.pupil_given_name + " " + row.pupil_middle_name + " "+ row.pupil_surname;
                            }
                         },
                        {
                            "data": "grade_level"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.standard}th Standard`;
                            // }
                        },
                        {
                            "data": "section"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.percentage}%`;
                            // }
                        },
                        {
                            "data": "TimeInAM",
                            "render": function(data, type, row, meta) {
                                if(data == 'NO LOGIN'){
                                    return  '<span class="badge badge-secondary">'+data+'<span/>';
                                }
                                else
                                    return data;
                            }
                        },
                        {
                            "data": "TimeOutAM",
                            "render": function(data, type, row, meta) {
                                if(data == 'NO LOGOUT'){
                                    return  '<span class="badge badge-secondary">'+data+'<span/>';
                                }
                                else
                                    return data;
                            }
                        },
                        {
                            "data": "TimeInPM",
                            "render": function(data, type, row, meta) {
                                if(data == 'NO LOGIN'){
                                    return  '<span class="badge badge-secondary">'+data+'<span/>';
                                }
                                else
                                    return data;
                            }
                        },
                        {
                            "data": "TimeOutPM",
                            "render": function(data, type, row, meta) {
                                if(data == 'NO LOGOUT'){
                                    return  '<span class="badge badge-secondary">'+data+'<span/>';
                                }
                                else
                                    return data;
                            }
                        },
                        
                        {
                            "data": "logdate",
                            "render": function(data, type, row, meta) {
                                return moment(row.logdate).format('MM-DD-YYYY');
                            }
                        },
                        {
                            "data": "year"
                            // "render": function(data, type, row, meta) {
                            //     return moment(row.created_at).format('DD-MM-YYYY');
                            // }
                        }
                    ]
                });
            }
        });
    }
    fetchgradeone();


    // Filter

    $(document).on("click", "#gradeonefilter", function(e) {
        e.preventDefault();

        var section = $("#select_gradeonesection").val();
        var year = $("#select_gradeoneyear").val();
        var from = $("#from-date").val();
        var to = $("#to-date").val();

        if ((section !== "" && year !== "") &&  (from !== "" && to !== "")){
            $('#record_gradeone').DataTable().destroy();
            fetchgradeone(section, year,from,to);
        }
        else if (section !== "" && year !== "") {
            $('#record_gradeone').DataTable().destroy();
            fetchgradeone(section, year);
        } else if (section !== "" && year == "") {
            $('#record_gradeone').DataTable().destroy();
            fetchgradeone(section, '');
        } else if (section == "" && year !== "") {
            $('#record_gradeone').DataTable().destroy();
            fetchgradeone('', year);
        } 
        
        else {
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

    // function fetchgradetwo(section, year) {
    //     $.ajax({
    //         url: "recordsgradetwo.php",
    //         type: "post",
    //         data: {
    //             section: section,
    //             year: year
    //         },
    //         dataType: "json",
    //         success: function(data) {
    //             var i = 1;
    //             $('#record_gradetwo').DataTable({
    //                 dom: 'Bfrtip',
    //                 buttons: [
    //                     'copy', 'csv', 'excel', 'pdf', 'print'
    //                 ],
    //                 "data": data,
    //                 "responsive": true,
    //                 "columns": [
    //                     {
    //                         "data": "pupil_name"
    //                     },
    //                     {
    //                         "data": "grade_level"
    //                         // "render": function(data, type, row, meta) {
    //                         //     return `${row.standard}th Standard`;
    //                         // }
    //                     },
    //                     {
    //                         "data": "section"
    //                         // "render": function(data, type, row, meta) {
    //                         //     return `${row.percentage}%`;
    //                         // }
    //                     },
    //                     {
    //                         "data": "TimeInAM"
    //                     },
    //                     {
    //                         "data": "TimeOutAM"
    //                     },
    //                     {
    //                         "data": "TimeInPM"
    //                     },
    //                     {
    //                         "data": "TimeOutPM"
    //                     },
                        
    //                     {
    //                         "data": "logdate",
    //                         "render": function(data, type, row, meta) {
    //                             return moment(row.logdate).format('MM-DD-YYYY');
    //                         }
    //                     },
    //                     {
    //                         "data": "year"
    //                         // "render": function(data, type, row, meta) {
    //                         //     return moment(row.created_at).format('DD-MM-YYYY');
    //                         // }
    //                     }
    //                 ]
    //             });
    //         }
    //     });
    // }


    function fetchgradetwo(section, year,from, to) {
        $.ajax({
            url: "recordsgradetwo.php",
            type: "post",
            data: {
                section: section,
                year: year,
                from: from,
                to: to
            },
            dataType: "json",
            success: function(data) {
                var i = 1;
                $('#record_gradetwo').DataTable({
                    // dom: 'Bfrtip',
                    // buttons: [
                    //     'copy', 'csv', 'excel', 'pdf', 'print'
                    // ],
                    "data": data,
                    "responsive": true,
                    "columns": [
                        { "data": null,
                            "render": function( data, type, row ) {
                                return row.pupil_given_name + " " + row.pupil_middle_name + " "+ row.pupil_surname;
                            }
                         },
                        {
                            "data": "grade_level"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.standard}th Standard`;
                            // }
                        },
                        {
                            "data": "section"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.percentage}%`;
                            // }
                        },
                        {
                            "data": "TimeInAM",
                            "render": function(data, type, row, meta) {
                                if(data == 'NO LOGIN'){
                                    return  '<span class="badge badge-secondary">'+data+'<span/>';
                                }
                                else
                                    return data;
                            }
                        },
                        {
                            "data": "TimeOutAM",
                            "render": function(data, type, row, meta) {
                                if(data == 'NO LOGOUT'){
                                    return  '<span class="badge badge-secondary">'+data+'<span/>';
                                }
                                else
                                    return data;
                            }
                        },
                        {
                            "data": "TimeInPM",
                            "render": function(data, type, row, meta) {
                                if(data == 'NO LOGIN'){
                                    return  '<span class="badge badge-secondary">'+data+'<span/>';
                                }
                                else
                                    return data;
                            }
                        },
                        {
                            "data": "TimeOutPM",
                            "render": function(data, type, row, meta) {
                                if(data == 'NO LOGOUT'){
                                    return  '<span class="badge badge-secondary">'+data+'<span/>';
                                }
                                else
                                    return data;
                            }
                        },
                        
                        {
                            "data": "logdate",
                            "render": function(data, type, row, meta) {
                                return moment(row.logdate).format('MM-DD-YYYY');
                            }
                        },
                        {
                            "data": "year"
                            // "render": function(data, type, row, meta) {
                            //     return moment(row.created_at).format('DD-MM-YYYY');
                            // }
                        }
                    ]
                });
            }
        });
    }
    fetchgradetwo();

    // Filter

    
    // Filter

    $(document).on("click", "#gradetwofilter", function(e) {
        e.preventDefault();

        var section = $("#select_gradetwosection").val();
        var year = $("#select_gradetwoyear").val();
        var from = $("#gradetwo_from-date").val();
        var to = $("#gradetwo_to-date").val();

        if ((section !== "" && year !== "") &&  (from !== "" && to !== "")){
            $('#record_gradetwo').DataTable().destroy();
            fetchgradetwo(section, year,from,to);
        }
        else if (section !== "" && year !== "") {
            $('#record_gradetwo').DataTable().destroy();
            fetchgradetwo(section, year);
        } else if (section !== "" && year == "") {
            $('#record_gradetwo').DataTable().destroy();
            fetchgradetwo(section, '');
        } else if (section == "" && year !== "") {
            $('#record_gradetwo').DataTable().destroy();
            fetchgradetwo('', year);
        } 
        
        else {
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

    // function fetchgradethree(section, year) {
    //     $.ajax({
    //         url: "recordsgradethree.php",
    //         type: "post",
    //         data: {
    //             section: section,
    //             year: year
    //         },
    //         dataType: "json",
    //         success: function(data) {
    //             var i = 1;
    //             $('#record_gradethree').DataTable({
    //                 dom: 'Bfrtip',
    //                 buttons: [
    //                     'copy', 'csv', 'excel', 'pdf', 'print'
    //                 ],
    //                 "data": data,
    //                 "responsive": true,
    //                 "columns": [
    //                     {
    //                         "data": "pupil_name"
    //                     },
    //                     {
    //                         "data": "grade_level"
    //                         // "render": function(data, type, row, meta) {
    //                         //     return `${row.standard}th Standard`;
    //                         // }
    //                     },
    //                     {
    //                         "data": "section"
    //                         // "render": function(data, type, row, meta) {
    //                         //     return `${row.percentage}%`;
    //                         // }
    //                     },
    //                     {
    //                         "data": "TimeInAM"
    //                     },
    //                     {
    //                         "data": "TimeOutAM"
    //                     },
    //                     {
    //                         "data": "TimeInPM"
    //                     },
    //                     {
    //                         "data": "TimeOutPM"
    //                     },
                        
    //                     {
    //                         "data": "logdate",
    //                         "render": function(data, type, row, meta) {
    //                             return moment(row.logdate).format('MM-DD-YYYY');
    //                         }
    //                     },
    //                     {
    //                         "data": "year"
    //                         // "render": function(data, type, row, meta) {
    //                         //     return moment(row.created_at).format('DD-MM-YYYY');
    //                         // }
    //                     }
    //                 ]
    //             });
    //         }
    //     });
    // }

    function fetchgradethree(section, year,from, to) {
        $.ajax({
            url: "recordsgradethree.php",
            type: "post",
            data: {
                section: section,
                year: year,
                from: from,
                to: to
            },
            dataType: "json",
            success: function(data) {
                var i = 1;
                $('#record_gradethree').DataTable({
                    // dom: 'Bfrtip',
                    // buttons: [
                    //     'copy', 'csv', 'excel', 'pdf', 'print'
                    // ],
                    "data": data,
                    "responsive": true,
                    "columns": [
                        { "data": null,
                            "render": function( data, type, row ) {
                                return row.pupil_given_name + " " + row.pupil_middle_name + " "+ row.pupil_surname;
                            }
                         },
                        {
                            "data": "grade_level"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.standard}th Standard`;
                            // }
                        },
                        {
                            "data": "section"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.percentage}%`;
                            // }
                        },
                        {
                            "data": "TimeInAM",
                            "render": function(data, type, row, meta) {
                                if(data == 'NO LOGIN'){
                                    return  '<span class="badge badge-secondary">'+data+'<span/>';
                                }
                                else
                                    return data;
                            }
                        },
                        {
                            "data": "TimeOutAM",
                            "render": function(data, type, row, meta) {
                                if(data == 'NO LOGOUT'){
                                    return  '<span class="badge badge-secondary">'+data+'<span/>';
                                }
                                else
                                    return data;
                            }
                        },
                        {
                            "data": "TimeInPM",
                            "render": function(data, type, row, meta) {
                                if(data == 'NO LOGIN'){
                                    return  '<span class="badge badge-secondary">'+data+'<span/>';
                                }
                                else
                                    return data;
                            }
                        },
                        {
                            "data": "TimeOutPM",
                            "render": function(data, type, row, meta) {
                                if(data == 'NO LOGOUT'){
                                    return  '<span class="badge badge-secondary">'+data+'<span/>';
                                }
                                else
                                    return data;
                            }
                        },
                        
                        {
                            "data": "logdate",
                            "render": function(data, type, row, meta) {
                                return moment(row.logdate).format('MM-DD-YYYY');
                            }
                        },
                        {
                            "data": "year"
                            // "render": function(data, type, row, meta) {
                            //     return moment(row.created_at).format('DD-MM-YYYY');
                            // }
                        }
                    ]
                });
            }
        });
    }
    fetchgradethree();

    // Filter

    
    // Filter

    $(document).on("click", "#gradethreefilter", function(e) {
        e.preventDefault();

        var section = $("#select_gradethreesection").val();
        var year = $("#select_gradethreeyear").val();
        var from = $("#gradethree_from-date").val();
        var to = $("#gradethree_to-date").val();

        if ((section !== "" && year !== "") &&  (from !== "" && to !== "")){
            $('#record_gradethree').DataTable().destroy();
            fetchgradethree(section, year,from,to);
        }
        else if (section !== "" && year !== "") {
            $('#record_gradethree').DataTable().destroy();
            fetchgradethree(section, year);
        } else if (section !== "" && year == "") {
            $('#record_gradethree').DataTable().destroy();
            fetchgradethree(section, '');
        } else if (section == "" && year !== "") {
            $('#record_gradethree').DataTable().destroy();
            fetchgradethree('', year);
        } 
        
        else {
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

    // function fetchgradefour(section, year) {
    //     $.ajax({
    //         url: "recordsgradefour.php",
    //         type: "post",
    //         data: {
    //             section: section,
    //             year: year
    //         },
    //         dataType: "json",
    //         success: function(data) {
    //             var i = 1;
    //             $('#record_gradefour').DataTable({
    //                 dom: 'Bfrtip',
    //                 buttons: [
    //                     'copy', 'csv', 'excel', 'pdf', 'print'
    //                 ],
    //                 "data": data,
    //                 "responsive": true,
    //                 "columns": [
    //                     {
    //                         "data": "pupil_name"
    //                     },
    //                     {
    //                         "data": "grade_level"
    //                         // "render": function(data, type, row, meta) {
    //                         //     return `${row.standard}th Standard`;
    //                         // }
    //                     },
    //                     {
    //                         "data": "section"
    //                         // "render": function(data, type, row, meta) {
    //                         //     return `${row.percentage}%`;
    //                         // }
    //                     },
    //                     {
    //                         "data": "TimeInAM"
    //                     },
    //                     {
    //                         "data": "TimeOutAM"
    //                     },
    //                     {
    //                         "data": "TimeInPM"
    //                     },
    //                     {
    //                         "data": "TimeOutPM"
    //                     },
                        
    //                     {
    //                         "data": "logdate"
    //                     },
    //                     {
    //                         "data": "year"
    //                         // "render": function(data, type, row, meta) {
    //                         //     return moment(row.created_at).format('DD-MM-YYYY');
    //                         // }
    //                     }
    //                 ]
    //             });
    //         }
    //     });
    // }

     function fetchgradefour(section, year,from, to) {
        $.ajax({
            url: "recordsgradefour.php",
            type: "post",
            data: {
                section: section,
                year: year,
                from: from,
                to: to
            },
            dataType: "json",
            success: function(data) {
                var i = 1;
                $('#record_gradefour').DataTable({
                    // dom: 'Bfrtip',
                    // buttons: [
                    //     'copy', 'csv', 'excel', 'pdf', 'print'
                    // ],
                    "data": data,
                    "responsive": true,
                    "columns": [
                        { "data": null,
                            "render": function( data, type, row ) {
                                return row.pupil_given_name + " " + row.pupil_middle_name + " "+ row.pupil_surname;
                            }
                         },
                        {
                            "data": "grade_level"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.standard}th Standard`;
                            // }
                        },
                        {
                            "data": "section"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.percentage}%`;
                            // }
                        },
                        {
                            "data": "TimeInAM",
                            "render": function(data, type, row, meta) {
                                if(data == 'NO LOGIN'){
                                    return  '<span class="badge badge-secondary">'+data+'<span/>';
                                }
                                else
                                    return data;
                            }
                        },
                        {
                            "data": "TimeOutAM",
                            "render": function(data, type, row, meta) {
                                if(data == 'NO LOGOUT'){
                                    return  '<span class="badge badge-secondary">'+data+'<span/>';
                                }
                                else
                                    return data;
                            }
                        },
                        {
                            "data": "TimeInPM",
                            "render": function(data, type, row, meta) {
                                if(data == 'NO LOGIN'){
                                    return  '<span class="badge badge-secondary">'+data+'<span/>';
                                }
                                else
                                    return data;
                            }
                        },
                        {
                            "data": "TimeOutPM",
                            "render": function(data, type, row, meta) {
                                if(data == 'NO LOGOUT'){
                                    return  '<span class="badge badge-secondary">'+data+'<span/>';
                                }
                                else
                                    return data;
                            }
                        },
                        
                        {
                            "data": "logdate",
                            "render": function(data, type, row, meta) {
                                return moment(row.logdate).format('MM-DD-YYYY');
                            }
                        },
                        {
                            "data": "year"
                            // "render": function(data, type, row, meta) {
                            //     return moment(row.created_at).format('DD-MM-YYYY');
                            // }
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
        var from = $("#gradefour_from-date").val();
        var to = $("#gradefour_to-date").val();

        if ((section !== "" && year !== "") &&  (from !== "" && to !== "")){
            $('#record_gradefour').DataTable().destroy();
            fetchgradefour(section, year,from,to);
        }
        else if (section !== "" && year !== "") {
            $('#record_gradefour').DataTable().destroy();
            fetchgradefour(section, year);
        } else if (section !== "" && year == "") {
            $('#record_gradefour').DataTable().destroy();
            fetchgradefour(section, '');
        } else if (section == "" && year !== "") {
            $('#record_gradefour').DataTable().destroy();
            fetchgradefour('', year);
        } 
        
        else {
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

    // function fetchgradefive(section, year) {
    //     $.ajax({
    //         url: "recordsgradefive.php",
    //         type: "post",
    //         data: {
    //             section: section,
    //             year: year
    //         },
    //         dataType: "json",
    //         success: function(data) {
    //             var i = 1;
    //             $('#record_gradefive').DataTable({
    //                 dom: 'Bfrtip',
    //                 buttons: [
    //                     'copy', 'csv', 'excel', 'pdf', 'print'
    //                 ],
    //                 "data": data,
    //                 "responsive": true,
    //                 "columns": [
    //                     {
    //                         "data": "pupil_name"
    //                     },
    //                     {
    //                         "data": "grade_level"
    //                         // "render": function(data, type, row, meta) {
    //                         //     return `${row.standard}th Standard`;
    //                         // }
    //                     },
    //                     {
    //                         "data": "section"
    //                         // "render": function(data, type, row, meta) {
    //                         //     return `${row.percentage}%`;
    //                         // }
    //                     },
    //                     {
    //                         "data": "TimeInAM"
    //                     },
    //                     {
    //                         "data": "TimeOutAM"
    //                     },
    //                     {
    //                         "data": "TimeInPM"
    //                     },
    //                     {
    //                         "data": "TimeOutPM"
    //                     },
                        
    //                     {
    //                         "data": "logdate",
    //                         "render": function(data, type, row, meta) {
    //                             return moment(row.logdate).format('MM-DD-YYYY');
    //                         }
    //                     },
    //                     {
    //                         "data": "year"
    //                         // "render": function(data, type, row, meta) {
    //                         //     return moment(row.created_at).format('DD-MM-YYYY');
    //                         // }
    //                     }
    //                 ]
    //             });
    //         }
    //     });
    // }
   
    function fetchgradefive(section, year,from, to) {
        $.ajax({
            url: "recordsgradefive.php",
            type: "post",
            data: {
                section: section,
                year: year,
                from: from,
                to: to
            },
            dataType: "json",
            success: function(data) {
                var i = 1;
                $('#record_gradefive').DataTable({
                    // dom: 'Bfrtip',
                    // buttons: [
                    //     'copy', 'csv', 'excel', 'pdf', 'print'
                    // ],
                    "data": data,
                    "responsive": true,
                    "columns": [
                        { "data": null,
                            "render": function( data, type, row ) {
                                return row.pupil_given_name + " " + row.pupil_middle_name + " "+ row.pupil_surname;
                            }
                         },
                        {
                            "data": "grade_level"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.standard}th Standard`;
                            // }
                        },
                        {
                            "data": "section"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.percentage}%`;
                            // }
                        },
                        {
                            "data": "TimeInAM",
                            "render": function(data, type, row, meta) {
                                if(data == 'NO LOGIN'){
                                    return  '<span class="badge badge-secondary">'+data+'<span/>';
                                }
                                else
                                    return data;
                            }
                        },
                        {
                            "data": "TimeOutAM",
                            "render": function(data, type, row, meta) {
                                if(data == 'NO LOGOUT'){
                                    return  '<span class="badge badge-secondary">'+data+'<span/>';
                                }
                                else
                                    return data;
                            }
                        },
                        {
                            "data": "TimeInPM",
                            "render": function(data, type, row, meta) {
                                if(data == 'NO LOGIN'){
                                    return  '<span class="badge badge-secondary">'+data+'<span/>';
                                }
                                else
                                    return data;
                            }
                        },
                        {
                            "data": "TimeOutPM",
                            "render": function(data, type, row, meta) {
                                if(data == 'NO LOGOUT'){
                                    return  '<span class="badge badge-secondary">'+data+'<span/>';
                                }
                                else
                                    return data;
                            }
                        },
                        {
                            "data": "logdate",
                            "render": function(data, type, row, meta) {
                                return moment(row.logdate).format('MM-DD-YYYY');
                            }
                        },
                        {
                            "data": "year"
                            // "render": function(data, type, row, meta) {
                            //     return moment(row.created_at).format('DD-MM-YYYY');
                            // }
                        }
                    ]
                });
            }
        });
    }
    fetchgradefive();

    // Filter

    
    // Filter

    $(document).on("click", "#gradefivefilter", function(e) {
        e.preventDefault();

        var section = $("#select_gradefivesection").val();
        var year = $("#select_gradefiveyear").val();
        var from = $("#gradefive_from-date").val();
        var to = $("#gradefive_to-date").val();

        if ((section !== "" && year !== "") &&  (from !== "" && to !== "")){
            $('#record_gradefive').DataTable().destroy();
            fetchgradefive(section, year,from,to);
        }
        else if (section !== "" && year !== "") {
            $('#record_gradefive').DataTable().destroy();
            fetchgradefive(section, year);
        } else if (section !== "" && year == "") {
            $('#record_gradefive').DataTable().destroy();
            fetchgradefive(section, '');
        } else if (section == "" && year !== "") {
            $('#record_gradefive').DataTable().destroy();
            fetchgradefive('', year);
        } 
        
        else {
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

    // function fetchgradesix(section, year) {
    //     $.ajax({
    //         url: "recordsgradesix.php",
    //         type: "post",
    //         data: {
    //             section: section,
    //             year: year
    //         },
    //         dataType: "json",
    //         success: function(data) {
    //             var i = 1;
    //             $('#record_gradesix').DataTable({
    //                 dom: 'Bfrtip',
    //                 buttons: [
    //                     'copy', 'csv', 'excel', 'pdf', 'print'
    //                 ],
    //                 "data": data,
    //                 "responsive": true,
    //                 "columns": [
    //                     {
    //                         "data": "pupil_name"
    //                     },
    //                     {
    //                         "data": "grade_level"
    //                         // "render": function(data, type, row, meta) {
    //                         //     return `${row.standard}th Standard`;
    //                         // }
    //                     },
    //                     {
    //                         "data": "section"
    //                         // "render": function(data, type, row, meta) {
    //                         //     return `${row.percentage}%`;
    //                         // }
    //                     },
    //                     {
    //                         "data": "TimeInAM"
    //                     },
    //                     {
    //                         "data": "TimeOutAM"
    //                     },
    //                     {
    //                         "data": "TimeInPM"
    //                     },
    //                     {
    //                         "data": "TimeOutPM"
    //                     },
                        
    //                     {
    //                         "data": "logdate",
    //                         "render": function(data, type, row, meta) {
    //                             return moment(row.logdate).format('MM-DD-YYYY');
    //                         }
    //                     },
    //                     {
    //                         "data": "year"
    //                         // "render": function(data, type, row, meta) {
    //                         //     return moment(row.created_at).format('DD-MM-YYYY');
    //                         // }
    //                     }
    //                 ]
    //             });
    //         }
    //     });
    // }
    function fetchgradesix(section, year,from, to) {
        $.ajax({
            url: "recordsgradesix.php",
            type: "post",
            data: {
                section: section,
                year: year,
                from: from,
                to: to
            },
            dataType: "json",
            success: function(data) {
                var i = 1;
                $('#record_gradesix').DataTable({
                    // dom: 'Bfrtip',
                    // buttons: [
                    //     'copy', 'csv', 'excel', 'pdf', 'print'
                    // ],
                    "data": data,
                    "responsive": true,
                    "columns": [
                        { "data": null,
                            "render": function( data, type, row ) {
                                return row.pupil_given_name + " " + row.pupil_middle_name + " "+ row.pupil_surname;
                            }
                         },
                        {
                            "data": "grade_level"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.standard}th Standard`;
                            // }
                        },
                        {
                            "data": "section"
                            // "render": function(data, type, row, meta) {
                            //     return `${row.percentage}%`;
                            // }
                        },
                        {
                            "data": "TimeInAM",
                            "render": function(data, type, row, meta) {
                                if(data == 'NO LOGIN'){
                                    return  '<span class="badge badge-secondary">'+data+'<span/>';
                                }
                                else
                                    return data;
                            }
                        },
                        {
                            "data": "TimeOutAM",
                            "render": function(data, type, row, meta) {
                                if(data == 'NO LOGOUT'){
                                    return  '<span class="badge badge-secondary">'+data+'<span/>';
                                }
                                else
                                    return data;
                            }
                        },
                        {
                            "data": "TimeInPM",
                            "render": function(data, type, row, meta) {
                                if(data == 'NO LOGIN'){
                                    return  '<span class="badge badge-secondary">'+data+'<span/>';
                                }
                                else
                                    return data;
                            }
                        },
                        {
                            "data": "TimeOutPM",
                            "render": function(data, type, row, meta) {
                                if(data == 'NO LOGOUT'){
                                    return  '<span class="badge badge-secondary">'+data+'<span/>';
                                }
                                else
                                    return data;
                            }
                        },
                        
                        {
                            "data": "logdate",
                            "render": function(data, type, row, meta) {
                                return moment(row.logdate).format('MM-DD-YYYY');
                            }
                        },
                        {
                            "data": "year"
                            // "render": function(data, type, row, meta) {
                            //     return moment(row.created_at).format('DD-MM-YYYY');
                            // }
                        }
                    ]
                });
            }
        });
    }
    fetchgradesix();

    // Filter

    
    // Filter

    $(document).on("click", "#gradesixfilter", function(e) {
        e.preventDefault();

        var section = $("#select_gradesixsection").val();
        var year = $("#select_gradesixyear").val();
        var from = $("#gradesix_from-date").val();
        var to = $("#gradesix_to-date").val();

        if ((section !== "" && year !== "") &&  (from !== "" && to !== "")){
            $('#record_gradesix').DataTable().destroy();
            fetchgradesix(section, year,from,to);
        }
        else if (section !== "" && year !== "") {
            $('#record_gradesix').DataTable().destroy();
            fetchgradesix(section, year);
        } else if (section !== "" && year == "") {
            $('#record_gradesix').DataTable().destroy();
            fetchgradesix(section, '');
        } else if (section == "" && year !== "") {
            $('#record_gradesix').DataTable().destroy();
            fetchgradesix('', year);
        } 
        
        else {
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