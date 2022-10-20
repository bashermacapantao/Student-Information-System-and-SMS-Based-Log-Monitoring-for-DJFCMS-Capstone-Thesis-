<?php 
include('../database/connectdb.php');
include './SMS/vendor/autoload.php';
use Twilio\Rest\Client;


date_default_timezone_set("Asia/Manila");
$timestamp = date('H:i:s');

$sting = date('H:i:s', strtotime('09:29:00 am'));
$date = date('Y-m-d');
$sting2 = date('H:i:s', strtotime('09:34:00 pm'));

$time = date('h:i a');

 if(strtotime($timestamp) == strtotime($sting)) {
  // echo $timestamp.$sting;
   
      //SMS
      // $sid = 'AC0432038a83247747bd16a9862a04a311';
      // $token = '6e182e85ebfc71d9790ed510b44dd53a';
      $sid = 'AC34ea46b33ce597659fc8ca6022d9b2ca';
      $token = '2df6100d6b494ed794b93e69bf3e1a74';
      $client = new Client($sid,$token);
   
     $queryValidate ="SELECT DISTINCT pupil_name,guardian_number FROM pupil p INNER JOIN qrcode q ON p.qrcode_id = q.qrcode_id LEFT JOIN attendance a on a.qrcode_id = q.qrcode_id WHERE q.qrcode_id not in(select qrcode_id from attendance WHERE logdate='$date' )";
    
     if($sqlValidate=mysqli_query($connection,$queryValidate)){
    
      while($row = mysqli_fetch_assoc($sqlValidate)){

          $message = $client->messages->create(
            $row['guardian_number'], [
                'from' => '+18178092568',
                // 'from' => '+16463742394',
                  'body' =>  $row['pupil_name'].'Has not arrived or is Late.'
                  ]
        );
        $message->sid;
       
      }

    }
    
}

if(strtotime($timestamp) == strtotime($sting2)) {
  // echo $timestamp.$sting;
   
      //SMS
      $sid = 'AC0432038a83247747bd16a9862a04a311';
      $token = '6e182e85ebfc71d9790ed510b44dd53a';
      $client = new Client($sid,$token);
   
     $queryValidate ="SELECT DISTINCT pupil_name,guardian_number FROM pupil p INNER JOIN qrcode q ON p.qrcode_id = q.qrcode_id LEFT JOIN attendance a on a.qrcode_id = q.qrcode_id WHERE q.qrcode_id not in(select qrcode_id from attendance WHERE logdate='$date' )";
    
     if($sqlValidate=mysqli_query($connection,$queryValidate)){
    
      while($row = mysqli_fetch_assoc($sqlValidate)){

          $message = $client->messages->create(
            $row['guardian_number'], [
                'from' => '+18178092568',
                  'body' =>  $row['pupil_name'].'Has not Login in Afternoon or Late.'
                  ]
        );
        $message->sid;
       
      }

    }
    
}

 // CHECK IF ALA UNA THEN CHECK FOR NO LOG IN AND LOG OUT MORNING THEN REDTAG
        
 $alauna = date('H:i', strtotime('1:00 pm'));
 if(strtotime($time) == strtotime($alauna)){

     $queryValidate ="SELECT * FROM attendance WHERE (TimeInAM IS NULL OR TimeInAM = '') OR (TimeOutAM IS NULL OR TimeOutAM = '') AND logdate = '$date'";
     $sqlValidate = mysqli_query($connection,$queryValidate);
     if(mysqli_num_rows($sqlValidate) > 0){
         while($attendance = mysqli_fetch_assoc($sqlValidate)){
             $attendance_id = $attendance['attendance_id'];
             $login = $attendance['TimeInAM'];
             $logout = $attendance['TimeOutAM'];

             if($login == null || $login == ""){
                 $queryValidate = "UPDATE attendance SET TimeInAM = 'NO LOGIN' WHERE attendance_id = $attendance_id";
                 mysqli_query($connection,$queryValidate);
             }
             if($logout == null || $logout == ""){
                 $queryValidate = "UPDATE attendance SET TimeOutAM = 'NO LOGOUT' WHERE attendance_id = $attendance_id";
                 mysqli_query($connection,$queryValidate);

              }
         }

     }


  

 }

 // ALAS SAYES

 $alasayes = date('H:i', strtotime('6:00 pm'));
 if(strtotime($time) == strtotime($alasayes)){

     $queryValidate ="SELECT * FROM attendance WHERE logdate = '$date' AND (TimeInPM IS NULL OR TimeInPM = '') OR (TimeOutPM IS NULL OR TimeOutPM = '') ";
     $sqlValidate = mysqli_query($connection,$queryValidate);
     if(mysqli_num_rows($sqlValidate) > 0){
         while($attendance = mysqli_fetch_assoc($sqlValidate)){
             $attendance_id = $attendance['attendance_id'];
             $login = $attendance['TimeInPM'];
             $logout = $attendance['TimeOutPM'];

             if($login == null || $login == ""){
                 $queryValidate = "UPDATE attendance SET TimeInPM = 'NO LOGIN' WHERE attendance_id = $attendance_id";
                 mysqli_query($connection,$queryValidate);
             }
             if($logout == null || $logout == ""){
                 $queryValidate = "UPDATE attendance SET TimeOutPM = 'NO LOGOUT' WHERE attendance_id = $attendance_id";
                 mysqli_query($connection,$queryValidate);

              }
         }

     }

 }
?>
