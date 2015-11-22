<!DOCTYPE html>
<html>
<head>
	<title>Se connecter à l'espace privée</title>
</head>
<body>
	<form action="../Controller/check_user.php" method="post">
		Identifiant:<br>
		<input type="text" name="username">
		<br>
		Mot de passe:<br>
		<input type="password" name="psw">
		<br>
		<input type="submit" value="Connexion">
	</form>
</body>
</html>