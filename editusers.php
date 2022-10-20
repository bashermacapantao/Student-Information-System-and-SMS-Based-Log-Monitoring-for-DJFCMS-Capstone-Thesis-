<?php
include('security.php');
include('includes/header_admin.php');
include('includes/navbar.php');
include('includes/overview.php');


?>          
     <div id="section1"> 
        <div class="panel-group">
             <div class="panel panel-default">
                 <div class="panel-heading main-color-bg" >
                         <h3 class="panel-title">REGISTER | USERS</h3>
                     </div>
                     <div class="panel-body">
        

             <div class="modal-header" style="padding:10px ;">
              <h3 style="color: black;"class="glyphicon glyphicon-book"> Edit User</h3>
            </div><br>   

<?php
  include('database/connectdb.php');
        if(isset($_POST['updateBtn']))
        {
             $register_id = $_POST['update_id'];
       
            //  $query = "SELECT * FROM register WHERE register_id = '$register_id' ";
            $query = "SELECT * FROM adviser a inner join register r on a.register_id = r.register_id WHERE a.register_id = $register_id" ;
             $query_run = mysqli_query($connection, $query);

             foreach($query_run as $row)
        {
          ?>
          <form action="code.php" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="update_advid" value="<?php echo $row['adviser_id'] ?>">
            <input type="hidden" name="update_regid" value="<?php echo $row['register_id'] ?>">
           
                <div class="form-group">
              <div class="col-sm-4">
                  <label ><span class="glyphicon glyphicon-user"></span> Surname</label>
                  <input type="text" class="form-control input-lg" name="update_adviser_surname" value="<?php echo $row['adviser_surname'] ?>"placeholder="Enter Surname">
                </div>

               
                <div class="col-sm-4">
                  <label ><span class="glyphicon glyphicon-user"></span> Given Name</label>
                  <input type="text" class="form-control input-lg" name="update_adviser_given_name" value="<?php echo $row['adviser_given_name'] ?>" placeholder="Enter Given Name">
                </div>

                <div class="col-sm-4">
                  <label ><span class="glyphicon glyphicon-user"></span> Middle Name</label>
                  <input type="text" class="form-control input-lg" name="update_adviser_middle_name" value="<?php echo $row['adviser_middle_name'] ?>" placeholder="Enter Middle Name">
                  <br>
                </div>
                </div>


                <!-- <div class="form-group">
                <div class="col-sm-4">
                <label for=""><span class="glyphicon glyphicon-tint"></span> Gender </label>
                <select name="update_gender" class="form-control input-lg">
                < ?php 
                        // if($row['gender'] == 'Female'){
                        //     echo "<option value='Female' selected> Female </option>
                        //     <option value='Male'> Male </option>";
                        // }
                        // else{
                        //   echo "<option value='Female'> Female </option>
                        //   <option value='Male' selected> Male </option>";
                        //     ;
                        // }
                       ? >
                    </select> 
                </div>
                    
                <div class="col-sm-4">
                  <label ><span class="glyphicon glyphicon-pawn"></span> Age</label>
                  <input type="number" class="form-control input-lg" name="update_age" value="" >
                </div>
               
                <div class="col-sm-4">
                  <label ><span class="glyphicon glyphicon-calendar"></span> Birthday</label>
                  <input type="text" class="form-control input-lg" name="update_birthday" value="" placeholder="Enter Birthday">
                </div>
                </div>  -->
                <div class="form-group">
                  <div class="col-sm-6">
                  <label ><span class="glyphicon glyphicon-link"></span> Email Address</label>
                  <input type="email" class="form-control input-lg" name="update_email_address" value="<?php echo $row['email_address'] ?>" placeholder="Enter Email Address">
                  </div>

                  <div class="col-sm-6">
                  <label ><span class="glyphicon glyphicon-phone"></span> Phone Number</label>
                  <input type="text" class="form-control input-lg" name="update_phone_number" value="<?php echo $row['phone_number'] ?> " placeholder="Enter Phone Number"><br>
                </div>
                </div>
                

                <!-- <div class="form-group">
                  <label ><span class="glyphicon glyphicon-home"></span> Address</label>
                  <input type="text" class="form-control input-lg" name="update_address" value="" placeholder="Enter Address">
                </div> -->

                

                <div class="form-group">
                <div class="col-sm-4">
                  <label class=""><span class="glyphicon glyphicon-pencil"></span> Username: </label>
                  <input type="text" class="form-control input-lg" name="update_username" value="<?php echo $row['username'] ?> " placeholder="Enter Username">
                  </div>
                   
                  <div class="col-sm-4">
                  <label ><span class="glyphicon glyphicon-eye-open"></span> Password: </label>
                  <input type="text"class="form-control input-lg"  name="update_password"  value="<?php echo $row['password'] ?>" placeholder="Enter Password">
                  </div>
                  <div class="col-sm-4">
                  <label for=""><span class="glyphicon glyphicon-asterisk"></span> User Type:</label>
                   <select name="usertype" id="" class="form-control input-lg">
                      <?php 
                        if($row['usertype'] == 'user'){
                            echo "<option value='user' selected> User </option>
                            <option value='admin'> Admin </option>";
                        }
                        else{
                            echo '<option value="admin" selected> Admin</option>
                            <option value="user"> User</option>';
                            ;
                        }
                      ?>
                    </select>
                    <br>
                    </div>
                 

                </div>
                <div class="form-group">
                <label><span class="glyphicon glyphicon-camera"></span> Upload Image </label>
                  <input  class="form-control input-lg" type="file" name="profile_images" id="profile_images">
                </div>
                      
                  
                  
          
          
                  <div class="modal-footer">
                  <button type="submit" name="updateBtn" class="btn btn-light btn-block "><span class="glyphicon glyphicon-save-file"></span> Update User</button>
              <br><a href="administrator.php#section1" type="submit" class="btn btn-secondary btn-default pull-right" ><span class="glyphicon glyphicon-remove"></span> Cancel</a>
            
            </div> 
            </form>
            <?php  
        }
    }
?>      
                      
                      <!-- </div> -->
         </div>
     </div>  
 </div>
               
  
<?php
include('addsection.php');
include('addpupil.php');
include('includes/scripts.php')
?>
 
    

 
