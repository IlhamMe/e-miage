Sur windows : 
	—> Commencer par installer WAMP Server

Sur macbook : 
	—> Commencer par installer MAMP Server


Une fois l’outil installé sur votre machine au choix iOS ou Windows, vous allez devoir importer le fichier SQL représentant la base de données pour pouvoir commencer à utiliser l’application.

Pour cela, lancer phpmyadmin à l’aide de l’outil MAMP ou WAMP.

Cliqué sur l’onglet « importer ».

Choisissez le fichier « base.sql » qui se trouve dans « App/Modele ».

Vous pouvez ensuite exécuter l’importation.

Vous devez maintenant configurer les informations d’authentification de la base de données :
Ouvrez le fichier App/Modele/Base.php et configuré les informations de la base telles que le nom de la base, l’hôte, le login et le mot de passe.
Faite de même avec le fichier App/Modele/autocomplete.php

Vous pouvez maintenant lancer l’application aux adresses suivantes : 
	—> e-miage/App/Vue/login.php : Pour accéder à la partie privée de l’application 									(plateforme de travail collaboratif)
	—> e-miage/App/Vue/Vitrine/vitrine.php : Pour accéder à la partie publique de l’application 							(vitrine de la formation miage)