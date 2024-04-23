<?php
include('../../Models/Users/user-type/user-typeModel.php');
include('../../database/database.php');

//instance de class newObject
$usertype = new Usertype($database);
$Uusertype = $usertype->readUsertypeByID($_GET['id']);

?>

<div id="bodyright" class="">
  <h3>Update <?php echo $Uusertype['user_type_name']; ?></h3>

      <div id="add">
        <details>
          <summary>Update <?php echo $Uusertype['user_type_name']; ?></summary>
          <form action="../../Controllers/Users/user-type/user-typeController.php" method="post" >
            <input type="text" name="user_type_name" placeholder="New Name...">
            <textarea name="user_type_description" placeholder="New Description..."></textarea>
            <input type="hidden" value="<?php echo $_GET['id']; ?>" name="user_type_id">
              <button name="add" style="--c:#000">Update</button>
                <input type="hidden" name="action" value="update">
          </form>
        </details>

</div>
