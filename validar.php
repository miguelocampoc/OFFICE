<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$contacto=$_POST['contacto'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];
$carta="De:$nombre <br>";
$carta.="Correo:$email <br>";
$carta.="Telefono:$contacto  <br>";
$carta.="Mensaje:$mensaje";

if($nombre==""||$email==""||$contacto==""||$asunto==""||$mensaje==""){
 echo '<script>
      alert("Todos los datos son obligatorios");
      window.history.go(-1);
      </script>';

}
else{

                        $mail = new PHPMailer(true);

                        try {
                            //Server settings
                            $mail->SMTPDebug = 0;                                       // Enable verbose debug output
                            $mail->isSMTP();                                            // Set mailer to use SMTP
                            $mail->Host       = 'smtp.live.com';  // Specify main and backup SMTP servers
                            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                            $mail->Username   = 'sendingsas@outlook.es';                     // SMTP username
                            $mail->Password   = 'sasofficep05';                               // SMTP password
                            $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
                            $mail->Port       = 587;                                    // TCP port to connect to

                            //Recipients
                            $mail->setFrom('sendingsas@outlook.es');
                            $mail->addAddress('offisersas@gmail.com'); 
                            /*    // Add a recipient
                            $mail->addAddress('ellen@example.com');               // Name is optional
                            $mail->addReplyTo('info@example.com', 'Information');
                            $mail->addCC('cc@example.com');
                            $mail->addBCC('bcc@example.com');
                       
                            // Attachments
                            $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                          */
                            // Content
                            $mail->isHTML(true);                                  // Set email format to HTML
                            $mail->Subject = $asunto;
                            $mail->Body    = $carta;
                            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                            $mail->send();
                           echo '<script>
                           alert("Mensaje enviado correctamente");
                           window.location="contacto.php";
                           </script>';



                        } 
                        catch (Exception $e) {
                          
                           echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                           
                     }

                  
}

?>