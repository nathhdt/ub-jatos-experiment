<!DOCTYPE html>
<html lang="fr">

	<head>
		<title>Expérience uB - Résultats</title>
		<meta charset="utf-8" name="Viewport" content="width=device-width, initial-scale=1.0">
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	</head>

	<body>

		<div class="container">
			<p class="fs-2 text-center">Résultats pour les tests d'expérience</p>
		</div>

		<div class="container">
			<table class="table table-striped">
	  			<thead>
	    			<tr>
	      				<th scope="col">#</th>
	      				<th scope="col">Nom</th>
	      				<th scope="col">Prénom</th>
	      				<th scope="col">Email</th>
	      				<th scope="col">Date phase 1</th>
	      				<th scope="col">Date phase 2</th>
	    			</tr>
	  			</thead>
	  			<tbody>


<?php

require('../php/sql.php');

// Montrer le détail des erreurs MySQL
//ini_set('error_reporting', -1);
//ini_set('display_errors', 1);

// Perform query 
if ($result = $mysqli->query('SELECT `datePhase1`, `nom`, `prenom`, `email` FROM `resultats` WHERE 1')) {

$i = 1;

  while ($row = $result->fetch_row()) {
    
  	echo '<tr>';
  	echo '<th scope="row">'.$i.'</th>';
  	$i++;
  	echo '<td>'.$row[1].'</td>';
  	echo '<td>'.$row[2].'</td>';
  	echo '<td>'.$row[3].'</td>';
  	echo '<td>'.$row[0].'</td>';

  	// Add 7 days
  	$initDate = strtotime($row[0]);
  	$newDate = strtotime('+7 days', $initDate);

  	echo '<td><strong>'.date("Y-m-d H:i:s", $newDate).'</strong></td>';
  }

  // Free result set
  $result -> free_result();
}

// Echo les erreurs MySQL
//echo 'Error '.$mysqli->errno.': '.$mysqli->error.'<br/>';

// Ferme la connexion SQL
$mysqli->close();

?>
	  			</tbody>
			</table>
		</div>


		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	</body>

</html>