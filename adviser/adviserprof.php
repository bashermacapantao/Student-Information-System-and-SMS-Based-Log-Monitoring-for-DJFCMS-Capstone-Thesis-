<?php
include('../security.php');

?>  
<?php
// include('../security.php');
// include('../includes/navbar.php');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->

        
        
        <link rel="stylesheet" href="dependecies/bootstrap/css/4.4.1/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
        <!-- <link rel="stylesheet" href="../dependecies/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
        <link rel= "stylesheet" type="text/css" href= "../css_files/administrator.css">

    <!-- <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/dt-1.10.20/r-2.2.3/datatables.min.css" /> -->
        <link rel="stylesheet" type="text/css"
        href="dependecies/datatables/datatables.min.css" />
        <!-- <script src="dependecies/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
        <link rel="stylesheet" href="dependecies/fontawesome/fontawesome.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        
    


    <title>Adviser Profile</title>
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
                  <a href="../list_pupil/mypupil_list.php">Pupil List</a>
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
                      <form action="logout.php" method="POST">
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
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>



<style>
 
 
.basher{
    /* background-color: #190f0feb !important ; */
    border-color: #646060 !important;
    color: #343a40 !important;
    text-align: center;
   

}
</style> 
 <div class="container">
    <div class="jumbotron">
             <div class="container">
                 
         <div class="row">
         
        <div class="col-md-3">
        <!-- < '<img src="upload/'.$row['images'].' "width="185px;" height="225px;" alt = "Image">' ?> -->
                 
                 <?=
                  '<img src="upload/'.$_SESSION['user_log']['images'].' "width="220px;" height="255px;" alt = "Image">'
            
                 ?>
                
            <hr>
            <label >Rank</label>
            <a   class="list-group-item"><span class="glyphicon glyphicon-star" aria-hidden="true"> </span> <?= $_SESSION['user_log']['rank']; ?>
             </a>
                  
                      <!-- <img src="css_files/img/lovely.jpg" class="img-circle aw" alt="lovely" width="185" height="225" > -->




        </div>
        <div class="col-md-8">
                      <div class="list-group color-bg">
                          <a  class="list-group basher">
                           <h2 class="glyphicon glyphicon-sunglasses"> <?= $_SESSION['user_log']['adviser_surname'].", ".$_SESSION['user_log']['adviser_given_name']." ".$_SESSION['user_log']['adviser_middle_name']; ?></h2> </a>
                          <br>   
                      </div>
                      
                      <div class="row">
                      <div class="col-md-4">
                          <label >Gender</label>
                          <a  class="list-group-item"><span class="glyphicon glyphicon-star" aria-hidden="true"> </span>
                          <?= $_SESSION['user_log']['gender']; ?>
                          </a>
                      </div>
                      <div class="col-md-4">
                          <label >Age</label>
                          <a  class="list-group-item"><span class="glyphicon glyphicon-star" aria-hidden="true"> </span>
                          <?= $_SESSION['user_log']['age']; ?>
                          </a>
                         
                      
                      </div>
                      <div class="col-md-4">
                          <label >Birthday</label>
                          <a  class="list-group-item"><span class="glyphicon glyphicon-star" aria-hidden="true"> </span>
                          <?= $_SESSION['user_log']['birth_date']; ?>
                          </a>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-md-6">
                          <br>
                          <label >Email Address</label>
                          <a  class="list-group-item"><span class="glyphicon glyphicon-star" aria-hidden="true"> </span>
                          <?= $_SESSION['user_log']['email_address']; ?>
                          </a>
                      </div>
                      <div class="col-md-6">
                          <br>
                          <label >Phone Number</label>
                          <a  class="list-group-item"><span class="glyphicon glyphicon-star" aria-hidden="true"> </span>
                          <?= $_SESSION['user_log']['phone_number']; ?>
                          </a>
                      </div>
</div>
                      <div class="col-md-12">
                          <br>
                          <label >Current Address</label>
                          <a  class="list-group-item"><span class="glyphicon glyphicon-star" aria-hidden="true"> </span>
                          <?= $_SESSION['user_log']['adviser_address']; ?>
                          </a>
                      </div>
                      
    </div>

  <div class="col-md-1">
        <form action="editadviser.php" method="POST">
          
            <input type="hidden" name="edit_id" value ="<?= $_SESSION['user_log']['register_id']; ?>" >
             <button type="submit" name="edit_data_btn" class="btn btn-secondary btn-md pull-right" ><span class="glyphicon glyphicon-edit"></span>Edit</button>
             </form>
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
</script>   

               

</body>

</html> 