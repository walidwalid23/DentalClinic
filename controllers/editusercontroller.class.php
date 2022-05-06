<?php
include '../models/editusermodel.class.php';

class EditUserController extends EditUserModel
{ 
    private $oldEmail;

    public function __construct($oldEmail){
        $this->oldEmail=$oldEmail;
    }

    public function editName($name)
    {
        if(strlen($name) < 3){

            return "Name Length Has To Be Atleast 3 Characters";
        }
        else{
           return $this->updateName($name , $this->oldEmail);
        }
 
    }
    public function editNumber($number)
    {
        if(strlen($number) < 10){

            return "Please Type A Valid Phone Number";
        }
        else{
           return $this->updateNumber($number , $this->oldEmail);
        }
 
        
    }
    public function editEmail($email)
    {
        return $this->updateEmail($email , $this->oldEmail);
        
    }
    



}








?>