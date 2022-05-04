<?php
     session_start();
    //destroy the sessions and cookies when the user logs out
    if(isset($_GET["loggedout"])){
        if(isset($_SESSION["user_name"])){
            //destroy the sessions
            session_destroy(); 
            //redirect to home page
            header("Location:../views/pages/home.php");
           }
        else{
            //destroy the cookies
            setcookie("user_name", "", time() - 3600, "/" );
            setcookie("user_email", "", time() - 3600, "/");
            header("Location:../views/pages/home.php");
           }
       
    }

    ?>