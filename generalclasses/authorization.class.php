<?php



class Authorization{

public static function isAllowed(){
    session_start();
    //if the user isn't logged in
    if(!isset($_SESSION["user_type"]) && !isset($_COOKIE["user_type"])){
        return false;

    }
    //if the user is logged in 
    else if (isset($_SESSION["user_type"]) || isset($_COOKIE["user_type"]))
    {
        $user_type = (isset($_SESSION["user_type"]))?$_SESSION["user_type"]:$_COOKIE["user_type"];
        if($user_type=="doctor" || $user_type=="secretary"){
            return true;

        }
        else{
            return false;
        }
    }
}


}



?>