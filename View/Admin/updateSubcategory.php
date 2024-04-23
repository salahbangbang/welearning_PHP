<?php
include('../../Models/Categories/sub-category/sub-categoryModel.php');
include('../../database/database.php');

//instance de class newObject
$subcategory = new Subcategory($database);
$Usubcategory = $subcategory->readSubcategoryByID($_GET['id']);

?>

<div id="bodyright" class="">
  <h3>Update <?php echo $Usubcategory['category_sub_name']; ?></h3>

      <div id="add">
        <details>
          <summary>Update <?php echo $Usubcategory['category_sub_name']; ?></summary>
          <form action="../../Controllers/Categories/sub-category/sub-categoryController.php" method="post" >
            <input type="text" name="category_sub_name" placeholder="New Name...">
            <textarea name="category_sub_description" placeholder="New Description..."></textarea>
            <input type="hidden" value="<?php echo $Usubcategory['category_id']; ?>" name="category_id">

            <input type="hidden" value="<?php echo $_GET['id']; ?>" name="category_sub_id">
              <button name="add" style="--c:#000">Update</button>
                <input type="hidden" name="action" value="update">
          </form>
        </details>

</div>
