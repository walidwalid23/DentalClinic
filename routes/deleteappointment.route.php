<?php
include '../controllers/appointmentcontroller.class.php';

$appointmentID = $_GET["appointmentid"];

$appointmentCont = new AppointmentController("","");

if($appointmentCont->removeAppointment($appointmentID)){
    header("location:../views/pages/dashboard.php");
}

else{
    die("Couldn't Delete The Appointment");
}
?>
