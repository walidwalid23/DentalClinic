<?php
include '../database/db.class.php';

class SecretaryModel extends Database{

     protected function insertSecretary($secretaryEmail){
      try{
        //connecting to the database
        $db_obj=$this->connect();
        //adding the secretary type
        $update_result=$db_obj->query("UPDATE users SET users.type='secretary' WHERE users.email='$secretaryEmail'");
        
        if($db_obj->affected_rows==0){
          return "Secretary Email Not Found";}

        else{
          return true;
        }
      }

      catch(Exception $e) {
        die('Error: ' .$e->getMessage());
    }


     }

     
     protected function deleteSecretary($secretaryEmail){
        try{
          //connecting to the database
          $db_obj=$this->connect();
          //first delete the appointments scheduled by the secretary(since she could be normal user)
          $delete_result1=$db_obj->query("DELETE t1 FROM registered_scheduled_appointments t1 JOIN users t2 ON t2.email='walid@yahoo.com' AND t2.userID=t1.patientID");
          //deleting the secretary(user)
          $delete_result2=$db_obj->query("DELETE FROM users WHERE users.email='$secretaryEmail' AND users.type='secretary'");
         
          if(mysqli_affected_rows($db_obj)==0){
            return "Secretary Email Not Found";
      
           }
  
          else{
          
            return true;
          }
          
        }
  
        catch(Exception $e) {
          die('Error: ' .$e->getMessage());
      }
  
  
       }


}





?>