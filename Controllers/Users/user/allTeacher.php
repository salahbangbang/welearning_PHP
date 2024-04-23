<?php

include(dirname(__FILE__) ."/../../../database/database.php");
include(dirname(__FILE__) ."/../../../Models/Users/user/userModel.php");

$user = new User($database);
$AllUser = $user->readUserByTeacher();

//var_dump($AllUser);

?>
