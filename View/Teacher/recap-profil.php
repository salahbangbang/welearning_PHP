<div id="bodyright" class="">
  <h3>Mon Profil</h3>

  <img src="data:image/jpeg;base64, <?php echo base64_encode($_SESSION['infoUser']['user_photo']); ?>" width="300px">

  <div id="contact" class="">
    <details id="target-me">
      <summary>See your informations</summary>
        <table>
            <?php  { ?>
          <tr>
            <td>Last Name:</td>
            <td><?php echo $_SESSION['infoUser']['user_last_name'];?></td>
          </tr>
          <tr>
            <td>First Name:</td>
            <td><?php echo $_SESSION['infoUser']['user_first_name'];?></td>
          </tr>
          <tr>
            <td>Email:</td>
            <td><?php echo $_SESSION['infoUser']['user_email'];?></td>
          </tr>
          <tr>
            <td>Username:</td>
            <td><?php echo $_SESSION['infoUser']['user_last_name'];?></td>
          </tr>
          <tr>
            <td>Diplome:</td>
            <td><a href="<?php echo $_SESSION['infoUser']['user_diplome'];?>" target="_blank"></td>
          </tr>
          <tr>
            <td>Password:</td>
            <td><?php echo $_SESSION['infoUser']['user_password'];?></td>
          </tr>
          <tr>
            <td>Type:</td>
            <td><?php echo $_SESSION['infoUser']['user_type_name'];?></td>
          </tr>
            <?php } ?>
        </table>
    </details>

  </div>



</div>
