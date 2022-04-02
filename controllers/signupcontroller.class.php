<?php

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
  
function email_unique(){


}

function phonenumber_unique(){

    
}

}





?>