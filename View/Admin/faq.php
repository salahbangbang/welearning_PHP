<?php
include("../../Controllers/FAQ/allFaq.php");

?>

<div id="bodyright" class="">
  <h3>View All F.A.Q</h3>
  <div id="add">
    <details>
      <summary>Add F.A.Q</summary>
      <form action="../../Controllers/Faq/faqController.php" method="post" >
        <input type="text" name="faq_question" placeholder="Add a Question">
        <textarea name="faq_answer" placeholder="Here the Answer"></textarea>
          <button name="add" style="--c:#000">Add F.A.Q</button>
            <input type="hidden" name="action" value="create">
      </form>
    </details>

  <?php foreach($AllFaq as $faq) { ?>
    <details>
      <summary><?php echo $faq['faq_question']?></summary>
      <form action="../../Controllers/Faq/faqController.php" method="post" >
        <textarea name="faq_answer"><?php echo $faq['faq_answer']?></textarea>
          <button name="deleteFaq" value="<?php echo $faq['faq_id']; ?>" style="--c:#000">Delete F.A.Q</button>
            <input type="hidden" name="action" value="delete">
      </form>
    </details>
  <?php } ?>




  </div>

</div>
