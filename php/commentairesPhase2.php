<?php
require('sql.php');
session_start();

// Variables de la session
$_SESSION['commentaires'] = $_POST['commentaires'];

$stmt = $mysqli->prepare('UPDATE `resultats` SET `commentairesPhase2`=? WHERE `email`=?');
$stmt->bind_param("ss", $_SESSION['commentaires'], $_SESSION['email']);
$stmt->execute();
$mysqli->close();

// Fin de l'expérience
header('Location: ../survey6.php');
?>