<?php

include '../models/appointmentmodel.class.php';

class AppointmentController extends AppointmentModel
{ 
  private $startDate;
  private $startTime;

  function __construct($startDate, $startTime){
      $this->startDate = $startDate;
      $this->startTime = $startTime;

  }

  function addRegisteredAppointment($userID){
  try{
    if($this->insertRegisteredAppointment($this->startDate,  $this->startTime, $userID))
    { 
      return true;

    }
    else{
      return false;
    }
  }

  catch(Exception $e) {
      die('Error: ' .$e->getMessage());
  }


  }

  function addUnRegisteredAppointment($name, $phoneNumber, $age, $gender){
    try{
      if($this->insertUnRegisteredAppointment($this->startDate, $this->startTime ,$name, $phoneNumber, $age, $gender))
      { 
        return true;
  
      }
      else{
        return false;
      }
    }
  
    catch(Exception $e) {
        die('Error: ' .$e->getMessage());
    }
  
  
    
  }

  function removeAppointment($appointmentID){
    try{
      if($this->deleteAppointment($appointmentID))
      { 
        return true;
  
      }
      else{
        return false;
      }
    }
  
    catch(Exception $e) {
        die('Error: ' .$e->getMessage());
    }
  
  
    
  }


}





?>
