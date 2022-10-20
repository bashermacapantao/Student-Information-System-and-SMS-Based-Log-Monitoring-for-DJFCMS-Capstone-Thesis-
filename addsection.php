
<div id="section2"> 
        <div class="panel-group">
             <div class="panel panel-default">
                 <div class="panel-heading main-color-bg" >
                         <h3 class="panel-title">Grade & Section</h3>
                     </div>
                     <div class="panel-body">
                      <!-- <form action="code.php" method="POST"> -->
                         <p>
                             <button type="button" class="btn-right btn-default btn-sm"  id="add_gradsecBtn">Add Grade & section</button>
                             <button type="button" class="btn-right btn-default btn-sm"  id="add_schoolyearBtn">Add School Year</button>
                        </p>
                        
                <!-- </form> -->
           
          
                <div class="table-responsive">  
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "capstoneproject");

                    $query = "SELECT * FROM gradsec ORDER BY grade_level ASC";
                    $query_run = mysqli_query($connection, $query);
                ?>    
                     <table id="datatableid2" class="table table-bordered table-hover">
                        <thead>
                             <tr class="active">
                                 
                                 <th>Grade Level</th>
                                 <th>Section</th>
                                 <th>Update</th>
                               
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
                                 <td><?php echo $row['grade_level']; ?></td>
                                 <td><?php echo $row['section']; ?></td>
                               
                                 <td>
                                    <form action="editsection.php#section2" method="POST">
                                     <input type="hidden" name="updategradsec_id" value="<?php echo $row['gradsec_id']; ?>">
                                    <button type="submit" name="updategradsecBtn" class="btn btn-default btn-xs btn-basher" >
                                    <span class="glyphicon glyphicon-edit"></span>
                                    </button>  
                                     </form>
                                 </td>
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
         </div>
     </div>  
 </div>