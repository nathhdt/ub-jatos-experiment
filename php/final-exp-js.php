<?php
require('sql.php');

// Fichier servant à retrouver le bon sujet à faire passer au candidat (URL appelée dans OSWeb)
$email = $_GET['email'];

// Montrer le détail des erreurs MySQL
ini_set('error_reporting', -1);
ini_set('display_errors', 1);


$stmt = $mysqli->prepare('SELECT `sujet` FROM `resultats` WHERE `email`= ?');

$stmt->bind_param("s", $email);

$stmt->execute();

$result = $stmt->get_result()->fetch_assoc());

echo (int)$result; 

// Echo les erreurs MySQL
echo 'Error '.$mysqli->errno.': '.$mysqli->error.'<br/>';

// Ferme la connexion SQL
$mysqli->close();

?>