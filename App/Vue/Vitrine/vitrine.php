<html>
<head>

    <title>MIAGE à distance site de l'Université de paris saclay - International e-Miage</title>
    <meta charset="UTF-8" />
    <link href="/e-miage/App/Vue/Vitrine/CSS/StyleProgramme.css" type="text/css" rel="stylesheet" />
    <link rel="shortcut icon" href="favicon.ico" />

</head>
<body>

<?php 
    include("../../Controller/check_cat.php"); 
?>
    <header>
        <img id = "imheader" src="../../images/logo-e-miage.PNG" width="100%" height="100px">
    </header>

    <div class="content">
        <nav id="cssmenu">
            <ul id="nav">
    <?php
        // Affichage des references existante 
        while($row = mysql_fetch_array($req)){
            print('<li>');
            print('<a href="vitrine.php?id='.$row['id'].'">'.$row['titre'].'</a>');
            print('</li>');
        }
    ?>
            </ul>
        </nav>
<?php

    if(isset($_GET['id'])){
        include("../../Controller/getcatbyid.php");
        $row = mysql_fetch_array($req);
?>
        <div id="titre_page">
            <h2><?php echo $row['titre']; ?></h2>
            </br>
        </div>
  
        <div id="content">      
            <p id="p">
            <?php echo $row['contenu']; ?>
            </p>
        </div>
<?php
    }else{ ?>
    <div id="titre_page">
        <h2>Présentation</h2>
            </br>
        </div>
        <div id="content">      
            <p id="p">
         Le master MIAGE (Méthodes Informatiques Appliquées à la Gestion de l’Entreprise) est un diplôme national habilité à l’Université d’Evry-Val-d’Essonne depuis 1991. A compter de septembre 2015, il est possible de suivre la première année du master à distance1 dans le cadre de la formation continue, selon un dispositif national « E-miage ». Ce dispositif  s’appuie sur un  consortium international E-MIAGE constitué en 2015 de 9 universités françaises et d’un certain nombre d’établissements étrangers (source : <a href:"http://www.e-miage.fr/">http://www.e-miage.fr/</a>). Les  modules constitutifs de chaque Unité d’Enseignement  (UE) du master MIAGE sont proposés sous la forme d’activités pédagogiques accessibles à distance. Les apprenants bénéficient d’un tuteur et de l’appui de l’université d’inscription notamment lors des regroupements présentiels.  
        La formation E-Miage s’adresse aux cadres informatiques en activité ou en recherche d’emploi souhaitant</br>
        <ul id="ul">
         <li>développer  leurs compétences et acquérir un diplôme. La souplesse dans le rythme de progression vers le diplôme permet de répondre aux besoins des apprenants ayant des contraintes professionnelles et personnelles ; </li>
        <li>compléter leurs acquis dans le cadre d’une VAE (validation des acquis de l’expérience) ;</li>
        <li>une spécialisation ou une remise à niveau ponctuelle indépendamment d’un diplôme.</li>   
        </ul>
            </p>
        </div>
 <?php   }
?>  
     <br><br><br>
     <a href="javascript: scroll(0, 0);">↑ Retour en haut ↑</a>
     <br><br><br>
    <footer><img src="../../images/signature.PNG"></footer>
    </div>
</body>
</html>