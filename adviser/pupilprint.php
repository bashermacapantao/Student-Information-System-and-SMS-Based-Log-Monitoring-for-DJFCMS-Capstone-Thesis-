 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">

        <div class="table-responsive">
        <br>  
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "capstoneproject");

                    $query = "SELECT * FROM enroll e inner join pupil p on e.pupil_id = p.pupil_id
                                inner join qrcode q on p.qrcode_id = q.qrcode_id
                                inner join schoolyear s on e.schoolyear_id = s.schoolyear_id
                                inner join gradsec g on e.gradsec_id = g.gradsec_id
                                inner join adviser a on g.adviser_id = a.adviser_id WHERE a.adviser_id = '".$_SESSION["user_log"]["adviser_id"]."' ";
                               
                    $query_run = mysqli_query($connection, $query);
                ?>   
                     <table id="datatableid" class="display table table-striped ">
                        <thead>
                             <tr class="danger">
                                 <th>LRN</th>
                                 <th>Pupil Name</th>
                                 <th>Grade & Section</th>
                                 <th>Pupil Gender</th>
                                 <th>Parent Name</th>
                                 <th>Relationship</th>
                                 <th>Parent Number</th>
                                 <th>Address</th>
                                 <th>QR code</th>
                                 <th>School Year</th>
                             </tr>
                         </thead>
                         <tbody>            
                <?php
                    if(mysqli_num_rows($query_run) > 0)
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                         
                            ?>
                             <tr class="info">
                             <td> <?php echo $row['user_id']; ?> </td>
                                 <td><?php echo $row['pupilname']; ?></td>
                                 <td><?php echo $row['gradelevel']; ?>
                                 <?php echo " - "?>
                                 <?php echo $row['section']; ?></td>
                                 <td> <?php echo $row['pupilgender']; ?></td>
                                 <td> <?php echo $row['parentname']; ?></td>
                                 <td> <?php echo $row['relationship']; ?></td>
                                 <td> <?php echo $row['parentnumber']; ?></td>
                                 <td> <?php echo $row['address']; ?></td>
                                 <td> 
                                 <?php echo '<img src="../gbrqrcode/'.$row['template'].' "width="50px;" height="50px;" alt = "Image">' ?>
                                 </td>
                                 <td><?php echo $row['year']; ?></td>        
                             </tr>
                            <?php
                        }
                    }
                    else
                    {
                        echo "No Record Found";
                    }
                ?>    
          <p>This is a large modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ################################################################# -->


     

 
