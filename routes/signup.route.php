<?php
include '../controllers/signupcontroller.class.php';

$user_data_array=json_decode(file_get_contents("php://input"),true);
$name = $user_data_array["nameKey"];
$gender = $user_data_array["genderKey"];
$birth_date = $user_data_array["birthDateKey"];
$phonenumber = $user_data_array["phonenumberKey"];
$email = $user_data_array["emailKey"];
$password = $user_data_array["passwordKey"];

//initializing the controller object
$sign_up_controller=new SignUpController($name, $gender, $birth_date, $phonenumber, $email, $password);
//calling the sign up method
$sign_up_result=$sign_up_controller->signup();

if($sign_up_result===true){
   //the function returned true(succeeded)
   $success_response=["success"=>"User Is Signed Up Successfully"];
   header('Content-Type: application/json');
   $jsonData=json_encode($success_response);
   echo $jsonData;
}
else{
 //the function returned the error message
   $error_response=["error"=>$sign_up_result];
   header('Content-Type: application/json');
   $jsonData=json_encode($error_response);
   echo $jsonData;

}

?>