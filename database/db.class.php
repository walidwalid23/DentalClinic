<?php

class Database{

 private $host_name="localhost";
 private $username="root";
 private $password="";
 private $db_name="dentalclinic";

 protected function connect(){
  try{
 $db_obj=mysqli_connect($this->host_name,$this->username,$this->password,$this->db_name);
 if(!$db_obj){ die("Couldn't Connect To The Database");}
 else{

    return $db_obj;
 }
  
    }
  catch(Exception $e) {
        echo 'Error: ' .$e->getMessage();
    }
 }

}






?>