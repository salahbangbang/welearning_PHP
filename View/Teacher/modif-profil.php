<div id="bodyright" class="">
  <h3>Update Your Profil</h3>
  <div id="contact" class="">
    <details id="target-me">
      <summary>See and Update your profil</summary>
      <form  enctype="multipart/form-data" action="../../Controllers/Users/user/userController.php" method="post" >
        <table>
          <input type="hidden" name="user_id" value="<?php echo $_SESSION['infoUser']['user_id'];?>">
          <tr>
            <td>Photo</td>
            <td><input type="file" name="user_photo"></td>
          </tr>
          <tr>
            <td>Last Name</td>
            <td><input type="text" name="user_last_name" value="<?php echo $_SESSION['infoUser']['user_last_name'];?>"></td>
          </tr>
          <tr>
            <td>First Name</td>
            <td><input type="text" name="user_first_name" value="<?php echo $_SESSION['infoUser']['user_first_name'];?>"></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input type="text" name="user_email" value="<?php echo $_SESSION['infoUser']['user_email'];?>"></td>
          </tr>
          <tr>
            <td>Username</td>
            <td><input type="text" name="user_name" value="<?php echo $_SESSION['infoUser']['user_name'];?>"></td>
          </tr>
          <tr>
            <td>Diplome</td>
            <td><input type="file" name="user_diplome" value="<?php echo $_SESSION['infoUser']['user_diplome'];?>"></td>
          </tr>
            <input type="hidden" name="user_certificat" value="<?php echo $_SESSION['infoUser']['user_certificat'];?>">
          <tr>
            <td>Password</td>
            <td><input type="text" name="user_password" value="<?php echo $_SESSION['infoUser']['user_password'];?>"></td>
          </tr>
                <input type="hidden" name="user_type_id" value="<?php echo $_SESSION['infoUser']['user_type_id'];?>">
        </table>

          <button name="add" style="--c:#000">Save</button>
            <input type="hidden" name="action" value="update">
      </form>
    </details>

  </div>

</div>
