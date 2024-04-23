<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  		<link rel="stylesheet" type="text/css" href="../assets/css/commun.css">
			<link rel="stylesheet" type="text/css" href="css/header.css">

				<link rel="stylesheet" type="text/css" href="css/Contact.css">

			<link rel="stylesheet" type="text/css" href="css/client.css">
			<link rel="stylesheet" type="text/css" href="css/newsletter.css">
			<link rel="stylesheet" type="text/css" href="css/footer.css">
  			<link rel="shortcut icon" href="../assets/logo/Favicon.png">
			<title>Elearning | Contact</title>
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
          <h1>Contact</h1>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="contact" class="">
			 <div class="contact">
			 <div class="container contact-container">
				 <div class="row-contact justify-content-center">
					 <div class="g-contact">
						 <div class="wrapper-contact">
							 <div class="row-contact no-gutters">

								 <div class="contact-right flex align-items-stretch">
									 <div class="contact-wrap">
										 <h2>Envoyez nous un Message</h2>
										 <form class="contact-form" action="../Controllers/Messages/messageController.php" method="post">
											 <div class="row-contact-form">
												 <div class="form6">
													 <div class="form-group-contact">
													 	<label for="">Full Name</label>
														<input class="form-input-contact" type="text" name="message_name" placeholder="Full name...">
													 </div>
												 </div>
												 <div class="form6">
													 <div class="form-group-contact">
													 	<label for="">Email Adress</label>
														<input class="form-input-contact" type="text" name="message_email" placeholder="Email...">
													 </div>
												 </div>
												 <div class="form12">
													 <div class="form-group-contact">
													 	<label for="">Sujet</label>
														<input class="form-input-contact" type="text" name="message_sujet" placeholder="Sujet...">
													 </div>
												 </div>
												 <div class="form12">
													 <div class="form-group-contact">
													 	<label for="">Message</label>
														<textarea class="form-input-contact" name="message_content" rows="4" cols="30" placeholder="Message..."></textarea>
													 </div>
												 </div>
												 <div class="form12">
													 <div class="form-group-contact">
														 <input class="form-input-butt form-input-button" type="submit" value="Envoyer">
														 	<input type="hidden" name="action" value="create">
													 </div>
												 </div>
											 </div>
										 </form>
									 </div>
								 </div>
								 <div class="contact-left flex align-items-stretch">
									 <div class="info-wrap bg-primary">
										 <h2>Gardons le contact</h2>
										 <p>Nous sommes à l'écoute de toutes propositions ou si vous voulez simplement discuter avec notre équipe</p>
										 <div class="info-box flex align-items-center">
											 <div class="info-icon flex align-items-center justify-content-center">
											 	<span><i class="fa-solid fa-phone C"></i></span>
											 </div>
											 <div class="info-text">
											 	<p>Telephone:<a href="tel://"></a></p>
											 </div>
										 </div>
										 <div class="info-box flex align-items-center">
											 <div class="info-icon flex align-items-center justify-content-center">
											 	<span><i class="fa-solid fa-envelope C"></i></span>
											 </div>
											 <div class="info-text">
											 	<p>Email:<a href="mailto://welearn@gmail.com"> Welearn@gmail.com</a></p>
											 </div>
										 </div>
										 <div class="info-box flex align-items-center">

										 </div>
										 <div class="info-logo">
										 	<span><img src="../assets/logo/Logo.png"></span>
										 </div>
									 </div>
								 </div>

							 </div>
						 </div>
					 </div>
				 </div>
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
