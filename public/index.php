<?php
require '../vendor/autoload.php';
use app\classes\User;

$user = new User;
$user->name = 'Anthony';
$user->email = 'anthony@gmail.com';
echo $user->auth();
?>
