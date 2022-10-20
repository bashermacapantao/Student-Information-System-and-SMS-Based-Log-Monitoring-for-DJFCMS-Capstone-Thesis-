
<nav class="navbar navbar-inverse">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <div id="main" class="navbar-brand">
                    
                    <a class="btn btn-default btn-lg" onclick="openSlideMenu()" href="javascript:void (0)"><span class="glyphicon glyphicon-th-list"></span></a>
                    <!-- <a id="myNavbar" href="adviserprof.php">Home</a> -->
                    
                    </div>
                    <!-- <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-th-list"></span></a> -->
                    
                  </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        
                        <ul class="nav navbar-nav navbar-right">
                           <li><a href="#" ><span class="glyphicon glyphicon-user"> <?php echo $_SESSION['username']; ?></span></a></li>
                          <li><a href="#" type="button"  id="logoutBtn"  ><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>

                        </ul>
                    </div>
                </div>
              </nav>
              <div id="side-menu" class="side-nav">
                  <a href="#" class="btn-close" onclick="closeSlideMenu()">&times</a>
                  <a href="administrator.php" class="active">HOME</a> 
                  <a href="./list_adviser/adviser_list.php">Adviser List</a>
                  <a href="./list_pupil/pupil_list.php">Pupil List</a>
                  <a href="./list_attendance/attendance_list.php"> Attendance</a>
                  <!-- <a href="#" type="button"  id="qrcodeBtn"  >QRcode</a> -->
                  <!-- <a class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"  >QRcode</a> -->
                  <!-- <a href="attendancelist.php" id="example">Print Report</a>  -->
                  <div class="dropdown">
                    <a href="#" class="dropdown-toggle" type="button" data-toggle="dropdown">QR code
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu ">
                      <li class="dropdown-header">Attendance</li>
                      <li><a href="QRcode/Login_QRcode.php">LOG - IN</a></li>
                      <li><a href="QRcode/Logout_QRcode.php">LOG - OUT</a></li>
                      <!-- <li><a href="#">JavaScript</a></li>
                      <li class="divider"></li>
                      <li class="dropdown-header">Dropdown header 2</li>
                      <li><a href="#">About Us</a></li> -->
                    </ul>
                </div>
               
              </div>
              <!-- Navbar -->
                         
 


                <!-- ############################ -->
                <style>
                 
    .dropdownmenu{
    background-color:#343a40   !important;
    /* border-color: black !important; */
    color: black !important;
   
}
.modal-ulo, #h4, .close {
    background-color: #c3db3c;
    color:#d9534f  !important;
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
    background-color: #343a40;
    border-color: #ffffff;
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
                      <form action="logout.php" method="POST">
                          <button type="submit" class="btn btn-secondary btn-block" name="logoutBtn"><span class="glyphicon glyphicon-log-out"></span> Logout</button>
                      </form>
                    </div>
                   
                  </div>
                </div>
              </div> 

              
              <!-- ####################### -->
               <!-- The Modal -->
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
        <a href="QRcode/Login_QRcode.php" type="button" class="btn btn-warning btn-block" ><span class="glyphicon glyphicon-log-in"> </span> Login QRcode</a>
        <br>
        <a href="QRcode/Logout_QRcode.php" type="button" class="btn btn-warning btn-block" ><span class="glyphicon glyphicon-log-out"></span> Logout QRcode</a>
        </div>
        <hr>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>