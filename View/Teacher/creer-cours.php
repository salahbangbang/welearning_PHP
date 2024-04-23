<?php
include("../../Controllers/Categories/category/allCategory.php");
include("../../Controllers/Categories/sub-category/AllSubcategory.php");
?>

<div id="bodyright" class="">
  <h3>Créer un cours</h3>

  <details id="target-me">
    <summary>Ici vous pouvez créer un cours</summary>

    <form enctype="multipart/form-data" action="../../Controllers/Cours/coursController.php" method="post" >
      <table>

        <input type="hidden" name="cours_user_id" value="<?php echo $_SESSION['infoUser']['user_id'];?>">

        <select name="cours_category_id">
          <option value="">-choose-</option>
        <?php foreach($AllCategory as $category) { ?>
          <option value="<?php echo $category['category_id']; ?>">
          <?php echo $category['category_name']; ?>
          </option>
        <?php } ?>
        </select>

        <select name="cours_category_sub_id">
          <option value="">-choose-</option>
        <?php foreach($AllSubcategory as $subcategory) { ?>
          <option value="<?php echo $subcategory['category_sub_id']; ?>">
          <?php echo $subcategory['category_sub_name']; ?>
          </option>
        <?php } ?>
        </select>

        <tr>
          <td>Image principale du cours</td>
          <td><input type="file" name="cours_photo"></td>
        </tr>
        <tr>
          <td>Nom du cours</td>
          <td><input type="text" name="cours_name"></td>
        </tr>
        <tr>
          <td>Description du cours</td>
          <td><input type="text" name="cours_description"></td>
        </tr>
        <tr>
          <td>Notion apprise 1</td>
          <td><input type="text" name="cours_learn_1"></td>
        </tr>
        <tr>
          <td>Notion apprise 2</td>
          <td><input type="text" name="cours_learn_2"></td>
        </tr>
        <tr>
          <td>Notion apprise 3</td>
          <td><input type="text" name="cours_learn_3"></td>
        </tr>
        <tr>
          <td>Notion apprise 4 (facultatif)</td>
          <td><input type="text" name="cours_learn_4"></td>
        </tr>
        <tr>
          <td>Notion apprise 5 (facultatif)</td>
          <td><input type="text" name="cours_learn_5"></td>
        </tr>
        <tr>
          <td>Objectif du cours</td>
          <td><textarea name="cours_objective"></textarea></td>
        </tr>
        <tr>
          <td>Cours Curriculum 1</td>
          <td><input type="file" name="cours_curriculum_1"></td>
        </tr>

      </table>

        <button name="add" style="--c:#000">Créer</button>
          <input type="hidden" name="action" value="create">
    </form>
  </details>

</div>
