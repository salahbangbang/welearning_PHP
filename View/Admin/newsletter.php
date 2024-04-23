<?php
include("../../Controllers/Newsletters/allNewsletter.php");
?>

<div id="bodyright" class="">
  <h3>View All Newsletter</h3>
  <div id="add">
    <span><button onclick="sortTable()">Sort</button></span>

    <table id="myTable">
      <tr>
        <th>Email</th>
        <th>Delete</th>
      </tr>
      <?php foreach($AllNewsletter as $newsletter) { ?>
      <tr>
        <td style="text-align: center;"><?php echo $newsletter['newsletter_email'];?></td>
        <td style="text-align: center;">
          <form action="../../Controllers/Newsletters/newsletterController.php" method="post">
            <input type="hidden" name="action" value="delete">
            <button value="<?php echo $newsletter['newsletter_id']; ?>" name="deleteNewsletter">Delete</button>
          </form>
        </td>
      </tr> <?php } ?>
    </table>

  </div>

</div>
