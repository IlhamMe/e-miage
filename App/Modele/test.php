<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
<?php 

include("Utilisateur.php");

echo "debut du test \n";

$o = new Utilisateur("test", "test", "test", "test", "test");

print $o->getNom();

 ?>
</body>
</html>