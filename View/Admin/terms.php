<?php
  include("../../Controllers/Terms/allTerm.php");
  include("../../Controllers/Users/user-type/allUsertype.php");
?>

<div id="bodyright" class="">
  <h3>View All Terms & Conditions</h3>
  <div id="add">
    <details>
      <summary>Add Term & Condition</summary>
      <form action="../../Controllers/Terms/termController.php" method="post" >
        <select name="user_type_id">
          <option value="">-choose-</option>
        <?php foreach($AllUsertype as $usertype) { ?>
          <option value="<?php echo $usertype['user_type_id']; ?>">
          <?php echo $usertype['user_type_name']; ?>
          </option>
        <?php } ?>
        </select>
        <input type="text" name="term_name" placeholder="Term's Name...">
        <textarea name="term_content" placeholder="Term's Description..."></textarea>
          <button name="add" style="--c:#000">Add Term</button>
            <input type="hidden" name="action" value="create">
      </form>
    </details>
    <table>
      <tr>
        <th>n°</th>
        <th>Name</th>
        <th>Term</th>
        <th>Cible</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
      <?php foreach($AllTerm as $term) { ?>
      <tr>
        <td><?php echo $term['term_id'];?></td>
        <td><?php echo $term['term_name'];?></td>
        <td><?php echo $term['term_content'];?></td>
        <td><?php echo $term['user_type_name'];?></td>
        <td><a href="index.php?updateTerm&id=<?php echo $term['term_id']?>">Update</a></td>
        <td>
          <form action="../../Controllers/Terms/termController.php" method="post">
            <input type="hidden" name="action" value="delete">
            <button value="<?php echo $term['term_id']; ?>" name="deleteTerm">Delete</button>
          </form>
        </td>
      </tr> <?php } ?>
    </table>
</div>
