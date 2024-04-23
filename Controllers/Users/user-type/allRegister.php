<?php

include(dirname(__FILE__) ."/../../../database/database.php");
include(dirname(__FILE__) ."/../../../Models/Users/user-type/user-typeModel.php");

$usertype = new Usertype($database);
$AllUsertype = $usertype->readUsertypeSTW();

?>
