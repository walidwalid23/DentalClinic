<?php
include '../models/signupmodel.class.php';

class SignUpController{
private $name;
private $gender;
private $age;
private $phonenumber;
private $email;
private $password;
 
function __construct($name, $gender, $age, $phonenumber, $email, $password ){
  $this->name = $name;
  $this->gender = $gender;
  $this->age = $age;
  $this->phonenumber = $phonenumber;
  $this->email = $email;
  $this->password = $password;

}

//SIGN UP METHOD
function signup(){
  if(!name_valid()){
     return "Name Length Has To Be Atleast 3 Characters";
  }
  else if(!gender_valid()){
     return 'You Cannot Leave The Gender Field Empty';
  }
  else if(!gender_valid()){
    return 'You Cannot Leave The Gender Field Empty';
 }
  else if(!age_valid()){
    return 'You Cannot Leave The Age Field Empty';
  }
  else if(!phonenumber_valid()){
    return 'Please Enter A Valid Phone Number';
  }
  else if(!email_valid()){
    return 'Please Enter A Valid Email';
  }
  else if(!password_valid()){
    return 'Password Length Has To Be Atleast 6 Characters';
  }
  else if(email_taken()){
    return 'This Email Is Already Taken';
  }
  else if(phonenumber_taken()){
    return 'This Phone Number Is Already Taken';
  }
 //sign up the user if all the test cases are valid
  else{
     return $this->insertUser($this->name, $this->gender, $this->age, $this->phonenumber,
      $this->email, $this->password );
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

function age_valid(){
    if(empty($this->age)){
        return false;
    }
    else{
        return true;
    }

}

function phonenumber_valid(){
    if(strlen($this->phonenumber)<11){
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