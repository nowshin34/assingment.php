<?php

$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);


$user = ['username' => $username, 'email' => $email, 'password' => $password, 'role' => 'user'];


session_start();
$_SESSION['user'] = $user;


header('Location: welcome.php');
?>
