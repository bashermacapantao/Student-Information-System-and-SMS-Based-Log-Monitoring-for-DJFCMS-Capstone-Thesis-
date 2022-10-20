<?php
include('security.php');
// session_start();
include('includes/header_admin.php');
include('includes/navbar.php');
//  include('includes/modal.php');
?>  



<!-- <div class="container-fluid" style="background-color:#2196F3;color:#fff;height:120px;">
   
   <section id="breadcrumb"> -->
       <div class="container">
               <!-- <div id="breadcrumb"class="user_name text-right">
                       <p class="glyphicon glyphicon-user"> </p>
                   </div>  -->
            <ol class="breadcrumb">
               <h1 class="glyphicon glyphicon-record active"> Enrollment</h1>
            </ol>     
      
   <!-- </section> 
</div> 
<br> -->

             
   <!-- <div class="container"> -->

       <!-- <div class="row"> -->
     
     

            <!-- <div class="col-sm-12"> -->
         

                <!-- <a href="viewadviser.html" ><button  type="button" class="btn btn-info btn-lg" id=""><span class="glyphicon glyphicon-warning-sign"> Add Pupil  to Enrollment </span></button> -->

               
                
                
                <form action="idcard/printID.php" method="POST">
                                     
                                     <button type="submit" name="printBTN" class="btn btn-success " >
                                     <span class="glyphicon glyphicon-print"> Print ID</span>
                                     </button>  
                          </form>
                          <br>
                 
                <!-- <div class="panel-body"> -->
               
                <div class="table-responsive">  
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "capstoneproject");

                    $query = "SELECT * FROM enroll e inner join pupil p on e.pupil_id = p.pupil_id
                                inner join schoolyear s on e.schoolyear_id = s.schoolyear_id
                                inner join gradsec g on e.gradsec_id = g.gradsec_id
                                inner join adviser a on g.adviser_id = a.adviser_id";
    
                    $query_run = mysqli_query($connection, $query);
                ?>    
                     <table id="datatableid2" class="display table table-striped ">
                        <thead>
                             <tr class="danger">
                                 
                                 <th>Pupil Name</th>
                                 <th>Grade</th>
                                 <th>Section</th>
                                 <th>Adviser Name</th>
                                 <th>School Year</th>
                                
                                 <!-- <th>Update</th> -->
                                 
                               
                             </tr>
                         </thead>
                         <tbody>  
                                 
                <?php
                    if(mysqli_num_rows($query_run) > 0)
                    {
                        // $adviser_id= $row['adviser_id'];
                        // $adviser_id= $row['adviser_id'];
                        // $schoolyear_id= $row['schoolyear_id'];
                        // $gradsec_id= $row['gradsec_id'];
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                         
                            ?>
                             <tr class="info">
                                 <td><?php echo $row['pupilname']; ?></td>
                                 <td><?php echo $row['gradelevel']; ?></td>
                                 <td><?php echo $row['section']; ?></td>
                                 <td><?php echo $row['fname']; ?></td>
                                 <td><?php echo $row['year']; ?></td>
                                 
                                
                               
                               
                                 <!-- <td>
                                    <form action="" method="POST">
                                     <input type="hidden" name="update_enroll_id" value="">
                                    <button type="submit" name="update_enroll_  Btn" class="btn btn-warning" >
                                    <span class="glyphicon glyphicon-edit"></span>
                                    </button>  
                                     </form>
                                 </td> -->
                                 <!-- <td> -->
                                    <!-- <form action="code.php" method="POST">
                                     <input type="hidden" name="deletegradsec_id" value="">
                                    <button type="submit" name="deletegradsecBtn" class="btn btn-danger" >
                                    <span class="glyphicon glyphicon-erase"></span>
                                    </button>  
                                     </form> -->
                                 <!-- </td> -->
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
                     <!-- <p><button href="viewadviser.html" type="button" class="btn-right btn-info btn-sm"  id="myBtn"> Print GRADE & SECTION</button></p> -->
                 </div>            
             </div>
         

<!-- 

            </div>
       </div>  
   </div>   -->



<?php
include('includes/scripts.php');
?>