<?php
include '../database/db.class.php';

class AppointmentModel extends Database{

    protected function insertRegisteredAppointment($startDate, $time, $userID){
        try{
            //Generate A Unique ID For The Appointment
            $appointment_ID=uniqid();
            //connecting to the database
            $db_obj=$this->connect();
            //add time to date
            $startDate = $startDate." ".$time;
            $endTime  = $this->getEndTime($time," ");
             
           //inserting the appointment data into the appointments table
            $query_result=$db_obj->query("INSERT INTO appointments VALUES('$appointment_ID','$startDate','$endTime')");
            if($query_result==true){
                 //inserting the appointment data into the registered appointments table
                $query_result2=$db_obj->query("INSERT INTO registered_scheduled_appointments VALUES('$appointment_ID','$userID')");
                if($query_result2==true){
                return true;
                    }
                else{
                    die("Couldn't Insert The Appointment In The Registered Appointments Table");
                 }
              }
             
            else{
                die("Couldn't Insert The Appointment In The Appointments Table");
            }
             
            
           }
       
        catch(Exception $e) {
               die('Error: ' .$e->getMessage());
           }

    }
  
    protected function insertUnRegisteredAppointment($startDate, $time ,$name, $phoneNumber, $age, $gender){
            
        try{
            //Generate A Unique ID For The Appointment
            $appointment_ID=uniqid();
            //connecting to the database
            $db_obj=$this->connect();
            //add time to date
            $startDate = $startDate." ".$time;
            $endTime  = $this->getEndTime($time,"-");
           
           //inserting the appointment data into the appointments table
            $query_result=$db_obj->query("INSERT INTO appointments VALUES('$appointment_ID','$startDate','$endTime')");
            if($query_result==true){
                 //inserting the appointment data into the registered appointments table
                $query_result2=$db_obj->query("INSERT INTO unregistered_scheduled_appointments VALUES('$appointment_ID','$name','$phoneNumber',$age,'$gender')");
                if($query_result2==true){
                return true;
                    }
                else{
                    die("Couldn't Insert The Appointment In The UnRegistered Appointments Table");
                 }
              }
             
            else{
                die("Couldn't Insert The Appointment In The Appointments Table");
            }
             
            
           }
       
        catch(Exception $e) {
               die('Error: ' .$e->getMessage());
           }


      
    }

    private function getEndTime($startTime, $separator){
         //start time hours
         $startTimeHours = (int)($startTime[0].$startTime[1]);
         //get end time by adding two hours to the initial time
         $endTime = $startTimeHours+2;
         //if the time passed 12
         $endTime  = ($endTime>12)?$endTime-12 : $endTime;
         //add the minutes
         $endTime = strval($endTime);
         $hoursAndMinutesAndCode = explode(":",$startTime);
         $minutesAndCode = $hoursAndMinutesAndCode[1];
         $minutesAndCode = explode($separator,$minutesAndCode);
         $minutes = $minutesAndCode[0];
         $timeCode = $minutesAndCode[1];
         if($startTimeHours> 12){
            $timeCode = ($timeCode=="PM")?"AM":"PM";
         
         }
         
         $endTime =$endTime.":".$minutes." ".$timeCode;

         return $endTime;

    }


  

}

?>   