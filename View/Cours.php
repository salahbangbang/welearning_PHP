<?php
	include('../Controllers/Cours/allCours.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  		<link rel="stylesheet" type="text/css" href="../assets/css/commun.css">
			<link rel="stylesheet" type="text/css" href="css/header.css">

				<link rel="stylesheet" type="text/css" href="css/Cours.css">

			<link rel="stylesheet" type="text/css" href="css/client.css">
			<link rel="stylesheet" type="text/css" href="css/newsletter.css">
			<link rel="stylesheet" type="text/css" href="css/footer.css">
  			<link rel="shortcut icon" href="../assets/logo/Favicon.png">
			<title>Elearning | Teachers</title>
	</head>
	<body>

    <?php
      include('include/header.php');
    ?>

<section id="main">
  <div class="main">
    <div class="overlay">
      <div class="container max-width1140">
        <div class="main-wrap row align-items-center justify-content-center">
          <h1>Nos Cours</h1>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="cours-list">
  <div class="cours-list">
    <div class="container max-width1200">
      <header class="cours-header">
        <h1>Liste des cours disponibles</h1>
      </header>
      <div class="cours-research">
        <form class="cours-form" action="index.html" method="get">
          <input type="text" name="" placeholder="Rechercher un cours">
          <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
      </div>

			<?php if (!isset($_SESSION['infoUser'])) { ?>
			<h1 class="not-connected">Veuillez-vous connecter !</h1>
			<?php }else{ ?>

		<?php foreach($AllCours as $cours) { ?>
      <ul class="cours-card flex flex-wrap">
        <li class="cours-wrap">
          <div class="cours-wrap-thumbnail">
            <a href="#">
              <div class="cours-thumbnail">
                <img src="data:image/jpeg;base64, <?php echo base64_encode($cours['cours_photo']) ;?>">
              </div>
            </a>
          </div>
          <div class="cours-content">
            <div class="cours-category">
              <a href="#"><?php echo $cours['category_name'];?></a>
            </div>
            <a href="Cours-Details.php?id=<?php echo $cours['cours_id'];?>" class="cours-link"><h2><?php echo $cours['cours_name']; ?></h2></a>
            <div class="cours-wrap-meta flex flex-wrap">
              <div class="cours-meta-lesson">
                <span><i class="fa-solid fa-copy"></i> Nombre de leçon</span>
              </div>
              <div class="cours-meta-quiz">
                <span><i class="fa-solid fa-puzzle-piece"></i> Nombre de quiz</span>
              </div>
            </div>
            <div class="cours-info flex flex-wrap align-items-center justify-content-between">
              <p><?php echo $cours['cours_description']; ?></p>
							<span><?php echo $cours['user_last_name'].' '.$cours['user_first_name']; ?></span>
            </div>
							<a href="Cours-Details.php" class="button-24">Voir plus</a>
          </div>
        </li>
      </ul>
		<?php } ?>

    </div>

		<?php } ?>
  </div>

</section>

    <?php
			include('include/client.php');
			include('include/newsletter.php');
			include('include/footer.php');
     ?>

	</body>
</html>
