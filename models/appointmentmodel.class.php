<?php
include 'C:\xampp\htdocs\DentalClinic\database\db.class.php';

class AppointmentModel extends Database{

    protected function insertRegisteredAppointment($startDate, $time, $userID){
        try{
            //Generate A Unique ID For The Appointment
            $appointment_ID=uniqid();
            //connecting to the database
            $db_obj=$this->connect();
            //add time to date
            $startDate = $startDate." Time: ".$time;
            $endTime  = $this->getEndTime($time);
             
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
  
    protected function insertUnRegisteredAppointment($startDate, $time ,$name, $phoneNumber, $birthDate, $gender){
            
        try{
            //Generate A Unique ID For The Appointment
            $appointment_ID=uniqid();
            //connecting to the database
            $db_obj=$this->connect();
            //add time to date
            $startDate = $startDate." ".$time;
            $endTime  = $this->getEndTime($time);
           //inserting the appointment data into the appointments table
            $query_result=$db_obj->query("INSERT INTO appointments VALUES('$appointment_ID','$startDate','$endTime')");
            if($query_result==true){
                 //inserting the appointment data into the registered appointments table
                $query_result2=$db_obj->query("INSERT INTO unregistered_scheduled_appointments VALUES('$appointment_ID','$name','$phoneNumber','$birthDate','$gender')");
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

    protected function deleteAppointment($appointmentID){
            
        try{
            //connecting to the database
            $db_obj=$this->connect();
      
           //delete the appointment from the foreign key appointments tables first
            $delete_query1=$db_obj->query("DELETE FROM registered_scheduled_appointments
             WHERE appointmentID='$appointmentID'");
            $delete_query2=$db_obj->query("DELETE FROM unregistered_scheduled_appointments
             WHERE appointmentID='$appointmentID'");
            $delete_query3=$db_obj->query("DELETE FROM appointments
             WHERE appointmentID='$appointmentID'");

             if(mysqli_affected_rows($db_obj)==0){
                 return false; }

                 else{
  
                    return true;
                  }

 
            
           }
       
        catch(Exception $e) {
               die('Error: ' .$e->getMessage());
           }


      
    }


    protected function getAppointments(){
        try{
          //connecting to the database
          $db_obj=$this->connect();
          //get all the appointments scheduled by registered users and the users data 
          $query_result1 = $db_obj->query("SELECT users.name,users.phoneNumber,users.birthDate,users.gender
          ,appointments.startDate,appointments.endDate,appointments.appointmentID FROM users,appointments,registered_scheduled_appointments
          WHERE users.userID=registered_scheduled_appointments.patientID AND registered_scheduled_appointments.appointmentID=appointments.appointmentID");
          $registered_users_appointments = mysqli_fetch_all($query_result1,MYSQLI_ASSOC);
          
          //get all the appointments scheduled by unregistered users and the users data 
          $query_result2 = $db_obj->query("SELECT patientName as 'name',patientPhoneNumber as phoneNumber,birthDate,patientGender as gender
          ,appointments.startDate,appointments.endDate,appointments.appointmentID FROM appointments,unregistered_scheduled_appointments
          WHERE unregistered_scheduled_appointments.appointmentID=appointments.appointmentID");
          $unregistered_users_appointments = mysqli_fetch_all($query_result2,MYSQLI_ASSOC);

          $all_appointments = array_merge($registered_users_appointments, $unregistered_users_appointments);

          return $all_appointments;

        }
        catch(Exception $e) {
            die('Error: ' .$e->getMessage());
        }

    }






    private function getEndTime($startTime){
         //start time hours
         $hoursAndMinutes = explode(":",$startTime);
         $startTimeHours = (int)($hoursAndMinutes[0]);
         //get end time by adding two hours to the initial time
         $endTime = $startTimeHours+2;
         //add the minutes
         $endTime = strval($endTime);
         $minutes = $hoursAndMinutes[1];
         $endTime =$endTime.":".$minutes;

         return $endTime;

    }


   

}

?>   