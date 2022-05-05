<?php
include '../../database/db.class.php';

class EditUserModel extends Database{




    public function getUserNumber($email)
    {
        try{
            //connecting to the database
            $db_obj=$this->connect();
            //searching for the user number using the email
            $query_result=$db_obj->query("SELECT users.phoneNumber FROM users WHERE users.email='$email'");
            $user_array=mysqli_fetch_array($query_result);
            if($user_array){
                //return the user phone number
                return $user_array["phoneNumber"];
    
            }
    
            else{
                die("error while getting the number");
            }
            
           }
       
        catch(Exception $e) {
               die('Error: ' .$e->getMessage());
           }

    }


}




?>