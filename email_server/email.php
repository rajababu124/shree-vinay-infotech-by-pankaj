<?php
require 'PHPMailerAutoload.html';
require("class.htmlmailer.html");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "www.website24trade.com";
$mail->SMTPAuth = true;
//$mail->SMTPSecure = "ssl";
$mail->Port = 587;
$mail->Username = "inquiry@shreevinayinfotech.com";
$mail->Password = "R%Mbx~qW-V@P";

// require 'PHPMailerAutoload.html';
// require("class.htmlmailer.html");
// $mail = new PHPMailer();
// $mail->IsSMTP();
// $mail->Host = "smtp.hostinger.com";
// $mail->SMTPAuth = true;
// //$mail->SMTPSecure = "ssl";
// $mail->Port = 587;
// $mail->Username = "inquiry@call4digitalsolutions.com";
// $mail->Password = "Inq@clients#012";

?>
