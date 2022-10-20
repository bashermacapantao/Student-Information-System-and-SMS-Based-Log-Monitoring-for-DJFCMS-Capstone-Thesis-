<?php
include('../security.php');
include('includes/header_adviser.php');
include('includes/navbar.php');
include('../database/connectdb.php');
?>

  
<div class="container">
    <div class="jumbotron">
             <div class="container">
<style>
    .basher{
    background-color: #190f0feb !important ;
    border-color: #646060 !important;
    color: white !important;
    text-align: center;

}
</style>   
<?php
    if(isset($_POST['edit_data_btn']))
    {
        $register_id = $_POST['edit_id'];

        $query = "SELECT * FROM register r inner join adviser a on r.register_id = a.register_id WHERE a.register_id = '$register_id' ";
        $query_run = mysqli_query($connection, $query);

        foreach($query_run as $row)
        {
?>

<form action="advisercode.php" method="POST" enctype="multipart/form-data">  
<input type="hidden" name="update_id" value="<?= $_SESSION['user_log']['register_id']; ?>">   
         <div class="row">
        <div class="col-md-3">
                <div class="list-group color-bg ">
                          <?php echo '<img src="upload/'.$row['images'].' "width="220px;" height="255px;" alt = "Image">' ?>
                     
                          <label> Upload Image </label>
                          <input type="file" name="profile_images" id="profile_images">

                          <hr>
                      </div>
              
                        <div class="col-md-12">
                          <label >Username</label>
                          <a  class="list-group-item"><span class="glyphicon glyphicon-star" aria-hidden="true"> </span>
                          <input type="text" class="form-control"  name="update_username" value="<?php echo $row['username'] ?>" >
                          
                          </a>
                      </div>
                      <div class="col-md-12">
                          <label >Password</label>
                          <a class="list-group-item"><span class="glyphicon glyphicon-star" aria-hidden="true"> </span>
                          <input type="text" class="form-control"  name="update_password" value="<?php echo $row['password'] ?>" >
                          
                          </a>
                      </div>
      
                    </div>
        <div class="col-md-9">
                      <div class="list-group color-bg ">
                      
                      <div class="row">
                      <div class="col-md-4">
                          <label>Surname</label>
                            <a class="list-group-item"><span class="glyphicon glyphicon-star" > </span>
                          <input type="text" class="form-control"  name="update_adviser_surname"  value="<?php echo $row['adviser_surname'] ?>" >
                          </a>
                          <hr>
                      </div>
                      
                      <div class="col-md-4">
                          <label>Given Name</label>
                            <a class="list-group-item"><span class="glyphicon glyphicon-star" > </span>
                          <input type="text" class="form-control"  name="update_adviser_given_name" value="<?php echo $row['adviser_given_name'] ?>" >
                          </a>
                          <hr>
                      </div>
                     
                      <div class="col-md-4">
                          <label >Middle Name</label>
                          <a  class="list-group-item"><span class="glyphicon glyphicon-star" aria-hidden="true"> </span>
                          <input type="text" class="form-control" name="update_adviser_middle_name" value="<?php echo $row['adviser_middle_name'] ?>" >
                        
                          </a>
                          <hr>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-md-4">
                          <label>Rank</label>
                            <a class="list-group-item"><span class="glyphicon glyphicon-star" > </span>
                          <input type="text" class="form-control"  name="update_rank" value="<?php echo $row['rank']  ?>" >
                          </a>
                      
                      </div>
                      
                      <div class="col-md-4">
                          <label >Gender</label>
                          <a class="list-group-item"><span class="glyphicon glyphicon-star" aria-hidden="true"> </span>
                    <select name="update_gender" class="form-control">
                    <?php 
                    
                        $gen = $row['gender'];
                      
                        if($gen == 'Female'){
                            echo "<option value='Male'> Male</option>
                            <option value='Female' selected> Female</option>";
                        }else{

                            echo "<option value='Male' selected> Male</option>
                            <option value='Female'> Female</option>";

                        }
                      
                      ?>

                    
                    </select>
                          
                          </a>
                      </div>
                     
                      <div class="col-md-4">
                          <label >Birthday</label>
                          <a  class="list-group-item"><span class="glyphicon glyphicon-star" aria-hidden="true"> </span>
                          <input type="text" class="form-control" name="update_birth_date" value=<?php echo date('Y-m-d',strtotime($row['birth_date'])); ?>>
                        
                          </a>
                          <br>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-md-6">
                          <label >Email Address</label>
                          <a  class="list-group-item"><span class="glyphicon glyphicon-star" aria-hidden="true"> </span>
                          <input type="email" class="form-control"  name="update_email_address" value="<?php echo $row['email_address'] ?>" >
                          
                          </a>
                      </div>
                      <div class="col-md-6">
                          <label >Phone Number</label>
                          <a class="list-group-item"><span class="glyphicon glyphicon-star" aria-hidden="true"> </span>
                          <input type="text" class="form-control"  name="update_phone_number" value="<?php echo $row['phone_number'] ?>" >
                          
                          </a>
                          <br>
                      </div>
                      </div>
                      <div class="col-md-12">
                          <label >Full Address</label>
                          <a class="list-group-item"><span class="glyphicon glyphicon-star" aria-hidden="true"> </span>
                          <input type="text"  class="form-control" name="update_adviser_address" value="<?php echo $row['adviser_address'] ?>" >
                          </a>
                          <hr><br>
                      </div>
                     
                      <div class="footer">
                      <div class="row"> 
                      <div class="col-md-6">
                    <button type="submit" name="updateBtn" class="btn btn-success btn-block"><span class="glyphicon glyphicon-save-file"></span> Save | Update </button>
                    </div> 
                    <div class="col-md-6">
                    <a href="adviserprof.php" type="submit" class="btn btn-danger btn-block" ><span class="glyphicon glyphicon-remove"></span> Cancel</a>
                    </div> 
                      </div>
                    </div> 
                      </div>
                      
                      </form>





<?php
        }
    }
?>

                      
    </div>
</div>

               

               
<?php
include('../includes/scripts.php')
?>