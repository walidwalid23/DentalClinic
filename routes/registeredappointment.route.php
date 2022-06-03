<?php
include '../controllers/appointmentcontroller.class.php';
session_start();
$appointmentDate = $_GET["date"];
$appointmentTime = $_GET["time"];
$userEmail = (isset($_SESSION["user_email"]))? $_SESSION["user_email"]:$_COOKIE["user_email"];
$userID = getUserID($userEmail);

$appointment = new AppointmentController($appointmentDate,$appointmentTime);

if($appointment->addRegisteredAppointment($userID)){
  //appointment is added successfully
  //send success response 
  $success_response=["success"=>"appointment added"];
  header('Content-Type: application/json');
  $jsonData=json_encode($success_response);
  echo $jsonData;
}
else{
   //send error response 
   $error_response=["error"=>"Error:Couldn't Schedule Appointment"];
   header('Content-Type: application/json');
   $jsonData=json_encode($error_response);
   echo $jsonData;
}












function getUserID($user_email){
    try{
      $db_obj=mysqli_connect("localhost","root","","dentalclinic");
      if(!$db_obj){ die("Couldn't Connect To The Database");}
      else{
         $ID_result=$db_obj->query("SELECT userID FROM users WHERE users.email='$user_email'");
         $ID_array = mysqli_fetch_array($ID_result);
         $userID = $ID_array["userID"];
         return $userID;
      }
       
         }
    catch(Exception $e) {
        die('Could Not Get User ID: ' .$e->getMessage());
            
         }
  }
  

?>