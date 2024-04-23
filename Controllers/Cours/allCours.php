<?php

include(dirname(__FILE__) ."/../../database/database.php");
include(dirname(__FILE__) ."/../../Models/Cours/coursModel.php");

$cours = new Cours($database);
$AllCours = $cours->readCours();

?>