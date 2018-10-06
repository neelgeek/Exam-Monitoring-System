<?php
require_once 'php/init.php';
$user= new user();
if($user->IsLoggedIn())
{
  $user->logout();
  header('location: index.php');
}


?>