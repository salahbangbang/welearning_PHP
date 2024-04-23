<?php

include(dirname(__FILE__) ."/../../database/database.php");
include(dirname(__FILE__) ."/../../Models/Comments/commentModel.php");

$comment = new Comment($database);
$AllComment = $comment->readComment();

?>
