<?php

include(dirname(__FILE__) ."/../../database/database.php");
include(dirname(__FILE__) ."/../../Models/Newsletters/newsletterModel.php");

$newsletter = new Newsletter($database);
$AllNewsletter = $newsletter->readNewsletter();

?>
