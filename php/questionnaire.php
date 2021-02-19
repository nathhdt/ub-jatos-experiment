<?php

$etudes = '';
$filiere = '';

echo($_POST['nom']);
echo("|");
echo($_POST['prenom']);
echo("|");
echo($_POST['email']);
echo("|");
echo($_POST['age']);
echo("|");
echo($_POST['genre']);
echo("|");


// Traitement de la valeur de passage
if ((int)$_POST['etudes'] == 1) {
	$etudes = "CAP/BEP";
} elseif ((int)$_POST['etudes'] == 2) {
	$etudes = "Bac";
} elseif ((int)$_POST['etudes'] == 3) {
	$etudes = "Bac+1";
} elseif ((int)$_POST['etudes'] == 4) {
	$etudes = "Bac+2";
} elseif ((int)$_POST['etudes'] == 5) {
	$etudes = "Bac+3";
} elseif ((int)$_POST['etudes'] == 6) {
	$etudes = "Bac+4";
} elseif ((int)$_POST['etudes'] == 7) {
	$etudes = "Bac+5";
} elseif ((int)$_POST['etudes'] == 8) {
	$etudes = "Bac+6-8";
}

echo($etudes);
echo("|");


// Traitement de la valeur de passage
if ((int)$_POST['filiere'] == 1) {
	$filiere = "Économie-gestion";
} elseif ((int)$_POST['filiere'] == 2) {
	$filiere = "Droit & sciences politiques";
} elseif ((int)$_POST['filiere'] == 3) {
	$filiere = "Sciences";
} elseif ((int)$_POST['filiere'] == 4) {
	$filiere = "Sciences humaines & sociales";
} elseif ((int)$_POST['filiere'] == 5) {
	$filiere = "Sciences de l'ingénieur";
} elseif ((int)$_POST['filiere'] == 6) {
	$filiere = "Médecine";
} elseif ((int)$_POST['filiere'] == 7) {
	$filiere = "Sport (STAPS)";
} elseif ((int)$_POST['filiere'] == 8) {
	$filiere = "Théologie";
} elseif ((int)$_POST['filiere'] == 9) {
	$filiere = "Arts";
} elseif ((int)$_POST['filiere'] == 10) {
	$filiere = "Lettres & langues";
} elseif ((int)$_POST['filiere'] == 11) {
	$filiere = "Autre";
}



echo($filiere);
echo("|");
echo($_POST['langueMaternelle']);
echo("|");
echo($_POST['langueX']);



?>