<?php

include 'C:\xampp\htdocs\DentalClinic\models\appointmentmodel.class.php';

class AppointmentView extends AppointmentModel {

     public function displayAppointments(){
         $appointments = $this->getAppointments();
      
        for ($i=0; $i<count($appointments); $i++){
            echo '
            <!-- Scheduled Appointments Table Start -->
            <table class="table" id="appointments-table">
            <thead>
                <tr class="table-primary">
                <th scope="col">Patient Name</th>
                <th scope="col">Patient Phonenumber</th>
                <th scope="col">Patient Birth Date</th>
                <th scope="col">Patient Gender</th>
                <th scope="col">Start Date</th>
                <th scope="col">End Time</th>
                <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>'.$appointments[$i]["name"].'</td>
                <td>'.$appointments[$i]["phoneNumber"].'</td>
                <td>'.$appointments[$i]["birthDate"].'</td>
                <td>'.$appointments[$i]["gender"].'</td>
                <td>'.$appointments[$i]["startDate"].'</td>
                <td>'.$appointments[$i]["endDate"].'</td>
                <td>
                <a href="http://localhost/DentalClinic/routes/deleteappointment.route.php?appointmentid='.$appointments[$i]["appointmentID"].'" id="delete-button"><i class="fa-solid fa-trash" style="color:red"></i></a>
                </td>
                </tr>
                
            </tbody>
            </table>
            <!-- Scheduled Appointments Table End -->
            
            ';

        }

     }



}



?>