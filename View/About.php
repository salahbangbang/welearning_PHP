<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  		<link rel="stylesheet" type="text/css" href="../assets/css/commun.css">
			<link rel="stylesheet" type="text/css" href="css/header.css">
			<link rel="stylesheet" type="text/css" href="css/About.css">
			<link rel="stylesheet" type="text/css" href="css/client.css">
			<link rel="stylesheet" type="text/css" href="css/newsletter.css">
			<link rel="stylesheet" type="text/css" href="css/footer.css">
  			<link rel="shortcut icon" href="../assets/logo/Favicon.png">
			<title>Elearning | A propos</title>
	</head>
	<body>

    <?php
      include('include/header.php');
      include("../Controllers/FAQ/allFaq.php");
			include("../Controllers/Terms/allTerm.php");
    ?>

<section id="main">
  <div class="main">
    <div class="overlay">
      <div class="container max-width1140">
        <div class="main-wrap row align-items-center justify-content-center">
          <h1>A propos du site</h1>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="about">
  <div class="about">

    <div class="FAQ">
      <h1>F.A.Q.</h1>
			<?php foreach($AllFaq as $faq) { ?>
				<h3><?php echo "Question: ".$faq['faq_question'];?></h3>
				<p><?php echo "Réponse: " .$faq['faq_answer'];?></p>
				<?php } ?>
    </div>

    <div id="term" class="term">
			<h1>Terms & Conditions</h1>
			<?php foreach($AllTerm as $term) { ?>
				<h3><?php echo "Intitulé: " .$term['term_name'];?></h3>
				<p><?php echo $term['term_content'];?></p>
				<p><?php echo "A qui ce Term s'adresse t-il ? " .$term['user_type_name'];?></p>
			<?php } ?>
		</div>

  </div>

</section>

    <?php
			include('include/client.php');
			include('include/newsletter.php');
			include('include/footer.php');
     ?>

	</body>
</html>
