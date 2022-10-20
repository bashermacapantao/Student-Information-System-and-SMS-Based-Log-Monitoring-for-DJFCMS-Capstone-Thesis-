<?php
// session_start();

include('../database/connectdb.php');
include './SMS/vendor/autoload.php';
use Twilio\Rest\Client;
        
      

    if (isset($_POST['text'])){

        $what = $_POST['what'];
        $pupilname = "";
        $guardian = "";
        $result = "";
        // //SMS
        $sid = 'AC0432038a83247747bd16a9862a04a311';
        $token = '6e182e85ebfc71d9790ed510b44dd53a';
    //     $sid = 'AC34ea46b33ce597659fc8ca6022d9b2ca';
    //   $token = '2df6100d6b494ed794b93e69bf3e1a74';
        $client = new Client($sid,$token);
        // $voice = new com("SAPI.SpVoice");
        
        date_default_timezone_set("Asia/Manila");
        

        $text = $_POST['text'];
        $date = date('Y-m-d');
        $time = date('h:i a');
        $messageSuccesIn = "Your attendance has succesfully added, thank you";
        $messageSuccesOut = "Your attendance has succesfully added, thank you";
        $messageError = "Your attendance has  NOT added, thank you";
        $messageRepeat = "You arleady sign";
        $messageScan = "Please, Scan you QR CODE, thank you";
        $messageNotYet = "Not Yet for Log out..";

       
        //LOGIN
        if($what == "LOGIN"){

        //CHECK IF QRCODE EXIST
        $queryValidate = "SELECT * FROM qrcode WHERE user_id='$text'";
        $sqlValidate = mysqli_query($connection,$queryValidate);
        if(mysqli_num_rows($sqlValidate) > 0){
            $row = mysqli_fetch_assoc($sqlValidate);
            $qrcode_id = $row['qrcode_id'];
            
            $query= "SELECT guardian_number,pupil_given_name,guardian FROM pupil WHERE qrcode_id = $qrcode_id";
            $query_run = mysqli_query($connection, $query);
            $row = mysqli_fetch_array($query_run);
            $parentnumber = $row['guardian_number'];
            $pupilname = $row['pupil_given_name'];
            $guardian = $row['guardian'];

            $query = "SELECT * FROM attendance WHERE qrcode_id= $qrcode_id AND logdate='$date' ";
            $query_run = mysqli_query($connection, $query);
            $row = mysqli_fetch_array($query_run);
          
            $time2 = date('h:i a');
           
            if($query_run ->num_rows > 0)
            {
                $status = $row['status'];
                $timeAmIn = $row['TimeInAM'];
                $timeAmOut = $row['TimeOutAM'];
                $timePmIn = $row['TimeInPM']; 
                $timePmOut = $row['TimeOutPM']; 

                if(empty($timeAmOut) || $timeAmOut == null){

                    $query = "UPDATE attendance SET TimeInAM = '$time' WHERE qrcode_id = $qrcode_id  AND logdate ='$date'";
                           
                            $query_run = mysqli_query($connection, $query);
                            $_SESSION['successIN'] =  'Your attendance has succesfully added, thank you';
                            $message = $client->messages->create(
                                $parentnumber, [
                                   
                                    'from' => '+18178092568',
                                      'body' =>  $pupilname.' Has Logged In at '.date('h:i a').'.' 
                                      ]
                             );
                           
                            $result = $pupilname." Logged In at ".date('h:i a')." text message was sent to ".$guardian;
                            
                          
                }
                //if( (!(empty($timeAmOut)) || $timeAmOut != null) && (empty($timePmOut) || $timePmOut != null)){
                    else{
                    $query = "UPDATE attendance SET TimeInPM = '$time' WHERE qrcode_id = $qrcode_id  AND logdate ='$date'";
                           
                            $query_run = mysqli_query($connection, $query);
                            $_SESSION['successIN'] =  'Your attendance has succesfully added, thank you';
                            $message = $client->messages->create(
                                $parentnumber, [
                                   
                                    'from' => '+18178092568',
                                      'body' =>  $pupilname.' Has Logged In at '.date('h:i a').'.' 
                                      ]
                             );
                           
                            $result = $pupilname." Logged In at ".date('h:i a')." text message was sent to ".$guardian;
                }

            }
            else
            {
                $query = "INSERT INTO attendance(qrcode_id, TimeInAM, logdate, status) VALUES($qrcode_id, '$time', '$date', '0')";
                if(mysqli_query($connection, $query) ===TRUE)
                {
                  // $voice ->speak($messageSuccesIn);
                  $_SESSION['successIN'] =  'Your attendance has succesfully added, thank you';
                    $message = $client->messages->create(
                        $parentnumber, [
                            //  'from' => '+18178092568',
                            'from' => '+18178092568',
                              'body' =>  $pupilname.' has arrived safely at '.date('h:i a').'.' 
                              ]
                     );
                 
                    // $message->sid;
                    $result = $pupilname." Logged in at ".date('h:i a')." text message was sent to ".$guardian;
                     
                 

                }
                else
                {
                    // $voice ->speak($messageError);
                     $_SESSION['successerror'] =  'Youre attendance is NOT added';
                     $result = " QR Code not Found";

                }
               
            }


        }

            else
            {
            
                // $voice ->speak($messageScan);
                $_SESSION['scan'] =  'Please Scan your QRcode';
                $result = "QR Code Not Found";
            } 

        }
        






        //< ------------------  LOGOUT ----------------- >
        else {

            $queryValidate = "SELECT * FROM qrcode WHERE user_id='$text'";
            $sqlValidate = mysqli_query($connection,$queryValidate);
            if(mysqli_num_rows($sqlValidate) > 0){
                $row = mysqli_fetch_assoc($sqlValidate);
                $qrcode_id = $row['qrcode_id'];
                
                $query= "SELECT guardian_number,pupil_given_name,guardian FROM pupil WHERE qrcode_id = $qrcode_id";
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_fetch_array($query_run);
                $parentnumber = $row['guardian_number'];
                $pupilname = $row['pupil_given_name'];
                $guardian = $row['guardian'];
    
                $query = "SELECT * FROM attendance WHERE qrcode_id= $qrcode_id AND logdate='$date' ";
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_fetch_array($query_run);
              
                $time2 = date('h:i a');
               
                if($query_run ->num_rows > 0)
                {
                    $status = $row['status'];
                    $timeAmIn = $row['TimeInAM'];
                    $timeAmOut = $row['TimeOutAM'];
                    $timePmIn = $row['TimeInPM']; 
                    $timePmOut = $row['TimeOutPM']; 
    
                    if(!empty($timePmIn) || $timePmIn != null){
    
                        $query = "UPDATE attendance SET TimeOutPM = '$time' WHERE qrcode_id = $qrcode_id  AND logdate ='$date'";
                               
                                $query_run = mysqli_query($connection, $query);
                                $_SESSION['successIN'] =  'Your attendance has succesfully added, thank you';
                                $message = $client->messages->create(
                                    $parentnumber, [
                                       
                                        'from' => '+18178092568',
                                          'body' =>  $pupilname.' Has Logged Out at '.date('h:i a').'.' 
                                          ]
                                 );
                               
                                $result = $pupilname." Logged Out at ".date('h:i a')." text message was sent to ".$guardian;
                                
                              
                    }
                   else{
                        
                        $query = "UPDATE attendance SET TimeOutAM = '$time' WHERE qrcode_id = $qrcode_id  AND logdate ='$date'";
                               
                                $query_run = mysqli_query($connection, $query);
                                $_SESSION['successIN'] =  'Your attendance has succesfully added, thank you';
                                $message = $client->messages->create(
                                    $parentnumber, [
                                       
                                        'from' => '+18178092568',
                                          'body' =>  $pupilname.' Has Logged Out at '.date('h:i a').'.' 
                                          ]
                                 );
                               
                                $result = $pupilname." Logged Out at ".date('h:i a')." text message was sent to ".$guardian;
                    }
    
                }

        }
    }

       
         echo $result;

       
    }
  


?>
  