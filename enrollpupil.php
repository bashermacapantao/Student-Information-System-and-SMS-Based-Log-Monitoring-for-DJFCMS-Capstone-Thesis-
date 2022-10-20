
<div id="section3"> 
        <div class="panel-group">
             <div class="panel panel-default">
                 <div class="panel-heading main-color-bg" >
                         <h3 class="panel-title">Pupils Information</h3>
                     </div>
                     <div class="panel-body">
                      <!-- <form action="code.php" method="POST"> -->
                         <p><button type="button" class="btn-right btn-info btn-sm"  id="addpupilBtn">Add Pupil</button>
               
                            <!-- <a href="adviserlist.php"> <button  type="button" class="btn-right btn-info btn-sm"  id="myBtn"> More Details</button> </a> -->
                        </p>
                <!-- </form> -->
          
                <div class="table-responsive">  
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "capstoneproject");

                    $query = "SELECT * FROM pupil_information";
                    $query_run = mysqli_query($connection, $query);
                ?>    
                     <table id="datatableid5" class="display table table-striped ">
                        <thead>
                             <tr class="danger">
                                 <th>LRN</th>
                                 <th>Name</th>
                                 <th>Grade & Section</th>
                                 <th>Adviser</th>
                                 <th>Gender</th>
                                 <th>admission</th>
                                 <th>Mobile no.</th>
                                 <th>Update</th>
                                 <th>Delete</th>
                             </tr>
                         </thead>
                         <tbody>  
                <?php
                    if(mysqli_num_rows($query_run) > 0)
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                            $gradseclevel_id = $row['gradseclevel_id'];
                        $level = "SELECT * FROM gradsec WHERE gradsec_id='$gradseclevel_id' ";
                        $level_run = mysqli_query($connection,$level);

                        $adviser_id = $row['adviser_id'];
                        $advname = "SELECT * FROM register WHERE register_id='$adviser_id' ";
                        $adviser_run = mysqli_query($connection,$advname);
                            ?>
                             <tr class="info">
                                 <td><?php echo $row['pupilname']; ?></td>
                                 <td>
                                     <?php foreach($level_run as $g_row){ echo $g_row['gradelevel'];}
                                       ?>
                                      <?php echo " - " ?>
                                        <?php foreach($level_run as $g_row){ echo $g_row['section'];}
                                       ?>
                                </td>
                                 <td>
                                 <?php foreach($adviser_run as $a_row){ echo $a_row['name'];} ?>
                                </td>
                                 <td><?php echo $row['pupilgender']; ?></td>
                                 <td><?php echo $row['admission']; ?></td>
                                 <td><?php echo $row['pupilnumber']; ?></td>
                                 <td>
                                    <form action="editpupil.php#section3" method="POST">
                                     <input type="hidden" name="updatepupil_id" value="<?php echo $row['pupil_id']; ?>">
                                    <button type="submit" name="updatepupilBtn" class="btn btn-warning" >
                                    <span class="glyphicon glyphicon-edit"></span>
                                    </button>  
                                     </form>
                                 </td>
                                 <td>
                                    <form action="code.php" method="POST">
                                     <input type="hidden" name="deletegradsec_id" value="<?php echo $row['gradsec_id']; ?>">
                                    <button type="submit" name="deletegradsecBtn" class="btn btn-danger" >
                                    <span class="glyphicon glyphicon-erase"></span>
                                    </button>  
                                     </form>
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
                     <p><button href="viewadviser.html" type="button" class="btn-right btn-info btn-sm"  id="myBtn"> Print Pupils</button></p>
                 </div>            
             </div>
         </div>
     </div>  
 </div>