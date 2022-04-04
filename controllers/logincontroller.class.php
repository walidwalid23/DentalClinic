<?php
include '../models/loginmodel.class.php';

class SignUpController extends LoginModel {
 private $email;
 private $password;
 private $rememberMe;

  function __construct($email, $password, $rememberMe ){
     $this->email = $email;
     $this->password = $password;
     $this->rememberMe = $rememberMe;
  
   }

//SIGN UP METHOD
 function login(){
  try{
  if(!$this->email_valid()){
    return 'Please Enter A Valid Email';
  }
  else if(!$this->password_valid()){
    return 'Password Length Has To Be Atleast 5 Characters';
  }
 //login the user if all the test cases are valid
  else{
    #calling the login method of the loginmodel class
    $login_result=$this->login_user($this->email, $this->password );
    
    if($login_result===true){
        //get the name of the user using his email
        $user_name=$this->get_user_name($this->email);
        if($this->rememberMe){   
         $days_in_seconds=86400*3;
         //store login cookies if the user wants to be remembered
         setcookie("user_name",$user_name,time()+$days_in_seconds , "/");
         setcookie("user_email",$this->email,time()+$days_in_seconds,"/");
        }
        else{
        //start session
        session_start();
        //store sessions
        $_SESSION["user_name"]=$user_name;
        $_SESSION["user_email"]=$this->email;
        }
        return $login_result;
      }
      else{
          //return the error message
          return $login_result;
      }
     
  }
  }
  catch(Exception $e){
    die('Error: ' .$e->getMessage());
  }
}

//validation methods
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
  






}



?>