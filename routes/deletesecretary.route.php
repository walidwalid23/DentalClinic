<?php
include '../controllers/secretarycontroller.class.php';

$data_array = json_decode(file_get_contents("php://input"),true);
$secretaryEmail = $data_array["secretaryemail"];

$secretaryCont = new SecretaryController();

$deleteResult = $secretaryCont->removeSecretary($secretaryEmail);

if($deleteResult===true)
{   //send success response
    $success_response=["success"=>"Secretary Deleted Successfully"];
    header('Content-Type: application/json');
    $jsonData=json_encode($success_response);
    echo $jsonData;
   
}

else{
     //respond with the the error message
     $error_response=["error"=>$deleteResult];
     header('Content-Type: application/json');
     $jsonData=json_encode($error_response);
     echo $jsonData;
    
}




?>