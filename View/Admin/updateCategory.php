<?php
include('../../Models/Categories/category/categoryModel.php');
include('../../database/database.php');

//instance de class newObject
$category = new Category($database);
$Ucategory = $category->readCategoryByID($_GET['id']);

?>

<div id="bodyright" class="">
  <h3>Update <?php echo $Ucategory['category_name']; ?></h3>

      <div id="add">
        <details>
          <summary>Update <?php echo $Ucategory['category_name']; ?></summary>
          <form action="../../Controllers/Categories/category/categoryController.php" method="post" >
            <input type="text" name="category_logo" placeholder="New Logo...">
            <input type="text" name="category_name" placeholder="New Name...">
            <textarea name="category_description" placeholder="New Description..."></textarea>

            <input type="hidden" value="<?php echo $_GET['id']; ?>" name="category_id">
              <button name="add" style="--c:#000">Update</button>
                <input type="hidden" name="action" value="update">
          </form>
        </details>

</div>
