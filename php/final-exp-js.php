<?php
require('sql.php');

// Fichier servant à retrouver le bon sujet à faire passer au candidat (URL appelée dans OSWeb)
$email = $_GET['email'];

// Montrer le détail des erreurs MySQL
//ini_set('error_reporting', -1);
//ini_set('display_errors', 1);


$stmt = $mysqli->prepare('SELECT `sujet` FROM `resultats` WHERE `email`= ?');

$stmt->bind_param("s", $email);

$stmt->execute();

$stmt->bind_result($sujet);

/* Récupération des valeurs */
$stmt->fetch();

$stmt->close();

// Echo du sujet
if ($sujet == '')
{
	echo '0';
}
else
{
	echo $sujet;
}

// Echo les erreurs MySQL
//echo 'Error '.$mysqli->errno.': '.$mysqli->error.'<br/>';

// Ferme la connexion SQL
$mysqli->close();

?>