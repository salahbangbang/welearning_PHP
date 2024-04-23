<?php

include(dirname(__FILE__) . "/../../../database/database.php");
include(dirname(__FILE__) . "/../../../Models/Categories/category/categoryModel.php");

$category = new Category($database);
$AllCategory = $category->readCategory();

?>
