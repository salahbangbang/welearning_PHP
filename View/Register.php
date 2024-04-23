<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  		<link rel="stylesheet" type="text/css" href="../assets/css/commun.css">
			<link rel="stylesheet" type="text/css" href="css/header.css">

				<link rel="stylesheet" type="text/css" href="css/Register.css">

			<script src="../assets/jscript/jscript.js"></script>
  			<link rel="shortcut icon" href="../assets/logo/Favicon.png">
			<title>Elearning | Register</title>
	</head>
	<body>

		<?php
			include("../Controllers/Users/user-type/allUsertype.php");
		?>

<section id="main" class="">
  <div class="main">
		<div class="form-area flex align-items-center justify-content-center">
			<div class="register-form text-center">
				<div class="register-header">
					<form class="" method="post" action="../Controllers/Users/user/userController.php">
					<h1>Register Now !</h1>
					<p>Create an account depending on your credential</p>
				</div>
				<div class="register-input">
					<div class="register-field">
						<label>Nom</label>
						<input type="text" name="user_last_name" placeholder="Entrez votre nom...">
					</div>
					<div class="register-field">
						<label>Prenom</label>
						<input type="text" name="user_first_name" placeholder="Entrez votre prenom...">
					</div>
					<div class="register-field">
						<label>Email</label>
						<input type="email" name="user_email" placeholder="Entrez votre email..." pattern="[^@\s]+@[^@\s]+\.[^@\s]+">
					</div>
					<div class="register-field">
						<label>Username</label>
						<input type="text" name="user_name" placeholder="Entrez votre username...">
					</div>
					<div class="register-field">
						<label>Fonction</label>
						<select name="user_type_id" required>
			      	<option value="">-choose-</option>
			         <?php foreach($AllUsertype as $usertype) { ?>
			         	<option value="<?php echo $usertype['user_type_id']; ?>">
			         <?php echo $usertype['user_type_name']; ?>
							</option>
			         <?php } ?>
						</select>
						<span>You may need to present complementary information after creating your account. (Teacher, Writter)</span>
					</div>
					<div class="register-field">
						<label>Mot de passe</label>
						<input type="password" name="user_password" placeholder="Entrez votre mot de passe" id="password" required>
					</div>
					<input type="checkbox" onclick="showPassword()"> Show Password
					<div class="register-field">
						<label>Confirmer mot de passe</label>
						<input type="password" placeholder="Entrez votre mot de passe" id="confirm_password" required>
					</div>
				</div>
				<div class="register-footer flex justify-content-between align-items-center ">
					<p>Vous avez déja un compte ? <a href="Login.php">Login</a> ici.</p>
					<button class="button-24">Register</button>
						<input type="hidden" name="action" value="create">
				</div>
			</form>
			</div>

		</div>

  </div>

</section>


	</body>

</html>
