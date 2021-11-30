<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once "./composer/vendor/autoload.php";

//PHPMailer Object

$mail = new PHPMailer(true); //Argument true in constructor enables exceptions
$mail->isSMTP();
//$mail->Host = 'smtp.gmail.com';
$mail->Host = gethostname();

$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'xxx@xxx.com';
$mail->Password = 'xxxxxxx';
$mail->setFrom("xxx@xxx.com");
$mail->FromName = "XXXXX";
$mail->addReplyTo("xxx@xxxx.com", "Reply");
$mail->isHTML(true);
$xxxx_logo = "<img src='https://xxxx.com/images/logo_small.png'/> <h2>XXXXXX</h2><hr/><br/><br/>";

    