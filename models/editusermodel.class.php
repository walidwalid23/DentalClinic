<?php
include '../database/db.class.php';

class EditUserModel extends Database{
 
   protected function updateName($name , $oldEmail)
   {
       try{
           //connecting to the database
           $db_obj=$this->connect();
           //updating the user's name
           $update_result=$db_obj->query("UPDATE users SET users.name='$name' WHERE users.email='$oldEmail'");
           if($update_result==true){
               session_start();
               if(isset($_SESSION["user_name"])){
            
                  $_SESSION["user_name"]=$name;
               }
               else{
                  setcookie("user_name",$name,time()+86400*3 , "/");
               }
           }
           return $update_result;

       }

    catch(Exception $e) {

        return $e->getMessage();
    }

   }
   protected function updateNumber($number , $oldEmail)
   {
    try{
        //connecting to the database
        $db_obj=$this->connect();
        //updating the user's number
        $update_result=$db_obj->query("UPDATE users SET users.phoneNumber='$number' WHERE users.email='$oldEmail'");
        
        return $update_result;

    }

 catch(Exception $e) {

     return $e->getMessage();
 }
       
   }
   protected function updateEmail($email , $oldEmail)
   {
    try{
        //connecting to the database
        $db_obj=$this->connect();
        //updating the user's email
        $update_result=$db_obj->query("UPDATE users SET users.email='$email' WHERE users.email='$oldEmail'");
        if($update_result==true){
            session_start();
            if(isset($_SESSION["user_email"])){
              $_SESSION["user_email"]=$email;
            }
            else{
              setcookie("user_email",$email,time()+86400*3 , "/");
            }
        }
        return $update_result;

    }

 catch(Exception $e) {

     return $e->getMessage();
 }
       
   }

    

}




?>