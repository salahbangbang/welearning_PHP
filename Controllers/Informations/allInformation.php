<?php

include(dirname(__FILE__) . "/../../database/database.php");
include(dirname(__FILE__) . "/../../Models/Informations/informationModel.php");

$information = new Information($database);
$AllInformation = $information->readInformation();

?>
