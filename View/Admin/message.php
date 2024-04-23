<?php
  include("../../Controllers/Messages/allMessage.php");
?>

<div id="bodyright" class="">
  <h3>View All New Messages</h3>
  <div id="add">

    <table>
      <tr>
        <th>Full name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Delete</th>
      </tr>
      <?php foreach($AllMessage as $message) { ?>
      <tr>
        <td><?php echo $message['message_name'];?></td>
        <td><?php echo $message['message_email'];?></td>
        <td><?php echo $message['message_sujet'];?></td>
        <td><?php echo $message['message_content'];?></td>
        <td>
          <form action="../../Controllers/Messages/messageController.php" method="post">
            <input type="hidden" name="action" value="delete">
            <button value="<?php echo $message['message_id']; ?>" name="deleteMessage">Delete</button>
          </form>
        </td>
      </tr> <?php } ?>
    </table>
</div>
