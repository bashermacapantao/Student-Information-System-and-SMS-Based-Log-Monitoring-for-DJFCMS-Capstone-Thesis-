<?php
    session_start();    
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ATTENDANCE</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  
        <link rel="stylesheet" href="../dependecies/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel= "stylesheet" type="text/css" href= "../css_files/qrcode.css">


        

        <script src="../dependecies/jquery/1.12.0/jquery.min.js"></script>
        <script src="dependecies/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
        <script src="../dependecies/sweetalert.min.js"></script>
        <script src="../dependecies/datables/css/1.10.24/dataTables.bootstrap4.min.css"></script>
        <script src="../dependecies/datables/css/1.10.24/jquery-3.5.1.js"></script>
        <script src="../dependecies/datables/js/1.10.24/dataTables.bootstrap4.min.js"></script>
        <script src="../dependecies/datables/js/1.10.24/jquery.dataTables4.min.js"></script>

        <link rel="stylesheet" href="../dependecies/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="../dependecies/QRcode/adapter.min.js"></script>
        <script src="../dependecies/QRcode/instascan.min.js"></script>
        <script src="../dependecies/QRcode/vue.min.js"></script>

        <script src="../dependecies/sweetalert.min.js"></script>




        <style>


            /* @font-face {
            font-family: 'DIGITAL';
            src: url('https://cssdeck.com/uploads/resources/fonts/digii/DS-DIGII.TTF');
             src: url('../DS-DIGII.TTF'); 

            }

            html {
            height: 100%;
            background: radial-gradient(#000, #555);
            }

            .digital-clock {
            margin: auto;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 200px;
            height: 60px;
            color: #ffffff;
            border: 2px solid #999;
            border-radius: 4px;
            text-align: center;
            font: 50px/60px 'DIGITAL', Helvetica;
            background: linear-gradient(90deg, #000, #555);
            } */
            .glyphicon{
                font-size: 85px;
                color: white;
            }
            .label{
                color: white !important;
            }
        </style>
    </head>
<body  data-spy="scroll" data-target="#myScrollspy" data-offset="15">




<!-- <div class="container-fluid" style="background-color:#2196F3;color:#fff;height:120px;"> -->
   
   <!-- <section id="breadcrumb"> -->
   <hr>
   <ol class="">
    
               <h1 class="text-center"  ><span class="glyphicon glyphicon-record active"> QRcode Scanning</span> </h1>
            </ol> 
            <hr>
       <div class="container">
               <!-- <div id="breadcrumb"class="user_name text-right">
                       <p class="glyphicon glyphicon-user"> </p>
                   </div>  --><br>
               
       <!-- </div> -->
   <!-- </section>  -->
<!-- </div>   -->
<br>


             
   <div class="container">
 
       <!-- <div class="row"> -->
       <div class="col-md-6">
      
                    <video id="preview" width="100%"></video>
                    <br>
                    <?php
                        if(isset($_SESSION['successerror'])){
                        echo " <div class='alert alert-danger'> <h4>ERROR!</h4>".$_SESSION['successerror']." </div> "; }
                        if(isset($_SESSION['successNotYet'])){
                        echo " <div class='alert alert-danger'> <h4>TIME-OUT!</h4>".$_SESSION['successNotYet']." </div> "; }
                        if(isset($_SESSION['repeat'])){
                        echo " <div class='alert alert-danger'> <h4>REPEAT!</h4>".$_SESSION['repeat']." </div> "; }
                        if(isset($_SESSION['successIN'])){
                        echo " <div class='alert alert-danger'> <h4>SUCCESS!</h4>".$_SESSION['successIN']." </div> "; }
                    ?>
                   
                </div>
                <div class="col-md-6">
                    
                        <!-- <label>SCAN QR CODE</label>
                         -->
                        <input type="text" name="text" id="text"  placeholder="Scan QRcode" class="form-control input-lg">
                       
                        
                  
       
       
                    
                    <div  id="timestamp"></div>
                    <!-- <div class="digital-clock">00:00:00</div> -->
                    <div style="margin-left: 130px; margin-top: 25px;">
                    <canvas   id="canvas" width="250" height="250"
                      >
                        </canvas>
                   
                        </div>
                   
                    <!-- <h2 type="text" name="text" id="text" readonyy="" placeholder="Scan QRcode" class="form-control"></h2> 
                    <a type="text" name="text" id="text" readonyy="" placeholder="Scan QRcode" class="form-control"> </a> -->
                </div>

  
              
            <div class="col-sm-12">
     
                <!-- <a href="viewadviser.html" ><button  type="button" class="btn btn-info btn-lg" id=""><span class="glyphicon glyphicon-warning-sign"> Add Pupil  to Enrollment </span></button></a> -->
                 
                <div class="panel-body">
                <div class="table-responsive">  
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "capstoneproject");

                    $query = "SELECT * FROM attendance a inner join qrcode q on a.qrcode_id = q.qrcode_id inner join pupil p on p.qrcode_id = q.qrcode_id WHERE DATE(logdate)=CURDATE()";
                    // $query = "SELECT * FROM attendance  WHERE DATE(logdate)=CURDATE()";
                    $query_run = mysqli_query($connection, $query);
                ?>    
                     <!-- <table id="" class="display table table-striped ">
                        <thead>
                             <tr class="danger">
                                 
                                 <th>Pupil Name</th>
                                 <th>A.M. Time IN</th> 
                                 <th>A.M. Time OUT</th>
                                 <th>P.M. Time IN</th>
                                 <th>P.M. Time OUT</th>
                                 <th>LOGDATE</th>
                                 <th>STATUS</th>
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
                                 <td><?php echo $row['pupilname']; ?></td>
                                 <td><?php echo $row['TimeInAM']; ?></td>
                                 <td><?php echo $row['TimeOutAM']; ?></td>
                                 <td><?php echo $row['TimeInPM']; ?></td>
                                 <td><?php echo $row['TimeOutPM']; ?></td>
                                 <td><?php echo $row['logdate']; ?></td>
                                 <td><?php echo $row['status']; ?></td>
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
                     </table> -->
                     <!-- <p><button href="viewadviser.html" type="button" class="btn-right btn-info btn-sm"  id="myBtn"> Print GRADE & SECTION</button></p> -->
                 </div>            
             </div>
         



            <!-- </div> -->
       </div>  
       
<!-- <h2 style="color:#fff;text-align: center;"><span id="tick2" class="pull-rigth" >
      </span>&nbsp;|  ?>
<h2> -->
   </div>    

  

   

   <script>
// Uncomment to connect the web cam
$(document).ready(function() {
   $("#text").keyup(function(event) {

        if (event.keyCode === 13) {
            var c = $('#text').val();
            
            $.ajax({
                            url: "insert.php",
                            type: "post",
                            data: { text: c, what: 'LOGIN'},
                            success:  function (data) {
                            
                                const arr = data.split("/");
                                swal({
                                    title: 'ATTENDANCE',
                                    text: data,
                                    button: 'CLOSE',
                                });
                            }
                    
                });
        }
    });
});

let scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
           Instascan.Camera.getCameras().then(function(cameras){
               if(cameras.length > 0 ){
                   scanner.start(cameras[0]);
               } else{
                   alert('No cameras found');
               }

           }).catch(function(e) {
               console.error(e);
           });

        //    scanner.addListener('scan',function(c){
        //        document.getElementById('text').value=c;
        //           document.forms[0].submit();
        //    });
           scanner.addListener('scan',function(c){
            document.getElementById('text').value=c;
                $.ajax({
                        url: "insert.php",
                        type: "post",
                        data: { text: c, what: 'LOGIN'},
                        success:  function (data) {
                        
                            const arr = data.split("/");
                            swal({
                                title: 'ATTENDANCE',
                                text: data,
                                button: 'CLOSE',
                            });
                        }
                
            });
        });


        
                
           
           
    $(document).ready(function() {
        
        setInterval(timestamp, 1000);
       
    $('#datatableid').DataTable({
    //    "pagingType": "full_numbers",
        "lengthMenu": [
            [5, 10, 20, -1],
            [5, 10, 20, "ALL"]
        ],
        responsive: true,
        language:{
            search: "_INPUT_",
            searchPlaceholder: "Search records",
        }
    });
});

function timestamp() {
    $.ajax({
        url: './oras.php',
        success: function(data) {
            $('#timestamp').html(data);
        },
    });
}

$(document).ready(function() {
  clockUpdate();
  setInterval(clockUpdate, 1000);
})

function clockUpdate() {
  var date = new Date();
  $('.digital-clock').css({'color': '#fff', 'text-shadow': '0 0 6px #ff0'});
  function addZero(x) {
    if (x < 10) {
      return x = '0' + x;
    } else {
      return x;
    }
  }

  function twelveHour(x) {
    if (x > 12) {
      return x = x - 12;
    } else if (x == 0) {
      return x = 12;
    } else {
      return x;
    }
  }

  var h = addZero(twelveHour(date.getHours()));
  var m = addZero(date.getMinutes());
  var s = addZero(date.getSeconds());

  $('.digital-clock').text(h + ':' + m + ':' + s)
}



function show2(){
    $("#StudentID").focus();
    if (!document.all&&!document.getElementById)
    return
    thelement=document.getElementById? document.getElementById("tick2"): document.all.tick2
    var Digital=new Date()
    var hours=Digital.getHours()
    var minutes=Digital.getMinutes()
    var seconds=Digital.getSeconds()
    var dn="PM"
    if (hours<12)
    dn="AM"
    if (hours>12)
    hours=hours-12
    if (hours==0)
    hours=12
    if (minutes<=9)
    minutes="0"+minutes
    if (seconds<=9)
    seconds="0"+seconds
    var ctime=hours+":"+minutes+":"+seconds+" "+dn
    thelement.innerHTML=ctime
    setTimeout("show2()",1000)
    }
  window.onload=show2
//    </script>
<script>



var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.90
setInterval(drawClock, 1000);

function drawClock() {
  drawFace(ctx, radius);
  drawNumbers(ctx, radius);
  drawTime(ctx, radius);
}

function drawFace(ctx, radius) {
  var grad;
  ctx.beginPath();
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = 'white';
  ctx.fill();
  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, '#333');
  grad.addColorStop(0.5, 'white');
  grad.addColorStop(1, '#333');
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = '#333';
  ctx.fill();
}

function drawNumbers(ctx, radius) {
  var ang;
  var num;
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
  for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}

function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}
</script>

<?php
            // if(!empty(isset($_SESSION['pupil_name'])) && !empty(isset($_SESSION['guardian'])))
            // {
            //     $pupilname = $_SESSION['pupil_name'];
            //     $guardian = $_SESSION['guardian'];
            //     $time2 = date('h:i a');
            //     echo "
            //     swal({
            //         title: 'SUCCESS,
            //         text: '$pupilname logged in at $time2
            //         A text message was sent to $guardian',
            //         button: 'CLOSE',
            //     });";
                

            //     unset($_SESSION['message']);
            // }
          
         ?>

</body>
</html>