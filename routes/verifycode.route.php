<?php
include '../controllers/appointmentcontroller.class.php';
session_start();

 $sms_code=$_GET["code"];
//for from sign up request
if(isset($_GET["fromsignup"]) ){
  $user_name=$_GET["name"];
  $user_email=$_GET["email"];
  if($sms_code==$_SESSION["verifycode"]){
    //code matches
     //UPDATE THE USER DATA IN THE DATABASE AND ADD HIM AS VERIFIED
     if(verifyUser($user_email)==true){
     //add session values to login the user
     if (isset($user_name) && isset($user_email)){
      session_start();
      $_SESSION["user_name"]=$user_name;
      $_SESSION["user_email"]=$user_email;
     }
  
     //send success response 
     $success_response=["success"=>"code:".$_SESSION["verifycode"]. "is valid"];
     header('Content-Type: application/json');
     $jsonData=json_encode($success_response);
     echo $jsonData;
     }
     else{
      $error_response=["error"=>"Couldn't Verify User"];
      header('Content-Type: application/json');
      $jsonData=json_encode($error_response);
      echo $jsonData;
     }
     
  
  }
  
  else{
      //code doesn't match
      $error_response=["error"=>"Invalid Code"];
      header('Content-Type: application/json');
      $jsonData=json_encode($error_response);
      echo $jsonData;
  }
  
}

//from appointment scheduling request
else if (isset($_GET["fromappointment"])){
  $user_name=$_GET["name"];
  $user_number=$_GET["number"];
  $user_age=$_GET["age"];
  $user_gender=$_GET["gender"];
  $start_date= $_GET["date"];
  $start_time= $_GET["time"];
  
  $appointmentCont = new AppointmentController($start_date, $start_time );
   
  if($sms_code==$_SESSION["verifycode"]){
    //code matches
     //ADD THE APPOINTMENT
     $appointmentAddResult=$appointmentCont->addUnRegisteredAppointment($user_name,$user_number,$user_age,$user_gender);
     if($appointmentAddResult==true){
     //send success response 
     $success_response=["success"=>"appointment added successfully"];
     header('Content-Type: application/json');
     $jsonData=json_encode($success_response);
     echo $jsonData;
     }
     else{
      $error_response=["error"=>"Couldn't Add Appointment"];
      header('Content-Type: application/json');
      $jsonData=json_encode($error_response);
      echo $jsonData;
     }
     
  }
  
  else{
      //code doesn't match
      $error_response=["error"=>"Invalid Code"];
      header('Content-Type: application/json');
      $jsonData=json_encode($error_response);
      echo $jsonData;
  }




}





function verifyUser($user_email){
  try{
    $db_obj=mysqli_connect("localhost","root","","dentalclinic");
    if(!$db_obj){ die("Couldn't Connect To The Database");}
    else{
       $update_result=$db_obj->query("UPDATE users SET users.verified=true WHERE users.email='$user_email'");
       return $update_result;
    }
     
       }
     catch(Exception $e) {
      die('Could Not Verify User: ' .$e->getMessage());
          
       }
}


?>