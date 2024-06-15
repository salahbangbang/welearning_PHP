<?php
//include("../Controllers/About/allAbout.php");
//include("../Controllers/Contacts/allContact.php");
?>

<footer id="footer" class="">
  <div class="footer">
    <div class="container max-width1100">
      <div class="row">
        <div class="footer-column">
          <div class="footer-about">
              <a href="Home.php"><img src="../assets/logo/LogoFooter.png"></a>
              <?php foreach($AllAbout as $about) { ?>
                <p><?php echo $about['about_summary'] ?></p>
              <?php } ?>
              <div class="footer-socials">
              <?php foreach($AllInformation as $information) { ?>
                <a href="<?php echo $information['information_facebook']; ?>"><i class="fa-brands fa-facebook"></i></a>
                <a href="<?php echo $information['information_twitter']; ?>"><i class="fa-brands fa-twitter"></i></a>
              <?php } ?>  
              </div>
          </div>
        </div>
        <div class="footer-column">
          <h4>Useful link</h4>
          <div class="footer-menu">
            <ul>
              <li><a href="Home.php">Home</a></li>
              <li><a href="Cours.php">Cours</a></li>
              <li><a href="Teachers.php">Teachers</a></li>
              <li><a href="Blog.php">Blog</a></li>
              <li><a href="About.php">A propos</a></li>
              <li><a href="Contact.php">Contact</a></li>
              <li><a href="Team.php">Notre Equipe</a></li>
            </ul>
          </div>
        </div>
        <div class="footer-column">
          <h4>Recent Post</h4>
        </div>
        <div class="footer-column">
          <h4>Contact</h4>
          <ul>
            <?php foreach($AllInformation as $information) { ?>
              <li>Phone: <?php echo $information['information_phone']; ?></li>
              <li>Mail: <?php echo $information['information_email']; ?></li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-end">
      <div class="container max-width1100">
        <p>En <a href="#">Term & Condition</a></p>
      </div>

    </div>
  </div>
</footer>
