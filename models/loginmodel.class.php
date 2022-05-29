<?php
include '../database/db.class.php';

class LoginModel extends Database{

protected function login_user($email, $password ){
 try{
     //connecting to the database
     $db_obj=$this->connect();
     //searching for the user using the email
     $query_result=$db_obj->query("SELECT* FROM users WHERE users.email='$email'");
     $user_array=mysqli_fetch_array($query_result);
     if($user_array){
         //the user email exists now check if the password matches
         $password_matched=password_verify($password,$user_array["password"]);
         if($password_matched===true){
              if($user_array["verified"]){
                 return true;
              }
              else{
                 //return unverified message to redirect user to verification page if he isn't verified
                 return "unverified";
              }
            }

        else{
            //if password is incorrect
             return "Email Or Password Is Incorrect";
         }
     }
     else{
         //if user email doesn't exist
         return "Email Or Password Is Incorrect";
     }
     
    }

 catch(Exception $e) {
        die('Error: ' .$e->getMessage());
    }

}


public function get_user_name($email){
    try{
        //connecting to the database
        $db_obj=$this->connect();
        //searching for the user using the email
        $query_result=$db_obj->query("SELECT users.name FROM users WHERE users.email='$email'");
        $user_array=mysqli_fetch_array($query_result);
        if($user_array){
            //return the user name
            return $user_array["name"];

        }

        else{
            die("error while getting the name");
        }
        
       }
   
    catch(Exception $e) {
           die('Error: ' .$e->getMessage());
       }
   
   }
     
   public function get_user_number($email){
    try{
        //connecting to the database
        $db_obj=$this->connect();
        //searching for the user using the email
        $query_result=$db_obj->query("SELECT users.phoneNumber FROM users WHERE users.email='$email'");
        $user_array=mysqli_fetch_array($query_result);
        if($user_array){
            //return the user name
            return $user_array["phoneNumber"];

        }

        else{
            die("error while getting the phone number");
        }
        
       }
   
    catch(Exception $e) {
           die('Error: ' .$e->getMessage());
       }
   
   } 


}





?>