
<div class="modal fade" id="addparentModal" role="dialog" enctype="multipart/form-data">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="padding:25px 40px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4><span class="glyphicon glyphicon-user"></span> Pupils Information</h4>
            </div>

          <form action="code.php" method="POST" enctype="multipart/form-data">

            <div class="modal-body" style="padding:40px 50px;">
              <form action="code.php" method="POST">
   

<?php
    include('../database/connectdb.php');
        $pupiladviser = "SELECT * FROM pupil";
        $pupadviser_run = mysqli_query($connection,$pupiladviser);
        
        if(mysqli_num_rows($pupadviser_run)>0)
        {
          ?>
          <div class="form-group">
                <label ><span class="glyphicon glyphicon-user"></span> Pupil</label>
                <select name="parentpupil_id" class="form-control" required>
                    <option value="parentpupil_id">Choose your Your Pupil</option>
                    <?php
                       foreach($pupadviser_run as $row)
                       {
                    ?>
                    <option value="<?php  echo $row['pupil_id']; ?>">
                    <?php echo $row['pupilname']; ?>
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
                  <label ><span class="glyphicon glyphicon-user"></span> Parent name:  </label>
                  <input type="text" class="form-control" name="admission"placeholder="Enter Parent name" >
                </div>
                <div class="form-group">
                  <label ><span class="glyphicon glyphicon-user"></span> Relationship</label>
                  <input type="text" class="form-control" name="admission"placeholder="Enter Relationship" >
                </div>
                <div class="form-group">
                  <label ><span class="glyphicon glyphicon-eye-open"></span> Mobile no.</label>
                  <input type="txt" class="form-control" name="parentmobile" placeholder="Enter  Mobile no.">
                </div>
                
                 
                <!-- </div> -->
                  <button type="submit" name="addparentBtn" class="btn btn-success btn-block"><span class="glyphicon glyphicon-save-file"></span> Save | Add - Pupil</button>
         
            </div>
              </form>
            <div class="modal-footer">
              <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
              
            </div>
          </div>
          </div>
        </div>