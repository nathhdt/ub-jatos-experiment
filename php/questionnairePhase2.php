<?php
require('sql.php');
session_start();

// Montrer le détail des erreurs MySQL
//ini_set('error_reporting', -1);
//ini_set('display_errors', 1);

// Variables de la session
$_SESSION['habitudesApprentissage'] = $_POST['habitudesApprentissageRadio'];
$_SESSION['methodeDesTests'] = $_POST['methodeDesTests'];

if (isset($_POST['frequence'])) {
  $_SESSION['frequence'] = (int)$_POST['frequence'];
} else {
  $_SESSION['frequence'] = 0;
}

if (isset($_POST['efficace'])) {
  $_SESSION['efficace'] = (int)$_POST['efficace'];
} else {
  $_SESSION['efficace'] = 0;
}

$_SESSION['materielParticulier'] = $_POST['materielParticulier'];

if ($_SESSION['materielParticulier'] == 'OUi')
{
	$_SESSION['materielParticulier'] = 'Oui';
}

if (isset($_POST['materielFrequence'])) {
  $_SESSION['materielFrequence'] = (int)$_POST['materielFrequence'];
} else {
  $_SESSION['materielFrequence'] = 0;
}

$_SESSION['habitudesApprentissageCheck'] = $_POST['habitudesApprentissageCheck'];
$_SESSION['affirmationVocab2Sens'] = $_POST['affirmationRadio'];

echo $_SESSION['email'];
echo $_SESSION['habitudesApprentissage'];
echo $_SESSION['methodeDesTests'];
echo $_SESSION['frequence'];
echo $_SESSION['efficace'];
echo $_SESSION['materielParticulier'];
echo $_SESSION['materielFrequence'];
echo $_SESSION['habitudesApprentissageCheck'];
echo $_SESSION['affirmationVocab2Sens'];

// Date à laquelle s'est finie l'expérience
$datePhase2 = date("Y-m-d H:m:s");
$empty = "";

$stmt = $mysqli->prepare('UPDATE `resultats` SET `datePhase2` = ?,`sensHabitudesApprentissage` = ?,`methodeDesTests` = ?,`frequenceMethodeDesTests` = ?,`efficaciteMethodeDesTests` = ?,`materielParticulier` = ?,`frequenceMaterielParticulier` = ?,`pourquoiMaterielParticulier` = ?,`affirmationApprendreVocabulaire2Sens` = ?,`commentairesPhase2` = ? WHERE `email` = ?');

$stmt->bind_param("sssiisissss", $datePhase2, $_SESSION['habitudesApprentissage'], $_SESSION['methodeDesTests'], $_SESSION['frequence'], $_SESSION['efficace'], $_SESSION['materielParticulier'], $_SESSION['materielFrequence'], $_SESSION['habitudesApprentissageCheck'], $_SESSION['affirmationVocab2Sens'], $empty, $_SESSION['email']);

$stmt->execute();

// Echo les erreurs MySQL
//echo 'Error '.$mysqli->errno.': '.$mysqli->error.'<br/>';

// Ferme la connexion SQL
$mysqli->close();

// Prochaine page
header('Location: ../survey5.php');

































?>