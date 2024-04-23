<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  		<link rel="stylesheet" type="text/css" href="../assets/css/commun.css">
			<link rel="stylesheet" type="text/css" href="css/header.css">
				<link rel="stylesheet" type="text/css" href="css/Home.css">
			<link rel="stylesheet" type="text/css" href="css/client.css">
			<link rel="stylesheet" type="text/css" href="css/newsletter.css">
			<link rel="stylesheet" type="text/css" href="css/footer.css">
  			<link rel="shortcut icon" href="../assets/logo/Favicon.png">
			<title>Elearning | Home</title>
	</head>
	<body>

    <?php
      include('include/header.php');
			include("../Controllers/Categories/category/allCategory.php");
    ?>

<section id="main">
	<div class="main">
		<div class="overlay">
			<div class="container max-width1140">
				<div class="row">
					<div class="main-wrap flex flex-column justify-content-center align-items-center">
						<div class="main-title">
							<h4>La plateforme N°1 de l'apprentissage en ligne</h4>
								<?php if (isset($_SESSION['infoUser'])) { ?>
        			<h1><?php echo "Bienvenue " .$_SESSION['infoUser']['user_first_name'];?></h1>
      					<?php }else{ ?>
        			<h1>Bienvenue sur WeLearn</h1>
      					<?php } ?>
						</div>
						<div class="main-description text-center">
							<p>Explorez un monde d'apprentissage ludique et interactif conçu spécialement pour les élèves de Cours Préparatoire.
							   Bienvenue sur notre plateforme d'e-learning où chaque leçon devient une aventure captivante pour votre enfant en classe de primaire.</p>
						</div>
						<div class="main-conclusion">
							<a href="Cours.php">Découvrir nos cours</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="home-category">
	<div class="home-category">
		<div class="container">
			<div class="flex flex-wrap align-items-stretch">
				<?php foreach($AllCategory as $category) { ?>
				<div class="category-box">
						<div class="category-icon">
								<span><i class="<?php echo $category['category_logo'];?>"></i></span>
						</div>
						<header class="category-title">
							<h2><?php echo $category['category_name'];?></h2>
						</header>
						<div class="category-description">
							<p><?php echo $category['category_description'];?></p>
						</div>
						<footer>
							<a href="Cours.php">En savoir +</a>
						</footer>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
<section id="home-blog">
	<div class="home-blog">
		<div class="container max-width1100">
			<div class="row">
				<div class="home-blog-top">
					<header class="flex align-items-center justify-content-between">
						<h2>Our writters wrote</h2>
          	<a href="#" class="button-24">En voir +</a>
					</header>
				</div>

				<div class="blog-flex">
					<div class="blog-content flex flex-wrap justify-content-between">
						<figure class="blog-thumbnail">
            	<a href="#"><img src="../assets/image/Blog1.jpg"></a>
          	</figure>
						<div class="blog-content-wrap">
							<header>
								<h2><a href="#">La concentration...</a></h2>
								<div class="entry-meta flex flex-wrap align-items-center">
                  <div class="blog-description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                  </div>
                  <div class="blog-author">
                    <a href="#">Eliza Klein</a>
                  </div>
                  <div class="blog-date">
                    <p> 11 septembre 2023</p>
                  </div>
                </div>
							</header>
						</div>
					</div>
				</div>
				<div class="blog-flex">
					<div class="blog-content flex flex-wrap justify-content-between">
						<figure class="blog-thumbnail">
            	<a href="#"><img src="../assets/image/Blog2.jpg"></a>
          	</figure>
						<div class="blog-content-wrap">
							<header>
								<h2><a href="#">La concentration...</a></h2>
								<div class="entry-meta flex flex-wrap align-items-center">
                  <div class="blog-description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                  </div>
                  <div class="blog-author">
                    <a href="#">Eliza Klein</a>
                  </div>
                  <div class="blog-date">
                    <p> 11 septembre 2023</p>
                  </div>
                </div>
							</header>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<section class="home-cours">

</section>




    <?php
			include('include/client.php');
			include('include/newsletter.php');
			include('include/footer.php');
     ?>

	</body>
</html>
