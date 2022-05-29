<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require '../vendor/autoload.php';

$from_name = $_GET["name"];
$from_email = $_GET["email"];
$subject = $_GET["subject"];
$message = $_GET["message"];
$to_email = "moderndentalclinic100@gmail.com";



//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings                    
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $to_email;                     //SMTP username
    $mail->Password   = 'dentalclinic100';                               //SMTP password
    $mail->SMTPSecure = "ssl";            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($from_email,$from_name);
    $mail->addAddress($to_email);     //Add a recipient //Name is optional
    //Content
    $mail->isHTML(false);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message."<br>"."Sender:"."<br>".$from_email;
    $mail->AltBody = $message;

    $email_response=$mail->send();
    if($email_response){
    //email sent successfully
    $success_response=["success"=>"Email Is Sent Successfully"];
    header('Content-Type: application/json');
    $jsonData=json_encode($success_response);
    echo $jsonData;
    }
    else{
        $error_response=["error"=>"Email could not be sent."];
        header('Content-Type: application/json');
        $jsonData=json_encode($error_response);
        echo $jsonData;
    }

}
 catch (Exception $e) {
   $error_response=["error"=>"Message could not be sent. Mailer Error: {$mail->ErrorInfo}"];
   header('Content-Type: application/json');
   $jsonData=json_encode($error_response);
   echo $jsonData;
}




?>