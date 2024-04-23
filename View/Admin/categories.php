<?php
include("../../Controllers/Categories/category/allCategory.php");

?>

<div id="bodyright" class="">
  <h3>View All Categories</h3>
  <div id="add">
    <details>
      <summary>Add Category</summary>
      <form action="../../Controllers/Categories/category/categoryController.php" method="post" >
        <input type="text" name="category_logo" placeholder="Category Logo...">
        <input type="text" name="category_name" placeholder="Category Name...">
        <textarea name="category_description" placeholder="Category Description..."></textarea>
          <button name="add" style="--c:#000">Add Category</button>
            <input type="hidden" name="action" value="create">
      </form>
    </details>

    <span><button onclick="sortTable()">Sort</button></span>

    <table id="myTable">
      <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
      <?php foreach($AllCategory as $category) { ?>
      <tr>
        <td><?php echo $category['category_name'];?></td>
        <td><?php echo $category['category_description'];?></td>
        <td><a href="index.php?updateCategory&id=<?php echo $category['category_id']?>">Update</a></td>
        <td>
          <form action="../../Controllers/Categories/category/categoryController.php" method="post">
            <input type="hidden" name="action" value="delete">
            <button value="<?php echo $category['category_id']; ?>" name="deleteCategory">Delete</button>
          </form>
        </td>
      </tr> <?php } ?>
    </table>

  </div>

</div>
