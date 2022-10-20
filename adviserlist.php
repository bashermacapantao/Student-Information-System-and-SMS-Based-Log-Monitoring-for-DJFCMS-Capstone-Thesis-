<?php
include('security.php');
include('includes/header_admin.php');
include('includes/navbar.php');
include('includes/modal.php');
// include('includes/overview_adviser_list.php')
include('includes/tabs.php')
?>
<div class="col-sm-10">
<div id="section1"> 
        <div class="panel-group">
             <div class="panel panel-default">
                 <div class="panel-heading main-color-bg" >
                         <h3 class="panel-title">Grade - I</h3>
                     </div>
                     <div class="panel-body">
                     <div class="table-justified table-responsive">  
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "capstoneproject");

                    $query = "SELECT * FROM gradsec g inner join adviser a on g.adviser_id = a.adviser_id WHERE g.gradelevel = 'Grade - I'";
                    $query_run = mysqli_query($connection, $query);
                ?>    
                     <table id="datatableid" class="table-bordered table table-hover" >
                        <thead>
                             <tr class="active">
                                 <th>Rank</th>
                                <th>Adviser Name</th>
                                <th>Gender</th>
                                <!-- <th>Age</th> -->
                                <th>Birthdate</th>
                                <th>Phone Number</th>
                                <th>Email address</th>
                                <th>Current Address</th>
                                 <th>Grade & Section</th>
                                 <th>Images</th>
                             </tr>
                         </thead>
                         <tbody>  
                <?php
                    if(mysqli_num_rows($query_run) > 0)
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                            ?>
                             <tr>
                             <td><?php echo $row['rank']; ?></td> 
                             <td><?php echo $row['adviser_name']; ?></td> 
                             <td><?php echo $row['gender']; ?></td>
                             <td><?php echo $row['birthday']; ?></td>
                             <td><?php echo $row['phonenumber']; ?></td>
                             <td><?php echo $row['emailAddress']; ?></td>
                             <td><?php echo $row['address']; ?></td>
                              <td><?php echo $row['gradelevel']." ".$row['section']; ?></td>
                             
                              
                                 <td> 
                                 <?php echo '<img src="adviser/upload/'.$row['images'].' "width="100px;" height="100px;" alt = "Image">' ?>
                                 </td>
                             </tr>
                            <?php
                        }
                    }
                    else
                    {
                        echo "No Record Found";
                    }
                ?>            
                            
                         </tbody>     
                </table>
                 </div>               
             </div>
         </div>
     </div>  
 </div>

 <!-- ################################################################################################ -->

 <div id="section2"> 
        <div class="panel-group">
             <div class="panel panel-default">
                 <div class="panel-heading main-color-bg" >
                         <h3 class="panel-title">Grade - II</h3>
                     </div>
                     <div class="panel-body">
                     <div class="table-justified table-responsive">  
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "capstoneproject");

                    $query = "SELECT * FROM gradsec g inner join adviser a on g.adviser_id = a.adviser_id WHERE g.gradelevel = 'Grade - II'";
                    $query_run = mysqli_query($connection, $query);
                ?>    
                     <table id="datatableid" class="table-bordered table table-hover" s>
                        <thead>
                             <tr class="active">
                                 <th>Rank</th>
                                <th>Adviser Name</th>
                                <th>Gender</th>
                                <!-- <th>Age</th> -->
                                <th>Birthdate</th>
                                <th>Phone Number</th>
                                <th>Email address</th>
                                <th>Current Address</th>
                                 <th>Grade & Section</th>
                                 <th>Images</th>
                             </tr>
                         </thead>
                         <tbody>  
                <?php
                    if(mysqli_num_rows($query_run) > 0)
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                            ?>
                             <tr>
                             <td><?php echo $row['rank']; ?></td> 
                             <td><?php echo $row['fname']; ?></td> 
                             <td><?php echo $row['gender']; ?></td>
                             <td><?php echo $row['birthday']; ?></td>
                             <td><?php echo $row['phonenumber']; ?></td>
                             <td><?php echo $row['emailAddress']; ?></td>
                             <td><?php echo $row['address']; ?></td>
                              <td><?php echo $row['gradelevel']." ".$row['section']; ?></td>
                             
                              
                                 <td> 
                                 <?php echo '<img src="adviser/upload/'.$row['images'].' "width="100px;" height="100px;" alt = "Image">' ?>
                                 </td>
                             </tr>
                            <?php
                        }
                    }
                    else
                    {
                        echo "No Record Found";
                    }
                ?>            
                            
                         </tbody>     
                </table>
                 </div>               
             </div>
         </div>
     </div>  
 </div>

 <!-- ##################################################################################################### -->

 <div id="section3"> 
        <div class="panel-group">
             <div class="panel panel-default">
                 <div class="panel-heading main-color-bg" >
                         <h3 class="panel-title">Grade - III</h3>
                     </div>
                     <div class="panel-body">
                     <div class="table-justified table-responsive">  
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "capstoneproject");

                    $query = "SELECT * FROM gradsec g inner join adviser a on g.adviser_id = a.adviser_id WHERE g.gradelevel = 'Grade - III'";
                    $query_run = mysqli_query($connection, $query);
                ?>    
                     <table id="datatableid" class="table-bordered table table-hover" s>
                        <thead>
                             <tr class="active">
                                 <th>Rank</th>
                                <th>Adviser Name</th>
                                <th>Gender</th>
                                <!-- <th>Age</th> -->
                                <th>Birthdate</th>
                                <th>Phone Number</th>
                                <th>Email address</th>
                                <th>Current Address</th>
                                 <th>Grade & Section</th>
                                 <th>Images</th>
                             </tr>
                         </thead>
                         <tbody>  
                <?php
                    if(mysqli_num_rows($query_run) > 0)
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                            ?>
                             <tr>
                             <td><?php echo $row['rank']; ?></td> 
                             <td><?php echo $row['fname']; ?></td> 
                             <td><?php echo $row['gender']; ?></td>
                             <td><?php echo $row['birthday']; ?></td>
                             <td><?php echo $row['phonenumber']; ?></td>
                             <td><?php echo $row['emailAddress']; ?></td>
                             <td><?php echo $row['address']; ?></td>
                              <td><?php echo $row['gradelevel']." ".$row['section']; ?></td>
                             
                              
                                 <td> 
                                 <?php echo '<img src="adviser/upload/'.$row['images'].' "width="100px;" height="100px;" alt = "Image">' ?>
                                 </td>
                             </tr>
                            <?php
                        }
                    }
                    else
                    {
                        echo "No Record Found";
                    }
                ?>            
                            
                         </tbody>     
                </table>
                 </div>               
             </div>
         </div>
     </div>  
 </div>

 <!-- #################################################################################################### -->

 <div id="section4"> 
        <div class="panel-group">
             <div class="panel panel-default">
                 <div class="panel-heading main-color-bg" >
                         <h3 class="panel-title">Grade - IV</h3>
                     </div>
                     <div class="panel-body">
                     <div class="table-justified table-responsive">  
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "capstoneproject");

                    $query = "SELECT * FROM gradsec g inner join adviser a on g.adviser_id = a.adviser_id WHERE g.gradelevel = 'Grade - IV'";
                    $query_run = mysqli_query($connection, $query);
                ?>    
                     <table id="datatableid" class="table-bordered table table-hover" s>
                        <thead>
                             <tr class="active">
                                 <th>Rank</th>
                                <th>Adviser Name</th>
                                <th>Gender</th>
                                <!-- <th>Age</th> -->
                                <th>Birthdate</th>
                                <th>Phone Number</th>
                                <th>Email address</th>
                                <th>Current Address</th>
                                 <th>Grade & Section</th>
                                 <th>Images</th>
                             </tr>
                         </thead>
                         <tbody>  
                <?php
                    if(mysqli_num_rows($query_run) > 0)
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                            ?>
                             <tr>
                             <td><?php echo $row['rank']; ?></td> 
                             <td><?php echo $row['fname']; ?></td> 
                             <td><?php echo $row['gender']; ?></td>
                             <td><?php echo $row['birthday']; ?></td>
                             <td><?php echo $row['phonenumber']; ?></td>
                             <td><?php echo $row['emailAddress']; ?></td>
                             <td><?php echo $row['address']; ?></td>
                              <td><?php echo $row['gradelevel']." ".$row['section']; ?></td>
                             
                              
                                 <td> 
                                 <?php echo '<img src="adviser/upload/'.$row['images'].' "width="100px;" height="100px;" alt = "Image">' ?>
                                 </td>
                             </tr>
                            <?php
                        }
                    }
                    else
                    {
                        echo "No Record Found";
                    }
                ?>            
                            
                         </tbody>     
                </table>
                 </div>               
             </div>
         </div>
     </div>  
 </div>

<!-- ###################################################################################################### -->

 <div id="section5"> 
        <div class="panel-group">
             <div class="panel panel-default">
                 <div class="panel-heading main-color-bg" >
                         <h3 class="panel-title">Grade - V</h3>
                     </div>
                     <div class="panel-body">
                     <div class="table-justified table-responsive">  
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "capstoneproject");

                    $query = "SELECT * FROM gradsec g inner join adviser a on g.adviser_id = a.adviser_id WHERE g.gradelevel = 'Grade - V'";
                    $query_run = mysqli_query($connection, $query);
                ?>    
                     <table id="datatableid" class="table-bordered table table-hover" s>
                        <thead>
                             <tr class="active">
                                 <th>Rank</th>
                                <th>Adviser Name</th>
                                <th>Gender</th>
                                <!-- <th>Age</th> -->
                                <th>Birthdate</th>
                                <th>Phone Number</th>
                                <th>Email address</th>
                                <th>Current Address</th>
                                 <th>Grade & Section</th>
                                 <th>Images</th>
                             </tr>
                         </thead>
                         <tbody>  
                <?php
                    if(mysqli_num_rows($query_run) > 0)
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                            ?>
                             <tr>
                             <td><?php echo $row['rank']; ?></td> 
                             <td><?php echo $row['fname']; ?></td> 
                             <td><?php echo $row['gender']; ?></td>
                             <td><?php echo $row['birthday']; ?></td>
                             <td><?php echo $row['phonenumber']; ?></td>
                             <td><?php echo $row['emailAddress']; ?></td>
                             <td><?php echo $row['address']; ?></td>
                              <td><?php echo $row['gradelevel']." ".$row['section']; ?></td>
                             
                              
                                 <td> 
                                 <?php echo '<img src="adviser/upload/'.$row['images'].' "width="100px;" height="100px;" alt = "Image">' ?>
                                 </td>
                             </tr>
                            <?php
                        }
                    }
                    else
                    {
                        echo "No Record Found";
                    }
                ?>            
                            
                         </tbody>     
                </table>
                 </div>               
             </div>
         </div>
     </div>  
 </div>

 <!-- #################################################################################################### -->

 <div id="section6"> 
        <div class="panel-group">
             <div class="panel panel-default">
                 <div class="panel-heading main-color-bg" >
                         <h3 class="panel-title">Grade - VI</h3>
                     </div>
                     <div class="panel-body">
                     <div class="table-justified table-responsive">  
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "capstoneproject");

                    $query = "SELECT * FROM gradsec g inner join adviser a on g.adviser_id = a.adviser_id WHERE g.gradelevel = 'Grade - VI'";
                    $query_run = mysqli_query($connection, $query);
                ?>    
                     <table id="datatableid" class="table-bordered table table-hover" s>
                        <thead>
                             <tr class="active">
                                 <th>Rank</th>
                                <th>Adviser Name</th>
                                <th>Gender</th>
                                <!-- <th>Age</th> -->
                                <th>Birthdate</th>
                                <th>Phone Number</th>
                                <th>Email address</th>
                                <th>Current Address</th>
                                 <th>Grade & Section</th>
                                 <th>Images</th>
                             </tr>
                         </thead>
                         <tbody>  
                <?php
                    if(mysqli_num_rows($query_run) > 0)
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                            ?>
                             <tr>
                             <td><?php echo $row['rank']; ?></td> 
                             <td><?php echo $row['fname']; ?></td> 
                             <td><?php echo $row['gender']; ?></td>
                             <td><?php echo $row['birthday']; ?></td>
                             <td><?php echo $row['phonenumber']; ?></td>
                             <td><?php echo $row['emailAddress']; ?></td>
                             <td><?php echo $row['address']; ?></td>
                              <td><?php echo $row['gradelevel']." ".$row['section']; ?></td>
                             
                              
                                 <td> 
                                 <?php echo '<img src="adviser/upload/'.$row['images'].' "width="100px;" height="100px;" alt = "Image">' ?>
                                 </td>
                             </tr>
                            <?php
                        }
                    }
                    else
                    {
                        echo "No Record Found";
                    }
                ?>            
                            
                         </tbody>     
                </table>
                 </div>               
             </div>
         </div>
     </div>  
 </div>

 <!-- #################################################################################################### -->


 




</div>
    
<?php
include('includes/scripts.php');
?>





 
