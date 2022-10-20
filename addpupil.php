
<div id="section3"> 
        <div class="panel-group">
             <div class="panel panel-default">
                 <div class="panel-heading main-color-bg" >
                         <h3 class="panel-title">Add Pupil to Enroll </h3>
                     </div>
                     <div class="panel-body">
                      <!-- <form action="code.php" method="POST"> -->
                         <p>
                             <button type="submit" class="btn-right btn-default btn-sm"  id="addpupilBtn">Add Pupil</button>
                             <button type="button" class="btn-right btn-default btn-sm"  id="printBtn">Print ID</button>

                            <!-- <button type="button" class="btn-right btn-warning btn-sm"  id="moredetailsBtn">Add More Details for Enrollment</button> -->
                            
                            <!-- <a href="adviserlist.php"> <button  type="button" class=" btn-link btn-sm"  id="myBtn"> Add More Details for Enrollment</button> </a> -->
                        </p>
                        
                <!-- </form> -->
          
                <div class="table-responsive">  
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "capstoneproject");

                    $query = "SELECT * FROM pupil p inner join qrcode q on p.qrcode_id = q.qrcode_id ";
                    $query_run = mysqli_query($connection, $query);
                ?>    
                     <table id="datatableid3" class="table table-bordered table-hover">
                        <thead>
                             <tr class="active" >
                                 <th>Picture</th>
                                 <th>LRN</th>
                                 <th>Pupil Name</th>
                                 <th>Pupil Gender</th>
                                 <th>Guardian Name</th>
                                 <th>Relationship</th>
                                 <th>Guardian No.</th>
                                 <th>Address</th>
                                 <th>QR code</th>
                                 <th>Action</th>
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
                                 <td>
                             <?php echo '<img src="pupil_images/'.$row['pupil_images'].' "width="50px;" height="50px;" alt = "Image">' ?>
                                 </td>
                                 <td> <?php echo $row['user_id']; ?> </td>
                                 <td> <?php echo $row['pupil_surname'].", ".$row['pupil_given_name']." ".$row['pupil_middle_name']; ?> </td>
                                 <td> <?php echo $row['pupil_gender']; ?></td>
                                 <td> <?php echo $row['guardian']; ?></td>
                                 <td> <?php echo $row['relationship']; ?></td>
                                 <td> <?php echo $row['guardian_number']; ?></td>
                                 <td> <?php echo $row['address']; ?></td>
                                 <td> 
                                 <?php echo '<img src="gbrqrcode/'.$row['template'].' "width="50px;" height="50px;" alt = "Image">' ?>
                                 </td>
                                 <td>
                                    <form action="editpupil.php#section3" method="POST">
                                     <input type="hidden" name="updatepupil_id" value="<?php echo $row['pupil_id']; ?>">
                                    <button type="submit" name="updatepupilBtn" class="btn btn-default btn-xs btn-basher" >
                                    <span class="glyphicon glyphicon-edit"></span>
                                    </button>  
                                     </form>
                                     <br>
                                
                                    <!-- <form action="code.php" method="POST">
                                     <input type="hidden" name="deletepupil_id" value="">
                                    <button type="submit" name="deletepupilBtn" class="btn btn-danger btn-xs" >
                                    <span class="glyphicon glyphicon-erase"></span>
                                    </button>  
                                     </form> -->
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
                     <!-- <p><button href="viewadviser.html" type="button" class="btn-right btn-info btn-sm"  id="myBtn"> Print Pupils</button></p> -->
                 </div>            
             </div>
         </div>
     </div>  
 </div>