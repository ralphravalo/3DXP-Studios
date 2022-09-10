<?php
/**
 * Created by PhpStorm.
 * User: maven
 * Date: 5/12/2022
 * Time: 12:18 AM
 */?>
<?php
/**
 * Created by PhpStorm.
 * User: Graphic Designer
 * Date: 02/05/2022
 * Time: 4:55 PM
 */
?>

<?php

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
    #$mail_to = "info@3dxpdesignstudio.store";

    # Sender Data
    $nickname = trim($_POST["dep-nickname"]);
    $transid = trim($_POST["dep-transid"]);

    if ( empty($nickname) OR empty($transid)) {
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

        $emailSubject = '3DXPerience Client Deposit';

        # Mail Content
        $content = '<div style="background-color: #eeeeef; padding: 50px 0; ">
	<div style="max-width:640px; margin:0 auto; ">
		<div style="color: #fff; text-align: center; background-color:#33333e; padding: 30px; border-top-left-radius: 3px; border-top-right-radius: 3px; margin: 0;">
			<h1><img src="https://i.ibb.co/7R4LxXN/logo-header.png" style="width: 300px;" data-filename="email-white-logo.png"></h1>
		</div>

		<div style="padding: 20px; background-color: rgb(255, 255, 255);">
			<p style="color: rgb(85, 85, 85); font-size: 14px;">
				<font color="#555555" style="font-size: 13.5px;">
				<span style="font-size: 15px;">Hi! One of our client processed a deposit!</span></font><br style="color: rgb(137, 143, 169); font-size: 13.5px;">
				<br style="color: rgb(137, 143, 169); font-size: 13.5px;">
				<font color="#555555" style="font-size: 13.5px;">
				<span style="font-size: 15px;"><b>Nickname:</b> '.$nickname.'</span><br>
				<span style="font-size: 15px;"><b>Transaction ID:</b> '.$transid.'</span><br>
				</font><br>
				</p>
		</div>
	</div>
</div>';

        # email headers.
        $headers = "From: 3DXP Design Studio <design@3dxp.co>";

        // Set content-type header for sending HTML email
        $headers .= "\r\n". "MIME-Version: 1.0";
        $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";


        # Send the email.
        $success = mail($mail_to, $emailSubject, $content, $headers);
        if ($success) {
            # Set a 200 (okay) response code.
            http_response_code(200);
            echo '<p class="alert alert-success">Thank You! We will get back to you shortly.</p>';
        } else {
            # Set a 500 (internal server error) response code.
            http_response_code(500);
            echo '<p class="alert alert-warning">Oops! Something went wrong, we couldnt send your message.</p>';
        }
    }

} else {
    # Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    echo '<p class="alert alert-warning">There was a problem with your submission, please try again.</p>';
}
?>

