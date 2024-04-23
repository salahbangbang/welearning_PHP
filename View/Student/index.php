<?php
//
session_start();
//Si session est vide il redirige vers la page d'erreur
if (!isset($_SESSION['infoUser']) || $_SESSION['infoUser']['user_type_name'] !== 'Student'){
			//var_dump($_SESSION['infoUser']);
			//die();
	header('Location: ../../error.php');
	exit();
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  		<link rel="stylesheet" type="text/css" href="../../assets/css/commun.css">
			<link rel="stylesheet" type="text/css" href="css/header.css">

			<link rel="stylesheet" type="text/css" href="css/bodyleft.css">
			<link rel="stylesheet" type="text/css" href="css/bodyright.css">
				<link rel="shortcut icon" href="../../assets/logo/Favicon.png">

			<title><?php echo $_SESSION['infoUser']['user_last_name'];?> Home | Elearning</title>
	</head>
	<body>
		<?php
			include('include/header.php');
			include('include/bodyleft.php');
			include('include/bodyright.php');
		 ?>
	</body>
</html>
