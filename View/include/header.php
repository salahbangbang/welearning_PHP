<?php
  session_start();
  include("../Controllers/About/allAbout.php");
  //include("../Controllers/Contacts/allContact.php");
  include("../Controllers/Informations/allInformation.php");
?>

<header id="site-header" class="">
  <section class="header header-sticky">
    <div class="top-header">
      <div class="container">
        <div class="row">
          <div class="top-left flex-wrap justify-content-center justify-content-lg-start flex">
            <div class="header-mail flex align-items-center">
              <i class="fa-solid fa-envelope"></i>
            <?php foreach($AllInformation as $information) { ?>
              <a href="mailto://<?php echo $information['information_email'];?>"><?php echo $information['information_email'];?></a>
            </div>
            <div class="header-phone align-items-center">
              <p><i class="fa-solid fa-phone"></i><?php echo $information['information_phone'];?></p>
            <?php } ?>
            </div>
          </div>
          <div class="top-right flex-wrap justify-content-center justify-content-lg-end align-items-center flex">
            <div class="header-welcome align-items-stretch">
              <?php if(isset($_SESSION['infoUser'])){ ?>
                <p>Vous êtes connecté(e) en tant que <?php echo $_SESSION['infoUser']['user_type_name']; ?></p>
              <?php }else{ ?>
                <p>Welcome on our Website !</p>
                <?php  } ?>
            </div>
            <div class="header-user">
              <ul class="flex justify-content-center align-items-center">
                <?php if(isset($_SESSION['infoUser'])){ ?>
                  <li>
                    <form class="" action="../Controllers/Users/user/userController.php" method="post">
                      <button class="" onclick="clicked(event)">Logout</button>
                        <input type="hidden" name="action" value="logout">
                      </form>
                  </li>
                <?php }else{ ?>
                  <li><a href="Login.php">Login</a></li>
                <?php  } ?>
                <?php if(isset($_SESSION['infoUser'])){ ?>
                  <li class="profile">
                    <a href="http://172.20.0.212/View/<?php echo $_SESSION['infoUser']['user_type_name'];?>/index.php" style="text-transform: uppercase;"><?php echo $_SESSION['infoUser']['user_first_name']; ?></a>
                  </li>
                <?php }else{ ?>
                  <li><a href="Register.php">Register</a></li>
                <?php  } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom-header">
      <div class="container max-width1200">
        <div class="flex align-items-center justify-content-between flex-wrap position-relative">
          <div class="bottom-left flex align-items-center">
            <div class="header-logo">
              <a href="Home.php"><img src="../assets/logo/Logo.png"></a>
            </div>
            <div class="header-menu">
              <nav>
                <ul class="flex align-items-center">
                  <li><a href="Home.php">Home</a></li>
                  <li>
                    <a href="Cours.php">Cours</a>
                    <ul class="header-menu-submenu">
                        <li>TEST</li>
                        <li>TEST</li>
                    </ul>
                  </li>
                  <li><a href="Teachers.php">Teachers</a></li>
                  <li><a href="Blog.php">Blog</a></li>
                  <li><a href="About.php">A propos</a></li>
                  <li><a href="Contact.php">Contact</a></li>
                  <li><a href="Team.php">Notre Equipe</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="bottom-right">
            <?php if(isset($_SESSION['infoUser']) && isset($_SESSION['infoUser']['user_type_name']) && $_SESSION['infoUser']['user_type_name'] == 'Admin') { ?>
                <a href="http://localhost/elearning/View/Admin/" class="button-19">Appuyer sur moi</a>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</header>

<script>
function clicked(e)
{
    if(!confirm('Voulez-vous vraiment vous deconnecté(e) ?')) {
        e.preventDefault();
    }
}
</script>
