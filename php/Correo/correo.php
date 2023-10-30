<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.office365.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'tekketRecruitng@outlook.com';                     //SMTP username
    $mail->Password   = '12heSHE$HE.';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('tekketRecruitng@outlook.com', 'Tekket Recruiting');
    $mail->addAddress($_SESSION["correo"], $_SESSION["nombre"]);     //Add a recipient
                  //Name is optional
    $mail->addReplyTo('tekketRecruiting@outlook.com', 'Tekket Recruiting');
    

    //Attachments
    //$mail->addAttachment("img.jpg", "beatA.jpg");         //Add attachments

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Aplicacion de empleo a Tekket';
    $name=$_SESSION["nombre"];
    if($_SESSION["examen"]>=7){
        $mail->Body = '<p>Hola  $name damos la cordial bienvnida al equipo de TEKKET!!<br>
        Estamos emocionados de tenerte como parte de nuestra comunidad de usuarios y clientes. En TEKKET, 
        nos esforzamos por ofrecer soluciones de software de alta calidad y brindar un excelente servicio a nuestros clientes.<br><br>
        
        Fuiste seleccionado por cumplir y rebasar con todas nuestras pruebas en el proceso de seleccion rápido.<br>
        Debes de mandar los siguientes documentos a este correo de manera inmediata.
        -Acta de nacieminto. <br>
        -CURP. <br>
        -Comprobante de domicilio. <br>
        -Cuenta bancaria. <br>
        -Titulo de universidad o comprobante de estudios. <br><br><br>

        Empezarás tus servicios desde el día de mañana con horario de lunes a viernes de 9:00 A.M. a 4:00 P.M. <br>
        Muchas gracias por querer ser parte de la familia TEKKET un cordial saludo. <br><br><br>
        
        Atentamente, Robert Everett Fillingham Gaeta, CEO de TEKKET</p>';
    }else{
        $mail->Body = '<p>Estimado/a $name <br>
        Espero que te encuentres bien. Agradecemos tu interés en TEKKET y la oportunidad que nos diste para revisar tu solicitud de empleo.<br>
        Después de una revisión cuidadosa, lamentamos informarte que no hemos podido avanzar con tu solicitud en esta ocasión. 
        Por favor, ten en cuenta que esta decisión no refleja necesariamente tu valía o tus habilidades, sino que se basa en las necesidades y circunstancias actuales de nuestra organización.
        Si tienes alguna pregunta o deseas obtener más información sobre la decisión, no dudes en ponerte en contacto con nosotros. 
        Estamos aquí para ayudarte y proporcionar cualquier retroalimentación constructiva que podamos.
        Te deseamos éxito en tus futuros esfuerzos y te agradecemos  por considerar a TEKKET.<br><br><br>
        
        Atentamente, Robert Everett Fillingham Gaeta, CEO de TEKKET
        </p>';
    }
    $mail->Body .= '<img src="../../img/firma.png" alt="Firma CEO Robert Fillingham">';

    $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

header("Location: ../index.php")

?>
