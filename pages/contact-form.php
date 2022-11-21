<?php
$user = $_POST["user"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$message = $_POST["message"];

echo "$user" . "<br>";
echo "$tel" . "<br>";
echo "$email" . "<br>";
echo "$message" . "<br>";

echo "<pre>";
print_r($_POST);
echo "</pre>";
