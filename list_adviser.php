<?php
include('security.php');
include('includes/header_admin.php');
include('includes/navbar.php');
?>
<style>
  .nav-justified>li>a {
     margin-top: 12px;
    text-align: center;
  }
  a {
    /* color: #dfd3d3; */
    color: #221f1f;
    text-decoration: none;
    font-size: 18px;
  }
  .nav>li>a {
    position: relative;
    display: block;
    padding: 10px 15px;
}

.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: middle;
    font-size: 16px;
    border-top: 1px solid #ddd;
}
</style>
    <div class="container"> 
        <ol class="breadcrumb">
            <h1 class="glyphicon glyphicon-list-alt active"> Adviser List <br></h1>
            
         </ol>  
     
        
     <ul class="nav nav-tabs nav-justified">
        <li class=""><a href="#home">Home</a></li>
        <li><a href="#gradeI">Grade - I</a></li>
        <li><a href="#gradeII">Grade - II</a></li>
        <li><a href="#gradeIII">Grade - III</a></li>
        <li><a href="#gradeIV">Grade - IV</a></li>
        <li><a href="#gradeV">Grade - V</a></li>
        <li><a href="#gradeVI">Grade - VI</a></li>
      </ul> 


     

  

  <div class="tab-content">
    <div id="home" class="tab-pane  in active">
      <h2> <b>Grade & Section List</b></h2>
    <div class="container">  
        <div class="table-justified table-responsive">  
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "capstoneproject");

                    $query = "SELECT * FROM gradsec g inner join adviser a on g.adviser_id = a.adviser_id ORDER BY g.grade_level ASC";
                    $query_run = mysqli_query($connection, $query);
                ?>    
                     <table id="datatableid" class="table-bordered table table-hover" s>
                        <thead>
                             <tr class="active">
                                 <th>Grade</th>
                                 <th>Section</th>
                                 <th>Adviser Name</th>
                                 <th>Images</th>
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
                              <td><?php echo $row['adviser_name']; ?></td> 
                                 <td> 
                                 <?php echo '<img src="adviser/upload/'.$row['images'].' "width="100px;" height="100px;" alt = "image">' ?>
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
                 </div>     
                 </div>

    </div>
    <!-- ########################################### -->


    <div id="gradeI" class="tab-pane ">
    <h2> <b>Grade - I | Adviser List</b></h2>
    <br>

      <div class="table-justified table-responsive">  
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "capstoneproject");

                    $query = "SELECT * FROM gradsec g inner join adviser a on g.adviser_id = a.adviser_id WHERE g.grade_level = 'Grade - I' ";
                    $query_run = mysqli_query($connection, $query);
                ?>    
                     <table id="datatableid2" class="table-bordered table table-hover" s>
                        <thead>
                             <tr class="active">
                                 <th>Rank</th>
                                <th>Adviser Name</th>
                                <th>Gender</th>
                                <!-- <th>Age</th> -->
                                <th>Birthdate</th>
                                <th>Phone Number</th>
                                <th>Email address</th>
                                <th>Current Address</th>
                                 <th>Grade & Section</th>
                                 <th>Images</th>
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
                             <td><?php echo $row['rank']; ?></td> 
                             <td><?php echo $row['adviser_name']; ?></td> 
                             <td><?php echo $row['gender']; ?></td>
                             <td><?php echo $row['birthday']; ?></td>
                             <td><?php echo $row['phone_number']; ?></td>
                             <td><?php echo $row['email_address']; ?></td>
                             <td><?php echo $row['address']; ?></td>
                              <td><?php echo $row['grade_level']." ".$row['section']; ?></td>
                             
                              
                                 <td> 
                                 <?php echo '<img src="adviser/upload/'.$row['images'].' "width="100px;" height="100px;" alt = "Image">' ?>
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
                 </div>   
     
      

    </div>
    <div id="gradeII" class="tab-pane">
    <h2> <b>Grade - II | Adviser List</b></h2>
    <br>

      <div class="table-justified table-responsive">  
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "capstoneproject");

                    $query = "SELECT * FROM gradsec g inner join adviser a on g.adviser_id = a.adviser_id WHERE g.grade_level = 'Grade - II'";
                    $query_run = mysqli_query($connection, $query);
                ?>    
                     <table id="datatableid3" class="table-bordered table table-hover" s>
                        <thead>
                             <tr class="active">
                                 <th>Rank</th>
                                <th>Adviser Name</th>
                                <th>Gender</th>
                                <!-- <th>Age</th> -->
                                <th>Birthdate</th>
                                <th>Phone Number</th>
                                <th>Email address</th>
                                <th>Current Address</th>
                                 <th>Grade & Section</th>
                                 <th>Images</th>
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
                             <td><?php echo $row['rank']; ?></td> 
                             <td><?php echo $row['adviser_name']; ?></td> 
                             <td><?php echo $row['gender']; ?></td>
                             <td><?php echo $row['birthday']; ?></td>
                             <td><?php echo $row['phone_number']; ?></td>
                             <td><?php echo $row['email_address']; ?></td>
                             <td><?php echo $row['address']; ?></td>
                              <td><?php echo $row['grade_level']." ".$row['section']; ?></td>
                             
                              
                                 <td> 
                                 <?php echo '<img src="adviser/upload/'.$row['images'].' "width="100px;" height="100px;" alt = "Image">' ?>
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
                 </div> 
    


    </div> 
    <div id="gradeIII" class="tab-pane ">
    <h2> <b>Grade - III | Adviser List</b></h2>
    <br>

      <div class="table-justified table-responsive">  
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "capstoneproject");

                    $query = "SELECT * FROM gradsec g inner join adviser a on g.adviser_id = a.adviser_id WHERE g.grade_level = 'Grade - III'";
                    $query_run = mysqli_query($connection, $query);
                ?>    
                     <table id="datatableid4" class="table-bordered table table-hover" s>
                        <thead>
                             <tr class="active">
                                 <th>Rank</th>
                                <th>Adviser Name</th>
                                <th>Gender</th>
                                <!-- <th>Age</th> -->
                                <th>Birthdate</th>
                                <th>Phone Number</th>
                                <th>Email address</th>
                                <th>Current Address</th>
                                 <th>Grade & Section</th>
                                 <th>Images</th>
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
                             <td><?php echo $row['rank']; ?></td> 
                             <td><?php echo $row['adviser_name']; ?></td> 
                             <td><?php echo $row['gender']; ?></td>
                             <td><?php echo $row['birthday']; ?></td>
                             <td><?php echo $row['phone_number']; ?></td>
                             <td><?php echo $row['email_address']; ?></td>
                             <td><?php echo $row['address']; ?></td>
                              <td><?php echo $row['grade_level']." ".$row['section']; ?></td>
                             
                              
                                 <td> 
                                 <?php echo '<img src="adviser/upload/'.$row['images'].' "width="100px;" height="100px;" alt = "Image">' ?>
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
                 </div> 


    </div> 
    <div id="gradeIV" class="tab-pane ">
    <h2> <b>Grade - IV | Adviser List</b></h2>
    <br>

      <div class="table-justified table-responsive">  
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "capstoneproject");

                    $query = "SELECT * FROM gradsec g inner join adviser a on g.adviser_id = a.adviser_id WHERE g.grade_level = 'Grade - IV'";
                    $query_run = mysqli_query($connection, $query);
                ?>    
                     <table id="datatableid5" class="table-bordered table table-hover" s>
                        <thead>
                             <tr class="active">
                                 <th>Rank</th>
                                <th>Adviser Name</th>
                                <th>Gender</th>
                                <!-- <th>Age</th> -->
                                <th>Birthdate</th>
                                <th>Phone Number</th>
                                <th>Email address</th>
                                <th>Current Address</th>
                                 <th>Grade & Section</th>
                                 <th>Images</th>
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
                             <td><?php echo $row['rank']; ?></td> 
                             <td><?php echo $row['adviser_name']; ?></td> 
                             <td><?php echo $row['gender']; ?></td>
                             <td><?php echo $row['birthday']; ?></td>
                             <td><?php echo $row['phone_number']; ?></td>
                             <td><?php echo $row['email_address']; ?></td>
                             <td><?php echo $row['address']; ?></td>
                              <td><?php echo $row['grade_level']." ".$row['section']; ?></td>
                             
                              
                                 <td> 
                                 <?php echo '<img src="adviser/upload/'.$row['images'].' "width="100px;" height="100px;" alt = "Image">' ?>
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
                 </div> 


    </div>
    <div id="gradeV" class="tab-pane">
    <h2> <b>Grade - V | Adviser List</b></h2>
    <br>

      <div class="table-justified table-responsive">  
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "capstoneproject");

                    $query = "SELECT * FROM gradsec g inner join adviser a on g.adviser_id = a.adviser_id WHERE g.grade_level = 'Grade - V'";
                    $query_run = mysqli_query($connection, $query);
                ?>    
                     <table id="datatableid6" class="table-bordered table table-hover" s>
                        <thead>
                             <tr class="active">
                                 <th>Rank</th>
                                <th>Adviser Name</th>
                                <th>Gender</th>
                                <!-- <th>Age</th> -->
                                <th>Birthdate</th>
                                <th>Phone Number</th>
                                <th>Email address</th>
                                <th>Current Address</th>
                                 <th>Grade & Section</th>
                                 <th>Images</th>
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
                             <td><?php echo $row['rank']; ?></td> 
                             <td><?php echo $row['adviser_name']; ?></td> 
                             <td><?php echo $row['gender']; ?></td>
                             <td><?php echo $row['birthday']; ?></td>
                             <td><?php echo $row['phone_number']; ?></td>
                             <td><?php echo $row['email_address']; ?></td>
                             <td><?php echo $row['address']; ?></td>
                              <td><?php echo $row['grade_level']." ".$row['section']; ?></td>
                             
                             
                              
                                 <td> 
                                 <?php echo '<img src="adviser/upload/'.$row['images'].' "width="100px;" height="100px;" alt = "Image">' ?>
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
                 </div> 


    </div>
    <div id="gradeVI" class="tab-pane ">
    <h2> <b>Grade - VI | Adviser List</b></h2>
    <br>

      <div class="table-justified table-responsive">  
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "capstoneproject");

                    $query = "SELECT * FROM gradsec g inner join adviser a on g.adviser_id = a.adviser_id WHERE g.grade_level = 'Grade - VI'";
                    $query_run = mysqli_query($connection, $query);
                ?>    
                     <table id="datatableid7" class="table-bordered table table-hover">
                        <thead>
                             <tr class="active">
                                 <th>Rank</th>
                                <th>Adviser Name</th>
                                <th>Gender</th>
                                <!-- <th>Age</th> -->
                                <th>Birthdate</th>
                                <th>Phone Number</th>
                                <th>Email address</th>
                                <th>Current Address</th>
                                 <th>Grade & Section</th>
                                 <th>Images</th>
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
                             <td><?php echo $row['rank']; ?></td> 
                             <td><?php echo $row['adviser_name']; ?></td> 
                             <td><?php echo $row['gender']; ?></td>
                             <td><?php echo $row['birthday']; ?></td>
                             <td><?php echo $row['phone_number']; ?></td>
                             <td><?php echo $row['email_address']; ?></td>
                             <td><?php echo $row['address']; ?></td>
                              <td><?php echo $row['grade_level']." ".$row['section']; ?></td>
                             
                             
                              
                                 <td> 
                                 <?php echo '<img src="adviser/upload/'.$row['images'].' "width="100px;" height="100px;" alt = "Image">' ?>
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
                 </div> 


    </div>
  </div>



<script>
$(document).ready(function(){
  $(".nav-tabs a").click(function(){
    $(this).tab('show');
  });
});
// $(document).ready(function(){
//   $("#myInput").on("keyup", function() {
//     var value = $(this).val().toLowerCase();
//     $("#myList li").filter(function() {
//       $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
//     });
//   });
// });

// $(document).ready(function(){
//   $("#myInput").on("keyup",function() {
//     var value = $(this).val().toLowerCase();
//     $("#myTable tr").filter(function() {
//       $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
//     });
//   });
// });
// $(document).ready(function(){
//   $("#myselect").on("keyup", function() {
//     var value = $(this).val().toLowerCase();
//     $(".dropdown-menu li").filter(function() {
//       $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
//     });
//   });
// });

// $(document).ready(function(){
//   $("#fetchval").on('change',function(){
//     var value = $(this).val();
//     // alert(value);

//     $.ajax({
//       url:"fetch.php",
//       type:"POST",
//       data: 'request=' + value;
//       beforeSend:function(){
//         $(".container").html("<span>Working...</span>");
//       },
//       success:function(){
//         $(".container").html(data);
//       }

//     });
//   })
// });
</script>







       

    
<?php
include('includes/scripts.php');
?>





 
