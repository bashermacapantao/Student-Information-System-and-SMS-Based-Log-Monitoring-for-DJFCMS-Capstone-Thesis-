
<div id="section4"> 
        <div class="panel-group">
             <div class="panel panel-default">
                 <div class="panel-heading main-color-bg" >
                         <h3 class="panel-title">Latest Logs | Attendance check-in and check-out</h3>
                     </div>
                     <div class="panel-body">
                      <!-- <form action="code.php" method="POST"> -->
                         <!-- <p>
                            <a href="adviserlist.php"> <button  type="button" class="btn-right btn-info btn-sm"  id="myBtn"> More Details</button> </a>
                        </p> -->
                <!-- </form> -->
           
          
                <div class="table-responsive">  
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "capstoneproject");

                    // $attendance_id = $row['attendance_id'];
                   
                    $query = "SELECT * FROM attendance a inner join qrcode q on a.qrcode_id = q.qrcode_id inner join pupil p on p.qrcode_id = q.qrcode_id inner join enroll e on e.pupil_id = p.pupil_id inner join gradsec g on g.gradsec_id = e.gradsec_id inner join adviser d on d.adviser_id = g.adviser_id INNER JOIN schoolyear s ON e.schoolyear_id = s.schoolyear_id  WHERE DATE(logdate)=CURDATE()";
                    $query_run = mysqli_query($connection, $query);
                ?>    
                     <table id="datatableid4" class="table table-bordered table-hover">
                        <thead>
                             <tr class="active">
                                 <th>Name</th>
                                 <th>Grade & Section</th>
                                 <th>A.M. Time-in </th>
                                 <th>A.M. Time-out</th>
                                 <th>P.M. Time-in</th>
                                 <th>P.M. Time-out</th>
                                 <th>Logdate</th>
                                 <!-- <th>Shool Year</th> -->
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
                             <td> <?php echo $row['pupil_surname'].", ".$row['pupil_given_name']." ".$row['pupil_middle_name']; ?> </td>
                                 <td><?php echo $row['grade_level']." - ".$row['section']; ?></td>
                                 <td>
                                     <?php
                                 $login = $row['TimeInAM']; 
                                 if( $login == 'NO LOGIN'){
                                    echo  "<span class='label label-danger'>$login </span>";
                                }
                                else
                                echo $login;
                                  ?>
                                 </td>
                                 <td>
                                     <?php
                                 $logout = $row['TimeOutAM']; 
                                 if( $logout == 'NO LOGOUT'){
                                    echo  "<span class='label label-danger'>$logout </span>";
                                }
                                else
                                echo $logout;
                                  ?>
                                 </td>
                                 <td>
                                     <?php
                                 $login = $row['TimeInPM']; 
                                 if( $login == 'NO LOGIN'){
                                    echo  "<span class='label label-danger'>$login </span>";
                                }
                                else
                                echo $login;
                                  ?>
                                 </td>
                                 <td>
                                     <?php
                                 $logout = $row['TimeOutPM']; 
                                 if( $logout == 'NO LOGOUT'){
                                    echo  "<span class='label label-danger'>$logout </span>";
                                }
                                else
                                echo $logout;
                                  ?>
                                 </td>
                                 <td><?php echo $row['logdate']; ?></td>
                                
                            <?php
                        }
                    }
                    else
                    {
                        echo "No Reco rd Found";
                    }
                ?>            
                            
                         </tbody>     
                     </table>
                    
                 </div>            
             </div>
         </div>
     </div>  
 </div>