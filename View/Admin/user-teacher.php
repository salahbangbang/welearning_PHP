<?php
include("../../Controllers/Users/user/allTeacher.php");
?>


<div id="bodyright" class="">
  <h3>View All Teacher</h3>
  <div id="add">
    <span><button onclick="sortTable()">Sort</button></span>

    <table id="myTable">
      <tr>
        <th>Photo</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Email</th>
        <th>Username</th>
        <th>Diplome</th>
        <th>User type</th>
        <th>Password</th>
        <th>Details</th>
        <th>Delete</th>
      </tr>
      <?php foreach($AllUser as $user) { ?>
      <tr>
        <td></td>
        <td><?php echo $user['user_last_name'];?></td>
        <td><?php echo $user['user_first_name'];?></td>
        <td><?php echo $user['user_email'];?></td>
        <td><?php echo $user['user_name'];?></td>
        <td><?php echo $user['user_diplome'];?></td>
        <td><?php echo $user['user_type_name'];?></td>
        <td><?php echo $user['user_password'];?></td>
        <td><a href="index.php?updateUser&id=<?php echo $user['user_type_id']?>">Details</a></td>
        <td>
          <form action="../../Controllers/Users/user/userController.php" method="post">
            <input type="hidden" name="action" value="delete">
            <button value="<?php echo $user['user_type_id']; ?>" name="deleteUser">Delete</button>
          </form>
        </td>
      </tr> <?php } ?>
    </table>

  </div>

</div>
