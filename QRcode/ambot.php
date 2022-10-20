// if ($status == 0){
                //    $sting = date('H:i', strtotime('8:30 am'));
                //    $sting2 = date('H:i', strtotime('12:45 pm'));
                //    $sting3 = date('H:i', strtotime('2:30 pm'));
                //     if(strtotime($time2) < strtotime($sting))
                    
                //     {
                //         // $voice ->speak($messageRepeat);
                //         //echo "<script>console.log('Already sign in')</script>";
                //         // header('Location: QRcode_Attendance.php?');
                //         $_SESSION['repeat'] =  'You Already sign';
                //         $result= "You Are already Signed In";
                      
                      
                        
                //     }
                    
                //     else if(strtotime($time2) >= strtotime($sting2))
                //     {
                //         $query = "UPDATE attendance SET TimeInPM = '$time', STATUS = 2 WHERE qrcode_id=$qrcode_id  AND logdate ='$date'";
                //         $query_run = mysqli_query($connection, $query);
                //         $_SESSION['successIN'] =  'Your attendance has succesfully added, thank you';
                //         $message = $client->messages->create(
                //             $parentnumber, [
                //                 //  'from' => '+18178092568',
                //                 'from' => '+18178092568',
                //                   'body' =>  $pupilname.' has Log-In, Afternoon .'
                //                   ]
                //          );
                //         //  $message->sid;

                //         // $voice ->speak($messageSuccesIn); 
                //         $result = $pupilname." Logged in at ".date('h:i a')." text message was sent to ".$guardian;
                        
                      
                       
                //     }
                //     else if(strtotime($time2) >= strtotime($sting3))
                //     {
                //         // $query = "UPDATE attendance SET TimeInPM = '$time', STATUS = 3 WHERE qrcode_id= $qrcode_id  AND logdate ='$date'";
                //          $query = "UPDATE attendance SET TimeOutPM = '$time', STATUS = 3 WHERE qrcode_id= $qrcode_id  AND logdate ='$date'";
                //          $query_run = mysqli_query($connection, $query);
                //         // $voice ->speak($messageSuccesIn); 
                //         $_SESSION['successIN'] =  'Your attendance has succesfully added, thank you';
                //         $message = $client->messages->create(
                //             $parentnumber, [
                //                 //  'from' => '+18178092568',
                //                 'from' => '+18178092568',
                //                   'body' =>  $pupilname.' has Log-out. in Afternoon'
                //                   ]
                //          );
                //         //  $message->sid;
                //         $result =  $pupilname." Logged out at ".date('h:i a')." text message was sent to ".$guardian;
                        
                         
                        
                        
                //     }
                //     else 
                //     {
                //         $query = "UPDATE attendance SET TimeOutAM = '$time', STATUS = 1 WHERE qrcode_id= $qrcode_id  AND logdate ='$date'";
                //         $query_run = mysqli_query($connection, $query);
                //         $_SESSION['successIN'] =  'Your attendance has succesfully added, thank you';
                //         $message = $client->messages->create(
                //             $parentnumber, [
                //                 //  'from' => '+18178092568',
                //                 'from' => '+18178092568',
                //                   'body' =>  $pupilname.' has Log-out. morning'
                //                   ]
                //          );
                     
                //         // $message->sid;
                //         // $voice ->speak($messageSuccesOut);
                //         $result = $pupilname." Logged out at ".date('h:i a')." text message was sent to ".$guardian;
                        
                //     }
                    
                // } 
                // else if ($status == 1){
                //     $sting = date('H:i', strtotime('12:45 pm'));
                //      if(strtotime($time2) < strtotime($sting))
                //      {
                //         // $voice ->speak($messageNotYet);
                //         $_SESSION['successNotYet'] =  'Youre early for Logout , thank you';
                //         $result =  "You Are Early for Log out";
                //      }
                //      else
                //     {
                //     $query = "UPDATE attendance SET TimeInPM = '$time', STATUS = 2 WHERE qrcode_id= $qrcode_id  AND logdate ='$date'";
                //     $query_run = mysqli_query($connection, $query);
                //     // $voice ->speak($messageSuccesIn); 
                //     $_SESSION['successIN'] =  'Your attendance has succesfully added, thank you';  
                //      $message = $client->messages->create(
                //             $parentnumber, [
                //                 // 'from' => '+18178092568',
                //                 'from' => '+18178092568',
                //                  'body' =>  $pupilname.' has Log-in. afternoon.  '
                //                  ]
                //         );
                //         //   $message->sid;
                //         $result = $pupilname." Logged in at ".date('h:i a')." text message was sent to ".$guardian;

                //      }
    
                // }
                // else {
                //     $sting = date('H:i', strtotime('2:30 pm'));
                //     if(strtotime($time2) < strtotime($sting))
                //     {
                //     //    $voice ->speak($messageNotYet);
                //     $_SESSION['successNotYet'] =  'Youre early for Logout , thank you';
                //     $result = "You Are early for log out";
               
                //     }
                //     else
                //    {
                //     $query = "UPDATE attendance SET TimeOutPM = '$time', STATUS = 3 WHERE qrcode_id= $qrcode_id  AND logdate ='$date'";
                //     $query_run = mysqli_query($connection, $query);
                //     // $voice ->speak($messageSuccesOut);
                //     $_SESSION['successIN'] =  'Your attendance has succesfully added, thank you';
                //     $message = $client->messages->create(
                //         $parentnumber, [
                //             //  'from' => '+18178092568',
                //             'from' => '+18178092568',
                //               'body' =>  $pupilname.' has Log-out. afternoon, '
                //               ]
                //      );
                //     //  $message->sid;
                //     $result = $pupilname." Logged out at ".date('h:i a')." text message was sent to ".$guardian;
                //     }

                   
    
                // }