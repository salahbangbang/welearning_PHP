<?php
include('../../Controllers/About/allAbout.php');
include('../../database/database.php');
?>

<div id="bodyright" class="">
  <h3>About Us</h3>
  <div id="about">
    <details id="target-me">
      <summary>See and Update About us</summary>
      <form action="../../Controllers/About/aboutController.php" method="post" >
          <?php foreach($AllAbout as $about) { ?>
        <textarea name="about_summary"><?php echo $about['about_summary'] ?></textarea>
        <textarea name="about_content"><?php echo $about['about_content'] ?></textarea>
        <input type="hidden" name="about_id" value="<?php echo $about['about_id']; ?>">
          <?php } ?>
          <button name="add" style="--c:#000">Update</button>
            <input type="hidden" name="action" value="update">
      </form>
    </details>


  </div>

</div>
