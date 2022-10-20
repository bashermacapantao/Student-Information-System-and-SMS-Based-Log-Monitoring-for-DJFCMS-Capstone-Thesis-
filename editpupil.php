<?php
include('security.php');
include('includes/header_admin.php');
include('includes/navbar.php');
include('includes/overview.php');
include('addusers.php');
include('addsection.php');

?>
                
     <div id="section3"> 
        <div class="panel-group">
             <div class="panel panel-default">
                 <div class="panel-heading main-color-bg" >
                         <h3 class="panel-title">Edit Pupil </h3>
                     </div>
                     <div class="panel-body">

            <div class="modal-header" style="padding:10px;">
              <h3 style="color: black;"><span class="glyphicon glyphicon-book"></span> Pupils Information</h3>
            </div><br>
            <?php
    include('database/connectdb.php');
        if(isset($_POST['updatepupilBtn']))
        {
             $pupil_id = $_POST['updatepupil_id'];
       
             $query = "SELECT * FROM pupil p inner join qrcode q on p.qrcode_id = q.qrcode_id WHERE pupil_id = $pupil_id ";
             $query_run = mysqli_query($connection, $query);

             foreach($query_run as $row)
        {
          ?>

          <form action="code.php" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="qr_id" value="<?php echo $row['qrcode_id'] ?>" >
                 <div class="form-group">
                   <label ><span class="glyphicon glyphicon-tag"></span> LRN</label>
                   <input type="text" class="form-control input-lg" name="updateuser_id" value="<?php echo $row['user_id']; ?>" placeholder="Enter Pupil LRN #:">
                </div>
                
                <div class="form-group">
              <div class="col-sm-4">
                  <label ><span class="glyphicon glyphicon-user"></span> Surname</label>
                  <input type="text" class="form-control input-lg" name="update_pupil_surname" value="<?php echo $row['pupil_surname']; ?>" placeholder="Enter Surname">
                </div>

               
                <div class="col-sm-4">
                  <label ><span class="glyphicon glyphicon-user"></span> Given Name</label>
                  <input type="text" class="form-control input-lg" name="update_pupil_given_name" value="<?php echo $row['pupil_given_name']; ?>" placeholder="Enter Given Name">
                </div>

                <div class="col-sm-4">
                  <label ><span class="glyphicon glyphicon-user"></span> Middle Name</label>
                  <input type="text" class="form-control input-lg" name="update_pupil_middle_name" value="<?php echo $row['pupil_middle_name']; ?>" placeholder="Enter Middle Name">
                  <br>
                </div>
                </div>

                  <div class="form-group">
                     <!-- <div class="col-sm-4"> -->
                <label for=""><span class="glyphicon glyphicon-tint"></span> Gender </label>
                <select name="updatepupil_gender" class="form-control input-lg">
                <?php 
                        if($row['gender'] == 'Female'){
                            echo "<option value='Female' selected> Female </option>
                            <option value='Male'> Male </option>";
                        }
                        else{
                          echo "<option value='Female'> Female </option>
                          <option value='Male' selected> Male </option>";
                            ;
                        }
                      ?>
                      
                    </select> 
                <!-- </div> -->
                  </div> 
                  <div class="form-group">
                <label><span class="glyphicon glyphicon-camera"></span> Upload Image </label>
                  <input  class="form-control input-lg" type="file" name="profile_images" id="profile_images">
                  <br>
                </div>
                <div class="form-group">
                  <label><h3><span class="glyphicon glyphicon-hand-right"></span> Parent Information </h3</label>
                  </div>

                  <div class="form-group">
                    <label ><span class="glyphicon glyphicon-user"></span> Parent Name</label>
                    <input type="text" class="form-control input-lg" name="updateguardian" value="<?php echo $row['guardian']; ?>" placeholder="Enter Guardian Full Name">
                </div>

                <div class="form-group">
                  <div class="col-sm-6">
                    <label ><span class="glyphicon glyphicon-heart"></span> Relationship</label>
                    <input type="text" class="form-control input-lg" name="updaterelationship" value="<?php echo $row['relationship']; ?>" placeholder="Relationship with Pupil">
                  </div>
               
                  <div class="col-sm-6">
                    <label ><span class="glyphicon glyphicon-phone"></span>Parent Number</label>
                    <input type="text" class="form-control input-lg" name="updateguardian_number" value="<?php echo $row['guardian_number']; ?>" placeholder="Enter Number for Notification">
                  </div>
                </div>

                <div class="form-group">
                    <label ><span class="glyphicon glyphicon-home"></span> Address</label>
                    <input type="text" class="form-control input-lg" name="updateaddress" value="<?php echo $row['address']; ?>" placeholder="Enter Address">
                </div>

                <div class="modal-footer">
                  <button type="submit" name="updatepupilBtn" class="btn btn-light btn-block"><span class="glyphicon glyphicon-save-file"></span> Update - Pupil information</button>
             
              <br><a href="administrator.php#section3" type="submit" class="btn btn-secondary btn-default pull-right" ><span class="glyphicon glyphicon-remove"></span> Cancel</a>
            </div> 
            </form>
           <?php  
        }
    }
?>
            </div>
            
          </div>
          
        </div>
      </div> 
               
  
<?php

include('includes/scripts.php')
?>
 
    

 
