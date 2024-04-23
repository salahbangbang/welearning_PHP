<?php
  include('../../Controllers/Informations/allInformation.php');
  //include('../../Controllers/Contacts/allContact.php');
  include('../../database/database.php');
?>

<div id="bodyright" class="">
  <h3>Contact Us</h3>
  <div id="contact" class="">
    <details id="target-me">
      <summary>See and Update our Contact</summary>
      <form action="../../Controllers/Informations/informationController.php" method="post" >
        <table>
            <?php foreach($AllInformation as $information) { ?>
          <tr>
            <td>Email</td>
            <td><input type="email" name="information_email" value="<?php echo $information['information_email'] ;?>"></td>
          </tr>
          <tr>
            <td>Facebook</td>
            <td><input type="text" name="information_facebook" value="<?php echo $information['information_facebook'] ;?>"></td>
          </tr>
          <tr>
            <td>Twitter</td>
            <td><input type="text" name="information_twitter" value="<?php echo $information['information_twitter'] ;?>"></td>
          </tr>
          <tr>
            <td>Phone</td>
            <td><input type="tel" name="information_phone" value="<?php echo $information['information_phone'] ;?>"></td>
          </tr>
                <input type="hidden" name="information_id" value="<?php echo $information['information_id']; ?>">
            <?php } ?>
        </table>

          <button name="add" style="--c:#000">Save</button>
            <input type="hidden" name="action" value="update">
      </form>
    </details>

  </div>

</div>
