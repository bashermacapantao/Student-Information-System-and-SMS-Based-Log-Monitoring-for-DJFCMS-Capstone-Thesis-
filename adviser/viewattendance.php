<?php
include('../security.php');
include('includes/header_adviser.php');
include('includes/navbar.php');
include('includes/modal.php');


?>

<div class="container"> 
        <ol class="breadcrumb">
            <h1 class="glyphicon glyphicon-check active"> Attendance List</h1>
         </ol>  
          <p>
          <button type="button" class="btn btn-info btn-md"  ><span class="glyphicon glyphicon-print"></span> Print Parent List</button>    
        </p>
        
        
        <div class="table-responsive">  
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "capstoneproject");

                    $query = "SELECT * FROM attendance a inner join qrcode q on a.qrcode_id = q.qrcode_id inner join pupil p on p.qrcode_id = q.qrcode_id inner join enroll e on e.pupil_id = p.pupil_id inner join gradsec g on g.gradsec_id = e.gradsec_id inner join adviser d on d.adviser_id = g.adviser_id WHERE d.adviser_id = '".$_SESSION["user_log"]["adviser_id"]."' ";
                
                    $query_run = mysqli_query($connection, $query);
                ?>    
                     <table id="datatableid" class="table-bordered table table-hover">
                        <thead>
                             <tr class="active">
                                 
                                 <th>Pupil Name</th>
                                 <th>A.M. Time IN</th> 
                                 <th>A.M. Time OUT</th>
                                 <th>P.M. Time IN</th>
                                 <th>P.M. Time OUT</th>
                                 <th>LOGDATE</th>
                             
                             </tr>
                         </thead>
                         <tbody>  
                                 
                <?php
                    if(mysqli_num_rows($query_run) > 0)
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                         
                            ?>
                             <tr class="">
                                 <td><?php echo $row['pupil_name']; ?></td>
                                 <td><?php echo $row['TimeInAM']; ?></td>
                                 <td><?php echo $row['TimeOutAM']; ?></td>
                                 <td><?php echo $row['TimeInPM']; ?></td>
                                 <td><?php echo $row['TimeOutPM']; ?></td>
                                 <td><?php echo $row['logdate']; ?></td>
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
    <?php
include('includes/scripts.php')
?>
