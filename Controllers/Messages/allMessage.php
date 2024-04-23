<?php

include(dirname(__FILE__) ."/../../database/database.php");
include(dirname(__FILE__) ."/../../Models/Messages/messageModel.php");

$message = new Message($database);
$AllMessage = $message->readMessage();

?>
