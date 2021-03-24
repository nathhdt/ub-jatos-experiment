<?php
require('sql.php');

// Montrer le détail des erreurs MySQL
ini_set('error_reporting', -1);
ini_set('display_errors', 1);








//$stmt = $mysqli->query('SELECT `number` FROM `expeNumber`');

//$row = $stmt->fetch_array(MYSQLI_NUM);

//$nombreExperienceBDD = (int)$row[0];

//$fichierLiens = "../links.txt";
//$liens = file($fichierLiens);
//$URLExperience = $liens[$nombreExperienceBDD - 1];

// On change le numéro d'expérience et on le renvoie dans la BDD
//if ($nombreExperienceBDD == 16)
//{
//	$nombreExperienceBDD = 1;
//}
//else
//{
	//$nombreExperienceBDD++;
//}

//$stmt = $mysqli->prepare('UPDATE `expeNumber` SET `number`= ? WHERE 1');

//$stmt->bind_param("i", $nombreExperienceBDD);

//$stmt->execute();

// Echo les erreurs MySQL
echo 'Error '.$mysqli->errno.': '.$mysqli->error.'<br/>';

// Ferme la connexion SQL
$mysqli->close();

// Prochaine page
header('Location: ../phase-finale.php?email=notfound');




?>