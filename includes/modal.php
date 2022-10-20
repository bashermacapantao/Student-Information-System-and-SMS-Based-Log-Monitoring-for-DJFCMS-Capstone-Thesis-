
<!-- Modal add user-->
<div class="modal" id="add_user_Modal" role="dialog">
        <div class="modal-dialog modal-lg">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="padding:25px 40px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4  style="color: black;"><span class="glyphicon glyphicon-user"></span> Add User</h4>
            </div>
          <form action="code.php" method="POST" enctype="multipart/form-data">

            <div class="modal-body" style="padding:40px 50px;">
              <form action="code.php" method="POST" enctype="multipart/form-data">

              <div class="form-group">
                  <label><h3><span class="glyphicon glyphicon-hand-right"></span> Account </h3</label>
                  </div>

                <div class="form-group">
              <div class="col-sm-4">
                  <label ><span class="glyphicon glyphicon-pencil"></span> Username</label>
                  <input type="text" class="form-control input-lg" name="username"placeholder="Enter Username">
                </div>

               
                <div class="col-sm-4">
                  <label ><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                  <input type="text" class="form-control input-lg" name="password" placeholder="Enter password">
                </div>

                <div class="col-sm-4">
                  <label ><span class="glyphicon glyphicon-eye-open"></span> Confirm Password</label>
                  <input type="text" class="form-control input-lg" name="confirmPassword"  placeholder="Enter password">
                  <br>
                </div>
                </div>
                <div class="form-group">
                  <label><h3><span class="glyphicon glyphicon-hand-right"></span> Adviser Information </h3</label>
                  </div>
                <div>
                  <input type="hidden" name="usertype" value="user" >
                </div>
                
              <div class="form-group">
              <div class="col-sm-4">
                  <label ><span class="glyphicon glyphicon-user"></span> Surname</label>
                  <input type="text" class="form-control input-lg" name="adviser_surname"placeholder="Enter Surname">
                </div>

               
                <div class="col-sm-4">
                  <label ><span class="glyphicon glyphicon-user"></span> Given Name</label>
                  <input type="text" class="form-control input-lg" name="adviser_given_name" placeholder="Enter Given Name">
                </div>

                <div class="col-sm-4">
                  <label ><span class="glyphicon glyphicon-user"></span> Middle Name</label>
                  <input type="text" class="form-control input-lg" name="adviser_middle_name"  placeholder="Enter Middle Name">
                  <br>
                </div>
                </div>
                
                <div class="form-group">
                <div class="col-sm-6">
                  <label for=""><span class="glyphicon glyphicon-tint"></span> Select Gender</label>
                    <select name="gender" class="form-control">
                      <option value="">-Gender-</option>
                      <option value="Female"> Female</option>
                      <option value="Male"> Male</option>
                    </select>
                </div>
                <div class="col-sm-6">
                        <label><span class="glyphicon glyphicon-pawn"></span> Birthday</label>
                        <input type="date" class="form-control" name="birth_date">
                        <br>
                      </div>
                     
                </div>
                <div class="form-group">
                <div class="col-sm-6">
                        <label><span class="glyphicon glyphicon-link"></span> Email address</label>
                        <input type="email" class="form-control" name="email_address"  placeholder="Enter Email Address">
                      </div>
             
                      <div class="col-sm-6">
                        <label><span class="glyphicon glyphicon-phone"></span> Phone Number</label>
                        <input type="text" class="form-control" name="phone_number"  placeholder="Enter Phone number">
                        <br>
                      </div>
                </div>

                      <div class="form-group">
                        <label><span class="glyphicon glyphicon-home"></span> Address</label>
                        <input type="text" class="form-control input-lg" name="adviser_address"  placeholder="Enter address">
                </div>

                <div class="form-group">
                <label><span class="glyphicon glyphicon-camera"></span> Upload Image </label>
                  <input  class="form-control input-lg" type="file" name="profile_images" id="profile_images">
                </div>
                
                
                  <button type="submit" name="registerBtn" class="btn btn-light btn-block"><span class="glyphicon glyphicon-save-file"></span> Save | Add</button>
          </form>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-secondary btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
              
            </div>
          </div>
          
        <!-- </div> -->
      </div> 
    </div>
 
    <!-- end of USER modal -->


<div class="modal" id="add_gradsecModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="padding:25px 40px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 style="color: black;"><span class="glyphicon glyphicon-briefcase"></span> Grade & Section</h4>
            </div>
          <!-- <form action="code.php" method="POST"> -->

            <div class="modal-body" style="padding:40px 50px;">
              <form action="code.php" method="POST">
            
                <div class="form-group">
                  <label for=""><span class="glyphicon glyphicon-pushpin"></span> Select Grade Level</label>
                    <select name="grade_level" class="form-control input-lg">
                      <option value="">- - Grade Level - -</option>
                      <option value="Grade - I"> Grade - I</option>
                      <option value="Grade - II"> Grade - II</option>
                      <option value="Grade - III"> Grade - III</option>
                      <option value="Grade - IV"> Grade - IV</option>
                      <option value="Grade - V"> Grade - V</option>
                      <option value="Grade - VI"> Grade - VI</option>
                    </select>
                   
                </div>
                <div class="form-group">
                  <label ><span class="glyphicon glyphicon-pushpin"></span> Section Name</label>
                  <input type="text" class="form-control input-lg" name="section" placeholder="Enter Section Name">
                </div>


       
<?php
    include('database/connectdb.php');
        $pupiladviser = "SELECT * FROM adviser ORDER BY adviser.adviser_id DESC";
        $pupadviser_run = mysqli_query($connection,$pupiladviser);
        
        if(mysqli_num_rows($pupadviser_run)>0)
        {
          ?>
          <div class="form-group">
                <label ><span class="glyphicon glyphicon-user"></span> Adviser</label>
                <select name="adviser_id" class="form-control input-lg" required>
                    <option value="adviser_id">--Add Adviser --</option>
                    <?php
                       foreach($pupadviser_run as $row)
                       {
                    ?>
                    <option value="<?php  echo $row['adviser_id']; ?>">
                    <?php echo $row['adviser_surname'].", ".$row['adviser_given_name']." ".$row['adviser_middle_name']; ?>
                 
                    </option>
                    <?php
                       }
                    ?>
                </select>  
          </div>
          
          <?php
        }
        else{
          echo "no data available";
        }
    ?>
                  <button type="submit" name="gradsecBtn" class="btn btn-light btn-block"><span class="glyphicon glyphicon-save-file"></span> Save | Add - Grade & Section</button>
           </form>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-secondary btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
              
            </div>
          </div>
          
        </div>
      </div>
      <!-- ############################################################################# -->
      
      
      <div class="modal" id="add_schoolyearModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="padding:25px 40px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 style="color: black;"><span class="glyphicon glyphicon-briefcase"></span> School Year</h4>
            </div>
          <!-- <form action="code.php" method="POST"> -->

            <div class="modal-body" style="padding:40px 50px;">
              <form action="code.php" method="POST">

              <div class="form-group">
                  <label ><span class="glyphicon glyphicon-tag"></span> School Year</label>
                  <input type="text" class="form-control input-lg" name="schoolyear"placeholder="Enter School Year ex:(xxxx - xxxxx)" required>
              </div>
            
                
                  <button type="submit" name="schoolyearBtn" class="btn btn-light btn-block"><span class="glyphicon glyphicon-save-file"></span> Save | Add - School Year</button>
           </form>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-secondary btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
              
            </div>
          </div>
          
        </div>
      </div> 

      <!-- ###################################################################################### -->
      <div class="modal" id="print_id_Modal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="padding:25px 40px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 style="color: black;"><span class="glyphicon glyphicon-briefcase"></span> School ID</h4>
            </div>

            <div class="modal-body" style="padding:40px 50px;">
            <form action="idcard/print_id_card.php" method="GET"> 
    <?php
   include('database/connectdb.php');
        $gradlevel = "SELECT * FROM gradsec ORDER BY `gradsec`.`grade_level` ASC";
        $gradeandsection_run = mysqli_query($connection,$gradlevel);
        
        if(mysqli_num_rows($gradeandsection_run)>0)
        {
          ?>
          <div class="form-group">
                <label ><span class="glyphicon glyphicon-briefcase"></span> Grade & Section</label>
                <select name="section"  class="form-control input-lg" required>
                    <option value="section">-- Grade & Section -- </option>
                    <?php
                       foreach($gradeandsection_run as $row)
                       {
                    ?>
                    <option value="<?php  echo $row['section']; ?>">
                  
                    <?php echo $row['grade_level']." ".$row['section']; ?>
                   
                    </option>
                    <?php
                       }
                    ?>
                </select>  
          </div>
          
          <?php
        }
        else{
          echo "no data available";
        }
    ?>
       <?php
 include('database/connectdb.php');
        $admission = "SELECT * FROM schoolyear ORDER BY year ASC";
        $schyear_run = mysqli_query($connection,$admission);
        
        if(mysqli_num_rows($schyear_run)>0)
        {
          ?>
    
        
                <label ><span class="glyphicon glyphicon-briefcase"></span> School Year</label>
                <select name="year"  class="form-control input-lg" required>
                    <option value="year">-- Admission Year -- </option>
                    <?php
                       foreach($schyear_run as $row)
                       {
                    ?>
                    <option value="<?php  echo $row['year']; ?>">
                    <?php echo $row['year']; ?>
                  
                   
                    </option>
                    <?php
                       }
                    ?>
                </select> 
                <br>
                 
    
    
          
          <?php
        }
        else{
          echo "no data available";
        }
    ?>
    <div class="form-group">
    <button type="submit" class="btn btn-light btn-block"><span class="glyphicon glyphicon-print"></span> Print School ID</button>
    </div>
                                   
      </form>
              
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-secondary btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
              
            </div>
          </div>
          
        </div>
      </div> 
      
  <!-- ###################################addsection -->



 <div class="modal" id="addpupilModal" role="dialog"enctype="multipart/form-data">
      <div class="modal-dialog modal-lg">
        
          <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="padding:25px 40px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 style="color: black;"><span class="glyphicon glyphicon-user"></span> Pupils Information</h4>
            </div>

           <form action="code.php" method="POST" enctype="multipart/form-data">

          <div class="modal-body" style="padding:40px 50px;">
            <!-- <form action="code.php" method="POST" enctype="multipart/form-data"> -->
            <div class="form-group">
                  <label><h3><span class="glyphicon glyphicon-hand-right"></span> Pupil Information </h3</label>
                  </div>

                  <div class="form-group">
                  <div class="col-sm-6">
                  <label ><span class="glyphicon glyphicon-tag"></span> LRN</label>
                  <input type="number" class="form-control input-lg" name="user_id"placeholder="Enter Pupil LRN #:" required>
              </div>

            <?php
    include('database/connectdb.php');
        $admission = "SELECT * FROM schoolyear ORDER BY year ASC";
        $schyear_run = mysqli_query($connection,$admission);
        
        if(mysqli_num_rows($schyear_run)>0)
        {
          ?>
    
          <div class="col-sm-6">
                <label ><span class="glyphicon glyphicon-briefcase"></span> School Year</label>
                <select name="schoolyear_id"  class="form-control input-lg" required>
                    <option value="schoolyear_id">-- Admission Year -- </option>
                    <?php
                       foreach($schyear_run as $row)
                       {
                    ?>
                    <option value="<?php  echo $row['schoolyear_id']; ?>">
                    <?php echo $row['year']; ?>
                   
                    </option>
                    <?php
                       }
                    ?>
                </select>  
                <br>
          </div>
          
          <?php
        }
        else{
          echo "no data available";
        }
    ?>

              
          </div>


          <div class="form-group">
              <div class="col-sm-4">
                  <label ><span class="glyphicon glyphicon-user"></span> Surname</label>
                  <input type="text" class="form-control input-lg" name="pupil_surname"placeholder="Enter Surname">
                </div>

               
                <div class="col-sm-4">
                  <label ><span class="glyphicon glyphicon-user"></span> Given Name</label>
                  <input type="text" class="form-control input-lg" name="pupil_given_name" placeholder="Enter Given Name">
                </div>

                <div class="col-sm-4">
                  <label ><span class="glyphicon glyphicon-user"></span> Middle Name</label>
                  <input type="text" class="form-control input-lg" name="pupil_middle_name"  placeholder="Enter Middle Name">
                  <br>
                </div>
                </div>

          
              
              <?php
    include('database/connectdb.php');
        $gradlevel = "SELECT * FROM gradsec";
        $gradeandsection_run = mysqli_query($connection,$gradlevel);
        
        if(mysqli_num_rows($gradeandsection_run)>0)
        {
          ?>
          <div class="form-group">
                <label ><span class="glyphicon glyphicon-briefcase"></span> Grade & Section</label>
                <select name="gradsec_id"  class="form-control input-lg" required>
                    <option value="gradsec_id">-- Grade & Section -- </option>
                    <?php
                       foreach($gradeandsection_run as $row)
                       {
                    ?>
                    <option value="<?php  echo $row['gradsec_id']; ?>">
                    <?php echo $row['grade_level']; ?>
                    <?php echo " - " ?>
                    <?php echo $row['section']; ?>
                   
                    </option>
                    <?php
                       }
                    ?>
                </select>  
          </div>
          
          <?php
        }
        else{
          echo "no data available";
        }
    ?>

                  <div class="form-group">
                    <label ><span class="glyphicon glyphicon-tint"></span> Pupil Gender  </label>
                      <select name="pupil_gender" class="form-control input-lg">
                        <option value="">-Select Gender-</option>
                        <option value="Male"> Male</option>
                        <option value="Female"> Female</option>
                      </select>
                      
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
                  <label><span class="glyphicon glyphicon-user"></span> Guardian</label>
                  <input type="text" class="form-control input-lg" name="guardian"placeholder="Enter Guardian Full Name" required>
                </div>

                <div class="form-group">
                <div class="col-sm-6">
                  <label ><span class="glyphicon glyphicon-eye-heart"></span> Relationship</label>
                  <input type="text" class="form-control input-lg" name="relationship" placeholder="Relationship with Pupil" required>
                </div>
                
                <div class="col-sm-6">
                  <label ><span class="glyphicon glyphicon-phone"></span> Guardian Number</label>
                  <input type="text" class="form-control input-lg" name="guardian_number" placeholder="ex: (+63)-99xxxxxxxx" required>
                  <br>
                </div>
                </div>
                <div class="form-group">
                  <label ><span class="glyphicon glyphicon-home"></span> Address</label>
                  <input type="text" class="form-control input-lg" name="address" placeholder="Enter Address" required>
                </div>
                
                  <button type="submit" name="addpupilBtn" class="btn btn-light btn-block"><span class="glyphicon glyphicon-save-file"></span> Save | Add - Pupil</button>
              
            </div>
            </form>
            <div class="modal-footer">
              <button type="submit" class="btn btn-secondary btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
              
            </div>

          </div>
          
      </div>
  </div> 








  
  <!-- #################################################################### -->



      <div class="modal" id="addparentModal" role="dialog" enctype="multipart/form-data">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="padding:25px 40px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 style="color: black;"><span class="glyphicon glyphicon-user"></span> Pupils Information</h4>
            </div>

          <form action="code.php" method="POST" enctype="multipart/form-data">

            <div class="modal-body" style="padding:40px 50px;">
              <form action="code.php" method="POST">
   

<?php
    include('database/connectdb.php');
        $pupiladviser = "SELECT * FROM register";
        $pupadviser_run = mysqli_query($connection,$pupiladviser);
        
        if(mysqli_num_rows($pupadviser_run)>0)
        {
          ?>
          <div class="form-group">
                <label ><span class="glyphicon glyphicon-user"></span> Adviser</label>
                <select name="adviser_id" class="form-control" required>
                    <option value="adviser_id">Choose your Your adviser</option>
                    <?php
                       foreach($pupadviser_run as $row)
                       {
                    ?>
                    <option value="<?php  echo $row['register_id']; ?>">
                    <?php echo $row['name']; ?>
                    </option>
                    <?php
                       }
                    ?>
                </select>  
          </div>
          
          <?php
        }
        else{
          echo "no data available";
        }
    ?>
                  <div class="form-group">
                  <label ><span class="glyphicon glyphicon-
                  "></span> Parent name:  </label>
                  <input type="date" class="form-control" name="admission"placeholder="Enter Parent name" >
                </div>
                <div class="form-group">
                  <label ><span class="glyphicon glyphicon-user"></span> Relationship</label>
                  <input type="date" class="form-control" name="admission"placeholder="Enter Relationship" >
                </div>
                <div class="form-group">
                  <label ><span class="glyphicon glyphicon-eye-open"></span> Mobile no.</label>
                  <input type="text" class="form-control" name="parentmobile" placeholder="Enter  Mobile no.">
                </div>
                
                 
                </div>
                  <button type="submit" name="addpupilBtn" class="btn btn-light btn-block"><span class="glyphicon glyphicon-save-file"></span> Save | Add - Pupil</button>
           </form>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-secondary btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
              
            </div>
          </div>
          
        </div>
  