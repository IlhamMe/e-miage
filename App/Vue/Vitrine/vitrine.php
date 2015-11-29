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
    }
?>  
     <br><br><br>
     <a href="javascript: scroll(0, 0);">↑ Retour en haut ↑</a>
     <br><br><br>
    </div>
</body>
</html>