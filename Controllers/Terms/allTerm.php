<?php

include(dirname(__FILE__) ."/../../database/database.php");
include(dirname(__FILE__) ."/../../Models/Terms/termsModel.php");


$term = new Term($database);
$AllTerm = $term->readTermByCible();

?>
