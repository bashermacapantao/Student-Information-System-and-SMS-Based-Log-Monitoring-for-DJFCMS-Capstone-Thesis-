<?php
include('security.php');
include('includes/header_admin.php');
include('includes/navbar.php');
include('includes/overview.php');
include('addusers.php');

?>
                
     <div id="section2"> 
        <div class="panel-group">
             <div class="panel panel-default">
                 <div class="panel-heading main-color-bg" >
                         <h3 class="panel-title">Grade & Section</h3>
                     </div>
                     <div class="panel-body">
        

             <div class="modal-header" style="padding:10px;">
              <h3 style="color: black;" class="glyphicon glyphicon-book"> Edit Grade & Section</h3>
            </div><br>      
<?php
  include('database/connectdb.php');
        if(isset($_POST['updategradsecBtn']))
        {
             $gradsec_id = $_POST['updategradsec_id'];
       
            //  $query = "SELECT * FROM gradsec WHERE gradsec_id = '$gradsec_id' ";
            $query = "SELECT * FROM gradsec g INNER JOIN adviser a ON g.adviser_id = a.adviser_id WHERE gradsec_id = $gradsec_id ";
             $query_run = mysqli_query($connection, $query);

             foreach($query_run as $row)
        {
          ?>
          <form action="code.php" method="POST"  enctype="multipart/form-data">
            <input type="hidden" name="updategradsec_id" value="<?php echo $row['gradsec_id'] ?>" >
              <div class="form-group">
                  <label ><span class="glyphicon glyphicon-pushpin"></span> Grade Level</label>
                  <input type="text" class="form-control input-lg" name="update_grade_level" value="<?php echo $row['grade_level'] ?>" placeholder="Enter Grade Level">
                </div>
                
                <div class="form-group">
                  <label ><span class="glyphicon glyphicon-pushpin"></span> Section Name</label>
                  <input type="text" class="form-control input-lg" name="update_section" value="<?php echo $row['section'] ?>" placeholder="Enter Section Name">
                </div>
                      
<?php
    include('database/connectdb.php');
        // $pupiladviser = "SELECT * FROM adviser a inner join gradsec g on a.adviser_id = g.adviser_id" ;
        $pupiladviser =  "SELECT * FROM adviser ORDER BY adviser.adviser_id DESC";
        $pupadviser_run = mysqli_query($connection,$pupiladviser);
        
        if(mysqli_num_rows($pupadviser_run)>0)
        {
          ?>
          <div class="form-group">
                <label ><span class="glyphicon glyphicon-user"></span> Adviser</label>
                <select name="adviser_id" class="form-control input-lg" required>
                    <option value="adviser_id"><?php echo $row['adviser_surname'].", ".$row['adviser_given_name']." ".$row['adviser_middle_name']; ?></option>
                    <?php
                       foreach($pupadviser_run as $row)
                       {
                    ?>
                    <option value="<?php  echo $row['adviser_id']; ?>">
                    <?php echo $row['adviser_surname'].", ".$row['adviser_given_name']." ".$row['adviser_middle_name']; ?>
                 
                    </option>
                    <?php
                       }
                      }
                    ?>
                </select>  
          </div>
        
          
         
                
                <div class="modal-footer">
                  <button type="submit" name="updategradsecBtn" class="btn btn-light btn-block"><span class="glyphicon glyphicon-save-file"></span> Update Grade & Section</button>
          
          
            
              <br><a href="administrator.php#section2" type="submit" class="btn btn-secondary btn-default pull-right" ><span class="glyphicon glyphicon-remove"></span> Cancel</a>
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
include('addpupil.php');
include('includes/scripts.php')
?>
 
    

 
