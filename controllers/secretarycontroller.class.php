<?php
include '../models/secretarymodel.class.php';

class SecretaryController extends SecretaryModel
{ 
    public function addSecretary($secretaryEmail){
   
         return $this->insertSecretary($secretaryEmail);

    }

    public function removeSecretary($secretaryEmail){
   
        return $this->deleteSecretary($secretaryEmail);

   }
     



}








?>