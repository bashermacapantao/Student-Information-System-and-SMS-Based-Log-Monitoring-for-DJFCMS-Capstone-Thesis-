<?php

$con = mysqli_connect("localhost","root","","capstoneproject");
if(isset($_GET['section']) && isset($_GET['year']))
{
	$section = $_GET['section'];
	$year = $_GET['year'];


?>
<html>
    <head>
        <title>school id</title>
        <script language="javascript">
        function printpage()
            {
                window.print();
            }
        </script>
    </head>
   <style>
#bg {
 
 /* height: 100px; */
 margin:80px;
	/* float: left;  */
		
}
   #card{
	   float:left;
	   width:240px;
	   height:360px;
	   margin:5px;
	   border:1px solid black;
	   background-image: url("../css_files/img/Slide1.jpg");
	   background-repeat: no-repeat;
	   background-size: 240px 360px;
	   -webkit-print-color-adjust: exact;
   }
   #card2{
	   float:left;
	   width:240px;
	   height:360px;
	   margin:5px;
	   border:1px solid black;
	   background-image: url("../css_files/img/Slide2.jpg");
	   background-repeat: no-repeat;
	   background-size: 240px 360px;
	   -webkit-print-color-adjust: exact;
   }

   #c_left{
	   margin-top:5px;
	   margin-left:75px;
	   float:left;
	   width:80px;
	   height:120px;   
   }
   #c_left2{
	   margin-top:5px;
	   margin-left:60px;
	   float:left;
	   width:80px;
	   height:120px;   
   }
   #c_box{
	  width:100px; 
	  height:20px;
	  margin-top:15px;
	   margin-left:-5px;
	  /* padding:5px; */
	  font-size:12px;

   }
  #c_right{
	   
	   margin-left:140px;
	   width:250px;
	   height:100px;
	

   }
   td{
	   font-size:12px;
	   /* text-align: center; */
   }

   </style>
  
   
   
   
     <body>


	 <?php



	$get_costumers="SELECT * FROM enroll e inner join pupil p on e.pupil_id = p.pupil_id
	inner join schoolyear s on e.schoolyear_id = s.schoolyear_id
	inner join gradsec g on e.gradsec_id = g.gradsec_id
	inner join adviser a on g.adviser_id = a.adviser_id
	inner join qrcode q on p.qrcode_id = q.qrcode_id WHERE g.section = '$section' AND s.year= '$year'";

//  $i=0;
 $run_costumers=mysqli_query($con, $get_costumers);
}
 
 while ($row_costumers=mysqli_fetch_array($run_costumers)){
	 
 ?>
 <div id="bg">
 <div class="row">
	 <div class="col-md-12">
	 <div class="col-md-6">

	
	 <div id="card">
	 <div style="margin-top:95px;color:black;font-size:12px;text-align:left;margin-left:5px; ">LRN #: <?php echo $row_costumers['user_id']; ?></div>
	  <div id="c_left">
	  <img src="../pupil_images/<?php echo $row_costumers['pupil_images']; ?>"width="100px"height="100px"><br>
	 
	  </div>
	
	 
	    <div id="c_right"> 
	   
	  
	     </div>
	   <div style="margin-top:25px;color:black;font-size:20px;text-align:center;text-decoration: underline; "><?php echo $row_costumers['pupil_surname'].", ".$row_costumers['pupil_given_name']." ".$row_costumers['pupil_middle_name']; ?><b></div>
	   <div style="margin-top:1px;color:gray;font-size:10px;text-align: center;">Name <br></div>
	   <div style="margin-top:14px;color:blue;font-size:14px;text-align: center; "><?php echo $row_costumers['grade_level']." - ".$row_costumers['section']; ?><b></div>
	   <div style="margin-top:1px;color:gray;font-size:8px;text-align: center;">Grade & Section<br></div>
	 
	 </div>
	
	 </div>
	 <!-- ############################################################################################ -->



	 <div class="col-md-6">
		
	 <div id="card2">
	 <div style="margin-top:17px;color:white;font-size:22px;text-align:center; ">S.Y. : <?php echo $row_costumers['year']; ?></div>
	 <div style="margin-top:33px;color:black;font-size:12px;text-align:left;margin-left:5px; ">Guardian: <?php echo $row_costumers['guardian']; ?></div>
	 <div style="margin-top:0px;color:black;font-size:12px;text-align:left;margin-left:5px; ">Address: <?php echo $row_costumers['address']; ?></div>
	 <div style="margin-top:0px;color:black;font-size:12px;text-align:left;margin-left:5px; ">Contact: <?php echo $row_costumers['guardian_number']; ?></div>
	  <div id="c_left2">
	  <img src="../gbrqrcode/<?php echo $row_costumers['template']; ?>"width="120px"height="120px"><br>
	  <div id="c_box">
	
	  </div>
	  </div>
	    <div id="c_right">
	
	  
	     </div>
		 <div style="margin-top:38px;color:black;font-size:13px;text-align:center;"><?php echo $row_costumers['adviser_surname'].", ".$row_costumers['adviser_given_name']." ".$row_costumers['adviser_middle_name']; ?></div>
	   <div style="margin-top:1px;color:gray;font-size:9px;text-align: center;">Class Adviser <br></div>
	   <div style="margin-top:28px;color:black;font-size:13px;text-align:center;">CONCORDIA S. TALAID, Ed.,D.</div>
	   <div style="margin-top:1px;color:gray;font-size:10px;text-align: center;">Principal I <br></div>
	 </div>
	
	 </div>
</div>
 </div>
 </div>
	 
	<?php
 
	} ?>	
	 </body>

	 </html>