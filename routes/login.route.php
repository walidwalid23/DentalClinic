<?php
include '../controllers/logincontroller.class.php';

$user_data_array=json_decode(file_get_contents("php://input"),true);
$email = $user_data_array["emailKey"];
$password = $user_data_array["passwordKey"];
$remember_me = $user_data_array["rememberMeKey"];
//initializing the controller object
$login_controller=new LoginController($email, $password, $remember_me);
//calling the sign up method
$login_result=$login_controller->login();

if($login_result===true){
   //the function returned true(succeeded)
   $user_type = (isset($_SESSION["user_type"]))?$_SESSION["user_type"]:$_COOKIE["user_type"];
   $success_response=["success"=>"User Logged In Successfully","usertype"=>$user_type];
   header('Content-Type: application/json');
   $jsonData=json_encode($success_response);
   echo $jsonData;
}

else if($login_result==="unverified"){
   //if the user is not verified send unverified response to redirect him to the verification page
   $unverified_response=["unverified"=>true,
                         "email"=>$email,
                         "name"=>$login_controller->get_user_name($email),
                         "number"=>$login_controller->get_user_number($email)];
   header('Content-Type: application/json');
   $jsonData=json_encode($unverified_response);
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