<?php 

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Se connecter à l'espace privée</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="PC/css/style.css">
	<link rel="stylesheet" type="text/css" href="PC/css/form.css">
</head>
<body>
	<form action="../Controller/check_user.php" method="post" id="login">
		Identifiant:<br>
		<input type="text" name="username">
		<br>
		Mot de passe:<br>
		<input type="password" name="psw">
		<br>
		<input type="submit" value="Connexion" id="button">
	</form>
</body>
</html>