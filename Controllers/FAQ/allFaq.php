<?php

include(dirname(__FILE__) ."/../../database/database.php");
include(dirname(__FILE__) ."/../../Models/Faq/faqModel.php");

$faq = new Faq($database);
$AllFaq = $faq->readFaq();

?>
