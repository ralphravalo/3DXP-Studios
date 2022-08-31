<?php
/**
 * Created by PhpStorm.
 * User: maven
 * Date: 5/2/2022
 * Time: 9:24 PM
 */?>
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

    # Sender Data

    $xpplatform = trim($_POST["exp-platform"]);
    #$xppackage = trim($_POST["exp-package"]);
    #$xpstyle = trim($_POST["exp-style"]);
    #$xppurpose = trim($_POST["exp-purpose"]);
    #$xptheme = trim($_POST["exp-theme"]);
    $xpname = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_POST["exp-name"])));
    $xpemail = filter_var(trim($_POST["exp-email"]), FILTER_SANITIZE_EMAIL);
    $xpdiscord = trim($_POST["exp-discord"]);
    $xptwitter = trim($_POST["exp-twitter"]);
    $xptelegram = trim($_POST["exp-telegram"]);
    $xpparcels = trim($_POST["exp-parcels"]);
    $xplength = trim($_POST["exp-length"]);
    $xpwidth = trim($_POST["exp-width"]);
    $xpsampleidea1 = trim($_POST["exp-sampleidea1"]);
    $xpsampleidea2 = trim($_POST["exp-sampleidea2"]);
    $xpattachments = $_FILES["exp-attachments"]["name"];
    $xpmessage = trim($_POST["exp-description"]);


    if (empty($xpname) OR !filter_var($xpemail, FILTER_VALIDATE_EMAIL) OR empty($xpplatform) OR empty($xpdiscord)
        OR empty($xptwitter) OR empty($xptelegram) OR empty($xpparcels) OR empty($xplength) OR empty($xpwidth) OR empty($xpsampleidea1) OR empty($xpsampleidea2) OR empty($xpmessage)) {
        # Set a 400 (bad request) response code and exit.
        http_response_code(400);
        echo '<p class="alert alert-warning">Please complete the form and try again.</p>';
        exit;
    }else{
        //Validate email
        if(filter_var($xpemail, FILTER_VALIDATE_EMAIL) === false){
            # Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo '<p class="alert alert-warning">Please enter your valid email.</p>';
        }else{
            $uploadStatus = 1;

            /**Upload attachment file**/
            if(!empty($xpattachments)) {
                for ($i = 0; $i < count($xpattachments); $i++) {
                    $allowed = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg');
                    $filename = $_FILES["exp-attachments"]["name"][$i];
                    $ext = pathinfo($filename, PATHINFO_EXTENSION);
                    if (!in_array($ext, $allowed, true)) {
                        $uploadStatus = 0;
                        echo '<p class="alert alert-warning">Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.</p>';

                    }
                }
            }

            if($uploadStatus == 1){
                $ip = $_SERVER['REMOTE_ADDR'];
                $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
                $responseKeys = json_decode($response,true);

                if(intval($responseKeys["success"]) !== 1) {
                    echo '<p class="alert alert-warning">Please check the the captcha form.</p>';
                }else{
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

                        //Attachments
                        for ($i = 0; $i < count($xpattachments); $i++){
                            $file_tmp = $_FILES["exp-attachments"]["tmp_name"][$i];
                            $file_name = $_FILES["exp-attachments"]["name"][$i];
                            move_uploaded_file($file_tmp, "uploads/" . $file_name);
                            $mail->addAttachment("uploads/" . $file_name);
                        }

                        //Content
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = '3DXPerience request from '. $xpname;
                        $mail->Body    = '<div style="background-color: #eeeeef; padding: 50px 0; ">
                        <div style="max-width:640px; margin:0 auto; ">
                            <div style="color: #fff; text-align: center; background-color:#33333e; padding: 30px; border-top-left-radius: 3px; border-top-right-radius: 3px; margin: 0;">
                                <h1><img src="https://i.ibb.co/7R4LxXN/logo-header.png" style="width: 300px;" data-filename="email-white-logo.png"></h1>
                            </div>
                    
                            <div style="padding: 20px; background-color: rgb(255, 255, 255);">
                                <p style="color: rgb(85, 85, 85); font-size: 14px;">
                                    <font color="#555555" style="font-size: 13.5px;">
                                    <span style="font-size: 15px;">Hi! You have a new request for 3DXPerience!</span></font><br style="color: rgb(137, 143, 169); font-size: 13.5px;">
                                    <br style="color: rgb(137, 143, 169); font-size: 13.5px;">
                                    <font color="#555555" style="font-size: 13.5px;">
                                    <span style="font-size: 15px;"><b>Name:</b> '.$xpname.'</span><br>
                                    <span style="font-size: 15px;"><b>Email:</b> '.$xpemail.'</span><br>
                                    <span style="font-size: 15px;"><b>Discord:</b> '.$xpdiscord.'</span><br>
                                    <span style="font-size: 15px;"><b>Twitter:</b> '.$xptwitter.'</span><br>
                                    <span style="font-size: 15px;"><b>Telegram:</b> '.$xptelegram.'</span><br><br>
                                    <span style="font-size: 15px;"><b>Platform:</b> '.$xpplatform.'</span><br>
                                    <span style="font-size: 15px;">Parcels: '.$xpparcels.'</span><br>
                                    <span style="font-size: 15px;">Width: '.$xpwidth.'</span><br>
                                    <span style="font-size: 15px;">Length: '.$xplength.'</span><br>
                                    <span style="font-size: 15px;">References: '.$xpsampleidea1. ', ' .$xpsampleidea2.'</span><br>
                                    <span style="font-size: 15px;"><b>Description of Requirements:</b> </span><br>
                                    <span style="font-size: 15px;">'.$xpmessage.'</span><br></font><br>
                                </p>
                            </div>
                        </div>
                    </div>';

                        $mail->send();

                        if ($mail) {

                            header("Location: https://design.3dxp.co/thank-you.php");
                            exit();
                        } else {
                            # Set a 500 (internal server error) response code.
                            http_response_code(500);
                            echo '<p class="alert alert-warning">Oops! Something went wrong, we couldnt send your request.</p>';
                        }
                    } catch (Exception $e) {
                    }
                }
            }

        }
    }
}
die();
?>
