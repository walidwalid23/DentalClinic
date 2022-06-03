<?php
include '../controllers/secretarycontroller.class.php';

$data_array = json_decode(file_get_contents("php://input"),true);
$secretaryEmail = $data_array["secretaryemail"];

$secretaryCont = new SecretaryController();

$addResult = $secretaryCont->addSecretary($secretaryEmail);

if($addResult===true)
{   //send success response
    $success_response=["success"=>"Secretary Added Successfully"];
    header('Content-Type: application/json');
    $jsonData=json_encode($success_response);
    echo $jsonData;
   
}

else{
     //respond with the the error message
     $error_response=["error"=>$addResult];
     header('Content-Type: application/json');
     $jsonData=json_encode($error_response);
     echo $jsonData;
    
}




?>