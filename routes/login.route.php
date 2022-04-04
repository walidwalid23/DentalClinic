<?php
include '../controllers/logincontroller.class.php';

$user_data_array=json_decode(file_get_contents("php://input"),true);
$email = $user_data_array["emailKey"];
$password = $user_data_array["passwordKey"];
$remember_me = $user_data_array["rememberMeKey"];
//initializing the controller object
$sign_up_controller=new SignUpController($email, $password, $remember_me);
//calling the sign up method
$login_result=$sign_up_controller->login();

if($login_result===true){
   //the function returned true(succeeded)
   $success_response=["success"=>"User Logged In Successfully"];
   header('Content-Type: application/json');
   $jsonData=json_encode($success_response);
   echo $jsonData;
}
else{
 //the function returned the error message
   $error_response=["error"=>$login_result];
   header('Content-Type: application/json');
   $jsonData=json_encode($error_response);
   echo $jsonData;

}

?>