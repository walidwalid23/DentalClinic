<?php
include './vendor/autoload.php';

// Send an SMS using Twilio's REST API and PHP

$sid = "AC16db6942fe9064acc1f424f93f3952ca"; // Your Account SID from www.twilio.com/console
$token = "8424f75af92aba82b92dc2d763e1e60b"; // Your Auth Token from www.twilio.com/console

$client = new Twilio\Rest\Client($sid, $token);
$message = $client->messages->create(
  '+201094706795', // Text this number
  [
    'from' => '+17435002608', // From a valid Twilio number
    'body' => 'Hello there from walid!'
  ]
);

if($message->sid){
    echo"message sent successfully";
    }

?>