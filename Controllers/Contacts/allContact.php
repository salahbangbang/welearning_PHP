<?php

include(dirname(__FILE__) . "/../../database/database.php");
include(dirname(__FILE__) . "/../../Models/Contacts/contactModel.php");

$contact = new Contact($database);
$AllContact = $contact->readContact();

?>
