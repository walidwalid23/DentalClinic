<?php
include '../controllers/editusercontroller.class.php';

$updated_data_array=json_decode(file_get_contents("php://input"),true);
$oldEmail = $updated_data_array["oldEmail"];
//initializing the controller object
$edit_controller=new EditUserController($oldEmail);
//if the user updated a field update it in the database
$errors="";
if(isset($updated_data_array["name"])){
     $updatedName = $updated_data_array["name"];
     $nameUpdateResult=$edit_controller->editName($updatedName);

     if($nameUpdateResult!==true){
        $errors+=$nameUpdateResult;
    }
}
if(isset($updated_data_array["email"])){
    $updatedEmail = $updated_data_array["email"];
    $emailUpdateResult=$edit_controller->editEmail($updatedEmail);

    if($emailUpdateResult!==true){
        $errors+=$emailUpdateResult;
    }
}
if(isset($updated_data_array["number"])){
    $updatedPhoneNumber= $updated_data_array["number"];
    $numberUpdateResult=$edit_controller->editNumber($updatedPhoneNumber);

    if($numberUpdateResult!==true){
        $errors+=$numberUpdateResult;
    }
}


//if the updated value wasn't updated successfully
if(
 (isset($updated_data_array["name"]) && $nameUpdateResult!==true)
 ||
 (isset($updated_data_array["email"]) && $emailUpdateResult!==true)
 ||
 (isset($updated_data_array["number"]) && $numberUpdateResult!==true)
 )
{
    //respond with the the error message
    $error_response=["error"=>$errors];
    header('Content-Type: application/json');
    $jsonData=json_encode($error_response);
    echo $jsonData;
   
}

//else if there are updated fields in the array show the updated message
else if(isset($updated_data_array["name"]) || isset($updated_data_array["email"]) || isset($updated_data_array["number"]) ){
 //all the functions returned true(succeeded)
 $success_response=["success"=>"Profile Updated Successfully"];
 header('Content-Type: application/json');
 $jsonData=json_encode($success_response);
 echo $jsonData;

}

?>