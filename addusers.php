
<div id="section1"> 
        <div class="panel-group">
             <div class="panel panel-default">
                 <div class="panel-heading main-color-bg" >
                         <h3 class="panel-title">REGISTER | USERS</h3>
                     </div>
                     <div class="panel-body">
                      <!-- <form action="code.php" method="POST"> -->
                         <p><button type="button" class="btn-right btn-default btn-sm"  id="add_user_Btn">Add Adviser</button>
               
             
                        </p>
                <!-- </form> -->
           
           
                <div class="table-responsive">  
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "capstoneproject");

                    $query = "SELECT * FROM adviser a inner join register r on a.register_id = r.register_id" ;
                    $query_run = mysqli_query($connection, $query);
                ?>    
                     <table id="datatableid"class="table table-bordered table-hover">
                        <thead>
                             <tr class="active">
                                 <th>Picture</th>
                                 <th>Name</th>
                                 <th>Username</th>
                                 <th>Password</th>
                                 <th>Phone Number</th>
                                 <th>Email Address</th>
                                 <th>Update</th>
                             </tr>
                         </thead>
                         <tbody>  
                <?php
                    if(mysqli_num_rows($query_run) > 0)
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                           $register_id= $row['register_id'];
                            ?>
                             <tr>
                             <td>
                             <?php echo '<img src="adviser/upload/'.$row['images'].' "width="60px;" height="60px;" alt = "Image">' ?>
                                 </td>
                                 <td><?php echo $row['adviser_surname'].", ".$row['adviser_given_name']." ".$row['adviser_middle_name']; ?></td>
                                 <td><?php echo $row['username']; ?></td>
                                 <td><?php echo "---------" ?></td>
                                 <td><?php echo $row['phone_number']; ?></td>
                                 <td><?php echo $row['email_address']; ?></td>

                                 
                                 <td>
                                    <form action="editusers.php#section1" method="POST">
                                     <input type="hidden" name="update_id" value="<?php  echo $register_id ?>">
                                    <button type="submit" name="updateBtn" class="btn btn-default btn-xs btn-basher" >
                                    <span class="glyphicon glyphicon-edit"></span>
                                    </button>  
                                     </form>
                                     </td>
                                     <!-- <td> -->
                                    <!-- <form action="code.php" method="POST">
                                     <input type="hidden" name="delete_id" value="">
                                    <button type="submit" name="deleteBtn" class="btn btn-danger btn-xs" >
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
                     <!-- <p><button href="viewadviser.html" type="button" class="btn-right btn-info btn-sm"  id="myBtn"> Print USERS</button></p> -->
                 </div>            
             </div>
         </div>
     </div>  
 </div>