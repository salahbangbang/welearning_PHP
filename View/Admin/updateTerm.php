<?php
include('../../Models/Terms/termsModel.php');
include('../../database/database.php');

//instance de class newObject
$term = new Term($database);
$Uterm = $term->readTermByID($_GET['id']);

?>

<div id="bodyright" class="">
  <h3>Update <?php echo $Uterm['term_name']; ?></h3>

      <div id="add">
        <details>
          <summary>Update <?php echo $Uterm['term_name']; ?></summary>
          <form action="../../Controllers/Terms/termController.php" method="post" >
            <input type="text" name="term_name" placeholder="New Name...">
            <textarea name="term_content" placeholder="New Description..."></textarea>

            <input type="hidden" value="<?php echo $Uterm['user_type_id']; ?>" name="user_type_id">
            <input type="hidden" value="<?php echo $_GET['id']; ?>" name="term_id">
            
              <button name="add" style="--c:#000">Update</button>
                <input type="hidden" name="action" value="update">
          </form>
        </details>

</div>
