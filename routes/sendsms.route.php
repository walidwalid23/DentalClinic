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
//store the verification code in a SESSION
session_start();
$_SESSION["verifycode"]=$verify_code;
//SEND THE SMS
$sid = "AC16db6942fe9064acc1f424f93f3952ca"; // Your Account SID from twilio
$token = "71175bc92c4f35ea60d6d55c2a67d3d2"; // Your Auth Token from twilio

$client = new Twilio\Rest\Client($sid, $token);
$message = $client->messages->create(
  $phone_number, // Text this number
  [
    'from' => '+17435002608', // From a valid Twilio number
    'body' => 'Your Dental Clinic Account Verification Code Is: '.$verify_code
  ]
);

if($message->sid){
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