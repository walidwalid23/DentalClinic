<?php
include '../database/db.class.php';

class SignUpModel extends Database{

protected function insertUser($name, $gender, $birth_date, $phonenumber, $email, $password ){
 try{
     //Generate A Unique ID For The User
     $user_ID=uniqid();
     //hashing the password
     $password=password_hash($password,PASSWORD_DEFAULT);
     //inserting the user data into the user table
     $db_obj=$this->connect();
     $user_type="user";
     $query_result=$db_obj->query("INSERT INTO users VALUES('$user_ID','$name','$email','$birth_date',
     '$gender','$password','$phonenumber','$user_type')");
     if($query_result==true){
         return true;
     }
     else{
         die("Couldn't Insert The User In The Database");
     }
      
     
    }

 catch(Exception $e) {
        die('Error: ' .$e->getMessage());
    }

}
  
protected function email_repeated($email){
 try{
    $db_obj=$this->connect();
    $query_obj=$db_obj->query("SELECT* FROM users WHERE users.email='$email'");
    $user_returned=mysqli_fetch_array($query_obj);

    if($user_returned){
        return true;
    }
    else{
        return false;
    }
  }
  catch(Exception $e) {
    echo 'Error: ' .$e->getMessage();
    }

}

protected function phonenumber_repeated($phonenumber){
  try{

    $db_obj=$this->connect();
    $query_obj=$db_obj->query("SELECT* FROM users WHERE users.phoneNumber='$phonenumber'");
    $user_returned=mysqli_fetch_array($query_obj);

    if($user_returned){
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