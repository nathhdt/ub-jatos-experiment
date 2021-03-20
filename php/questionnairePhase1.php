<?php
require('sql.php');
session_start();

// Montrer le détail des erreurs MySQL
//ini_set('error_reporting', -1);
//ini_set('display_errors', 1);

// Variables de la session
$_SESSION['nom'] = $_POST['nom'];
$_SESSION['prenom'] = $_POST['prenom'];
$_SESSION['age'] = (int)$_POST['age'];
$_SESSION['genre'] = $_POST['genre'];
$_SESSION['etudes'] = $_POST['etudes'];
$_SESSION['filiere'] = $_POST['filiere'];
$_SESSION['langueMaternelle'] = $_POST['langueMaternelle'];
$_SESSION['langueX'] = $_POST['langueX'];

// Date à laquelle s'est finie l'expérience
$datePhase1 = date("Y-m-d H:m:s");
$dp2 = mktime(0, 0, 0, 1, 1, 1901);
$datePhase2 = date("Y-m-d H:m:s", $dp2);
$empty = "";

$stmt = $mysqli->prepare('INSERT INTO `resultats`(`datePhase1`, `nom`, `prenom`, `email`, `anneeDeNaissance`, `genre`, `niveauEtudes`, `filiere`, `langueMaternelle`, `langueSwahili`, `commentairesPhase1`, `datePhase2`, `sensHabitudesApprentissage`, `methodeDesTests`, `frequenceMethodeDesTests`, `efficaciteMethodeDesTests`, `materielParticulier`, `frequenceMaterielParticulier`, `pourquoiMaterielParticulier`, `affirmationApprendreVocabulaire2Sens`, `commentairesPhase2`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');

$stmt->bind_param("ssssisssssssssiisisss", $datePhase1, $_SESSION['nom'], $_SESSION['prenom'], $_SESSION['email'], $_SESSION['age'], $_SESSION['genre'], $_SESSION['etudes'], $_SESSION['filiere'], $_SESSION['langueMaternelle'], $_SESSION['langueX'], $empty, $datePhase2, $empty, $empty, $empty, $empty, $empty, $empty, $empty, $empty, $empty);

$stmt->execute();

// Echo les erreurs MySQL
//echo 'Error '.$mysqli->errno.': '.$mysqli->error.'<br/>';

// Ferme la connexion SQL
$mysqli->close();

// Prochaine page
header('Location: ../survey2.php');
?>