<?php
      include('../Controllers/Users/user/allTeacher.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  		<link rel="stylesheet" type="text/css" href="../assets/css/commun.css">
			<link rel="stylesheet" type="text/css" href="css/header.css">

				<link rel="stylesheet" type="text/css" href="css/Teachers.css">

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
          <h1>Professeurs Certifié(e)s</h1>
					<p></p>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="teacher-list">
  <div class="teacher-list">
    <div class="container max-width1200">
      <div class="row">

      <!--  <div class="teacher-card">
          <div class="staff">
            <div class="teacher-image flex align-items-stretch">
              <div class="image align-self-stretch">
                <img src="../assets/image/Teacher.jpg">
              </div>
            </div>
            <div class="teacher-text text-center">
              <h3>さくら みこ</h3>
              <span>Teacher</span>
              <div class="teacher-introduction">
                <p>Nathan m'a choisit pour mes talents pédagogiques.</p>
                <ul class="teacher-socials">
                  <li><a href="#"><span><i class="fa-brands fa-instagram"></i></span></a></li>
                  <li><a href="#"><span><i class="fa-brands fa-twitter"></i></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div> -->

            <?php foreach($AllUser as $user){ ?>
        <div class="teacher-card">
          <div class="staff">
            <div class="teacher-image flex align-items-stretch">
              <div class="image align-self-stretch">
                <img src="data:image/jpeg;base64, <?php echo base64_encode($user['user_photo']) ;?>">
              </div>
            </div>
            <div class="teacher-text text-center">
              <h3><?php echo $user['user_last_name'] .' ' .$user['user_first_name'];?></h3>
              <span>Teacher</span>
              <div class="teacher-introduction">
                <p>Nathan m'a choisit pour mes talents pédagogiques.</p>
                <ul class="teacher-socials">
                  <li><a href="#"><span><i class="fa-brands fa-instagram"></i></span></a></li>
                  <li><a href="#"><span><i class="fa-brands fa-twitter"></i></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
            <?php } ?>
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
