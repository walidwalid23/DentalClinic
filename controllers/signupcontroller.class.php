<?php
include '../models/signupmodel.class.php';

class SignUpController extends SignUpModel {
 private $name;
 private $gender;
 private $birth_date;
 private $phonenumber;
 private $email;
 private $password;
 
 function __construct($name, $gender, $birth_date, $phonenumber, $email, $password ){
   $this->name = $name;
   $this->gender = $gender;
   $this->birth_date = $birth_date;
   $this->phonenumber = $phonenumber;
   $this->email = $email;
   $this->password = $password;

  }

 //SIGN UP METHOD
 function signup(){
   try{

   if(!$this->name_valid()){
     return "Name Length Has To Be Atleast 3 Characters";
   }
   else if(!$this->gender_valid()){
     return 'You Cannot Leave The Gender Field Empty';
   }
   else if(!$this->birth_date_valid()){
    return 'You Cannot Leave The Birth Date Field Empty';
   }
   else if(!$this->phonenumber_valid()){
    return 'Please Enter A Valid Phone Number';
   }
   else if(!$this->email_valid()){
     return 'Please Enter A Valid Email';
   }
   else if(!$this->password_valid()){
     return 'Password Length Has To Be Atleast 5 Characters';
   }
   else if($this->email_taken()){
     return 'The Email Is Already Taken';
   }
   else if($this->phonenumber_taken()){
     return 'The Phone Number Is Already Taken';
   }
  //sign up the user if all the test cases are valid
   else{
    #calling the insert method of the model class(parent)
    $insert_result=$this->insertUser($this->name, $this->gender, $this->birth_date, $this->phonenumber,
    $this->email, $this->password );
    
    if($insert_result===true){
        //start session
        session_start();
        $_SESSION["user_name"]=$this->name;
        $_SESSION["user_email"]=$this->email;
        return true;
      }
      else{
         die("Couldn't Insert User Data");
      }
   }
  }
  catch(Exception $e){
    die('Error: ' .$e->getMessage());
  }
}
 //validation methods
 function name_valid(){

  if(strlen($this->name)<3){
     return false;
    }
  else{
    return true;
   }

 }

 function gender_valid(){
    if(empty($this->gender)){
        return false;
    }
    else{
        return true;
    }
 }

 function birth_date_valid(){
    if(empty($this->birth_date)){
        return false;
    }
    else{
        return true;
    }

 }

 function phonenumber_valid(){
    if(strlen($this->phonenumber)!=11){
        return false;
    }
    else{
        return true;
    }

 }

 function email_valid(){
    if(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){
        return false;
    }
    else{
        return true;
    }

 }

 function password_valid(){

    if(strlen($this->password)<5){
       return false;
      }
    else{
      return true;
     }
  
  }
  
 function email_taken(){

    return $this->email_repeated($this->email);

 }

 function phonenumber_taken(){

    return $this->phonenumber_repeated($this->phonenumber);

 }



}



?>