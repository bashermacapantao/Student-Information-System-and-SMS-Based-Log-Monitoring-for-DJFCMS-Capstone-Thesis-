<?php

$connection = mysqli_connect("localhost", "root", "", "capstoneproject");


if(isset($_GET['section']) && isset($_GET['year']))
if ((isset($_GET['section']) && isset($_GET['year'])) && (isset($_GET['from']) && isset($_GET['to']))) {
    
    $section = $_GET['section'];
    $year = $_GET['year'];
    $To = $_GET['to'];
    $From = $_GET['from'];



// $query = "SELECT * FROM attendance a inner join qrcode q on a.qrcode_id = q.qrcode_id inner join pupil p on p.qrcode_id = q.qrcode_id inner join enroll e on e.pupil_id = p.pupil_id inner join gradsec g on g.gradsec_id = e.gradsec_id inner join adviser d on d.adviser_id = g.adviser_id INNER JOIN schoolyear s ON e.schoolyear_id = s.schoolyear_id";
$query = "SELECT * FROM attendance a inner join qrcode q on a.qrcode_id = q.qrcode_id inner join pupil p on p.qrcode_id = q.qrcode_id inner join enroll e on e.pupil_id = p.pupil_id inner join gradsec g on g.gradsec_id = e.gradsec_id inner join adviser d on d.adviser_id = g.adviser_id INNER JOIN schoolyear s ON e.schoolyear_id = s.schoolyear_id WHERE (g.section = '$section' AND s.year ='$year') AND  (a.logdate BETWEEN '$From' AND '$To') ORDER BY a.logdate ASC";
 
// --  WHERE g.grade_level = '$grade
$query_run = mysqli_query($connection, $query);
  
}	 
 
?>

<html>
    <head>
    
        <title>Attendance | Report</title>
       
        <!-- <link rel="stylesheet" href="../dependecies/bootstrap/3.3.6/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="dependecies/bootstrap/css/4.4.1/bootstrap.min.css">
      

        <!-- <script src="../dependecies/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
        <script language="javascript">
        function printpage()
            {
                window.print();
            }
        </script>
    </head>
   <!-- <style>
       @media(max-width: 320px) {
           img{
                margin: 0;
            }
        }
        th{
            font-size: 25px;
        } -->

   </style>
   
   
   
   
<body >
<div 
 style="  border:1px solid black;">
            <div class="container" style="padding-top: 25px; padding-bottom: 25px;">
            <div class="row">
                <div class="col-sm-3"> <img  style="float:left; margin-left:140px" id="logo" src="../css_files/img/logo.png" s height="90" width="90"alt=""></div>
                <div class="col-sm-6 text-center">
                    <h4>
                        <div> Republic of the Philippines </div>  
                        <div><b>Department of Education</b></div> 
                        <div> Region X - Northern Mindanao </div>
                         Division of Iligan CIty
                   </h4>
                </div>
                <div class="col-sm-3"><img id = "deped" src="../css_files//img/deped.jpg" height="90" width="90"  alt="" ></div>
                </div>
            </div>
          

  

	  <div class="table-responsive" >  
                
                     <table class="display table table-striped ">
                        <thead >
                             <tr class="">
                             		<th>Name</th>
                                 <th>Grade & Section</th>
                                 <th>Time-in A.M.</th>
                                 <th>Time-out A.M.</th>
                                 <th>Time-in P.M.</th>
                                 <th>Time-out P.M.</th>
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
                                            <tr class="" >
                                            <td> <?php echo $row['pupil_surname'].", ".$row['pupil_given_name']." ".$row['pupil_middle_name']; ?> </td>
                                                <td><?php echo $row['grade_level']." - ".$row['section']; ?>
                                                </td>	
                                                <td>
                                                <?php
                                                    $login = $row['TimeInAM']; 
                                                    if( $login == 'NO LOGIN'){
                                                        echo  "<span style='color:red;'>$login </span>";
                                                    }
                                                    else
                                                    echo $login;
                                                ?>
                                                </td>
                                                <td>
                                                <?php
                                                    $logout = $row['TimeOutAM']; 
                                                    if( $logout == 'NO LOGOUT'){
                                                        echo  "<span style='color:red;'>$logout </span>";
                                                    }
                                                    else
                                                    echo $logout;
                                                ?>
                                                </td>
                                                <td>
                                                <?php
                                                    $login = $row['TimeInPM']; 
                                                    if( $login == 'NO LOGIN'){
                                                        echo  "<span style='color:red;'>$login </span>";
                                                    }
                                                    else
                                                    echo $login;
                                                ?>
                                                </td>
                                                <td>
                                                <?php
                                                    $logout = $row['TimeOutPM']; 
                                                    if( $logout == 'NO LOGOUT'){
                                                        echo  "<span style='color:red;'>$logout </span>";
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
                                                echo "No Record Found";
                                            }
                                        ?>            
                            
                         </tbody>     
                     </table>
                    
                 </div>       
            </div>     
	
	




	 	
	 </body>
   </head>
</html   