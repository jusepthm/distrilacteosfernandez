<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';



//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if(isset($_POST['nombre']) & isset($_POST['email'])& isset($_POST['telefono'])& isset($_POST['mensaje'])){
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $telefono=$_POST['telefono'];
    $mensaje=$_POST['mensaje'];

    $datos="$mensaje <br> Correo $email <br> Telefono $telefono";
    try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'jusepth.dev@gmail.com';                     //SMTP username
    $mail->Password   = 'isfgbaarnmlddgtz';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
    //Recipients
    $mail->setFrom($email, $nombre);
    $mail->addAddress('jusepth.dev@gmail.com', 'Maro');     //Add a recipient
    $mail->addAddress('carlos_q_t@hotmail.com', 'Carlos');               //Name is optional

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Mensaje de: $nombre" ;
$mail->Body = "$datos";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();
echo "Mensaje de: ".$nombre;
echo "Numero de telefono: ".$telefono;
echo "Correo es: ".$email;
echo "Mensaje es: ".$mensaje;
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}