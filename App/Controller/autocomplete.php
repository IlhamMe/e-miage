<?php
/*
* Author : Ali Aboussebaba
* Email : bewebdeveloper@gmail.com
* Website : http://www.bewebdeveloper.com
* Subject : Autocomplete using PHP/MySQL and jQuery
*/

// PDO connect *********
function connect() {
return new PDO('mysql:host=localhost;dbname=e-miage', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
 
$pdo = connect();
$keyword = '%'.$_POST['keyword'].'%';
$sql = "SELECT * FROM reference WHERE nom LIKE (:keyword) ORDER BY date DESC LIMIT 0, 15";
$query = $pdo->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$list = $query->fetchAll();
foreach ($list as $rs) {
    // put in bold the written text
    $name = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['nom']);
    $auteur = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['auteur']);
    $lien = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['lien']);
    $date = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['date']);
    $id = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['id']);
    // add new option
    echo '<tr onclick="set_item(\''.$rs['nom'].'\', \''.$rs['auteur'].'\', \''.$rs['lien'].'\', \''.$rs['date'].'\', \''.$rs['id'].'\')"><td>'.$name.'</td><td>'.$auteur.'</td><td><a href="'.$lien.'">'.$lien.'</a></td><td>'.$date.'</td><td><a href="../../Controller/suppr_ref.php?id='.$id.'">x</a></td></tr>';
}

// OR prenom LIKE (:keyword) 

?>



