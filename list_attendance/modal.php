<div class="modal" id="gradeone">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4   style="color: black;" class="modal-title">Grade - I</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form action="print_pdf.php" method="GET"> 
    <?php
   include('../database/connectdb.php');
        $gradlevel = "SELECT * FROM gradsec WHERE grade_level = 'Grade - I'";
        $gradeandsection_run = mysqli_query($connection,$gradlevel);
        
        if(mysqli_num_rows($gradeandsection_run)>0)
        {
          ?>
          <div class="form-group">
                <label ><span class="glyphicon glyphicon-briefcase"></span> Section</label>
                <select name="section"  class="form-control input-lg" required>
                    <option value="section">-- Section -- </option>
                    <?php
                       foreach($gradeandsection_run as $row)
                       {
                    ?>
                    <option value="<?php  echo $row['section']; ?>">
                  
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
       <?php
 include('../database/connectdb.php');
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
                        <label for="">From Date: </label>
                        <input type="date" name="from" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">TO Date: </label>
                        <input type="date" name="to" class="form-control">
                    </div>
     
    <div class="form-group">
    <button type="submit" class="btn btn-secondary btn-block"><span class="glyphicon glyphicon-print"></span> Print Report</button>
    </div>

                                   
      </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  <!-- ################################################################################################### -->

  <div class="modal" id="gradetwo">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4  style="color: black;" class="modal-title">Grade - II</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form action="print_pdf.php" method="GET"> 
    <?php
   include('../database/connectdb.php');
        $gradlevel = "SELECT * FROM gradsec WHERE grade_level = 'Grade - II'";
        $gradeandsection_run = mysqli_query($connection,$gradlevel);
        
        if(mysqli_num_rows($gradeandsection_run)>0)
        {
          ?>
          <div class="form-group">
                <label ><span class="glyphicon glyphicon-briefcase"></span> Section</label>
                <select name="section"  class="form-control input-lg" required>
                    <option value="section">-- Section -- </option>
                    <?php
                       foreach($gradeandsection_run as $row)
                       {
                    ?>
                    <option value="<?php  echo $row['section']; ?>">
                  
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
       <?php
 include('../database/connectdb.php');
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
                        <label for="">From Date: </label>
                        <input type="date" name="from" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">TO Date: </label>
                        <input type="date" name="to" class="form-control">
                    </div>
     
    <div class="form-group">
    <button type="submit" class="btn btn-secondary btn-block"><span class="glyphicon glyphicon-print"></span> Print Report</button>
    </div>

                                   
      </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  <!-- ################################################################################################### -->


  
  <div class="modal" id="gradethree">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4  style="color: black;" class="modal-title">Grade - III</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form action="print_pdf.php" method="GET"> 
    <?php
   include('../database/connectdb.php');
        $gradlevel = "SELECT * FROM gradsec WHERE grade_level = 'Grade - III'";
        $gradeandsection_run = mysqli_query($connection,$gradlevel);
        
        if(mysqli_num_rows($gradeandsection_run)>0)
        {
          ?>
          <div class="form-group">
                <label ><span class="glyphicon glyphicon-briefcase"></span> Section</label>
                <select name="section"  class="form-control input-lg" required>
                    <option value="section">-- Section -- </option>
                    <?php
                       foreach($gradeandsection_run as $row)
                       {
                    ?>
                    <option value="<?php  echo $row['section']; ?>">
                  
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
       <?php
 include('../database/connectdb.php');
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
                        <label for="">From Date: </label>
                        <input type="date" name="from" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">TO Date: </label>
                        <input type="date" name="to" class="form-control">
                    </div>
     
    <div class="form-group">
    <button type="submit" class="btn btn-secondary btn-block"><span class="glyphicon glyphicon-print"></span> Print Report</button>
    </div>

                                   
      </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  <!-- ################################################################################################### -->


  <div class="modal" id="gradefour">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4  style="color: black;" class="modal-title">Grade - IV</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form action="print_pdf.php" method="GET"> 
    <?php
   include('../database/connectdb.php');
        $gradlevel = "SELECT * FROM gradsec WHERE grade_level = 'Grade - IV'";
        $gradeandsection_run = mysqli_query($connection,$gradlevel);
        
        if(mysqli_num_rows($gradeandsection_run)>0)
        {
          ?>
          <div class="form-group">
                <label ><span class="glyphicon glyphicon-briefcase"></span> Section</label>
                <select name="section"  class="form-control input-lg" required>
                    <option value="section">-- Section -- </option>
                    <?php
                       foreach($gradeandsection_run as $row)
                       {
                    ?>
                    <option value="<?php  echo $row['section']; ?>">
                  
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
       <?php
 include('../database/connectdb.php');
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
                        <label for="">From Date: </label>
                        <input type="date" name="from" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">TO Date: </label>
                        <input type="date" name="to" class="form-control">
                    </div>
     
    <div class="form-group">
    <button type="submit" class="btn btn-secondary btn-block"><span class="glyphicon glyphicon-print"></span> Print Report</button>
    </div>

                                   
      </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  <!-- ################################################################################################### -->


  <div class="modal" id="gradefive">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4  style="color: black;" class="modal-title">Grade - V</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form action="print_pdf.php" method="GET"> 
    <?php
   include('../database/connectdb.php');
        $gradlevel = "SELECT * FROM gradsec WHERE grade_level = 'Grade - V'";
        $gradeandsection_run = mysqli_query($connection,$gradlevel);
        
        if(mysqli_num_rows($gradeandsection_run)>0)
        {
          ?>
          <div class="form-group">
                <label ><span class="glyphicon glyphicon-briefcase"></span> Section</label>
                <select name="section"  class="form-control input-lg" required>
                    <option value="section">-- Section -- </option>
                    <?php
                       foreach($gradeandsection_run as $row)
                       {
                    ?>
                    <option value="<?php  echo $row['section']; ?>">
                  
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
       <?php
 include('../database/connectdb.php');
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
                        <label for="">From Date: </label>
                        <input type="date" name="from" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">TO Date: </label>
                        <input type="date" name="to" class="form-control">
                    </div>
     
    <div class="form-group">
    <button type="submit" class="btn btn-secondary btn-block"><span class="glyphicon glyphicon-print"></span> Print Report</button>
    </div>

                                   
      </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  <!-- ################################################################################################### -->


  <div class="modal" id="gradesix">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4  style="color: black;" class="modal-title">Grade - VI</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form action="print_pdf.php" method="GET"> 
    <?php
   include('../database/connectdb.php');
        $gradlevel = "SELECT * FROM gradsec WHERE grade_level = 'Grade - VI'";
        $gradeandsection_run = mysqli_query($connection,$gradlevel);
        
        if(mysqli_num_rows($gradeandsection_run)>0)
        {
          ?>
          <div class="form-group">
                <label ><span class="glyphicon glyphicon-briefcase"></span> Section</label>
                <select name="section"  class="form-control input-lg" required>
                    <option value="section">-- Section -- </option>
                    <?php
                       foreach($gradeandsection_run as $row)
                       {
                    ?>
                    <option value="<?php  echo $row['section']; ?>">
                  
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
       <?php
 include('../database/connectdb.php');
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
                        <label for="">From Date: </label>
                        <input type="date" name="from" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">TO Date: </label>
                        <input type="date" name="to" class="form-control">
                    </div>
     
    <div class="form-group">
    <button type="submit" class="btn btn-secondary btn-block"><span class="glyphicon glyphicon-print"></span> Print Report</button>
    </div>

                                   
      </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  <!-- ################################################################################################### -->


  