<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  		<link rel="stylesheet" type="text/css" href="../assets/css/commun.css">
			<link rel="stylesheet" type="text/css" href="css/header.css">

				<link rel="stylesheet" type="text/css" href="css/Login.css">

			<script src="../assets/jscript/jscript.js"></script>
  			<link rel="shortcut icon" href="../assets/logo/Favicon.png">
			<title>Elearning | Login</title>
	</head>
	<body>


    <section id="main" class="">
      <div class="main">
    		<div class="form-area flex align-items-center justify-content-center">
    			<div class="login-form text-center">
    				<div class="login-header">
    					<form class="" method="post" action="../Controllers/Users/user/userController.php">
    					<h1>Login lllll!</h1>
    					<p>Welcome Back</p>
    				</div>
    				<div class="login-input">
    					<div class="login-field">
    						<label>Username</label>
    						<input type="text" name="user_name" placeholder="Entrez votre username...">
    					</div>
    					<div class="login-field">
    						<label>Mot de passe</label>
    						<input type="password" name="user_password" placeholder="Entrez votre mot de passe" id="password" required>
    					</div>
    					<input type="checkbox" onclick="showPassword()"> Show Password
    				</div>
    				<div class="login-footer flex justify-content-between align-items-center ">
    					<p>Vous n'avez pas de compte ? <a href="Register.php">Register</a> ici.</p>
    					<button class="button-24">Login</button>
    						<input type="hidden" name="action" value="login">
    				</div>
    			</form>
    			</div>
    		</div>
      </div>
    </section>
		<script>
		var password = document.getElementById("password")
		  , confirm_password = document.getElementById("confirm_password");

		function validatePassword(){
		  if(password.value != confirm_password.value) {
		    confirm_password.setCustomValidity("Passwords Don't Match");
		  } else {
		    confirm_password.setCustomValidity('');
		  }
		}

		password.onchange = validatePassword;
		confirm_password.onkeyup = validatePassword;

		</script>
	</body>
</html>
