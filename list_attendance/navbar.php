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
        <a class="nav-link" href="adviserprof.php"><span class="glyphicon glyphicon-log-out"> <?php echo $_SESSION['username']; ?> </span>  </a>
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
                  <a href="adviserprof.php">Home</a>
                  <a href="../list_pupil/mypupil_list.php">My Pupil List</a>
                  <a href="../list_attendance/myattendance_list.php">View Atendance</a>
                  <a href="QRcode/QRcode_Attendance.php"><b>Open Attendance</b></a>
                  <!-- <a href="attendancelist.php" id="example">Print Report</a>  -->

               
              </div>

<style>
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
</style>
 


      
                <!-- ############################ -->
                <style>
.modal-ulo, #h4, .close {
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
    background-color:#e74c3c !important ;
    border-color: #c0392b !important;
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
                      <form action="logout.php" method="POST">
                          <button type="submit" class="btn btn-warning btn-block" name="logoutBtn"><span class="glyphicon glyphicon-log-out"></span> Logout</button>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    </div>
                  </div>
                </div>
              </div> 




