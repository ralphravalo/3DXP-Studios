<?php
/**
 * Created by PhpStorm.
 * User: Graphic Designer
 * Date: 02/05/2022
 * Time: 4:55 PM
 */
?>

<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // access
    $secretKey = '6Lc5NbkfAAAAAANdXms-Toje0dWPlXG_bIB5Zgae';
    $captcha = $_POST['g-recaptcha-response'];

    if(!$captcha){
        echo '<p class="alert alert-warning">Please check the the captcha form.</p>';
        exit;
    }

    # FIX: Replace this email with recipient email
    $mail_to = "redillasmaven@gmail.com";
    //$mail_to = "info@3dxpdesignstudio.store";

    # Sender Data
    $subject = trim($_POST["cont-subject"]);
    $name = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_POST["cont-name"])));
    $email = filter_var(trim($_POST["cont-email"]), FILTER_SANITIZE_EMAIL);
    $topic = trim($_POST["cont-topic"]);
    $message = trim($_POST["cont-message"]);

    if ( empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($topic) OR empty($subject) OR empty($message)) {
        # Set a 400 (bad request) response code and exit.
        http_response_code(400);
        echo '<p class="alert alert-warning">Please complete the form and try again.</p>';
        exit;
    }

    $ip = $_SERVER['REMOTE_ADDR'];
    $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
    $responseKeys = json_decode($response,true);

    if(intval($responseKeys["success"]) !== 1) {
        echo '<p class="alert alert-warning">Please check the the captcha form.</p>';
    } else {

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'design@3dxp.co';                     //SMTP username
            $mail->Password   = 'D@59e6d248050';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('design@3dxp.co', '3DXP Design Studio');
            //$mail->addAddress('info@3dxpdesignstudio.store');
            $mail->addAddress('redillasmaven@gmail.com');


            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'New Inquiry from '. $name;
            $mail->Body    = '<div style="background-color: #eeeeef; padding: 50px 0; ">
                            <div style="max-width:640px; margin:0 auto; ">
                                <div style="color: #fff; text-align: center; background-color:#33333e; padding: 30px; border-top-left-radius: 3px; border-top-right-radius: 3px; margin: 0;">
                                    <h1><img src="https://i.ibb.co/7R4LxXN/logo-header.png" style="width: 300px;" data-filename="email-white-logo.png"></h1>
                                </div>
                        
                                <div style="padding: 20px; background-color: rgb(255, 255, 255);">
                                    <p style="color: rgb(85, 85, 85); font-size: 14px;">
                                        <font color="#555555" style="font-size: 13.5px;">
                                        <span style="font-size: 15px;">Hi! You have an inquiry for <b>'.$subject.'</b>!</span></font><br style="color: rgb(137, 143, 169); font-size: 13.5px;">
                                        <br style="color: rgb(137, 143, 169); font-size: 13.5px;">
                                        <font color="#555555" style="font-size: 13.5px;">
                                        <span style="font-size: 15px;"><b>Name:</b> '.$name.'</span><br>
                                        <span style="font-size: 15px;"><b>Email:</b> '.$email.'</span><br>
                                        <span style="font-size: 15px;"><b>Topic:</b> '.$topic. '</span><br><br>
                                        <span style="font-size: 15px;"><b>Message:</b> </span><br>
                                        <span style="font-size: 15px;">'.$message.'</span><br>
                                        </font><br>
                                        </p>
                                </div>
                            </div>
                        </div>';

            $mail->send();

            if ($mail) {
                http_response_code(200);
                echo '<p class="alert alert-success">Thank You! Your message has been sent.</p>';
            } else {
                # Set a 500 (internal server error) response code.
                http_response_code(500);
                echo '<p class="alert alert-warning">Oops! Something went wrong, we couldnt send your request.</p>';
            }
        } catch (Exception $e) {
        }
    }

} else {
    # Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    echo '<p class="alert alert-warning">There was a problem with your submission, please try again.</p>';
}
?>
