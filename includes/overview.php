

<style>
  .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    color: white;
    background-color: #343a40;
}
  a {
    color: #343a40;
    text-decoration: none;
}
  </style>

<br>
<br>
             
   <div class="container">
       <div class="row">
           <nav class="col-sm-2" id="myScrollspy">
                   <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="205">
                   <li class="active"><a href="administrator.php">H O M E</a></li>
                     <li><a href="#section1" >REGISTER <br> USERS</a></li>
                     <li><a href="#section2" >GRADE & <br> SECTION</a></li>
                     <li><a href="#section3">ADD<br> PUPILS</a></li>
                    <li><a href="#section4">LATEST<br> LOGS</a></li>
                      <!-- <li><a href="#section5">Pupils<br> Enroll</a></li> -->
                     
                     <!-- <li class="dropdown " >
                       <a class="dropdown-toggle" data-toggle="dropdown" href="#">Section 5 <span class="caret"></span></a>
                       <ul class="dropdown-menu">
                         <li><a href="#section51">Section 4-1</a></li>
                         <li><a href="#section52">Section 4-2</a></li>                     
                       </ul>
                     </li> -->
                   </ul>
           </nav>

<div class="col-sm-10">
                      <!-- <div id="section1"> -->
                        <div class="panel panel-success">
                                <div class="panel-heading main-color-bg">
                                  <h1 class="panel-title">School Overview</h1>
                                </div>
                                <div class="panel-body">
                                  <div class="col-md-3">
                                    <div class="well dash-box">
                                    <?php
        include('database/connectdb.php');
        $query = "SELECT pupil_id FROM pupil ORDER BY pupil_id";
        $query_run = mysqli_query($connection, $query);

        $row = mysqli_num_rows($query_run);
       echo '<h2><a href="#"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span> ' .$row. '</a></h2>';
      ?>   
                                      <h4>Pupils</h4>


                                    </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="well dash-box">
      <?php
        include('database/connectdb.php');
        $query = "SELECT adviser_id FROM adviser ORDER BY adviser_id";
        $query_run = mysqli_query($connection, $query);

        $row = mysqli_num_rows($query_run);
        echo '<h2><a href="#"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span> ' .$row. '</a></h2>';
      ?>   
                                        <h4>Teachers</h4>


                                      </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="well dash-box">
                                      <?php
                                      include('database/connectdb.php');
        $query = "SELECT pupil_id FROM pupil ORDER BY pupil_id";
        $query_run = mysqli_query($connection, $query);

        $row = mysqli_num_rows($query_run);
       echo '<h2><a href="#"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span> ' .$row. '</a></h2>';
      ?> 
                                        <h4>staff</h4>

                                        
                                      </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="well dash-box">
                                        <h2><a href="#" ><span class="glyphicon glyphicon-star-empty" aria-hidden="true"> </span>
                                          2
                                        </a></h2>
                                        <h4>Arabic teacher</h4>
                                      </div>
                                  </div>
                                </div>
                            </div>