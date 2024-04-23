<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  		<link rel="stylesheet" type="text/css" href="../assets/css/commun.css">
			<link rel="stylesheet" type="text/css" href="css/header.css">

				<link rel="stylesheet" type="text/css" href="css/Blog.css">

			<link rel="stylesheet" type="text/css" href="css/client.css">
			<link rel="stylesheet" type="text/css" href="css/newsletter.css">
			<link rel="stylesheet" type="text/css" href="css/footer.css">
  			<link rel="shortcut icon" href="../assets/logo/Favicon.png">
			<title>Elearning | Blog</title>
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
          <h1>Blog</h1>
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
