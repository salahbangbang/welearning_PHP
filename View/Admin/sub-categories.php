<?php
  include("../../Controllers/Categories/category/allCategory.php");
  include("../../Controllers/Categories/sub-category/AllSubcategory.php");
?>

<div id="bodyright" class="">
  <h3>View All Sub-Categories</h3>
  <div id="add">
    <details>
      <summary>Add Sub-Category</summary>
      <form action="../../Controllers/Categories/sub-category/sub-categoryController.php" method="post" >
        <select name="category_id">
            <option value="">-choose-</option>
          <?php foreach($AllCategory as $category) { ?>
            <option value="<?php echo $category['category_id']; ?>">
            <?php echo $category['category_name']; ?>
            </option>
          <?php } ?>
        <input type="text" name="category_sub_name" placeholder="Sub-Category Name...">
        <textarea name="category_sub_description" placeholder="Sub-Category Description..."></textarea>
          <button name="add" style="--c:#000">Add Sub-Category</button>
            <input type="hidden" name="action" value="create">
      </form>
    </details>

    <span><button onclick="sortTable()">Sort</button></span>

    <table id="myTable">
      <tr>
        <th>Category</th>
        <th>Name</th>
        <th>Description</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
      <?php foreach($AllSubcategory as $subcategory) { ?>
      <tr>
        <td><?php echo $subcategory['category_name'];?></td>
        <td><?php echo $subcategory['category_sub_name'];?></td>
        <td><?php echo $subcategory['category_sub_description'];?></td>
        <td><a href="index.php?updateSubcategory&id=<?php echo $subcategory['category_sub_id']?>">Update</a></td>
        <td>
          <form action="../../Controllers/Categories/sub-category/sub-categoryController.php" method="post">
            <input type="hidden" name="action" value="delete">
            <button value="<?php echo $subcategory['category_sub_id']; ?>" name="deleteSubcategory">Supprimer</button>
          </form>
        </td>
      </tr> <?php } ?>
    </table>

  </div>

</div>
