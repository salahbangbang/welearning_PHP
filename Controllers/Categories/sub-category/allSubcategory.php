<?php

include("../../database/database.php");
include("../../Models/Categories/sub-category/sub-categoryModel.php");


$subcategory = new Subcategory($database);
//$AllSubcategory = $subcategory->readSubcategory();
$AllSubcategory = $subcategory->allSubcategoryByCategory();

?>
