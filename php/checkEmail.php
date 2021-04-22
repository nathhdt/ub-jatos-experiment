<?php
require('sql.php');

// Montrer le détail des erreurs MySQL
ini_set('error_reporting', -1);
ini_set('display_errors', 1);

session_start();

// Variables de la session
$_SESSION['email'] = $_POST['email'];




$stmt = $mysqli->prepare('SELECT COUNT(`email`) FROM `resultats` WHERE `email`= ?');
$stmt->bind_param('s', $_SESSION['email']);

$stmt->execute();

$row = $stmt->get_result()->fetch_row();

$nombreMail = $row[0];


if ($nombreMail >= 1)
{
	header('Location: ../survey5.php');
}
else
{
	header('Location: ../survey4.php?em=nf&sujet='.$_SESSION['sujet'].'&resultId='.$_SESSION['resultIdPhase2']);
}


?>