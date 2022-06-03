<?php
try{
include '../vendor/autoload.php';

$phone_number="+20" . $_GET["phonenumber"];
//generate random 4-digits verification code
$digit1=strval(rand(0,9));
$digit2=strval(rand(0,9));
$digit3=strval(rand(0,9));
$digit4=strval(rand(0,9));
$verify_code=$digit1.$digit2.$digit3.$digit4;

//SEND THE SMS
$sid = "AC16db6942fe9064acc1f424f93f3952ca"; // Account SID from twilio
$token = "e34cc9b690a9bbaacff41b981d076811"; // Auth Token from twilio

$client = new Twilio\Rest\Client($sid, $token);
$message = $client->messages->create(
  $phone_number, // Text this number
  [
    'from' => '+17435002608', // From a valid Twilio number
    'body' => 'Your Dental Clinic Account Verification Code Is: '.$verify_code
  ]
);

if($message->sid){
  //store the verification code in a SESSION
  session_start();
  $_SESSION["verifycode"]=$verify_code;
  //sms is sent successfully
  $success_response=["success"=>"SMS Code Is Sent Successfully To: ".$phone_number];
  header('Content-Type: application/json');
  $jsonData=json_encode($success_response);
  echo $jsonData;
   
 }
 else{
  $error_response=["error"=>"Error While Sending The Verification SMS"];
  header('Content-Type: application/json');
  $jsonData=json_encode($error_response);
  echo $jsonData;
 }
}

catch(Exception $e){
  $error_response=["error"=>$e->getMessage()];
  header('Content-Type: application/json');
  $jsonData=json_encode($error_response);
  echo $jsonData;
}

?>