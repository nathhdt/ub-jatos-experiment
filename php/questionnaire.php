<?php

require('sql.php');
session_start();

// Variables de la session
$_SESSION['nom'] = $_POST['nom'];
$_SESSION['prenom'] = $_POST['prenom'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['age'] = (int)$_POST['age'];
$_SESSION['genre'] = $_POST['genre'];
$_SESSION['etudes'] = $_POST['etudes'];
$_SESSION['filiere'] = $_POST['filiere'];
$_SESSION['langueMaternelle'] = $_POST['langueMaternelle'];
$_SESSION['langueX'] = $_POST['langueX'];


// Vérifie que l'e-mail n'est pas déjà utilisé
$stmt = $mysqli->prepare('SELECT `Email` FROM `subjects` WHERE `Email`= ?');
$stmt->bind_param('s', $_POST['email']);
$stmt->execute();
$result = $stmt->get_result();


// L'e-mail n'est pas dans la base de données
if($result->num_rows === 0) {
	// Ajout des infos de l'utilisateur dans la BDD
	$stmt = $mysqli->prepare('INSERT INTO `subjects`(`Email`, `Nom`, `Prenom`, `Age`, `Genre`, `Etudes`, `Filiere`, `LangueMaternelle`, `LangueX`) VALUES (?,?,?,?,?,?,?,?,?)');
	$stmt->bind_param("sssisssss", $_SESSION['email'], $_SESSION['nom'], $_SESSION['prenom'], $_SESSION['age'], $_SESSION['genre'], $_SESSION['etudes'], $_SESSION['filiere'], $_SESSION['langueMaternelle'], $_SESSION['langueX']);
	$stmt->execute();
	// Prochaine page (expérience)
	header('Location: ../experience.php');
}
// L'e-mail est dans la base de données
else 
{
	// Retour à l'index, indique à l'utilisateur que l'e-mail est déjà pris
	header('Location: ../index.php?email=alreadyTaken');
}


// Ferme la connexion SQL
$mysqli->close();

?>