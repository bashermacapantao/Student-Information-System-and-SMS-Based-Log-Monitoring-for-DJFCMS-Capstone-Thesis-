<?php
include('../security.php');
include('includes/header_adviser.php');
include('includes/navbar.php');
// include('pupilprint.php');
?>



    <div class="container"> 
        <ol class="breadcrumb">
            <h1 class="glyphicon glyphicon-record active"> My Pupil List</h1>
         </ol>  
        
          <!-- Trigger the modal with a button -->
         
  
              <!-- <a href="adviserprof.php"><button type="button" class="btn btn-warning btn-md"><span class="glyphicon glyphicon-arrow-left"></span> Back</button></a> -->
          
              <!-- <form action="pupilprint.php" method="POST">
          <button type="submit" class="btn btn-warning btn-md"><span class="glyphicon glyphicon-print"></span> Print Pupil List</button>
              </form> -->
         

     
        
        <div class="table-responsive">
        <br>  
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "capstoneproject");

                    $query = "SELECT * FROM enroll e inner join pupil p on e.pupil_id = p.pupil_id
                                inner join qrcode q on p.qrcode_id = q.qrcode_id
                                inner join schoolyear s on e.schoolyear_id = s.schoolyear_id
                                inner join gradsec g on e.gradsec_id = g.gradsec_id
                                inner join adviser a on g.adviser_id = a.adviser_id WHERE a.adviser_id = '".$_SESSION["user_log"]["adviser_id"]."' ";
                               
    
                    $query_run = mysqli_query($connection, $query);
                ?>   
                     <table id="datatableid" class="table-bordered table table-hover">
                        <thead>
                             <tr class="active">
                                 <th>LRN</th>
                                 <th>Pupil Name</th>
                                 <th>Grade & Section</th>
                                 <th>Pupil Gender</th>
                                 <th>Parent Name</th>
                                 <th>Relationship</th>
                                 <th>Parent Number</th>
                                 <th>Address</th>
                                 <th>QR code</th>
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
                             <tr class="">
                             <td> <?php echo $row['user_id']; ?> </td>
                                 <td><?php echo $row['pupil_name']; ?></td>
                                 <td><?php echo $row['grade_level']; ?>
                                 <?php echo " - "?>
                                 <?php echo $row['section']; ?></td>
                                 <td> <?php echo $row['pupil_gender']; ?></td>
                                 <td> <?php echo $row['guardian']; ?></td>
                                 <td> <?php echo $row['relationship']; ?></td>
                                 <td> <?php echo $row['guardian_number']; ?></td>
                                 <td> <?php echo $row['address']; ?></td>
                                 <td> 
                                 <?php echo '<img src="../gbrqrcode/'.$row['template'].' "width="50px;" height="50px;" alt = "Image">' ?>
                                 </td>
                                 <td><?php echo $row['year']; ?></td>
                              
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

    
   


<?php
include('includes/scripts.php')

?>