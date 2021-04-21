<?php
require('sql.php');
session_start();

// Montrer le détail des erreurs MySQL
//ini_set('error_reporting', -1);
//ini_set('display_errors', 1);

// Variables de la session
$_SESSION['email'] = $_POST['email'];
$_SESSION['age'] = (int)$_POST['age'];
$_SESSION['genre'] = $_POST['genre'];
$_SESSION['etudes'] = $_POST['etudes'];
$_SESSION['filiere'] = $_POST['filiere'];
$_SESSION['langueMaternelle'] = $_POST['langueMaternelle'];
$_SESSION['langueX'] = $_POST['langueX'];
$_SESSION['notionsLangueX'] = $_POST['notionsLangueX'];

// Date à laquelle s'est finie l'expérience
$datePhase1 = date("Y-m-d H:m:s");
$dp2 = mktime(0, 0, 0, 1, 1, 1901);
$datePhase2 = date("Y-m-d H:m:s", $dp2);
$empty = "";

$stmt = $mysqli->prepare('INSERT INTO `resultats`(`datePhase1`, `email`, `sujet`, `resultId`, `anneeDeNaissance`, `genre`, `niveauEtudes`, `filiere`, `langueMaternelle`, `langueSwahili`, `notionsLangueSwahili`, `commentairesPhase1`, `datePhase2`, `sujetFinal`, `resultIdPhase2`, `sensHabitudesApprentissage`, `methodeDesTests`, `frequenceMethodeDesTests`, `efficaciteMethodeDesTests`, `materielParticulier`, `frequenceMaterielParticulier`, `pourquoiMaterielParticulier`, `affirmationApprendreVocabulaire2Sens`, `commentairesPhase2`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?, ?)');

$stmt->bind_param("ssiiissssssssiissiisisss", $datePhase1, $_SESSION['email'], $_SESSION['sujet'], $_SESSION['resultId'], $_SESSION['age'], $_SESSION['genre'], $_SESSION['etudes'], $_SESSION['filiere'], $_SESSION['langueMaternelle'], $_SESSION['langueX'], $_SESSION['notionsLangueX'], $empty, $datePhase2, $empty, $empty, $empty, $empty, $empty, $empty, $empty, $empty, $empty, $empty, $empty);

$stmt->execute();

// Echo les erreurs MySQL
//echo 'Error '.$mysqli->errno.': '.$mysqli->error.'<br/>';

// Ferme la connexion SQL
$mysqli->close();

// Prochaine page
header('Location: ../survey2.php');
?>