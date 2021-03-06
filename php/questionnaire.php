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

$empty = "";
$stmt = $mysqli->prepare('INSERT INTO `sujets`(`email`, `habitudesApprentissage`, `methodeDesTests`, `frequence`, `efficace`, `materielParticulier`, `materielFrequence`, `habitudesApprentissageCheck`, `affirmationVocab2Sens`, `nom`, `prenom`, `age`, `genre`, `etudes`, `filiere`, `langueMaternelle`, `langueX`, `commentaires`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
$stmt->bind_param("sssiisissssissssss", $_SESSION['email'], $_SESSION['habitudesApprentissage'], $_SESSION['methodeDesTests'], $_SESSION['frequence'], $_SESSION['efficace'], $_SESSION['materielParticulier'], $_SESSION['materielFrequence'], $_SESSION['habitudesApprentissageCheck'], $_SESSION['affirmationVocab2Sens'], $_SESSION['nom'], $_SESSION['prenom'], $_SESSION['age'], $_SESSION['genre'], $_SESSION['etudes'], $_SESSION['filiere'], $_SESSION['langueMaternelle'], $_SESSION['langueX'], $empty);
$stmt->execute();

// Echo les erreurs MySQL
//echo 'Error '.$mysqli->errno.': '.$mysqli->error.'<br/>';

// Ferme la connexion SQL
$mysqli->close();

// Prochaine page
header('Location: ../survey3.php');
?>