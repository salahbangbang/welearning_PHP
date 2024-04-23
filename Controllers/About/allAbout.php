<?php

include(dirname(__FILE__) ."/../../database/database.php");
include(dirname(__FILE__) ."/../../Models/About/aboutModel.php");

$about = new About($database);
$AllAbout = $about->readAbout();

?>
