<?php
include './SMS/vendor/autoload.php';
use Twilio\Rest\Client;
if (isset($_POST['mobile']) && isset($_POST['msg'])){

    $sid = 'AC0432038a83247747bd16a9862a04a311';
    $token = '6e182e85ebfc71d9790ed510b44dd53a';
    $mobile = $_POST['mobile'];
    $msg =  $_POST['msg'];

    $client = new Client($sid,$token);
    $message = $client->messages->create(
       $mobile, [
            'from' => '+18178092568',
             'body' => $msg
             ]
    );

    if($message->sid){
        echo "<script>alert('Message Sent')</script>";
    }else{
        echo "<script>alert('Message NOT Sent')</script>";
    }
}




?>

<h2>sending sms using twilio</h2>

<form method="POST" action="">
enter mobile: <br>
<input type="text" placeholder="Mobile number" name="mobile">

Message: <br>
<textarea name="msg" id="" cols="30" rows="10" placeholder="Message"></textarea>
<input type="submit" value="send">
</form>