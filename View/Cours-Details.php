<?php
include('../Models/Cours/coursModel.php');
include('../database/database.php');

//instance de class newObject
$cours = new Cours($database);
$Ucours = $cours->readCoursByID($_GET['id']);

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  		<link rel="stylesheet" type="text/css" href="../assets/css/commun.css">
			<link rel="stylesheet" type="text/css" href="css/header.css">

				<link rel="stylesheet" type="text/css" href="css/Cours-Details.css">

			<link rel="stylesheet" type="text/css" href="css/client.css">
			<link rel="stylesheet" type="text/css" href="css/newsletter.css">
			<link rel="stylesheet" type="text/css" href="css/footer.css">
      <link rel="jsc" href="/css/master.css">
      <script type="text/javascript" src="../assets/jscript/jscript.js"></script>

  			<link rel="shortcut icon" href="../assets/logo/Favicon.png">
			<title>Elearning | <?php echo $Ucours['cours_name']; ?></title>
	</head>
	<body>

    <?php
      include('include/header.php');
    ?>

<section id="main">
  <div class="cours-details">
      <div class="cours-details-info">
        <div class="details-area">
          <div class="details-info-left">
            <div class="details-meta flex">
              <div class="details-meta-pull-left flex flex-wrap">
                <div class="details-teacher flex align-items-center">
                  <div class="details-teacher-image flex">
                    <img src="data:image/jpeg;base64, <?php echo base64_encode($Ucours['user_photo']); ?>">
                  </div>
                  <div class="details-teacher-text">
                    <label>Teacher</label>
                    <a href="Teachers.php"><p><?php echo $Ucours['user_last_name'].' '.$Ucours['user_first_name']; ?></p></a>
                  </div>
                </div>
                <div class="details-category flex align-items-center">
                  <span><i class="fa-solid fa-plus"></i></span>
                  <div class="details-category-info">
                    <label>Category</label>
                    <div class="details-category-text flex">
                      <a href="#"><?php echo $Ucours['category_name']; ?></a><span> | </span><p><?php echo $Ucours['category_sub_name']; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <h1 class="cours-title"><?php echo $Ucours['cours_name']; ?></h1>
            <div class="cours-meta flex">
              <div class="cours-meta-pull-left flex flex-wrap">
                <div class="cours-meta-lesson flex">
                  <span><i class="fa-solid fa-copy"></i> Nombre de leçon</span>
                </div>
                <div class="cours-meta-quiz flex">
                  <span><i class="fa-solid fa-puzzle-piece"></i> Nombre de quiz</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>
<section class="cours-content">
  <div class="container max-width1200">

    <input type="radio" name="section" id="overview" checked>
    <label class="section-label" for="overview">Overview</label>

    <input type="radio" name="section" id="curriculum">
    <label class="section-label" for="curriculum">Curriculum</label>

    <input type="radio" name="section" id="teacher">
    <label class="section-label" for="teacher">Teacher</label>

    <input type="radio" name="section" id="review">
    <label class="section-label" for="review">Review</label>

    <div class="section" id="overview-section">
			<div class="cours-description">
				<h2>Description du cours</h2>
        <p><?php echo $Ucours['cours_description']; ?></p>
			</div>
			<div class="cours-focus">
				<h2>Que vas-tu apprendre ?</h2>
				<ul>
					<li><?php echo $Ucours['cours_learn_1']; ?></li>
					<li><?php echo $Ucours['cours_learn_2']; ?></li>
					<li><?php echo $Ucours['cours_learn_3']; ?></li>
					<li><?php echo $Ucours['cours_learn_4']; ?></li>
					<li><?php echo $Ucours['cours_learn_5']; ?></li>
				</ul>
			</div>
			<div class="cours-objectives">
				<h2>Quel est notre Objectif dans ce cours ?</h2>
				<p><?php echo $Ucours['cours_objective']; ?></p>
			</div>
  	</div>

    <div class="section hidden" id="curriculum-section">
        <h2>Curriculum Section</h2>
				<!-- <img src="data:image/jpdf;base64, <?php echo base64_encode($Ucours['cours_curriculum_1']);?>" style="height: 200px;">-->
				<iframe src="data:application/pdf;base64, <?php echo base64_encode($Ucours['cours_curriculum_1']);?>" style="height: 1000px; width: 100%;"></iframe>
    </div>

    <div class="section hidden" id="teacher-section">
			<div class="cours-teacher flex">
				<div class="cours-teacher-image">
					<img src="data:image/jpeg;base64, <?php echo base64_encode($Ucours['user_photo']); ?>">
				</div>
				<div class="cours-teacher-text">
					<div class="cours-teacher-name">
						<a href="Teacher.php"><p><?php echo $Ucours['user_last_name'].' '.$Ucours['user_first_name']; ?></p></a>
					</div>
					<div class="cours-teacher-bio">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
					<div class="cours-teacher-socials flex flex-wrap">

					</div>
				</div>
			</div>
    </div>

 <section id="main" class="">
      <div class="main">



      </div>
    </section>
		<div class="section hidden" id="review-section">
			<div class="cours-reviews">
				<h3>Reviews / Commentaires</h3>
				<div class="form-area flex align-items-center justify-content-center">
					<div class="login-form text-center">
						<?php if (isset($_SESSION['infoUser'])) { ?>
						<div class="login-header">
							<form class="" method="post" action="../Controllers/Comments/commentController.php">
							<h1>Commentaire</h1>
						</div>
						<div class="">
							<div class="">
								<label>Titre</label>
								<input type="text" name="comment_title" placeholder="Entrez votre Commentaire...">
							</div>
							<div class="">
								<label>Contenu</label>
								<input type="text" name="commment_content" placeholder="Entrez votre Commentaire" >
							</div>
							<input type="hidden" name="user_id" value="<?php echo $_SESSION['infoUser']['user_id'] ?>">
						</div>
						<div class="">
							<button class="">Commentaire</button>
								<input type="hidden" name="action" value="create">
						</div>
					</form>
					</div>
				<?php } ?>
				</div>
				<ul class="cours-reviews-list">
					<li>
						<div class="cours-reviews-author-info">
							<p class="reviews-title">Quels beau travaille !</p>
							<div class="">

							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
    </div>
</section>
<script>
// Fonction pour gérer les changements de section en fonction de la sélection du bouton radio
const sections = document.querySelectorAll('.section');
const radioButtons = document.querySelectorAll('input[type="radio"]');

radioButtons.forEach((radio) => {
    radio.addEventListener('change', () => {
        sections.forEach((section) => {
            section.classList.add('hidden');
        });
        const selectedSection = document.querySelector(`#${radio.id}-section`);
        selectedSection.classList.remove('hidden');
    });
});
</script>

    <?php
			include('include/client.php');
			include('include/footer.php');
     ?>

	</body>
</html>
