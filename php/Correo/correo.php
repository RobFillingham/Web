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
    $mail->Body    = 'Estimado [Nombre del Candidato],

    Es un placer darle la bienvenida al equipo de [Nombre de la Empresa]. Estamos emocionados de contar con usted como parte de nuestra organización y esperamos que su experiencia aquí sea enriquecedora y llena de oportunidades.
    
    Para facilitar su proceso de incorporación, a continuación, le proporcionamos información importante:
    
    Fecha de Ingreso: Su fecha de ingreso a [Nombre de la Empresa] está programada para el [Fecha de Ingreso]. Este es el día en el que comenzará su emocionante viaje con nosotros.
    
    Horario de Trabajo: Su horario laboral será de [Horario de Trabajo] de [Días Laborables], según lo acordado durante el proceso de selección. Estamos seguros de que se adaptará rápidamente a nuestro entorno de trabajo y se convertirá en una parte fundamental de nuestro equipo.
    
    Ubicación de la Empresa: [Dirección de la Empresa]. Asegúrese de conocer la ubicación de nuestra oficina y cómo llegar antes de su primer día.
    
    Documentación requerida: Le solicitamos que traiga los siguientes documentos en su primer día:
    
        [Lista de Documentos Requeridos]
        [Otro documento, si es necesario]
    
    Información de Contacto: En caso de cualquier pregunta o inquietud antes de su fecha de ingreso, no dude en ponerse en contacto con [Nombre del Contacto], quien estará encantado de ayudarle.
    
    Orientación: Durante su primer día en la empresa, recibirá una orientación en la que se le presentará a su equipo, se le explicarán nuestras políticas y procesos internos, y se le proporcionará una visión general de nuestra cultura corporativa.
    
    Formación: A lo largo de su carrera en [Nombre de la Empresa], ofrecemos oportunidades de desarrollo continuo. A medida que avance en su puesto, tendrá acceso a programas de formación y capacitación que lo ayudarán a crecer y aportar un valor significativo a nuestra organización.
    
    Una vez más, le damos la bienvenida a [Nombre de la Empresa] y esperamos que esta sea una experiencia gratificante y exitosa para usted. ¡Estamos emocionados de que forme parte de nuestro equipo!
    
    Si tiene alguna pregunta o necesita información adicional antes de su primer día, no dude en comunicarse con nosotros.
    
    Le agradecemos por unirse a nosotros y esperamos verlo pronto.
    
    Atentamente,
    
    [Su Nombre]
    [Tu Título]
    [Nombre de la Empresa]
    [Tu Número de Contacto]
    [Tu Correo Electrónico';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

header("Location: ../elim.php")

?>