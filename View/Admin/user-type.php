<?php
include("../../Controllers/Users/user-type/allUsertype.php");
?>

<div id="bodyright" class="">
  <h3>View All User-type</h3>
  <div id="add">
    <details>
      <summary>Add User Type</summary>
      <form action="../../Controllers/Users/user-type/user-typeController.php" method="post" >
        <input type="text" name="user_type_name" placeholder="User type Name...">
        <textarea name="user_type_description" placeholder="User type Description..."></textarea>
          <button name="add" style="--c:#000">Add User type</button>
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
      <?php foreach($AllUsertype as $usertype) { ?>
      <tr>
        <td><?php echo $usertype['user_type_name'];?></td>
        <td><?php echo $usertype['user_type_description'];?></td>
        <td><a href="index.php?updateUsertype&id=<?php echo $usertype['user_type_id']?>">Update</a></td>
        <td>
          <form action="../../Controllers/Users/user-type/user-typeController.php" method="post">
            <input type="hidden" name="action" value="delete">
            <button value="<?php echo $usertype['user_type_id']; ?>" name="deleteUsertype">Delete</button>
          </form>
        </td>
      </tr> <?php } ?>
    </table>

  </div>

</div>
